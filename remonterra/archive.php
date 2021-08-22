<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package remonterra
 */

get_header();
?>

  <main id="primary" class="site-main">
    <?php if ( have_posts() ) : ?>

    <section id="head">
      <div class="head portfolio_head post">
        <div class="content">
          <div class="info">
            <div class="info__header">
              <p class="license"><strong>Строительная лицензия:</strong> АСК СРО ВСК №0003077. Лицензия МЧС №78-Б/00418</p>

              <?php
              the_archive_title( '<h1 class="page-title">', '</h1>' );?>
            </div>

            <div class="info__breadcrumbs">
              <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
            </div>
          </div>
        </div>
      </div>

      <div class="waves">
        <svg width="100%" height="95%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave"><defs></defs><path
              id="feel-the-wave" d=""/></svg>
        <svg width="100%" height="95%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave"><defs></defs><path
              id="feel-the-wave-two" d=""/></svg>
      </div>
    </section>

    <div class="portfolio_page archive">
      <div class="clip">
        <img src="/wp-content/themes/remonterra/resources/images/portfolio/page/wave.svg" alt="Clip">
      </div>

      <div class="portfolio_page__content">
        <div class="portfolio_gallery" id="align">
          <?php
          /* Start the Loop */
          while ( have_posts() ) :
            the_post();

            /*
             * Include the Post-Type-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Type name) and that will be used instead.
             */
            get_template_part( 'template-parts/content', get_post_type() );

          endwhile;

          the_posts_navigation();

          else :

            get_template_part( 'template-parts/content', 'none' );

          endif;
          ?>
        </div>
      </div>
    </div>

    <div class="content_max">
      <?php
      get_sidebar(); ?>
    </div>
  </main><!-- #main -->

<?php
get_footer();
