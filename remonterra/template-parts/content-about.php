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
    <section class="about_header_section">
      <div class="content hand_section">
        <div class="about flexbox">
          <div class="header_image">
            <img src="/wp-content/themes/remonterra/resources/images/about/hand.png" class="hand">
          </div>
        </div>
      </div>

      <div class="content">
        <div class="about flexbox">
          <div class="header_image">
            <img src="/wp-content/themes/remonterra/resources/images/about/header_1.png" alt="Наша цель">
          </div>

          <div class="about__description">
            <p class="license"><strong>Строительная лицензия:</strong> АСК СРО ВСК №0003077. Лицензия МЧС №78-Б/00418</p>

            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

            <?php the_excerpt() ?>

            <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
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

    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; // End of the loop. ?>
  </main>

<?php
get_footer();
