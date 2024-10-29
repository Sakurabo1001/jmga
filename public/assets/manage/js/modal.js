(function ($) {
    $.fn.modal = function (options) {
        /*================================================================================================================
         **初期設定*********************************************************************************************************
         ================================================================================================================*/
        var defaults = {
            btn_close: 'close',
            modal: '',
            wrapper: 'modal_wrapper',
            hide_class: 'dn',
            footer_height: 62,
            wrapper_content: 'wrap',
            formatKbn: 'formatKbn',
            fileKbn: 'fileKbn',
            ratingCd: 'ratingCd',
            spanText: 'spanText',
            publishDate: 'publishDate',
            publishKbn: 'publishKbn',
            sendBtn: 'dateEdt'
        };
        var setting = $.extend(defaults, options);
        var $modal = $('#' + setting.modal);
        var message = '更新してよろしいですか？';
        /*================================================================================================================
         **イベント*********************************************************************************************************
         ================================================================================================================*/
        $(this).on('click', function () {
            _fn.show($(this));
        });
        $(window).on('resize', function () {
            if (!$modal.hasClass(setting.hide_class)) {
                //モーダル表示位置取得
                var position = _fn.get_place($modal);
                _fn.position_change(position);
                _fn.wrapper_switch(true);
            }
        });
        $('.' + setting.btn_close).on('click', function () {
            _fn.close();
        });
        $('.' + setting.wrapper).on('click', function () {
            _fn.close();
        });
        $('.' + setting.sendBtn).on('click', function () {
            return _fn.confirm();
        });
        var _fn = {
            /*================================================================================================================
             **値設定*********************************************************************************************************
             ================================================================================================================*/

            /*================================================================================================================
             **Modal*********************************************************************************************************
             ================================================================================================================*/
            show: function ($elem) {
                //値設定
                _fn.setVal($elem);
                //モーダル表示位置取得
                var position = this.get_place($modal);
                //黒背景表示
                this.wrapper_switch(true);
                //モーダル表示
                this.show_modal(position);
            },
            close: function () {
                //黒背景非表示
                this.wrapper_switch(false);
                this.close_modal($modal);
            },
            position_change: function (position) {
                $modal.css({
                    'left': position['left'],
                    'top': position['top']
                });
            },
            show_modal: function (position) {
                if ($modal.hasClass(setting.hide_class)) {
                    _fn.position_change(position);
                    $modal.removeClass(setting.hide_class);
                }
            },
            close_modal: function ($modal) {
                if (!$modal.hasClass(setting.hide_class)) {
                    $modal.addClass(setting.hide_class);
                }
            },
            get_place: function ($modal) {
                var window_width = $(window).width();
                var window_height = $(window).height();
                //var top_f = $(window).scrollTop();
                var modal_width = $modal.width();
                var modal_height = $modal.height();
                var left = ((window_width) - (modal_width)) / 2 + 'px';
                var top = /*top_f*/ +(((window_height) - (modal_height)) / 2) + 'px';
                var position = {left: left, top: top};
                return position;
            },
            wrapper_switch: function (flg) {
                if (flg) {
                    $('.' + setting.wrapper).removeClass(setting.hide_class);
                } else {
                    $('.' + setting.wrapper).addClass(setting.hide_class);
                }
            },
            setVal: function ($elem) {
                $('.' + setting.formatKbn + '_modal').text($elem.attr('data-' + setting.formatKbn));
                $('.' + setting.spanText + '_modal').text($elem.attr('data-' + setting.spanText));
                $('.' + setting.fileKbn + '_modal').val([$elem.attr('data-' + setting.fileKbn)]);
                $('.' + setting.publishDate + '_modal').val($elem.attr('data-' + setting.publishDate));
                $('.' + setting.publishKbn + '_modal').val([$elem.attr('data-' + setting.publishKbn)]);
                $('.' + setting.ratingCd + '_modal').val($elem.attr('data-' + setting.ratingCd));
            },
            confirm: function () {
                if (confirm(message)) {
                    document.forms["nFrm"].action = '/manage/contents/rating/publish';
                    return true;
                } else {
                    return false;
                }
            }
        }//_fn
    }//modal
})(jQuery);