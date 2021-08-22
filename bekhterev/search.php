<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Bekhterev
 */

get_header();
?>
  <main class="clinic">
    <section id="head">
        <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail();
        } else { ?>
          <img src="<?php bloginfo('template_directory'); ?>/resources/images/narcology_head.png" alt="<?php the_title(); ?>" />
        <?php } ?>

      <div class="head content flexbox">
        <h1>Поиск по: "<?php echo $_GET['s'];?>"</h1>

        <ul class="breadcrums">
            <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
        </ul>
      </div>
    </section>

    <section id="entry" class="inner-page">
      <div class="content inner">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
              <?php the_content(''); ?>
          <?php endwhile; else: ?>
            <p>Поиск не дал результатов.</p>
          <?php endif;?>
      </div>
    </section>
  </main>

  <div id="toTop"></div>

<?php
get_footer();
