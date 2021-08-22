<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bekhterev
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bekhterev' ); ?></a>

  <section id="header" class="header">
    <div class="header__top">
      <div class="flexbox content">
        <?php get_search_form(); ?>

        <div class="language flexbox">
          <a href="#" class="active">RU</a> | <a href="en">EN</a>
        </div>
      </div>
    </div>

    <div class="header__info">
      <div class="content flexbox vertical-align">
        <div class="logo flexbox flex-start align-middle no-wrap">
          <?php
          the_custom_logo();
          if ( is_front_page() && is_home() ) :
            ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a>
          <?php
          else :
            ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a>
          <?php endif; ?>

          <div class="info">
            <h3>Национальный медицинский исследовательский центр психиатрии и неврологии им. В.М. Бехтерева</h3>

            <p class="location">192019, Санкт-Петербург, ул.Бехтерева, 3</p>
          </div>
        </div>

        <div class="contacts vFlexbox justify-center align-end">
          <p class="phone"><a href="tel:+78126700220">+7 (812) 670-02-20</a></p>

          <p class="time">Пн-пт: 09.00 – 19.00</p>

          <p class="email"><a href="mailto:sms-cons@bekhterev.ru">sms-cons@bekhterev.ru</a></p>
        </div>
      </div>
    </div>
  </section>

  <header>
    <div class="flexbox content section align-middle vertical-align">
      <nav class="flexbox no-wrap align-middle">
        <?php
        the_custom_logo();
        if ( is_front_page() && is_home() ) :
          ?>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a>
        <?php
        else :
          ?>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a>
        <?php endif; ?>

        <?php
        wp_nav_menu(
          array(
            'container' => 'false',
            'theme_location' => 'main',
            'menu_class'     => 'navigation flexbox vertical-align',
            'walker' => new submenu_wrap
          )
        );
        ?>
      </nav>

      <a href="#" class="eye"><img src="/wp-content/themes/bekhterev/resources/images/svg/eye.svg" alt="Версия для
      слабовидящих"></a>
      <a href="#0" class="nav-trigger hidden">Menu<span></span></a>
    </div>

    <div class="nav-bottom full">
      <div class="content">
        <ul class="navigation flexbox vertical-align inner">
          <?php
          $post -> post_parent;
          $ancestors = get_post_ancestors($post -> ID);
          $root = count($ancestors)-2;
          $parent = $ancestors[$root];

          wp_list_pages(array(
            'depth' => 1,
            'title_li' => '',
            'child_of' => $parent,
          ));

          ?>
        </ul>
      </div>
    </div>
</div>
</header>
