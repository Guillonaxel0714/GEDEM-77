<?php
/**
 * Manage Customizer's Go Up Events logos
 *
 * 
 */

function gedem_customize_register_section_logos_theme( $wp_customize, $panel_id ) {

	$section_id = $panel_id . '_logo';

	// nouvelle section du Customizer.
	$wp_customize->add_section(
		$section_id,
		[
			'panel' => $panel_id,
			'title' =>  'Logos GEDEM',
		]
	);

	$uploaddir = wp_upload_dir();

    $defaultnavlogo = $uploaddir['url'] . '/GEDEM_logo.png';

	$wp_customize->add_setting(
		$section_id . '_nav-menu',
		[
			'default' => $defaultnavlogo,
		]
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			$section_id . '_nav-menu',
			[
				'label'       => 'Logo du menu de navigation', 
				'section'     => $section_id,
				'settings'    => $section_id . '_nav-menu',
				'input_attrs' => [
				    'class'   => 'nav-logo',
				],
			]
		)
	);

}