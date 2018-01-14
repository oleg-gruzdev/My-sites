
	
/*FOR MOBILE MENU IN HEADER*/
	$(document).ready(function () {
		// body...
		$('.mobile-header .burger').on('click', function(){
		$('.mobile-header .mobile-nav').stop();
		$(this).toggleClass('active');
		$('.cover').toggleClass('cover-with-mob-menu');
		$('.mobile-header .mobile-nav').slideToggle(400);
	});	
	});	
	
		
	$(window).on('resize', function(){
		if ($(window).width() > 699) {
			$('.mobile-header').css('display', 'none');
			$('.site-header').css('display', 'block');

		} else {
			$('.mobile-header').css('display', 'block');
			$('.site-header').css('display', 'none');
		}
	});



	
//switch work-time/address IN MOBILE MENU
$(function(){
      $('.switch').on('click', function(){
        // $('.accordion .active').removeClass('active');
        if ($(this).hasClass('active')) {
          $(this).removeClass('active').find('.switch-block').slideUp(200);
        } else {
          $('.wt-ad .active').removeClass('active').find('.switch-block').slideUp(200);
          $(this).addClass('active').find('.switch-block').slideDown(200);
        }
      });
    });


$(function(){
      $('.wt-ad ~ *, .mobile-header ~ div').on('click', function(){
        // $('.accordion .active').removeClass('active');
        if ($('.switch').hasClass('active')) {
          $('.switch').removeClass('active').find('.switch-block').slideUp(200);
        } 
      });
    });
	