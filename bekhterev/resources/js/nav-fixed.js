jQuery(window).scroll(function() {
  var height = jQuery(window).scrollTop();
  if(height > 50){
    jQuery('header').addClass('header-fixed');
    jQuery('main').addClass('active');
  } else{
    jQuery('header').removeClass('header-fixed');
    jQuery('main').removeClass('active');
  }
});

setTimeout("window.scrollTo(0,0)",0)