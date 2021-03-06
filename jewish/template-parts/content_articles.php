<?php
/**
 * The main template file
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
    <section id="head">
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
            $text = apply_filters('the_excerpt', get_post_field('post_excerpt', 8));
            echo $text; ?>
          </div>
        </div>

        <div class="breadcrumbs">
          <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
        </div>
      </div>
    </section>

    <div class="content flexbox">
      <div class="articles">
        <?php
        // ????????????
        $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

        <?php if ( $wpb_all_query->have_posts() ) : ?>
          <!-- the loop -->
          <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
            <?php

            $classes = array(
              'portfolio_gallery__work',
              'filter_isotope__block',
            );
            ?>

            <div <?php post_class( $classes ); ?>>
              <a class="modal" href="<?php echo get_permalink(); ?>">
                  <span class="image">
                    <?php the_post_thumbnail();?>
                  </span>

                <span class="description">
                    <?php the_title( '<h2>', '</h2>' ); ?>

                    <p><?php the_excerpt() ?></p>

                    <p class="more">??????????????????</p>
                  </span>
              </a>
            </div>
          <?php endwhile; ?>
          <!-- end of the loop -->

          <?php wp_reset_postdata(); ?>

        <?php else : ?>
          <p><?php _e( '????????????????, ?????? ??????????????, ?????????????????????????????? ???????????? ??????????????.' ); ?></p>
        <?php endif; ?>
      </div>

      <div class="sidebar">
        <? get_sidebar(); ?>
      </div>
    </div>

  </main><!-- #main -->

<?php

get_footer();
