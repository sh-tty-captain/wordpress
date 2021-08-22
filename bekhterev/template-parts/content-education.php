<?php
/**
 */

get_header('second');
?>
    <main class="education">
        <section id="entry">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; // End of the loop. ?>
        </section>
    </main>

    <div id="toTop"></div>
<?php
get_footer();
