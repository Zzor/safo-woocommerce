<article class="c-card-post fx-reveal">
  <header class="c-card-post__header">
    <a href="<?php the_permalink(); ?>" 
      class="c-card-post__image-wrapper">
      <div class="text-for-seo">
        Image
      </div>
      <?php the_post_thumbnail(); ?>
    </a>
  </header>

  <a href="<?php the_permalink(); ?>"
    class="c-card-post__content">

    <h2 class="c-card-post__title">
      <?php the_title(); ?>
    </h2>

    <div class="c-card-post__excerpt">
      <?php the_excerpt(); ?>
    </div>

    <div class="c-card-post__author">
      par <?php the_author(); ?>
    </div>

    <?php get_template_part('template-parts/reading-time-estimate'); ?>

    <div class="c-card-post__cta">
      <div class="c-button-square is-light">
        Lire l'article
      </div>
    </div>

    
  </a>
</article>