<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jewish
 */

?>

<footer>
  <div class="top">
    <div class="content footer flexbox">
      <div class="footer__left">
        <div class="logo">
          <?php the_custom_logo( $blog_id ); ?>
        </div>

        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
        <?php endif; ?>

        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'social',
            'menu_id'        => 'social',
          )
        );
        ?>
      </div>

      <div class="footer__right">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'footer',
            'menu_id'        => 'footer',
          )
        );
        ?>
      </div>
    </div>
  </div>

  <div class="bottom">
    <div class="content flexbox">
      <p>©2021 Jewish Travel SpB. All rights reserved. <a href="/privacy-policy">Privacy Policy</a>  Site by <a
            href="">MBS</a></p>
    </div>
  </div>
</footer><!-- #colophon -->

<div id="toTop"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/wp-content/themes/jewish/resources/assets/lightbox/dist/js/lightbox-plus-jquery.min.js"></script>
<script src="/wp-content/themes/jewish/resources/assets/OwlCarousel/dist/owl.carousel.min.js"></script>

<!-- click blocks -->
<script>
  jQuery(document).delegate("div.portfolio__block", "click", function() {
    window.location = jQuery(this).find("a").attr("href");
  });

  jQuery(document).delegate("div.services__block", "click", function() {
    window.location = jQuery(this).find("a").attr("href");
  });
</script>
<!-- click blocks. end -->

<!-- hide/active nav -->
<script>
  jQuery('.fa-bars').click(function(){
    jQuery('.nav ul, .fa-bars').toggleClass('active');
  });

  jQuery('li.dropdown_menu').click(function(){
    jQuery(this).toggleClass('active_dropdown');
  });
</script>
<!-- hide/active nav. end -->

<!-- hide/active search -->
<script>
  jQuery('.search__category .image').click(function(){
    jQuery('.search__category .category').toggleClass('active');
    jQuery(this).toggleClass('active');
  });

  jQuery('.search__form .image').click(function(){
    jQuery('form').toggleClass('active');
    jQuery(this).toggleClass('active');
  });
</script>
<!-- hide/active search. end -->

<!-- to top -->
<script>
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      if ($('#toTop').is(':hidden')) {
        $('#toTop').css({opacity : 1}).fadeIn('slow');
      }
    } else { $('#toTop').stop(true, false).fadeOut('fast'); }
  });
  $('#toTop').click(function() {
    $('html, body').stop().animate({scrollTop : 0}, 500);
  });
</script>
<!-- to top. end -->

<!-- fixed nav -->
<script>
  $(window).scroll(function() {
    var height = $(window).scrollTop();
    if(height > 50){
      $('nav').addClass('fixed');
    } else{
      $('nav').removeClass('fixed');
    }
  });

  setTimeout("window.scrollTo(0,0)",0)
</script>
<!-- fixed nav. end -->

<script>
  jQuery(document).ready(function($) {
    $('.pgcsimplygalleryblock-slider-next-prev-navi').appendTo( $('.pgcsimplygalleryblock-slider-content') );
  });
</script>


<script>
  jQuery(document).ready(function(){
    jQuery('.main .places.owl-carousel').owlCarousel({
      nav: false,
      loop: true,
      dots: false,
      margin: 20,
      responsiveClass: true,
      autoplay:true,
      autoplayTimeout:3000,
      autoplayHoverPause:true,
      responsive: {
        0: {
          items: 1
        },
        600:{
          items:2
        },
        1000:{
          items:4
        }
      }
    });
  });
</script>


<script>
  jQuery(document).ready(function(){
    jQuery('.hotels .places.owl-carousel').owlCarousel({
      nav: true,
      loop: true,
      dots: false,
      margin: 20,
      responsiveClass: true,
      autoplay:true,
      autoplayTimeout:3000,
      autoplayHoverPause:true,
      responsive: {
        0: {
          items: 1
        },
        600:{
          items:2
        },
        1000:{
          items:3
        }
      }
    });
  });
</script>

<?php wp_footer(); ?>

</body>
</html>
