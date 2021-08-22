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
    <section class="offers_section">
      <div class="content">
        <p class="license"><strong>Строительная лицензия:</strong> АСК СРО ВСК №0003077. Лицензия МЧС №78-Б/00418</p>

        <div class="offers_head flexbox">
          <div class="offers_head__header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

            <div class="info__breadcrumbs">
              <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
            </div>
          </div>

          <div class="offers_head__description">
            <ul>
              <?php the_excerpt() ?>
            </ul>
          </div>
        </div>
      </div>

      <div class="offers">
        <div class="content offers_content flexbox owl-carousel">
          <?php
          // запрос
          $wpb_all_query = new WP_Query(array('post_type'=>'offer', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

          <?php if ( $wpb_all_query->have_posts() ) : ?>
            <!-- the loop -->
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile; ?>
            <!-- end of the loop -->

            <?php wp_reset_postdata(); ?>

          <?php else : ?>
            <p><?php _e( 'Sorry, nothing not found.' ); ?></p>
          <?php endif; ?>
        </div>
      </div>

      <div class="waves">
        <svg width="100%" height="95%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave"><defs></defs><path
              id="feel-the-wave" d=""/></svg>
        <svg width="100%" height="95%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave"><defs></defs><path
              id="feel-the-wave-two" d=""/></svg>
      </div>
    </section>
  </main>

<?php
get_footer();
