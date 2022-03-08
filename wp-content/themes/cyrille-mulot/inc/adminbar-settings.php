<?php
// Remove links from Admin Bar
function remove_adminbar_links($wp_admin_bar) {
	$wp_admin_bar->remove_node('wp-logo');
	//$wp_admin_bar->remove_node('comments');
	$wp_admin_bar->remove_node('new-content');
	// $wp_admin_bar->remove_node('updates');
	// $wp_admin_bar->remove_node('customize');
	// $wp_admin_bar->remove_node('wpseo-menu');
	// $wp_admin_bar->remove_node('search');
	// $wp_admin_bar->remove_node('edit');
	// $wp_admin_bar->remove_node('archive');
}
add_action( 'admin_bar_menu', 'remove_adminbar_links', 999 );

// Modifier les crédits dans l'administration
function wpm_admin_footer () {
	echo "2022 | Programado por Hugo Salazar-Cardozo";
}
add_filter('admin_footer_text', 'wpm_admin_footer');