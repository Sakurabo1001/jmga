$(document).ready(function () {
    var pagetop = $('.m-pagetop');
    var url = location.href.split('#');
    if(url[1] !== undefined){
        var $target = $('a[href ="'+'#' + url[1]+'"]');
        if($target !== undefined && $target.length !== 0){
            $target.trigger('click');
        }else{
             scroll('#' + url[1]);
        }
    }
    
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
    pagetop.click(function () {
        $('body, html').stop().animate({scrollTop: 0}, 500);
        return false;
    });
    $('a').on('click', function () {
        var $this = $(this);
        var href = $this.attr('href');
        if (!$this.hasClass('local_nav_link')) {
            scroll(href);
        }
    });
});

scroll = function (href) {
    var exclusionHeight = $('#m-localnavi').outerHeight(true);
    if (href.substr(0, 1) === '#') {
        var target = $(href === "#" || href === "" ? 'html' : href);
        var position = target.offset().top - exclusionHeight;
        $("html, body").stop().animate({scrollTop: position}, 500);
        return false;
    }
}