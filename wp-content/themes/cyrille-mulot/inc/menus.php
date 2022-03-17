<?php 
/**
 * Register Menus
 */
function safoMenus() {
  register_nav_menus(
    [
      'principal-nav' => __('Menu principal'),
      'languages-nav' => __('Menu Langues'),
      'infos-nav' => __('Menu Infos'),
    ]
  );
}
add_action('after_setup_theme', 'safoMenus');