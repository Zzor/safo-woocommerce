<?php 
/**
 * Register Menus
 */
function cyrilleMulotMenus() {
  register_nav_menus(
    [
      'principal-nav' => __('Menu principal'),
    ]
  );
}
add_action('after_setup_theme', 'cyrilleMulotMenus');