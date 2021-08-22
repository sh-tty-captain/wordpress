<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jewish
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

  <link rel="stylesheet" href="/wp-content/themes/jewish/resources/assets/OwlCarousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="/wp-content/themes/jewish/resources/assets/OwlCarousel/dist/assets/owl.theme.default.min.css">

  <link rel="stylesheet" href="/wp-content/themes/jewish/resources/assets/lightbox/dist/css/lightbox.min.css">

  <script src="https://kit.fontawesome.com/777026ae9b.js" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav class="vFlexbox">
  <div class="content_1800 flexbox">
    <div class="logo">
      <?php the_custom_logo( $blog_id ); ?>
    </div>

    <i class="fas fa-bars"></i>

    <?php
    wp_nav_menu(
      array(
        'theme_location' => 'menu-1',
        'menu_id'        => '',
        'container'       => false,
        'menu_class'      => 'flexbox navigation',
      )
    );
    ?>

    <div class="assets flexbox">
      <div class="assets__language">
        <select name="language" id="language">
          <option value="english">English</option>
          <option value="russian">Russian</option>
        </select>
      </div>

      <div class="assets__login">
        <img src="/wp-content/themes/jewish/resources/images/svg/login.svg" alt="Login">

        <p><a href="">Login</a></p>
      </div>
    </div>
  </div>
</nav>
