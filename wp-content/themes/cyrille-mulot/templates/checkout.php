<?php
  /*
  Template Name: Paiement
  */
?>

<?php get_header('shop'); ?>

<main class="t-cart">
  <div class="t-cart__inner">
    <?= do_shortcode('[woocommerce_checkout]') ?>
  </div>
</main>

<?php get_footer(); ?>