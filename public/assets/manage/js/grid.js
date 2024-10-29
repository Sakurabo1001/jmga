/**
 * grid
 */
(function($) {
  /* gridSort
   ------------------------------------------------------------------------------- */
  $.fn.sort = function(options) {
    var elem = $(this);
    var defaults = {
      valAsc: '1',
      valDesc: '2',
      paramIndex: 'index',
      paramSize: 'size',
      paramSort: 'sort',
      paramOrder: 'order',
      cssGrdSort: 'grdSortHead',
      cssGrdSortAsc: 'grdSortHeadAsc',
      cssGrdSortDesc: 'grdSortHeadDesc',
      pagerSize: 'pagerSize',
              pagerLst: 'pagerLst'
    };
    var set = $.extend(defaults, options);
    var paramGrd = {
      index: elem.data(set.paramIndex),
      size: elem.data(set.paramSize),
      sort: elem.data(set.paramSort),
      order: elem.data(set.paramOrder)
    };
    //表示行数変更時
    $(document).find('.'+set.pagerSize+' a').on('click', function() {
      var url = $('.form_action').val().split('?');
      url = url[0];
      document.forms["nFrm"].action = url + $(this).attr('href');
      $("#submit").trigger('click');
    });
    $(document).find('.'+set.pagerLst+' a').on('click', function() {
      var url = $('.form_action').val().split('?');
      url = url[0];
      document.forms["nFrm"].action = url + $(this).attr('href');
      $("#submit").trigger('click');
    });
    //ページ変更時
    var elemArrSort = elem.find('.' + set.cssGrdSort);
    elemArrSort.each(function(idx) {
      var elemSort = $(this);
      if (idx === paramGrd.sort) {
        elemSort.addClass(paramGrd.order == set.valDesc ? set.cssGrdSortDesc : set.cssGrdSortAsc);
      }
    })
            .on('click', function() {
              var elemSort = $(this);
              var sort = elemArrSort.index(elemSort);
              var order = (elemSort.hasClass(set.cssGrdSortAsc) ? set.valDesc : set.valAsc);
              var action = '?' + set.paramIndex + '=' + paramGrd.index
                      + '&' + set.paramSize + '=' + paramGrd.size
                      + '&' + set.paramSort + '=' + sort
                      + '&' + set.paramOrder + '=' + order;
              var url = $('.form_action').val().split('?');
              url = url[0];
              document.forms["nFrm"].action = url+ action;
              //$("#submit").trigger('click');
              //return false;
              $('form').submit();
            });
    return elem;
  };

  /* gridEdit
   ------------------------------------------------------------------------------- */
  $.fn.gridEdit = function(options) {
    var elem = $(this);
    var defaults = {
      editable: '.grdEditable',
      cssInput: 'txtGrdEdit',
      cssCol: [],
      onBlurCallBack: [],
      cellFormat: []
    };
    var set = $.extend(defaults, options);
    var isEditting = false;

    elem.on('click', set.editable, function() {
      if (isEditting)
        return false;

      var elemCell = $(this);
      var colIdx = elemCell.parents('tr').find(set.editable).index(this);
      var cssCol = (set.cssCol.length > colIdx ? set.cssCol[colIdx] : '');
      var input = $('<input>').attr('type', 'text')
              .val(elemCell.text())
              .height(elemCell.height())
              .width(elemCell.width())
              .addClass(cssCol);
      elemCell.html(input);
      isEditting = true;

      elemCell.find('input').focus().on('blur', function() {
        var elemTxt = $(this);
        var val = elemTxt.val();
        switch (set.cellFormat[colIdx]) {
          case 'num':
            val = func.formatNum(val);
            break;
        }
        elemTxt.after(val).off().remove();
        isEditting = false;
      });
    });

    return elem;
  };
})(jQuery);

