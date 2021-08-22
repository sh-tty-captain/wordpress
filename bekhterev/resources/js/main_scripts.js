jQuery(function () {
  jQuery('.narcology__left ul li a').each(function () {
    var location = window.location.href;
    var link = this.href;
    if(location == link) {
      jQuery(this).parents('.narcology__left li').addClass('active-parent');
    }
  });

  jQuery('.narcology__left ul.children li a').each(function () {
    var location = window.location.href;
    var link = this.href;
    if(location == link) {
      jQuery(this).parents('.narcology__left ul.children  li').addClass('active-children');
    }
  });

  if(jQuery('.narcology__left li.active-children').hasClass('active-parent')) {
    jQuery('.narcology__left li.active-children').removeClass('active-parent')
  }
});


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

jQuery(document).delegate("div.events__description", "click", function() {
  window.location = jQuery(this).find("a").attr("href");
});

jQuery(document).delegate(".simple-news-item", "click", function() {
  window.location = jQuery(this).find("a").attr("href");
});

jQuery(document).delegate("div.centers__block", "click", function() {
  window.location = jQuery(this).find("a").attr("href");
});

jQuery(document).delegate("div.services__block", "click", function() {
  window.location = jQuery(this).find("a").attr("href");
});

jQuery(document).delegate(".block__image", "click", function() {
  window.location = jQuery(this).find("a").attr("href");
});

jQuery(document).delegate(".psychiatry__block", "click", function() {
  window.location = jQuery(this).find("a").attr("href");
});

jQuery(document).ready(function() {
  jQuery('.simple-news-item:nth-child(1)').addClass('first');
  jQuery('.simple-news-item:nth-child(2)').addClass('two');
  jQuery('.simple-news-item:nth-child(3)').addClass('third');
  jQuery('.simple-news-item:nth-child(4)').addClass('fourth');
  jQuery('.simple-news-item:nth-child(5)').addClass('fifth');
})

var node = document.querySelectorAll(".simple-news-excerpt");
var need = 145;

[].forEach.call(node, function(data) {
  if (data.innerHTML.length > need) {
    data.innerHTML = data.innerHTML.slice(0, need) + "…";
  }
});

jQuery(document).ready(function(){
  jQuery('.scientific .simple-news-con').addClass('owl-carousel');
  jQuery('.education .simple-news-con').addClass('owl-carousel');

  jQuery('.simple-news-con.owl-carousel').owlCarousel({
    nav: false,
    loop: true,
    dots: false,
    margin: 5,
    responsiveClass: true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive: {
      0: {
        items: 1
      },
      600:{
        items:3
      },
      1000:{
        items:5
      }
    }
  })
});
