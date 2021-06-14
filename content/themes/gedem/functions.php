<?php 

function load_scripts() {
  wp_enqueue_style( 'style.css', get_stylesheet_uri() );  
}

add_action('wp_enqueue_scripts', 'load_scripts' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
function gedemTheme_supports(){
  add_theme_support( 'title-tag' );
}
add_action('after_setup_theme', 'gedemTheme_supports');

// Séparateur dans le titre du site
function gedemTheme_title_separator($title){
  return '|';
}
add_filter('document_title_separator', 'gedemTheme_title_separator');




  