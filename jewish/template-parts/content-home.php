<?php
/**
 * The template for displaying Main Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jewish
 */

get_header();
?>

  <main>
    <section id="head" class="main">
      <div class="image">
        <div class="overlay"></div>

        <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail();
        } else { ?>
          <img src="<?php bloginfo('template_directory'); ?>/resources/images/header/sample.png" alt="<?php the_title();
          ?>" />
        <?php } ?>
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
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // End of the loop. ?>
    </section>
  </main>

<?php
get_footer();
