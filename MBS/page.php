<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MBS
 */

get_header();
?>

  <main class="inner">
    <section id="head">
      <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail();
      } else { ?>
        <img src="<?php bloginfo('template_directory'); ?>/resources/images/header.png" alt="<?php the_title(); ?>" />
      <?php } ?>

      <div class="content_max">
        <div class="head flexbox">

          <div class="head__info">
            <div class="description">
              <?php the_excerpt() ?>
            </div>

            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
          </div>
        </div>
      </div>
    </section>

    <section id="entry">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // End of the loop. ?>
    </section>
  </main>

<?php
get_footer();
