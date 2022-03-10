<?php 
/**
 * Template Name: A propos
 */
get_header(); 
?>

<main class="p-about">
  <div class="p-about__description">
    <?php the_field('about_description'); ?>
  </div>
</main>

<?php get_footer(); ?>