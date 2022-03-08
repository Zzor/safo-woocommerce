<?php get_header(); ?>

<main class="p-home">
  <header class="p-home__hero">
    <picture class="p-home__hero-picture">
      <?php $home_hero_image = get_field('home_hero_image'); ?>
      <?php if($home_hero_image) : ?>
        <img src="<?= esc_url($home_hero_image['url']); ?>" 
            alt="<?= esc_attr($home_hero_image['alt']); ?>" />
      <?php endif; ?>
    </pictu>
  </header>
</main>

<?php get_footer(); ?>