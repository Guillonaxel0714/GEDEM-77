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

/** 
 * Under Maintenance
 */

// Add options checkbox to Settings / General 
function gedem_settings_general_maintenance()
{
    add_settings_section(
        'my_settings_section', // Section ID 
        'ADDITIONAL SETTINGS', // Section Title
        'my_section_options_callback', // Content Callback
        'general' // Show under "General" settings page
    );
    add_settings_field(
        'maintenance_mode', // Option ID
        'Maintenance mode', // Option Label
        'maintenance_mode_callback', // Callback for Arguments 
        'general', // Show under "General" settings page
        'my_settings_section', // Name of the section
        array( // The $args to pass to the callback
            'maintenance_mode' // Should match Option ID
        )
    );
    register_setting('general', 'maintenance_mode', 'esc_attr');
}
function my_section_options_callback()
{
    // Custom Section Callback content
    echo "Custom theme options";
}
function maintenance_mode_callback($args)
{
    // Checkbox Callback
    $value = get_option($args[0]);
    $checked = ($value == "on") ? "checked" : "";
    echo "<label>
      <input type=\"checkbox\" id=\"$args[0]\" name=\"$args[0]\" $checked />
      <span>Cochez pour activer la page mode maintenance</span>
    </label><p>Une page générale <i>en cours de maintenance</i> s'affichera pour les utilisateurs non administrateurs.</p>";
}
add_action('admin_init', 'gedem_settings_general_maintenance');

// Handle Maintenance page
if (!function_exists('wp_under_maintenance')) :
    function wp_under_maintenance()
    {
        $isLoginPage = basename($_SERVER['PHP_SELF']) == 'wp-login.php';
        $isMaintenanceModeOn = get_option('maintenance_mode') == "on";

        if (
            $isMaintenanceModeOn &&
            !$isLoginPage &&
            !is_user_logged_in() &&
            !is_admin() &&
            !current_user_can("update_plugins")
        ) {
            get_template_part('page-maintenance');
            exit();
        }
    }
endif;
add_action('init', 'wp_under_maintenance', 30);