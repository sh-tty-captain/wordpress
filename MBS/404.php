<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package MBS
 */

get_header();
?>

  <main class="inner">
    <section id="head" class="full">
      <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail();
      } else { ?>
        <img src="<?php bloginfo('template_directory'); ?>/resources/images/header.png" alt="<?php the_title(); ?>" />
      <?php } ?>

      <div class="content_max">
        <div class="head flexbox">
          <div class="head__info">
            <div class="description">
              <?php the_excerpt() ?>
            </div>

            <h1 class="entry-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'mbs' ); ?></h1>
          </div>
        </div>
      </div>
    </section>

    <section id="entry">
      <div class="content_max">
        <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'mbs' ); ?></p>

        <?php
        get_search_form();
        ?>
      </div>
    </section>
  </main>

<?php
get_footer();
