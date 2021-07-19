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

    wp_enqueue_style(
        'fa-css',
        "https://unpkg.com/aos@2.3.1/dist/aos.css",
    );

    wp_enqueue_script(
        'gedem_script',
        get_theme_file_uri( 'app/js/index.js'),
        [],
        false,
        true,
    );  

    wp_enqueue_script(
        'type_writer',
        "https://unpkg.com/typewriter-effect@latest/dist/core.js",
    );

    wp_enqueue_script(
        'lottie',
        "https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js",
    );

    wp_enqueue_script(
        'hammer_js',
        "https://hammerjs.github.io/dist/hammer.js",
    );

    wp_enqueue_script(
        'AOS',
        "https://unpkg.com/aos@2.3.1/dist/aos.js"
    );

    wp_enqueue_script(
        'leaflet',
        "https://maps.googleapis.com/maps/api/js?key=AIzaSyD6OyW5Nr-iIS6YMIovgPdClI132uDHIZ4"
    );

    wp_enqueue_script(
        'smooth_scroll_behavior_ios',
        "https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"
    );
}
add_action('wp_enqueue_scripts', 'load_scripts' );