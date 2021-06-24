<?php
/**
 * Add theme styles and scripts
 *
 *
 */

function load_scripts() {

    wp_enqueue_style(
        'gedem_style', 
        get_theme_file_uri( 'app/css/styles.css' ),
        [],
        GEDEM_VERSION
    );  

    wp_enqueue_style(
        'load-fa',
        'https://use.fontawesome.com/releases/v5.5.0/css/all.css',
    );

    wp_enqueue_script(
        'gedem_script',
        get_theme_file_uri( 'app/js/index.js'),
        [],
        false,
        true,
        
    );  
}
add_action('wp_enqueue_scripts', 'load_scripts' );