<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bekhterev
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <main class="clinic">
    <section id="head">
        <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail();
        } else { ?>
          <img src="<?php bloginfo('template_directory'); ?>/resources/images/narcology_head.png" alt="<?php the_title(); ?>" />
        <?php } ?>

      <div class="head content flexbox">
          <?php
          if ( is_singular() ) :
              the_title( '<h1 class="entry-title">', '</h1>' );
          else :
              the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
          endif;

          if ( 'post' === get_post_type() ) :
              ?>
            <div class="entry-meta">
                <?php
                bekhterev_posted_on();
                bekhterev_posted_by();
                ?>
            </div><!-- .entry-meta -->
          <?php endif; ?>

        <ul class="breadcrums">
            <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
        </ul>
      </div>
    </section>

    <section id="entry" class="inner-page">
        <?php
        the_content(
            sprintf(
                wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bekhterev' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                wp_kses_post( get_the_title() )
            )
        );

        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bekhterev' ),
                'after'  => '</div>',
            )
        );
        ?>
    </section>
  </main>

  <div id="toTop"></div>
</article><!-- #post-<?php the_ID(); ?> -->

<?php
get_footer();


