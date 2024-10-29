$(function () {
    $('.addRow').addRow({
        btnAddRow: 'addRow',
        btnDelRow: 'btnDelRow',
        row: 'edt_row',
        table: 'officeTbl'
    });
});
(function ($) {
    $.fn.addRow = function (options) {
        /*================================================================================================================
         **初期設定*********************************************************************************************************
         ================================================================================================================*/
        var defaults = {
            btnAddRow: 'addRow',
            table: '',
            btnDelRow: ''
        };
        var set = $.extend(defaults, options);
        var $content;
        /*================================================================================================================
         **イベント*********************************************************************************************************
         ================================================================================================================*/
        $(document).on('click', '.' + set.btnAddRow, function () {
            _fn.add_row();
        });
        $(document).on('click', '.' + set.btnDelRow, function () {
            return _fn.del_row($(this));
        });
        var _fn = {
            /*================================================================================================================
             **検証*********************************************************************************************************
             ================================================================================================================*/
            append_newrow: function (newIndex) {
                if (newIndex < 0) {
                    newIndex = 0;
                }
                var $lastRow = $('.' + set.row).last().length === 0 ? $('.' + set.table).find('tr').first() : $('.' + set.row).last();
                $content.addClass('dn');
                $lastRow.after($content);
                //値設定
                _fn.setVal(newIndex);
                _fn.init();
            },
            /*================================================================================================================
             **OBJ操作*********************************************************************************************************
             ================================================================================================================*/
            delete_delbtn: function ($last_row) {
                var $last_delbtn = $last_row.find('td').eq(4);
                $last_delbtn.html('');
            },
            delete_row: function ($this) {
                var $row = $this.parents('tr');
                var index = $('.' + set.row).index($row);
                if (index !== 0) {
                    $row.remove();
                }
                $('.' + set.row).each(function(i,val){
                    $(val).find('td').eq(0).find('input').attr('name', 'ishokuKbnRow['+ i +']').attr('id', 'ishokuKbnRow['+ i +']_'+i+'_0')/*.prop("checked", false)*/;
                     $(val).find('.checkbox').attr('for', 'ishokuKbnRow['+ i +']_'+i+'_0');
                });
            },
            add_row: function () {
                var newIndex = $('.' + set.row).index($('.' + set.row).filter(':last')) + 1;
                //行挿入
                _fn.append_newrow(newIndex);
            },
            del_row: function ($this) {
                if (!confirm('削除してよろしいですか？')) {
                    return false;
                } else {
                    //行削除btns
                    _fn.delete_row($this);
                    return false;
                }
            },
            setVal: function (newIndex) {
                var $obj = $('.' + set.row).filter(':last');
                $obj.find('.' + set.btnDelRow).removeClass('dn');
                $obj.find('input[name="ishokuKbnRow[0]"]').attr('name', 'ishokuKbnRow['+ newIndex +']').attr('id', 'ishokuKbnRow['+ newIndex +']_'+newIndex+'_0').prop("checked", false);
                $obj.find('.checkbox').attr('for', 'ishokuKbnRow['+ newIndex +']_'+newIndex+'_0');
                $obj.find('input[name="officeNmRow[]"]').val('');
                $obj.find('input[name="zipRow[]"]').val('');
                $obj.find('select[name="tdfkCdRow[]"]').val('');
                $obj.find('input[name="addressRow[]"]').val('');
                $obj.find('input[name="telRow[]"]').val('');
                $obj.removeClass('dn');
            },
            init: function () {
                $content = $('.' + set.row).eq(0).clone();
            }
        }//_fn
        _fn.init();
    }//activity
})(jQuery);