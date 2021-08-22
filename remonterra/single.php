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

  <main class="portfolio_main">
    <section id="head">
      <div class="head portfolio_head post">
        <div class="content">
          <div class="info">
            <div class="info__header">
              <p class="license"><strong>Строительная лицензия:</strong> АСК СРО ВСК №0003077. Лицензия МЧС №78-Б/00418</p>
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

    <div class="portfolio_page">
      <div class="clip">
        <img src="/wp-content/themes/remonterra/resources/images/portfolio/page/wave.svg" alt="Clip">
      </div>

      <div class="portfolio_page__content">
        <?php while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; // End of the loop. ?>
      </div>
    </div>
  </main>

<?php
get_footer();
