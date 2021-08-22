<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bekhterev
 */

?>

<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bekhterev
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <section id="head">
      <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail();
      } else { ?>
        <img src="<?php bloginfo('template_directory'); ?>/resources/images/narcology_head.png" alt="<?php the_title(); ?>" />
      <?php } ?>

    <div class="head content flexbox">
        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

        <?php if ( 'post' === get_post_type() ) : ?>
      <div class="entry-meta">
          <?php
          bekhterev_posted_on();
          bekhterev_posted_by();
          ?>
      </div><!-- .entry-meta -->

      <ul class="breadcrums">
          <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
      </ul>
    </div>
  </section>

  <section id="entry" class="inner-page">
    <div class="content inner">
      <div class="entry-summary">
          <?php the_excerpt(); ?>
      </div><!-- .entry-summary -->

      <footer class="entry-footer">
          <?php bekhterev_entry_footer(); ?>
      </footer><!-- .entry-footer -->
    </div>
  </section>
</article><!-- #post-<?php the_ID(); ?> -->
