<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package remonterra
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="yandex-verification" content="19d1e049c657aa5e" />
  <link rel="icon" href="/resources/images/favicon.png" type="image/x-icon" />

  <script src='https://www.google.com/recaptcha/api.js?render=6LfKNOIZAAAAAJrdQZKF4Hc5mF7wi7EIwvNSNTpV'></script>

  <link rel="stylesheet" href="/wp-content/themes/remonterra/resources/js/wow/css/libs/animate.css">

  <link rel="stylesheet" href="/wp-content/themes/remonterra/resources/assets/OwlCarousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="/wp-content/themes/remonterra/resources/assets/OwlCarousel/dist/assets/owl.theme.default.min.css">

  <link rel="stylesheet" href="/wp-content/themes/remonterra/resources/assets/lightbox/dist/css/lightbox.min.css">
  <link rel="stylesheet" href="/wp-content/themes/remonterra/resources/css/featherlight.min.css" />

  <script src="https://kit.fontawesome.com/777026ae9b.js" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="/wp-content/themes/remonterra/resources/js/jquery-1.10.2.js"></script>
  <script src="/wp-content/themes/remonterra/resources/js/calculator.js"></script>

  <!--[if lte IE 8]>
  <style>
	input[type='checkbox'] {
		display: inline;
	}
	.check label{
		display:none;
	}
  </style>
<![endif]-->

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav>
  <div class="content_max flexbox">
    <div class="nav flexbox">
      <div class="logo">
        <a href="/"><img src="/wp-content/themes/remonterra/resources/images/logo.png" alt="Вернуться на главную"></a>
      </div>

      <i class="fas fa-bars"></i>

      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'menu-1',
          'menu_id'        => '',
          'container'       => false,
          'menu_class'      => 'flexbox',
        )
      );
      ?>
    </div>

    <div class="phone">
      <div class="phone__info">
        <h3><a href="tel:+78122038098">(812) 203-80-98</a></h3>

        <p><small><a href="mailto:info@remonterra24.ru">info@remonterra24.ru</a></small></p>
      </div>
    </div>
  </div>
</nav>

<?php wp_body_open(); ?>
