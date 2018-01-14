
// init Masonry
var $grid = $('.grid').masonry({
  itemSelector: '.grid-item',
  percentPosition: true,
  columnWidth: '.grid-sizer'
});
// layout Masonry after each image loads
$(function(){
$grid.imagesLoaded().progress( function() {
  $grid.masonry();
});  
});

