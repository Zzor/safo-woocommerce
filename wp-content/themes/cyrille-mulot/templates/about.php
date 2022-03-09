<?php 
/**
 * Template Name: A propos
 */
get_header(); 
?>

<main class="p-about">
  <h1>
    <?php the_title(); ?>
  </h1>

  <div class="p-about__description">
    <?php the_field('about_description'); ?>
  </div>

  <picture class="p-about__picture">
    <?php $about_photo = get_field('about_photo'); ?>
    <?php if($about_photo) : ?>
      <img src="<?= esc_url($about_photo['url']); ?>" 
           alt="<?= esc_attr($about_photo['alt']); ?>" />
    <?php endif; ?>
  </picture>
</main>

<?php get_footer(); ?>