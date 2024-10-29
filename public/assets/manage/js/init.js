$(function ()
{
    // img link
    $('.linkImg').hover(
            function () {
                $(this).fadeTo(100, 0.6);
            },
            function () {
                $(this).fadeTo(100, 1.0);
            }
    );
    $('.btnUrlLst').on('click', function (e) {
        $_current_css = $('.url_list').css('visibility');
        if ($_current_css == 'hidden') {
            $('.url_list').css('visibility', 'visible');
        } else {
            $('.url_list').css('visibility', 'hidden');
        }
        return false;
    });
    $('body').on('click', function (e) {
        $_current_css = $('.url_list').css('visibility');
        if ($_current_css != 'hidden') {
            $('.url_list').css('visibility', 'hidden');
        }
    })
});

