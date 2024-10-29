$(function () {
    $('.edit').modal({
        btn_close: 'close',
        modal: 'modal'
    });
    $('[name="formatKbn"]').trigger('change');
});
$('[name="formatKbn"]').on('change', function () {
    changeSpanKbn($(this).val());
});

changeSpanKbn = function (value) {
    var dnClass = 'dn';
    var $spanKbn = $('[name="spanKbn"]');
    var $spanKbnOpt = $spanKbn.find('option');
    var setValue = '';
    //書式
    var beef_hinsh = '1';
    var beef_ym = '2';
    var beef_ken = '3';
    var pork_ym = '4';
    var beef_pork_overview = '5';
    var beef_pork_part_overview = '6';
    //期間
    var spanKbnArr = {}
    spanKbnArr[beef_hinsh] = ['1', '3', '4'];
    spanKbnArr[beef_ym] = ['9'];
    spanKbnArr[beef_ken] = ['2', '3', '4'];
    spanKbnArr[pork_ym] = ['9'];
    spanKbnArr[beef_pork_overview] = ['2', '3'];
    spanKbnArr[beef_pork_part_overview] = ['9'];

    var arr = spanKbnArr[value];
    if (spanKbnArr[value] === undefined) {
        return false;
    }

    $spanKbnOpt.each(function (i, val) {
        var thisValue = $(val).val();
        if ($.inArray(thisValue, arr) < 0) {
            $(val).addClass(dnClass);
        } else {
            $(val).removeClass(dnClass);
            if (setValue === '') {
                setValue = thisValue;
            }
        }
    });
    if ($.inArray($spanKbn.val(), arr) < 0) {
        $spanKbn.val(setValue);
    }
}