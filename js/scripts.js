$(document).ready(function(){

  $('#hamburger').click(function(){
    $('#hamburger').toggleClass('open')
    $('nav').toggleClass('navOpen')
    $('.container').toggleClass('containerOpen')
  })



});
