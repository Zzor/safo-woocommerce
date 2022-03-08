<?php 
defined('ABSPATH') or die('');

function cyrilleMulot() {
 add_theme_support('title-tag');   
 add_theme_support('post-thumbnails');   
 add_theme_support('menus');   
 add_theme_support('html5');
 add_theme_support('woocommerce');
 //add_theme_support('wc-product-gallery-zoom');
 add_theme_support('wc-product-gallery-lightbox');
 add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'cyrilleMulot');
