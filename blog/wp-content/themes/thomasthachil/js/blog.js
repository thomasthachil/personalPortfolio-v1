$(document).ready( function() {
  // init Masonry
  var $grid = $('.grid').masonry({
    itemSelector: '.post',
    percentPosition: true,
    columnWidth: '.grid-sizer',
    gutter: '.gutter-sizer'
  });
  // layout Isotope after each image loads
  $grid.imagesLoaded().progress( function() {
    $grid.masonry();
  });

});