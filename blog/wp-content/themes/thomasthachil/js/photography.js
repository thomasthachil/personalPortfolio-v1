/*
$(document).ready( function() {
  // init Masonry
  var $grid = $('.grid').masonry({
    itemSelector: '.grid-item',
    percentPosition: true,
    columnWidth: '.grid-sizer'
  });
  // layout Isotope after each image loads
  $grid.imagesLoaded().progress( function() {
    $grid.masonry();
  });

});

*/

$(document).ready( function() {
  // init packery
  var $grid = $('.grid').packery({
  // options
  itemSelector: '.grid-item',
  percentPosition: true,
  "stamp": ".stamp",
  columnWidth: '.grid-sizer'
});

// get item elements, jQuery-ify them
var $itemElems = $grid.find('.grid-item');
// make item elements draggable
$itemElems.draggable();
// bind Draggable events to Packery
$grid.packery( 'bindUIDraggableEvents', $itemElems );
  // layout Isotope after each image loads


  $grid.imagesLoaded().progress( function() {
  	$grid.packery();
  });

});

