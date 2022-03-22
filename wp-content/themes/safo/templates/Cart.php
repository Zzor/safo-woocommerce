<?php
  /*
  Template Name: Panier
  */
?>

<?php get_header('shop'); ?>

<main class="t-cart">
  <div class="t-cart__inner">
    <?= do_shortcode('[woocommerce_cart]') ?>
  </div>
</main>

<?php get_footer(); ?>