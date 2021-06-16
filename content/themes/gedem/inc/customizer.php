<?php
/**
 * Configure Customizer
 *
 * 
 */

require get_theme_file_path( 'inc/customizer/section-logos-theme.php' );

function gedem_customize_register( $wp_customize ) {
	$panel_id = 'gedem';

	// ajoute un nouveau panel au customizer
	$wp_customize->add_panel(
		$panel_id,
		[
			'title'       => 'GEDEM',
			'description' => 'Configuration du thème GEDEM',
			'priority'    => 1,
		]
	);

	gedem_customize_register_section_logos_theme( $wp_customize, $panel_id );

}
add_action( 'customize_register', 'gedem_customize_register' );