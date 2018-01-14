
	
/*FOR contact forms*/
	$(function () {		
	$('.glink').on('click', function(){
		if ( $(this).html() == 'ua') {
			$('.active-lang').removeClass('active-lang');
			$(this).addClass('active-lang');
			$('.active-form').removeClass('active-form');
			$('.ukr').addClass('active-form');
		} else {
			if ( $(this).html() == 'RU') {
				$('.active-lang').removeClass('active-lang');
				$(this).addClass('active-lang');
				$('.active-form').removeClass('active-form');
				$('.rus').addClass('active-form');
			} else {
				$('.active-lang').removeClass('active-lang');
				$(this).addClass('active-lang');
				$('.active-form').removeClass('active-form');
				$('.eng').addClass('active-form');
			}
		}
	});

});

$(function () {
	$ ('a[title="Ukrainian"]').text('ua');
});

$(function () {	
$(window).on('load', function () {
		if ($('.active-lang').html() == 'RU') {
			$('.active-form').removeClass('active-form');
			$('.rus').addClass('active-form');
		} else {
			if ($('.active-lang').html() == 'EN') {
			$('.active-form').removeClass('active-form');
			$('.eng').addClass('active-form');
		} else {
continue;} 
}
});	
	
});


	