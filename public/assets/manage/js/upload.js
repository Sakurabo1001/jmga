/**
 * upload
 */
(function ($) {
    $.fn._upload = function (options) {
        /*========================================================================*/
        /*---初期設定
         /*========================================================================*/
        var elem = $(this);
        var defaults = {
            dropHoverCss: 'dropHover',
            drop_area_height: $(this).height(),
            drop_area_height_hover: 160,
            errSummaryClassAll: 'err_summary_all',
            errSummaryClass: 'err_summary',
            list_item: 'img_box_list_item',
            sizeMax: 1024 * 1024 * 256, //KB
            fileLenMax: 20,
            whiteLst: ['xlsx', 'xls', 'xlsm'],
            img_box_list: 'img_box_list',
            btnSubmitDisabled: 'dis',
            dragAreaDisabled: 'dis_drag',
            btnSubmit: 'dateEdt',
            urlUpload: '/manage/contents/rating/upload',
            urlDelete: '/manage/contents/rating/remove/',
            paramFile: 'file_path',
            paramKey: 'key',
            imgLoader: '/assets/manage/img/img_loader_bar.gif',
            loaderBox: 'loaderBox',
            progressBar: 'progressBar',
            btnUploadDel: 'del',
            progress: 'progress',
            row: 'uploadRow',
            spanKbnOther: '格付結果',
            statusMi: '未',
            statusSumi: '済',
            modeEdit: '更新',
            defaultMessage: 'アップロードするファイルをここにドラッグ&ドロップしてください。'
        };
        var setting = $.extend(defaults, options);
        var $drop_area = $(this);
        var file;
        var fileLen = 0;
        var elemSubmit = $('.' + setting.btnSubmit);
        var idx = 0;
        var delDnColumn = [3, 4, 5, 6, 7];

        /*********************************************************************************************
         * Bind
         ********************************************************************************************/
        /* delete */
        $(document).on('click', '.' + setting.btnUploadDel, function () {
            var rs = conLink('削除してもよろしいですか？');
            if (!rs)
                return false;
            _fn.delete($(this));
        });
        $('body').on('drop dragover', function (e) {
            e.preventDefault();
            return false;
        });
        $drop_area.on('dragleave mouseleave', function () {
            $(this).removeClass(setting.dropHoverCss);
        });
        $drop_area.on('dragenter dragover', function (e) {
            $(this).addClass(setting.dropHoverCss);
        });
        $drop_area.on('drop', function (e) {
            e.preventDefault();
            e.stopPropagation();
            _fn.pre_upload(e);
            return false;
        });
        /* private
         --------------------------------------------------------------------------------------------------------------- */
        var _fn = {
            /*********************************************************************************************
             * upload
             ********************************************************************************************/
            pre_upload: function (e) {
                var now = new Date();
                $drop_area.find('.' + setting.errSummaryClassAll).text(setting.defaultMessage);
                file = e.originalEvent.dataTransfer.files;
                fileLen = file.length;
                //アップ済みとの合計ファイル数検証
                var err = _fn.val_fileLen();
                if (err !== '') {
                    _fn.set_err_all(err);
                    return false;
                }
                //upload
                now = 'progress_' + (now.toLocaleTimeString()).replace(/:/g, '_');
                //submit不可に
                _fn.setup_submit_enable(false);
                for (var i = 0; i < fileLen; i++) {
                    var fd = new FormData();
                    _fn.data_append(fd, i);
                    _fn.add_row(i);
                    _fn.make_progress(now, i);
                    var err = _fn.valid_files(i);
                    if (err !== '') {
                        _fn.set_err(err, i);
                        _fn.initData(i);
                    } else {
                        _fn.upload(fd, i, e);
                    }
                }
            },
            upload: function (fd, i, e) {
                //ajax処理
                $.ajax({
                    async: true,
                    xhr: function () {
                        //loader進捗表示
                        var XHR = $.ajaxSettings.xhr();
                        if (XHR.upload) {
                            XHR.upload.addEventListener('progress', function (e) {
                                var progre = Math.floor(parseInt(e.loaded / e.total * 10000) / 100);
                                var marginLeft = "-" + (100 - progre) + "%";
                                $('.' + setting.loaderBox + i).find('img').css({
                                    "margin-left": marginLeft
                                });
                                $('.' + setting.progressBar + i).html(progre + '%');
                            }, false);
                        }
                        return XHR;
                    },
                    url: setting.urlUpload,
                    type: 'post',
                    data: fd,
                    cache: false,
                    processData: false,
                    contentType: false,
                    enctype: 'multipart/form-data',
                    dataType: 'json',
                    context: {'i': i, 'e': e}
                }).done(function (data) {
                    _fn.done_upload(data, this.i, this.e);
                }).fail(function () {
                    _fn.fail_upload(this.i);
                });
            },
            fail_upload: function (i) {
                var err = 'ファイルのアップロードに失敗しました。';
                _fn.set_err(err, i);
                _fn.ajax_after(i, '');
            },
            done_upload: function (data, i, e) {
                if (!$.isArray(data)) {
                    _fn.set_err(data, i);
                    _fn.ajax_after(i, data);
                } else {
                    _fn.set_val(data, i, e);
                    _fn.ajax_after(i, data);
                }
            },
            ajax_after: function (i, data) {
                var status = undefined;
                if (data[0] !== undefined) {
                    if (data[0]['status'] !== undefined) {
                        status = data[0]['status'];
                    }
                }
                if (_fn.getErrEnable(status)) {
                    _fn.setup_submit_enable(true);
                }
                _fn.del_progress(i);
                _fn.initData(i);
            },
            delete: function ($this) {
                var status = $this.parents('tr').find('td').eq(2).text();
                if (_fn.getErrEnable(status)) {
                    _fn.setup_submit_enable(true);
                }
                _fn.del_ajax($this);
            },
            del_ajax: function ($this) {
                $.ajax({
                    async: true,
                    url: setting.urlDelete + $this.parents('tr').find('td').eq(13).find('input').val(),
                    type: 'get',
                    cache: false,
                    dataType: 'json'
                }).done(function (data) {
                    _fn.done_del(data, $this);
                }).fail(function () {
                    _fn.fail_del($this);
                });
            },
            done_del: function (data, $this) {
                if (data['result'] === 'false') {
                    //削除失敗--サーバ上
                    _fn.fail_del($this);
                } else {
                    //削除成功
                    _fn.del_after($this);
                }
            },
            fail_del: function ($this) {
                /*var err = 'ファイルの削除に失敗しました。';
                 _fn.set_err(err,i);*/
                _fn.del_after($this);
            },
            del_after: function ($this) {
                $this.parents('tr').remove();
            },
            data_append: function (fd, i) {
                var key = idx + 1;
                fd.append(setting.paramFile + '[]', file[i]);
                fd.append(setting.paramKey + '[]', key);
                fd.append('name' + '[]', file[i].name);
                idx = key;
            },
            /*********************************************************************************************
             * object操作
             ********************************************************************************************/
            getErrCount: function () {
                var errCount = $('.' + setting.errSummaryClass).length;
                return errCount;
            },
            initData: function (i) {
                var $rows = $('.' + setting.row);
                $rows.each(function (c, val) {
                    if ($(val).attr('data-rowNum') === i.toString()) {
                        $(val).attr('data-rowNum', '');
                        return false;
                    }
                });
            },
            getErrEnable: function (status) {
                var errCount = _fn.getErrCount();
                if (errCount === 0) {
                    return true;
                } else if (errCount === 1 && (status !== setting.statusSumi && status !== undefined)) {
                    return true;
                }
                return false;
            },
            set_err_all: function (err) {
                $drop_area.find('.' + setting.errSummaryClassAll).text(err);
            },
            set_err: function (err, i) {
                var $row = _fn.getRow(i);
                if ($row === null) {
                    return false;
                }
                $row.find('td').each(function (c, val) {
                    if ($.inArray(c, delDnColumn) !== -1) {
                        $(this).addClass('dn');
                    }
                });
                $row.find('td').eq(2).text('').append('<p class="' + setting.errSummaryClass + '">' + err.replace(/<br \/>/g, '\n') + '</span>').attr('colspan', 6);

            },
            getRow: function (i) {
                var $rows = $('.' + setting.row);
                var $row = null;
                $rows.each(function (c, val) {
                    if (i !== undefined) {
                        if ($(val).attr('data-rowNum') === i.toString()) {
                            $row = $(val);
                            return false;
                        }
                    }
                });
                return $row;
            },
            set_val: function (data, i, e) {
                var $row = _fn.getRow(i);
                if ($row === null) {
                    return false;
                }
                if (data[0]['mode'] === setting.modeEdit) {
                    $row.addClass('modeEdit');
                }
                //値設定
                $row.find('td').eq(0).find('input').val(data[0]['fileNm']);

                $row.find('td').eq(1).find('span').text(data[0]['trueNm']);
                $row.find('td').eq(1).find('input').val(data[0]['name']);

                $row.find('td').eq(2).find('span').text(data[0]['status']);
                $row.find('td').eq(2).find('input').val(data[0]['status']);

                $row.find('td').eq(3).find('span').text(data[0]['categoryKbn']);
                $row.find('td').eq(3).find('input').val(data[0]['categoryKbn']);

                $row.find('td').eq(4).find('span').text(data[0]['formatKbn']);
                $row.find('td').eq(4).find('input').val(data[0]['formatKbn']);

                $row.find('td').eq(5).find('span').text(data[0]['spanKbn'] == setting.spanKbnOther ? '' : data[0]['spanKbn']);
                $row.find('td').eq(5).find('input').val(data[0]['spanKbn']);

                $row.find('td').eq(6).append(data[0]['biko']);
                $row.find('td').eq(6).find('input').eq(1).val($row.find('td').eq(6).find('.biko').text());
                $row.find('td').eq(6).find('span').text(data[0]['spanText'] == null ? '' : data[0]['spanText']);
                $row.find('td').eq(6).find('input').eq(0).val(data[0]['spanText']);

                $row.find('td').eq(7).find('.teisei').text(data[0]['teisei']);
                $row.find('td').eq(7).find('input').eq(1).val($row.find('td').eq(7).find('.teisei').text());
                $row.find('td').eq(7).find('span').eq(0).text(data[0]['mode']);
                $row.find('td').eq(7).find('input').eq(0).val(data[0]['mode']);

                $row.find('td').eq(8).find('input').val(data[0]['spanYear']);

                $row.find('td').eq(9).find('input').val(data[0]['spanMonth']);

                $row.find('td').eq(10).find('input').val(data[0]['spanYearT']);

                $row.find('td').eq(11).find('input').val(data[0]['spanMonthT']);

                $row.find('td').eq(13).find('input').val(data[0]['key']);

                $row.find('td').eq(14).find('input').val(data[0]['trueNm']);

                $row.find('td').eq(15).find('input').val(data[0]['ratingNm']);
            },
            add_row: function (i) {
                var count = _fn.getRowCount();
                var $row = $('.' + setting.row).eq(0).clone();
                $row.attr('data-rowNum', i);
                //値設定
                $row.find('td').eq(0).find('input').val('');

                $row.find('td').eq(1).find('span').text(file[i].name);
                $row.find('td').eq(1).find('input').val('');

                $row.find('td').eq(2).find('span').text(setting.statusMi);
                $row.find('td').eq(2).find('input').val(setting.statusMi);

                $row.find('td').eq(3).find('span').text('');
                $row.find('td').eq(3).find('input').val('');

                $row.find('td').eq(4).find('span').text('');
                $row.find('td').eq(4).find('input').val('');

                $row.find('td').eq(5).find('span').text('');
                $row.find('td').eq(5).find('input').val('');

                $row.find('td').eq(6).find('span').text('');
                $row.find('td').eq(6).find('input').val('');

                $row.find('td').eq(7).find('span').text('');
                $row.find('td').eq(7).find('input').val('');

                $row.find('td').eq(8).find('input').val('');

                $row.find('td').eq(9).find('input').val('');

                $row.find('td').eq(10).find('input').val('');

                $row.find('td').eq(11).find('input').val('');

                $row.find('td').eq(13).find('input').val('');

                $row.find('td').eq(14).find('input').val('');

                $row.find('td').eq(15).find('input').val('');

                $row.removeClass('dn');

                $('.' + setting.row).eq(count - 1).after($row);

            },
            getRowCount: function () {
                var count = $('.' + setting.row).length;
                return count;
            },
            setup_submit_enable: function (enabled) {
                if (enabled) {
                    $drop_area.removeClass(setting.dragAreaDisabled);
                    elemSubmit.removeAttr("disabled").removeClass(setting.btnSubmitDisabled);
                } else {
                    $drop_area.addClass(setting.dragAreaDisabled);
                    elemSubmit.attr("disabled", "disabled").addClass(setting.btnSubmitDisabled);
                }
            },
            make_progress: function (now, i) {
                var $row = $('.' + setting.row).last();
                var $progress_bar = '<p class="' + setting.progress + ' ' + setting.progress + i + '"><span class="' + setting.loaderBox + ' ' + setting.loaderBox + i + ' loaderBox_' + now + '"><img src="' + setting.imgLoader + '" width="150"></span><span class="' + setting.progressBar + ' ' + ' ' + setting.progressBar + i + ' ' + now + '"></span></p>';
                //$drop_area.append($progress_bar);
                $row.find('td').eq(2).find('span').append($progress_bar);
            },
            del_progress: function (i) {
                $('.' + setting.progress + i).remove();
            },
            /*********************************************************************************************
             * valid
             ********************************************************************************************/
            valid_files: function (i) {
                var err = '';
                //拡張子検証
                err += _fn.val_extension(err, i);
                //ファイルサイズ検証
                err += _fn.val_fileSize(err, i);
                //重複検証
                err += _fn.val_duplicate(err, i);
                return err;
            },
            val_fileSize: function (err, i) {
                if (err !== '') {
                    return '';
                }
                var err = '';
                var size = (file[i].size / 1024);
                if (size > setting.sizeMax) {
                    err = i + '番目のファイルが' + setting.sizeMax + 'KBを超えています。<br />';
                }
                return err;
            },
            val_fileLen: function () {
                var err = '';
                var fileLenTotal = $('.' + setting.row).length - 1 + fileLen;
                if (fileLenTotal > setting.fileLenMax) {
                    err = 'アップロード可能なファイル数は' + setting.fileLenMax + 'ファイルまでです。\n';
                }
                return err;
            },
            val_extension: function (err, i) {
                if (err !== '') {
                    return '';
                }
                var err = '';
                var nm = file[i].name.split('.');
                var ext = nm[1];
                if ($.inArray(ext, setting.whiteLst) === -1) {
                    err = setting.whiteLst.join() + 'を選択してください。<br />';
                }
                return err;
            },
            val_duplicate: function (err, i) {
                if (err !== '') {
                    return '';
                }
                var err = '';
                var $row = $('.' + setting.row);
                $row.each(function (c, val) {
                    var nm = $(val).find('td').eq(14).find('input').val();
                    if (nm === file[i].name) {
                        err = '同一ファイル名のファイルは選択できません。<br />';
                        return false;
                    }
                });

                return err;
            }
        };
        return elem;
    };
})(jQuery);