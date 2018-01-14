
//fix-header
 
   
    $(window).scroll(function(){
      if ($(this).scrollTop() > 600 && $(this).width() > 700 ) {
        /*$('.header-top').slideUp(200);*/
        $('.site-header').addClass('header-fix').removeClass('site-header');
      } else {
        $('.header-fix').removeClass('header-fix').addClass('site-header');
    }
});
  

$(window).on('load', function(){
    var id = location.hash;
    var top = $(id).offset().top;
    //  var id  = $(this).attr('href'),
    if (top > 600 && $(this).width() > 700) {
         $('.site-header').addClass('header-fix').removeClass('site-header');
        top = $(id).offset().top - $('.header-fix-bottom').offset().top;
        }
        
        //alert(top);
    if (id == '#dumplings') {
       $('body,html').animate({scrollTop: top - 30}, 800);
    } else if (id == '#soups-and-salads') {
        $('body,html').animate({scrollTop: top - 30}, 1200);
    } else {
        $('body,html').animate({scrollTop: top - 30}, 1500);
    }
    
    });

