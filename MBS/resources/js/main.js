jQuery(document).ready(function () {
  jQuery("header").each(function (idx, v) {

    jQuery(v).children('.site-branding, #site-navigation').wrapAll('<div class="navigation content_max">');
    console.log($(v).html());
  });
});

jQuery('.head').append( jQuery('.services_contacts') );

<!-- hide/active nav -->
jQuery('.fa-bars').click(function(){
  jQuery('#primary-menu, .fa-bars').toggleClass('active');
});

jQuery('li.menu-item-has-children').click(function(){
  jQuery(this).toggleClass('active_submenu');
});
<!-- hide/active nav. end -->


jQuery(window).scroll(function() {
  if (jQuery(this).scrollTop() > 100) {
    if (jQuery('#toTop').is(':hidden')) {
      jQuery('#toTop').css({opacity : 1}).fadeIn('slow');
    }
  } else { jQuery('#toTop').stop(true, false).fadeOut('fast'); }
});
jQuery('#toTop').click(function() {
  jQuery('html, body').stop().animate({scrollTop : 0}, 500);
});

jQuery(window).scroll(function() {
  var height = jQuery(window).scrollTop();
  if(height > 50){
    jQuery('header').addClass('fixed');
    jQuery('main').addClass('active');
  } else{
    jQuery('header').removeClass('fixed');
    jQuery('main').removeClass('active');
  }
});

setTimeout("window.scrollTo(0,0)",0)
