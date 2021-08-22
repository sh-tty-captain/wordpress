<?php
/**
 * Template Name: Внутренние страницы Клиники
 * Template Post Type: page
 * Description: Шаблон для внутренних страниц, с двумя сайдбарами
 */

get_header('fourth');
?>
  <main class="clinic inner-pages">
    <section id="head" class="inner">
      <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail();
      } else { ?>
        <img src="<?php bloginfo('template_directory'); ?>/resources/images/narcology_head.png" alt="<?php the_title(); ?>" />
      <?php } ?>

      <div class="head content flexbox">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

        <ul class="breadcrums">
          <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
        </ul>
      </div>
    </section>

    <section id="entry">
      <section id="narcology" class="centers">
        <div class="content narcology flexbox">
          <div class="narcology__left">
            <ul>
              <?php
              $post -> post_parent;
              $ancestors = get_post_ancestors($post -> ID);
              $root = count($ancestors)-2;
              $parent = $ancestors[$root];

              wp_list_pages(array(
                'depth' => 2,
                'title_li' => '',
                'child_of' => $parent,
              ));

              ?>
            </ul>
          </div>

          <div class="narcology__middle">
            <?php while ( have_posts() ) : the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile; // End of the loop. ?>
          </div>

          <div class="narcology__right">
            <?php echo do_shortcode( '[news col=1 number=3]' ); ?>

            <div id="news">
              <button onclick="location.href = 'news'">Все новости</button>
            </div>
          </div>
        </div>
      </section>
    </section>
  </main>

  <div id="toTop"></div>

<?php
get_footer();
