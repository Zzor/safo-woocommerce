<?php 
/**
 * Show cart contents / total Ajax
 */
add_filter('woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');

function woocommerce_header_add_to_cart_fragment($fragments) {
	global $woocommerce;

	ob_start();
?>
	<a class="cart-customlocation" 
      href="<?= esc_url(wc_get_cart_url()); ?>" 
      title="<?php _e('Voir le panier', 'woothemes'); ?>">
      <?= sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), 
          $woocommerce->cart->cart_contents_count);?> – <?= $woocommerce->cart->get_cart_total(); ?>
  </a>

<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}