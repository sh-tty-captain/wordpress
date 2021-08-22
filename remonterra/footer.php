<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package remonterra
 */

?>

<footer>
  <div class="clip">
    <img src="/wp-content/themes/remonterra/resources/images/svg/wave_white.svg" alt="Clip">
  </div>

  <div class="content footer flexbox">
    <div class="footer__left">
      <div class="logo">
        <a href="/"><img src="/wp-content/themes/remonterra/resources/images/logo_white.png" alt="Вернуться на
        главную"></a>
      </div>

      <div class="info">
        <p>г. Санкт-Петербург, <br>
          18-я линия Васильевского острова, 3</p>

        <p><small>понедельник-пятница, <br>
            9:00 - 18:00</small></p>

        <h3><a href="tel:+78122038098">(812) 203-80-98</a></h3>

        <p><small>строительная компания “Ремонтерра”</small></p>

        <h3 class="email"><a href="mailto:info@remonterra24.ru">info@remonterra24.ru</a></h3>
      </div>

      <div class="feedback">
        <h3>Заказать обратный звонок</h3>

        <div class="feedback__form">
          <form action="/send.php" id="contact_form_footer" class="flexbox"
                name="contact_form_footer" method="post">
            <input type="hidden" name="token" id="token_footer">
            <input type="hidden" name="action" id="action_footer">

            <input type="tel" required name="phone" placeholder="ваш номер телефона">

            <input type="hidden" name="email" value="respond@remonterra24.ru">

            <input type="submit" name="submit" class="submit" value="Заказать">
          </form>
        </div>
      </div>

      <!--
      <div class="social flexbox">
        <a href="*"><i class="fab fa-facebook-f"></i></a>

        <a href="*"><i class="fab fa-instagram"></i></a>

        <a href="*"><i class="fab fa-google-plus-g"></i></a>

        <a href="*"><i class="fab fa-twitter"></i></a>
      </div>
      -->
    </div>

    <div class="footer__right">
      <h2>Мы находимся:</h2>

      <div class="map">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A5a98acc02852658a1063adb0e10cadfcc4fa6bf1547ae3f5f1ee859909e9f076&amp;source=constructor" width="100%" height="450" frameborder="0"></iframe>
      </div>
    </div>

    <div class="footer__bottom">
      <div class="content flexbox">
        <p>@Copyright By <strong>Ремонтерра</strong></p>

        <p>Разработано <strong><a href="://ubcorp.pro">UBCorp</a></strong></p>
      </div>
    </div>
  </div>

  <div class="more">
    <p><a href="/contacts">Подробнее</a></p>
  </div>
</footer>

<div id="toTop"></div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/wp-content/themes/remonterra/resources/assets/lightbox/dist/js/lightbox-plus-jquery.min.js"></script>

<script src="/wp-content/themes/remonterra/resources/assets/OwlCarousel/dist/owl.carousel.min.js"></script>

<script src="https://rawgit.com/peacepostman/wavify/master/wavify.js"></script>
<script src="https://rawgit.com/peacepostman/wavify/master/jquery.wavify.js"></script>

<script src="/wp-content/themes/remonterra/resources/js/dropdown.js"></script>

<script src="/wp-content/themes/remonterra/resources/js/portfolio_filter.js?v2"></script>
<script src="/wp-content/themes/remonterra/resources/js/jquery.isotope.min.js"></script>
<script src="/wp-content/themes/remonterra/resources/js/featherlight.min.js"></script>

<!-- waves -->
<script>
  var wave1 = $('#feel-the-wave').wavify({
    height: 80,
    bones: 4,
    amplitude: 100,
    color: 'rgba(255, 255, 255, .1)',
    speed: .10
  });

  var wave2 = $('#feel-the-wave-two').wavify({
    height: 60,
    bones: 4,
    amplitude: 100,
    color: 'rgba(255, 255, 255, .1)',
    speed: .15
  });

  var colors = ['rgba(252, 11, 33, .5)', '#FC6F21', '#FC6F21', '#FC6F21', '#FC6F21']
</script>
<!-- waves. end -->

<!-- google captcha -->
<script>
  let captcha_action = 'contact_form';

  grecaptcha.ready(function() {
    grecaptcha.execute('6LfKNOIZAAAAAJrdQZKF4Hc5mF7wi7EIwvNSNTpV', {action: captcha_action})
      .then(function(token) {
        if (token) {
          document.getElementById('token').value = token;
          document.getElementById('action').value = captcha_action;
        }
      });
  });
</script>
<!-- google captcha. end -->

<!-- google captcha footer -->
<script>
  let captcha_action = 'contact_form_footer';

  grecaptcha.ready(function() {
    grecaptcha.execute('6LfKNOIZAAAAAJrdQZKF4Hc5mF7wi7EIwvNSNTpV', {action: captcha_action})
      .then(function(token) {
        if (token) {
          document.getElementById('token_footer').value = token;
          document.getElementById('action_footer').value = captcha_action;
        }
      });
  });
</script>
<!-- google captcha footer. end -->

<!-- google captcha calculator -->
<script>
  let captcha_action = 'contact_form_footer';

  grecaptcha.ready(function() {
    grecaptcha.execute('6LfKNOIZAAAAAJrdQZKF4Hc5mF7wi7EIwvNSNTpV', {action: captcha_action})
      .then(function(token) {
        if (token) {
          document.getElementById('token_calculator').value = token;
          document.getElementById('action_calculator').value = captcha_action;
        }
      });
  });
</script>
<!-- google captcha calculator. end -->

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

<!-- calculator form -->
<script>
  $('#form').submit(function(e){
    e.preventDefault();

    var form = document.getElementById("cost");
    var result = document.getElementById("total");
    form.classList.add("result");
    result.classList.add("result");

    $('html,body').stop().animate({ scrollTop: $('#anchor').offset().top }, 600);
  });
</script>
<!-- calculator form. end -->

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

<script>
  jQuery(document).ready(function(){
    jQuery('.offers_content.owl-carousel').owlCarousel({
      nav: false,
      loop: true,
      dots: true,
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
          items:2
        },
        1000:{
          items:3
        }
      }
    });
  });
</script><script src="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>

<!-- google captcha -->
<script>
  let captcha_action = 'contact_form';

  grecaptcha.ready(function() {
    grecaptcha.execute('6LffswIaAAAAADjd9N01xHFNz9Gqp_LPFRrkzL9_', {action: captcha_action})
      .then(function(token) {
        if (token) {
          document.getElementById('token').value = token;
          document.getElementById('action').value = captcha_action;
        }
      });
  });
</script>
<!-- google captcha. end -->

<div id="toTop"></div>

<?php wp_footer(); ?>

</body>
</html>
