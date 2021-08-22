<?php
/**
 * Template Name: Общий шаблон страниц

 * Description: Общий шаблон для отображения основных страниц
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php IF ((!is_front_page() && !is_home() && !is_page('106'))) { ?>
    <section id="head">
        <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail();
        } else { ?>
          <img src="<?php bloginfo('template_directory'); ?>/resources/images/narcology_head.png" alt="<?php the_title(); ?>" />
        <?php } ?>

      <div class="head content vFlexbox">
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

        <div class="description">
            <?php
            $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');
            if ($children) { ?>
              <ul class="navigation inner page">
                  <?php echo $children; ?>
              </ul>
            <?php } ?>
        </div>

        <ul class="breadcrums">
            <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
        </ul>
      </div>
    </section>
    <?php } ?>

	<section id="entry" class="inner-page">
		<?php
		the_content();
		?>
	</section><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
