<?php
  /*
  Template Name: Panier
  */
?>

<?php get_header(); ?>

<main class="t-cart">
  <div class="t-cart__inner">
  <?php get_template_part('template-parts/cupon-ticket'); ?>
    <?= do_shortcode('[woocommerce_cart]') ?>
  </div>
</main>

<?php get_footer('woocommerce'); ?>