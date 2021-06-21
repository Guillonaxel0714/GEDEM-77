<?php
/**
 * Theme configuration
 *
 *
 */

//Ajout des themes supports
function gedem_supports(){
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'menus' );
  add_theme_support( 'custom-logo',
    [
      // flexibilité totale si aucune taille spécifiée.
      'height'      => null,
      'width'       => null, 
      'flex-height' => true,
      'flex-width'  => true,
    ]
  );
}
add_action( 'after_setup_theme', 'gedem_supports' );


// Séparateur dans le titre du site
function gedemTheme_title_separator($title){
  return '|';
}
add_filter( 'document_title_separator', 'gedemTheme_title_separator' );


// Data validation of ACF editor fields
function gedem_acf_format_value( $value, $post_id, $field ) {
	return esc_attr( $value );
}
add_filter('acf/format_value/type=editor', 'gedem_acf_format_value', 10, 3);