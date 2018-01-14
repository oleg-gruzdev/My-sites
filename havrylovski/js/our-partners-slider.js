/*FOR OUR-PARTNERS SLIDER*/

$(function() {
	$('.our-partners-slider').slick({
			 infinite: true,
			  slidesToShow: 6,
			  slidesToScroll: 1,
			  prevArrow: "<div class='slick-prev1 slick-arrow'></div>",
			  nextArrow: "<div class='slick-next1 slick-arrow'></div>",
			  dots: true,
			  responsive: [
    {
      breakpoint: 1600,
      settings: {
       slidesToShow: 5,
       slidesToScroll: 1
      }
    },

    {
      breakpoint: 1300,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
centerMode: false,
      }
    },

    {
      breakpoint: 1230,
      settings: {
        /*arrows: false,*/
        /*centerMode: true,
        centerPadding: '0px',*/
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },

    {
      breakpoint: 1024,
      settings: {
        arrows: false,
        /*centerMode: true,
        centerPadding: '0px',*/
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },

    {
      breakpoint: 488,
      settings: {
        arrows: false,
        /*centerMode: true,*/
        /*centerPadding: '0px',*/
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
  ]
  });
});

$(function () {	
$('.slick-prev1').hover(function () {
		$('#left-numerator1').toggleClass('changecolor');
		$('#left-denominator1').toggleClass('changecolor');
	});
$('.slick-next1').hover(function () {
		$('#right-numerator1').toggleClass('changecolor');
		$('#right-denominator1').toggleClass('changecolor');
	});
});

$(function () { 
  $('.slick-dots').css('display', 'none');
}
);


$(window).on('resize', function(){
    $('.slick-dots').css('display', 'none');
    }
  );