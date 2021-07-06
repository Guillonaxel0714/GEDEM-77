<?php
/**
 * Manage Customizer's GEDEM footer
 *
 * 
 */

 function gedem_customize_register_section_footer( $wp_customize, $panel_id ){
    $section_id = $panel_id . '_footer';

	// nouvelle section du Customizer
	$wp_customize->add_section(
		$section_id,
		[
			'panel'       => $panel_id,
			'title'       => 'Pied de page', // Footer
		]
	);

    $uploaddir = wp_upload_dir();

    $defaultnavlogo = $uploaddir['url'] . '/GEDEM_logo.png';

	$wp_customize->add_setting(
		$section_id . '_logo',
		[
			'default' => $defaultnavlogo,
		]
	);

    $wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			$section_id . '_logo',
			[
				'label'       => 'Télécharger un logo', // Upload a logo
				'section'     => $section_id,
				'settings'    => $section_id . '_logo',
				'input_attrs' => [
					'class'   => 'logo',
				],
			]
		)
	);

    	// Adresse du footer : rue
	$wp_customize->add_setting(
		$section_id . '_contact_address1',
		[
			'default' => 'Rue du Tertre de Cherisy',
		]
	);

	$wp_customize->add_control(
		$section_id . '_contact_address1',
		[
			'section' => $section_id,
			'type'    => 'text',
			'label'   => 'Adresse postale : Rue', // Postal address: Street
		]
	);

    	// Numéros de téléphone du footer
	$wp_customize->add_setting(
		$section_id . '_contact_phone_number',
		[
			'default' => '01 64 83 58 60',
		]
	);

	$wp_customize->add_control(
		$section_id . '_contact_phone_number',
		[
			'section' => $section_id,
			'type'    => 'text',
			'label'   => 'Téléphone fixe', // Phone number
		]
	);
 }