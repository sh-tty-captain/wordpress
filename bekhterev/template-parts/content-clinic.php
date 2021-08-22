<?php
/**

 */

get_header();
?>
<main class="clinic">
    <section id="head" class="about">
        <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail();
        } else { ?>
          <img src="<?php bloginfo('template_directory'); ?>/resources/images/narcology_head.png" alt="<?php the_title(); ?>" />
        <?php } ?>
      
        <div class="head content flexbox">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

            <div class="description ul flexbox">
                <?php
                wp_nav_menu(
                    array(
                        'container' => 'false',
                        'theme_location' => 'clinic_1'
                    )
                );
                ?>

                <?php
                wp_nav_menu(
                    array(
                        'container' => 'false',
                        'theme_location' => 'clinic_2'
                    )
                );
                ?>
            </div>

            <ul class="breadcrums">
                <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
            </ul>
        </div>
    </section>

    <section id="entry">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; // End of the loop. ?>
    </section>
</main>

  <div id="toTop"></div>

<?php
get_footer();
