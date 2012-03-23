$(function(){
  var $html = $('html');

  $html.removeClass('no-js').addClass('js');
  
  $('input, textarea').placeholder();

  //add mobile class based on .mq()
  //then if .mobile load in helper.js etc
});