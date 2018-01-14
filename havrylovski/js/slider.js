/*FOR MAIN SLIDER*/

function count() {
    var slidesArray = $(".main-slider-box .slick-track>div:not(.slick-cloned)");
       		for (var i = 1; i <= slidesArray.length; i++) {
       				var atrClassName = slidesArray[i-1].getAttribute('class');
       				if (atrClassName.indexOf("slick-active")>0) break;
       			else continue;
       			} 
       			if (i == 1) {
       				document.getElementById('left-denominator').innerHTML = slidesArray.length;
		  			document.getElementById('right-denominator').innerHTML = i+1;
	  			} else {
       				if (i == slidesArray.length) {
	       				document.getElementById('left-denominator').innerHTML = i-1;
			  			document.getElementById('right-denominator').innerHTML = 1;
		  			} else {
		   			document.getElementById('left-denominator').innerHTML = i-1;
		  			document.getElementById('right-denominator').innerHTML = i+1;
		  			} 
				}
			 };
			 
$(window).on('load', function() {
	$('.fade').slick({
			  slidesToShow: 1,
			  prevArrow: "<div class='slick-prev slick-arrow'></div>",
			  nextArrow: "<div class='slick-next slick-arrow'></div>",
fade: true,
  cssEase: 'linear',
speed: 2500,
infinite: true,
autoplay: true,
  autoplaySpeed: 3000,
			 /* dots: true,*/
			 responsive: [
        {
      breakpoint: 900,
      settings: {
        arrows: false
        
      }
    }
      ]
  });
});
	




function bigSliderPortfolio() {
	$('.slider-for').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: false,
	  fade: true,
	  asNavFor: '.slider-nav'
	});
}
function smallSliderPortflio() {
	$('.slider-nav').slick({
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  asNavFor: '.slider-for',
	  prevArrow: "<div class='slick-prev1 slick-arrow'></div>",
	  nextArrow: "<div class='slick-next1 slick-arrow'></div>",
	  centerMode: true,
	  focusOnSelect: true
	});
}

$(window).on('load', bigSliderPortfolio); 
$(window).on('load', smallSliderPortflio);


$(function() {	
	$('.slick-prev').hover(function () {
		$('#left-numerator').toggleClass('changecolor');
		$('#left-denominator').toggleClass('changecolor');
	});


	$('.slick-next').hover(function () {
		$('#right-numerator').toggleClass('changecolor');
		$('#right-denominator').toggleClass('changecolor');
	});

});



$(function () {
	$('.slick-prev, .slick-next').on("click", count);
});
/*$(document).ready(function() {
$('.slick-prev, .slick-next').on('click', function () {
    var slidesArray = $(".main-slider-box .slick-track>div:not(.slick-cloned)");
    $('#left-denominator').innerHTML = slidesArray.length;
    $('#right-denominator').innerHTML = slidesArray.length;
       		for (var i=0; i<slidesArray.length; i++) {
       		var atrClassName = slidesArray[i].getAttribute('class');
   			if (atrClassName.indexOf("slick-active")>0) {
		   			document.getElementById('left-denominator').innerHTML = i;
		  			document.getElementById('right-denominator').innerHTML = i+2;
		  			} 
				}
	 });
});*/


 /*$(function() {
		$('.slider-content button, .our-projects-block button').on('mouseover', function () {
					$(this).addClass('button_animate');
					});
			});

$(function() {
					$('.slider-content button, .our-projects-block button').on('mouseleave', function () {
					$(this).removeClass('button_animate');
					});
			}); */

/*$(function() {
	$('.main-slider-button').on('hover', function () {
							$(this).addClass('button_animate');
							$(this).addClass('button_animate');
						});
}); */