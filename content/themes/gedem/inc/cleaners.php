  
<?php
/**
 * Cleaners
 * Fonction qui supprime les traitements réalisés par WP par défaut
 *
 *
 */

function gedem_wordpress_cleaner() {
    // remove wordpress version
    remove_action( 'wp_head', 'wp_generator' );
    // remove wp emoji
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    // remove wlwmanifest.xml (needed to support windows live writer)
    remove_action( 'wp_head', 'wlwmanifest_link' );
    // remove really simple discovery link
    remove_action( 'wp_head', 'rsd_link' );
    // removes all extra rss feed links
    remove_action( 'wp_head', 'feed_links_extra', 3 );
    // remove rss feed links
    remove_action( 'wp_head', 'feed_links', 2 );
}
add_action( 'after_setup_theme', 'gedem_wordpress_cleaner' );