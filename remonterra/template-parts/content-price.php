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
  <section id="head">
    <div class="head portfolio_head price_head">
      <div class="content">
        <div class="info">
          <div class="info__header">
            <p class="license"><strong>Строительная лицензия:</strong> АСК СРО ВСК №0003077. Лицензия МЧС №78-Б/00418</p>

            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
          </div>

          <div class="info__description">
            <div class="portfolio_filter price_filter">
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

  <section class="price_section" id="price">
    <div class="clip">
      <img src="/wp-content/themes/remonterra/resources/images/svg/wave_services.svg" alt="Clip">
    </div>

    <div class="content">
      <div class="table filter_isotope">
        <?php while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; // End of the loop. ?>
      </div>
    </div>
  </section>

  <script>
    $('table tbody').each(function (idx, v) {
      $(v).children('tr:first-child:last-child').addClass('category_section');
      $(v).children('tr:first-child:not(.category_section)').addClass('spoiler__title');

      $('tr.category_section').parents('table').addClass('category');

      console.log($(v).html());

      $(v).children('tr:not(:first-child)').wrapAll("<tr class='spoiler__content'><td><table>");
      console.log($(v).html());
    });
  </script>

  <script>
    let sp_content = $('.spoiler__content'),
      sp_title = $('.spoiler__title');

    sp_content.hide();

    sp_title.on('click', function () {
      let inx = $('.spoiler__title').index(this);
      $(sp_content[inx]).slideToggle(100)
    });

    $('.spoiler__title').click(function () {
      $(this).toggleClass('active');
    });

    $('table').click(function () {
      $(this).toggleClass('active');
    });

    $('.filter_isotope__block').click(function () {
      $(this).toggleClass('active');
    });
  </script>

  <?php
  get_footer();
  ?>

</main>
