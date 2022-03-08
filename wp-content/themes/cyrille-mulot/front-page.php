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

    <h1 class="p-home__hero-title">
      Cyrille Mulot <br>
      Photography
    </h1>

    <a href="#link-home-description" class="p-home__hero-scroll-down">
      <img src="<?= THEME_IMG ?>/arrow-down.svg" alt="">
    </a>
  </header>

  <section id="link-home-description" class="p-home__presentation">
    <h2>
      Bienvenue sur le site de Cyrille Mulot Photography!
    </h2>
    
    <div>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam suscipit laboriosam sed ab, eligendi corporis quibusdam voluptate eius commodi, quisquam sapiente temporibus sint sunt esse magnam impedit placeat totam unde.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem at obcaecati, laboriosam cum ipsa modi ipsum voluptatem sint nulla! Et quos voluptatem veniam impedit. Facere ex deleniti quod fuga suscipit.
      </p>
    </div>

    <p class="p-home__presentation-signature">
      Cyrille Mulot
    </p>
  </section>
</main>

<?php get_footer(); ?>