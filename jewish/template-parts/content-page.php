<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jewish
 */

?>

<main>
  <section id="head">
    <div class="content_1800">
      <div class="search">
        <div class="search__category">
          <p>Any Category</p>

          <img src="/wp-content/themes/jewish/resources/images//svg/menu.svg" alt="Open menu">
        </div>

        <div class="search__form">
          <img src="/wp-content/themes/jewish/resources/images/svg/search.svg" alt="Search">
        </div>
      </div>

      <div class="info">
        <div class="info__header">
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </div>

        <div class="info__description">
          <?php the_excerpt() ?>
        </div>
      </div>

      <div class="breadcrumbs">
        <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
      </div>
    </div>
  </section>

  <section id="content">
    <div class="content">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // End of the loop. ?>
    </div>
  </section>
</main>
