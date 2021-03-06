<?php 
defined('ABSPATH') or die('');

function safo() {
 add_theme_support('title-tag');   
 add_theme_support('post-thumbnails');   
 add_theme_support('menus');   
 add_theme_support('html5');
 add_theme_support('woocommerce');
 add_theme_support('wc-product-gallery-zoom');
 add_theme_support('wc-product-gallery-lightbox');
 add_theme_support('wc-product-gallery-slider');

 add_image_size('image_about_small', 159, 215, true);
 add_image_size('image_about_big', 335, 446, true);
}
add_action('after_setup_theme', 'safo');
