<?php
/**
 */

get_header('second');
?>
    <main class="education about-main">
        <section id="head" class="about">
            <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } else { ?>
                <img src="<?php bloginfo('template_directory'); ?>/resources/images/about_head.png" alt="<?php the_title(); ?>" />
            <?php } ?>

            <div class="head content">
                <h1>О центре имени В.М. Бехтерева</h1>

                <div class="description">
                    <p><strong>Полное наименование:</strong> Федеральное Государственное Бюджетное Учреждение "Национальный медицинский
                        исследовательский центр психиатрии и неврологии им. В.М. Бехтерева" Министерства здравоохранения Российской Федерации.</p>

                    <p><strong>Адрес института:</strong> 192019, Россия, Санкт-Петербург, ул. Бехтерева 3.</p>

                    <p><strong>Лицензия на осуществление медицинской деятельности:</strong> ФС-78-01-003-105</p>
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
