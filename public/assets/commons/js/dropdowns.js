$(function () {
    dropdown({
    });
    dropdown({
        linkText : 'm-navGlobal_dropdownBtn_link',
        box: 'm-navLocal',
        elem: 'm-navGlobal_dropdownBtn',
        marginTop: 0,
        current: 'active-tmp'
    });
    dropdown({
        linkText : 'js-top-nav_link_text',
        box: 'js-top-nav_box',
        elem: 'js-top-nav_elem',
        marginTop: 0,
        current: 'active-tmp'
    });
});
(function ($) {
    /*$.fn.*/dropdown = function (options) {
        /*================================================================================================================
         **初期設定*********************************************************************************************************
         ================================================================================================================*/
        var defaults = {
            box: 'dropdownBox',
            dnClass: 'dn',
            elem: 'dropdownBtn',
            duration: 150,
            easing: 'linear',
            marginTop: 10,
            current: 'current-tmp',
            linkText: 'local_nav_link'
        };
        var set = $.extend(defaults, options);
        var $box = $('.' + set.box);
        var contentHeight = 0;
        var boxOverFlg = false;
        /*================================================================================================================
         **イベント*********************************************************************************************************
         ================================================================================================================*/
        $(document).on('mouseover', '.' + set.elem, function () {
            var $this = $(this);
            setTimeout(function () {
                if (!boxOverFlg) {
                    _fn.show($this);
                }
            }, 100);
        });
        $(document).on('mouseleave', '.' + set.elem, function () {
            var $this = $(this);
            boxOverFlg = false;
            setTimeout(function () {
                if (!boxOverFlg) {
                    _fn.hide($this);
                }
            }, 100);

        });
        $(document).on('mouseover', '.' + set.box, function () {
            boxOverFlg = true;
            var $link = $(this).parents('.' + set.elem).find('.' + set.linkText).eq(0);
            $link.addClass(set.current);
        });
        $(document).on('mouseleave', '.' + set.box, function () {
            boxOverFlg = false;
            var $link = $(this).parents('.' + set.elem).find('.' + set.linkText).eq(0);
            $link.removeClass(set.current);
        });
        var _fn = {
            /*================================================================================================================
             **OBJ操作*********************************************************************************************************
             ================================================================================================================*/
            show: function ($elem) {
                contentHeight = 0;
                var $thisBox = $elem.find('.' + set.box);
                var index = _fn.getParentIndex($thisBox);
                $box.each(function (i, val) {
                    if (i !== index) {
                        $(val).stop().addClass(set.dnClass);
                    }
                });
                if (!$thisBox.hasClass(set.dnClass)) {
                    return false;
                }
                $thisBox.css({height: 0}).removeClass(set.dnClass);
                $thisBox.find('li').each(function (i, val) {
                    contentHeight += $(val).outerHeight();
                });
                contentHeight += set.marginTop;
                _fn.animation($thisBox, true);
            },
            hide: function ($elem) {
                var $thisBox = $elem.find('.' + set.box);
                _fn.animation($thisBox, false, $thisBox);
            },
            getParentIndex: function ($thisBox) {
                return $('.' + set.box).index($thisBox);
            },
            animation: function ($elem, $openFlg, $thisBox) {
                var height = $openFlg ? contentHeight : 0;
                $elem.stop().animate(
                        {height: height},
                {duration: set.duration, easing: set.easing,
                    complete: function () {
                        if (!$openFlg) {
                            $thisBox.addClass(set.dnClass);
                        }
                    },
                    //step: function(s){}
                }
                );
            }
        }//_fn
    }//activity
})(jQuery);