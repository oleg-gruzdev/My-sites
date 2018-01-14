/*FOR MAIN SLIDER*/


$(window).on('load', function() {
	$('.hot-proposition-block').slick({
			  slidesToShow: 1,
			  slidesToScroll: 1,
			  prevArrow: "<div class='slick-prev slick-arrow'><div></div></div>",
			  nextArrow: "<div class='slick-next slick-arrow'><div></div></div>",
/*fade: true,
cssEase: 'linear',*/
speed: 2500,
infinite: true,
autoplay: true,
  autoplaySpeed: 3000,
			 /* dots: true,*/
			 responsive: [
        {
      breakpoint: 700,
      settings: {
        arrows: false
        
      }
    }
      ]
  });
});


/*change background/image in slider*/
$(window).on('resize', function(){
    if ($(window).width() > 950) {
      $('.image-for-mobile-version').removeClass('show');
      $('.hot-proposition-1').css('backgroundImage', '../images/hot-proposition-11-background.png');
      $('.hot-proposition-2').css('backgroundIimage', '../images/hot-proposition-21-background.png');
     } else {
         $('.image-for-mobile-version').addClass('show');
         $('.hot-proposition-1').css('backgroundImage', 'none');
      $('.hot-proposition-2').css('backgroundImage', 'none');
     }
  });
