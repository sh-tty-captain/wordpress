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
    <section id="head" class="success_send">
      <div class="head success_head">
        <div class="content">
          <div class="info">
            <div class="info__header">
              <p class="license"><strong>Строительная лицензия:</strong> АСК СРО ВСК №0003077. Лицензия МЧС №78-Б/00418</p>

              <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </div>

            <div class="info__description">
              <?php the_excerpt() ?>
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

    <section id="success">
      <div class="clip">
        <img src="/wp-content/themes/remonterra/resources/images/svg/wave_services.svg" alt="Clip">
      </div>

      <div class="content">
        <h4>Такой страницы не существует.</h4>

        <button onclick="window.location.href='/';">Вернуться на главную страницу?</button>
      </div>

      <div class="waves">
        <div class="waves__wave">
          <img src="/wp-content/themes/remonterra/resources/images/svg/wave_border_main.svg" alt="Wave Border">
        </div>
      </div>
    </section>
  </main>

<?php
get_footer();
