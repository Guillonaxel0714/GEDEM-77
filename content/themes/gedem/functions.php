<?php 

define('GEDEM_VERSION', '1.0.0');

require get_theme_file_path( 'inc/enqueue-scripts.php' );

require get_theme_file_path( 'inc/theme-setup.php' );

require get_theme_file_path( 'inc/customizer.php' );

require get_theme_file_path( 'inc/editor-setup.php' );


require get_theme_file_path( 'inc/cpt-timeline.php' );

require get_theme_file_path( 'inc/cpt-vice-presidence.php' );

require get_theme_file_path( 'inc/cpt-adherents.php' );

require get_theme_file_path( 'inc/cpt-partenaires.php' );



// Ajout des menus
register_nav_menu('header', 'En tête du menu');




  