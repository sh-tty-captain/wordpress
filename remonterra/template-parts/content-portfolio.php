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
      <div class="head portfolio_head">
        <div class="content">
          <div class="info">
            <div class="info__header">
              <p class="license"><strong>Строительная лицензия:</strong> АСК СРО ВСК №0003077. Лицензия МЧС №78-Б/00418</p>

              <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </div>

            <div class="info__description">
              <div class="portfolio_filter">
                <ul id="filters" class="flexbox">
                  <?php the_excerpt() ?>
                </ul>
              </div>
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
        <div class="portfolio_gallery filter_isotope" id="align">
          <?php
          // запрос
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

                    <p class="more">Подробнее</p>
                  </span>
                </a>
              </div>
            <?php endwhile; ?>
            <!-- end of the loop -->

            <?php wp_reset_postdata(); ?>

          <?php else : ?>
            <p><?php _e( 'Извините, нет записей, соответствуюших Вашему запросу.' ); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </main>

<?php
get_footer();
