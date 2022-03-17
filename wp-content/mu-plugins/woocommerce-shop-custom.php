<?php 
/**
 * Plugin Name: Woocommercve Shop Custom
 * Plugin URI: https://hugo-salazar.com
 * Description: Personalización de la tienda
 * Version: 1.0.0
 * Author: Hugo Salazar-Cardozo
 * Author URI: https://hugo-salazar.com
 * License: GPL 2+
 * License URI: https://hugo-salazar.com
 */

 /*-------------------------------------------------------
  * Elimina los Block Styles Css para mejorar la velocidad de carga
  *-------------------------------------------------------*/
  add_action( 'wp_enqueue_scripts', 'loveRadius_disable_woocommerce_block_styles');
  function loveRadius_disable_woocommerce_block_styles() {
    wp_dequeue_style('wc-blocks-style');
  }

/*-------------------------------------------------------
 * Personalización de la página de tienda
 *-------------------------------------------------------*/
add_action('after_setup_theme', 'safo_custom_shop_woocommmerce');
function safo_custom_shop_woocommmerce() {
  remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
  remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
  remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
  remove_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description', 10 );
  remove_action( 'woocommerce_before_shop_loop', 'wc_print_notices', 10 );
  remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
  remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
  remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );
  remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
}

/*-------------------------------------------------------
 * Change le bouton "ajouter au panier" par "Voir le produit"
 *-------------------------------------------------------*/
function esl_replace_loop_add_to_cart_button($button, $product) {
  $button_text = __("voir produit", "woocommerce");

  return '<a href="' . $product->get_permalink() . '">' . $button_text . '</a>';
}
add_filter('woocommerce_loop_add_to_cart_link', 'esl_replace_loop_add_to_cart_button', 10, 2);

/*-------------------------------------------------------
 * Elimine l'étiquette de la promo par défault
 *-------------------------------------------------------*/
  add_filter('woocommerce_sale_flash', 'woo_custom_hide_sales_flash');
  function woo_custom_hide_sales_flash() {
    return false;
  }

  /*-------------------------------------------------------
   * Calcule le pourcentage d'économie et l'affiche dans la boucle
  /*-------------------------------------------------------*/
  add_action('woocommerce_after_shop_loop_item_title', 'safo_agrega_porcentaje_ahorro_loop', 10);
  function safo_agrega_porcentaje_ahorro_loop() {
    global $product;
    if(!$product->is_on_sale()) {
      return;
    }

    if($product->is_type('simple')) {
      $max_percentage = (($product->get_regular_price() - $product->get_sale_price()) / $product->get_regular_price()) * 100;
    } elseif($product->is_type('variable')) {
      $max_percentage = 0;
      foreach($product->get_children() as $child_id) {
        $variation = wc_get_product($child_id);
        $price = $variation->get_regular_price();
        $sale = $variation->get_sale_price();

        if($price !=0 & !empty($sale)) {
          $percentage = ($price - $sale) / $price * 100;
        }

        if($percentage > $max_percentage) {
          $max_percentage = $percentage;
        }
      }
    }

    if($max_percentage > 0) {
      echo "<div class='l-woocomerce-sale'>";
        echo "<div class='l-woocomerce-sale__percent'>-" . round($max_percentage) . "%</div>";
      echo "</div>";
    } 
  }