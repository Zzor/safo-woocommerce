<?php 
/**
 * Load Scripts
 */

function loadAssets() {
    wp_deregister_script('jquery');

    // Enlever le chargements des styles css de Gutenberg
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');

    wp_enqueue_style(
        'cyrilleMulot',
        get_template_directory_uri() . '/assets/dist/main.css',
        [],
        time()
    );

    wp_register_script(
        'jquery',
        'https://code.jquery.com/jquery-3.6.0.min.js',
        false,
        '3.5.1',
        true
    );

    wp_enqueue_script(
        'cyrilleMulot',
        get_template_directory_uri() . '/assets/dist/main.js',
        ['jquery'],
        '1.7',
        true
    );
}
add_action('wp_enqueue_scripts', 'loadAssets');