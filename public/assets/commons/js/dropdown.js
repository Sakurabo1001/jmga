$(function() {
var nav = $('.m-navGlobal');
var navTop = nav.offset().top;
$('li', nav).hover(function(){
$('ul',this).stop().slideDown('fast');
},
function(){
$('ul',this).stop().hide();
});
});

