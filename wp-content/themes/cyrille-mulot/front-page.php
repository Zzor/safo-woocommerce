<?php get_header(); ?>

<main class="p-home">
  <header class="p-home__hero">
    <picture class="p-home__hero-picture">
      <?php $home_hero_image = get_field('home_hero_image'); ?>
      <?php if($home_hero_image) : ?>
        <img src="<?= esc_url($home_hero_image['url']); ?>" 
            alt="<?= esc_attr($home_hero_image['alt']); ?>" />
      <?php endif; ?>
    </picture>

    <div class="p-home__hero-title-wrapper">
      <h1 class="p-home__hero-title">
        <?php the_field('home_hero_title'); ?>
      </h1>

      <p class="p-home__hero-subtitle">
        <?php the_field('home_hero_subtitle'); ?>
      </p>
    </div>

    

    <a href="#link-home-description" class="c-button-square is-colored p-home__hero-scroll-down">
      <img src="<?= THEME_IMG ?>/arrow-down.svg" alt="">
    </a>
  </header>

  <section id="link-home-description" class="p-home__presentation">
    <h2>
      <?php the_field('home_presentation_title'); ?>  
    </h2>
    
    <div>
      <?php the_field('home_presentation_description'); ?>
    </div>

    <p class="p-home__presentation-signature">
      <?php the_field('home_presentation_signature'); ?>
    </p>
  </section>
</main>

<?php get_footer(); ?>