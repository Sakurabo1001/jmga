$(document).ready(function () {
  if (location.pathname != "/") {
    $('.m-navGlobal a[href^="/' + location.pathname.split("/")[1] + '"]').parent().addClass('active');
    if (location.pathname.split("/")[1] === 'other') {
      $('.m-navGlobal a[href^="/' + location.pathname.split("/")[1] + '"]').parent().parents('li').addClass('active');
    }
  }
});