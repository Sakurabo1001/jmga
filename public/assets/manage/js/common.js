$(function () {
    var viewstate = $('#viewstate').val();
    $('.muko').on('click', function () {
        return false;
    });
    $('.grdSort').sort();

    $('.logout').on('click', function () {
        var rs = conLink('ログアウトしてもよろしいですか？');
        return rs;
    });
    $(document).on('click', '.deleteBtn', function () {
        var rs = conLink('削除してもよろしいですか？');
        return rs;
    });
    $(document).on('click', '#edtBtn', function () {
        var rs = con('更新してもよろしいですか？', 'update?__viewstate=' + viewstate);
        return rs;
    });
    $(document).on('click', '#sendBtn', function () {
        var rs = con('送信してもよろしいですか？', 'update?__viewstate=' + viewstate);
        return rs;
    });
    $('#insBtn').on('click', function () {
        var rs = con('追加してもよろしいですか？', 'update?__viewstate=' + viewstate);
        return rs;
    });
    $('.export').on('click', function () {
        var rs = conLink('出力してもよろしいですか？');
        return rs;
    });
    
    $('.publishCloseBtn').on('click', function () {
        var rs = conLink('非公開としてよろしいですか？');
        return rs;
    });
    
    $('.publishOpenBtn').on('click', function () {
        var rs = conLink('公開してよろしいですか？');
        return rs;
    });
    
    $('.serchBtn').on('click', function () {
        submitPage($('.form_action').val());
    });
});
function submitPage(elem) {
    document.forms["nFrm"].action = elem;
    $('form').submit();
}

function con($message, action) {
    if (confirm($message)) {
        var orgin = ($('.form_action').length === 0) ? document.forms["nFrm"].action : $('.form_action').val();
        document.forms["nFrm"].action = orgin + action;
        $('form').submit();
        return false;
    } else {
        return false;
    }
}
function con_check_dtl($message, action) {
    if (confirm($message)) {
        document.forms["nFrm"].action = action;
        $('form').submit();
    } else {
        return false;
    }
}

function conLink($message) {
    if (!confirm($message)) {
        return false;
    } else {
        return true;
    }
}

function hidePass() {
    $("input:text").each(function () {
        if ($(this) !== null) {
            if ($(this).val() === "") {
                var rslt = $(this).val().replace("", " ");
                $(this).val(rslt);
            }
        }
        $(this).focus(function () {
            if ($(this).val() === " ") {
                var rslt = $(this).val().replace(/^\s+/g, "");
                $(this).val(rslt);
            }
        });
    });
}
