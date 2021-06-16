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
}
add_action( 'after_setup_theme', 'gedem_supports' );


// Séparateur dans le titre du site
function gedemTheme_title_separator($title){
  return '|';
}
add_filter( 'document_title_separator', 'gedemTheme_title_separator' );