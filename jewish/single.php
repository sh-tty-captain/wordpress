<?php
/**
 * The Tours template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jewish
 */

get_header();
?>

  <main>
    <section id="head" class="articles_head">
      <div class="image">
        <div class="overlay"></div>
        <img src="<?php bloginfo('template_directory'); ?>/resources/images/header/sample.png" alt="<?php the_title();
        ?>" />
      </div>

      <div class="content_1800 vFlexbox">
        <div class="search flexbox">
          <div class="search__category flexbox">
            <p>Any Category</p>

            <div class="image category_">
              <img src="/wp-content/themes/jewish/resources/images/svg/menu.svg" alt="Open menu">
            </div>

            <ul class="category">
              <li><a href="/">Item Category</a></li>

              <li><a href="/">Item Category</a></li>

              <li><a href="/">Item Category</a></li>

              <li><a href="/">Item Category</a></li>

              <li><a href="/">Item Category</a></li>
            </ul>
          </div>

          <div class="search__form">
            <div class="image">
              <img src="/wp-content/themes/jewish/resources/images/svg/search.svg" alt="Search">
            </div>

            <?php get_search_form(); ?>
          </div>
        </div>

        <div class="info">
          <div class="info__header">
            <h1><?php single_post_title() ?></h1>
          </div>

          <div class="info__description">
            <?php
            the_post_navigation(
              array(
                'prev_text' => '<span class="nav-title">%title</span>',
                'next_text' => '<span class="nav-title">%title</span>',
              )
            );
            ?>
          </div>
        </div>

        <div class="breadcrumbs">
          <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
        </div>
      </div>
    </section>

    <div class="content articles_inner">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // End of the loop. ?>
    </div>

  </main><!-- #main -->

<?php
get_footer();
