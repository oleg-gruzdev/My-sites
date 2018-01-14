
	
/*FOR MOBILE MENU IN HEADER*/
			
	$('.header .burger').on('click', function(){
		$('.header .mobile-nav').stop();
		$(this).toggleClass('active');
		$('.header .mobile-nav').slideToggle(400);
		$('.lang-block').toggleClass('not-active-lang-block');

	});

	$(window).on('resize', function(){
		if ($(window).width() > 550) {
			$('.header .mobile-nav').css('display', 'none');
			$('.burger').removeClass('active');
$('.lang-block').removeClass('not-active-lang-block');
		}
	});


	
	



	