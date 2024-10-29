$(function () {
    if ($('#m-localnavi').length > 0) {
        changeActive({
            linkBtn: 'm-localnavi a',
            nav: 'm-localnavi'
        });
    }
});
(function ($) {
    changeActive = function (options) {
        /*================================================================================================================
         **初期設定*********************************************************************************************************
         ================================================================================================================*/
        var defaults = {
            speed: 500,
            easing: 'swing',
            activeClass: 'current',
            exclusion: 'm-localnavi'
        };
        var set = $.extend(defaults, options);
        var navTop = $('#' + set.nav).get(0).offsetTop;
        var exclusionHeight = $('#' + set.exclusion).outerHeight(true);
        var noSrcroll = false;
        /*================================================================================================================
         **イベント*********************************************************************************************************
         ================================================================================================================*/
        $('#' + set.linkBtn).click(function () {
            _fn.changeActive($(this));
            return false;
        });
        $(window).scroll(function (e) {
            if (noSrcroll) {
                return false;
            }
            _fn.scroll();
            var position = _fn.positionGet();
            _fn.currentCheck(position);
        });
        var _fn = {
            /*================================================================================================================
             **OBJ操作*********************************************************************************************************
             ================================================================================================================*/
            checkAndroidVersion: function () {
                var ua = navigator.userAgent;
                if (ua.indexOf("Android") > 0)
                {
                    var version = parseFloat(ua.slice(ua.indexOf("Android") + 8));
                    return version;
                }
                return 100;
            },
            changeActive: function ($this) {
                var href = $this.attr("href");
                var target = $(href === "#" || href === "" ? 'html' : href);
                var position = target.get(0).offsetTop - exclusionHeight;
                $('#' + set.linkBtn).removeClass(set.activeClass);
                var $elem = $this.parents('li').parents('li').find('a').eq(0);
                if ($elem.length === 0) {
                    $elem = $this;
                }
                $elem.addClass(set.activeClass);
                noSrcroll = true;
                $("html, body").stop().animate(
                        {scrollTop: position},
                {
                    duration: set.speed, easing: set.easing,
                    complete: function () {
                        noSrcroll = false;
                        _fn.scroll();
                    }
                });
            },
            scroll: function () {
                var winTop = _fn.getScroll();
                var positonStyle = winTop >= navTop ? 'fixed' : 'static';
                if(_fn.checkAndroidVersion() <= 2.3){
                return false;
            }
                $('#' + set.nav).css({position: positonStyle});
            },
            positionGet: function () {
                var position = [];
                for (var i = 0; i < $('#' + set.linkBtn).length; i++) {
                    var $elem = $($('#' + set.linkBtn).eq(i).attr('href'));
                    var top = $elem.get(0).offsetTop - exclusionHeight;
                    position[i] = [top, top + $elem.outerHeight(true)];
                }
                return position;
            },
            currentCheck: function (position) {
                var windowScrolltop = _fn.getScroll();
                for (var i = 0; i < position.length; i++) {
                    if (position[i][0] <= windowScrolltop && position[i][1] >= windowScrolltop) {
                        $('#' + set.linkBtn).removeClass(set.activeClass);
                        var $elem = $('#' + set.linkBtn).eq(i).parents('li').parents('li').find('a').eq(0);
                        if ($elem.length === 0) {
                            $elem = $('#' + set.linkBtn).eq(i);
                        }
                        $elem.addClass(set.activeClass);
                    }
                }
            },
            init: function () {
                $('#' + set.linkBtn).addClass('local_nav_link');
            },
            getScroll: function () {
                return $(window).scrollTop() + 3;
            }
        }//_fn
        _fn.init();
        $('#' + set.linkBtn).eq(0).addClass(set.activeClass);
    }//activity
})(jQuery);