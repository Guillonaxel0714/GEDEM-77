<?php
/**
 * Customizing the WordPress login form
 *
 * 
 */

// Remove comments menu item in back-office
function remove_gedem_menu_item() {
	remove_menu_page( 'edit-comments.php' );
	remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}
add_action( 'admin_menu', 'remove_gedem_menu_item' );

// Removes comments from admin bar
function gedem_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu( 'comments' );
}
add_action( 'wp_before_admin_bar_render', 'gedem_admin_bar_render' );

// Remove Contact Form 7 Links from dashboard menu items if not admin
if ( !( current_user_can( 'administrator' ) ) ) {
	function remove_wpcf7() {
	    remove_menu_page( 'wpcf7' ); 
	}
	add_action('admin_menu', 'remove_wpcf7');
}