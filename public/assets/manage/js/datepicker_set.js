/*function set_datepicker() {
 $.datepicker.setDefaults($.datepicker.regional[ "ja" ]);
 $('body').find('.datepicker').datetimepicker({
 timepicker: false, // 時間非表示
 format: 'Y/m/d',
 lang: 'ja',
 closeOnDateSelect: true
 });
 }*/

// datetimepicker
$(function () {
    $('.datepicker').attr({autocomplete: 'off'});
    set_datepicker(false);
});
function set_datepicker(time) {
    var format = time ? 'Y/m/d H:i' : 'Y/m/d';
    $('body').find('.datepicker').datetimepicker({
        timepicker: time, //time, // 時間非表示か
        lang: "ja",
        format: format,
        minTime: '9:00',
        maxTime: '18:00',
        validateOnBlur: false,
        closeOnDateSelect: true,
        onSelectDate: function (date, input) {
            input_change_waraki(date, input);
        },
        onSelectTime: function (date, input) {
            input_change_waraki(date, input);
        },
        onGenerate: function () {
            modal_change_wareki();
        },
        onShow: function (date, input) {
            if (input.val() === '') {
                return true;
            }
            input_change_waraki(date, input);
        }
    });
}
$('.datepicker').focus(function () {
    input_change_year($(this));
});
function modal_change_wareki() {
    $current = '';
    $('.xdsoft_datetimepicker').each(function (i, val) {
        if ($(val).css('display') !== 'none') {
            $current = $(val);
            return false;
        }
    });
    var index = $('.xdsoft_datetimepicker').index($current);
    var new_year = convert_wareki($('.xdsoft_year>span').eq(index).text());
    $('.xdsoft_year>span').eq(index).text(new_year);
    var $opt = $('.xdsoft_yearselect').eq(index).find('.xdsoft_option');
    $opt.each(function (i, value) {
        var new_year = convert_wareki($(value).text());
        $(value).text(new_year);
    });
}
function input_change_year(input) {
    var date_str = input.val();
    if (!date_str.match(/^[MTSHmtsh][0-9]{2}\/[0-9]{2}\/[0-9]{2}$/)) {
        input.val('');
        return false;
    }
    var new_year = convert_year(date_str);
    var date_str_arr = date_str.split('/');

    if (date_str_arr.length < 3 || !$.isNumeric(new_year)) {
        return false;
    }
    var time_str_arr = (date_str_arr[2]).replace(' ', '').substr(2).split(':');
    //input.val(new_year + '/' + date_str_arr[1] + '/' + parseInt((date_str_arr[2]).substr(0, 2)) + ' ' + time_str_arr[0] + ':' + time_str_arr[1]);
    input.val(new_year + '/' + date_str_arr[1] + '/' + parseInt((date_str_arr[2]).substr(0, 2)));
}
function input_change_waraki(date, input) {
    var date_str = date.getFullYear() + '/' + ("0" + (date.getMonth() + 1)).slice(-2) + '/' + ("0" + date.getDate()).slice(-2);
    //var date_str = date.getFullYear() + '/' + ("0" + (date.getMonth() + 1)).slice(-2) + '/' + ("0" + date.getDate()).slice(-2) + ' ' + ("0" + date.getHours()).slice(-2) + ':' + ("0" + date.getMinutes()).slice(-2);
    var new_year = convert_wareki(date_str);
    input.val(new_year + date_str.substr(4));
}
function convert_wareki(date_str) {
    var year = date_str.substr(0, 4);
    var tmp;
    if (year > 2018) {      //令和
        tmp = year - 2018;
        tmp = 'R' + tmp;
    } else if (year > 1988) {      //平成
        tmp = year - 1988;
        tmp = 'H' + tmp;
    } else if (year > 1925) {//昭和
        tmp = year - 1925;
        tmp = 'S' + tmp;
    } else if (year > 1911) {//大正
        tmp = year - 1911;
        tmp = 'T' + tmp;
    } else if (year > 1867) {//明治
        tmp = year - 1867;
        tmp = 'M' + tmp;
    }
    return tmp;
}
function convert_year(date_str) {
    var date_str_arr = date_str.split('/');
    var nengo = date_str_arr[0].substr(0, 1);
    var year = parseInt(date_str_arr[0].substr(1));
    var tmp;
    switch (nengo) {
        case 'R':
            tmp = year + 2018;
            break;
        case 'H':
            tmp = year + 1988;
            break;
        case 'S':
            tmp = year + 1925;
            break;
        case 'T':
            tmp = year + 1911;
            break;
        case 'M':
            tmp = year - 1867;
            break;
    }
    return tmp;
}
