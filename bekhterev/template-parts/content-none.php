<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bekhterev
 */

?>

  <section id="head">
      <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail();
      } else { ?>
        <img src="<?php bloginfo('template_directory'); ?>/resources/images/narcology_head.png" alt="<?php the_title(); ?>" />
      <?php } ?>

    <div class="head content flexbox">
      <h1 class="page-title"><?php esc_html_e( 'Ничего не найдено', 'bekhterev' ); ?></h1>

      <ul class="breadcrums">
          <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
      </ul>
    </div>
  </section>

  <section id="entry" class="inner-page">
    <div class="content inner">
      <?php
      if ( is_home() && current_user_can( 'publish_posts' ) ) :

          printf(
              '<p>' . wp_kses(
              /* translators: 1: link to WP admin new post page. */
                  __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'bekhterev' ),
                  array(
                      'a' => array(
                          'href' => array(),
                      ),
                  )
              ) . '</p>',
              esc_url( admin_url( 'post-new.php' ) )
          );

      elseif ( is_search() ) :
          ?>

        <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'bekhterev' ); ?></p>
          <?php
          get_search_form();

      else :
          ?>

        <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'bekhterev' ); ?></p>
          <?php
          get_search_form();

      endif;
      ?>
    </div>
  </section>
