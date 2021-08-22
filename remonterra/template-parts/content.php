<div class="portfolio_gallery__work">
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
