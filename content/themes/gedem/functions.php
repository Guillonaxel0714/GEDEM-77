<?php 


/* Désactive Gutenberg / utilisation de l'éditeur classique de WP */

add_filter('use_block_editor_for_post', '__return_false');

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
function gedem_register_nav_menus() {
	register_nav_menus(
		[
			'main-nav'    => 'Navigation principale',
			'footer-nav'  => 'Navigation footer',
		]
	);
}
add_action( 'init', 'gedem_register_nav_menus' );

//Pagination page actualités
function gedem_pagination(){

	$pages = paginate_links(['type' => 'array']);
	if ($pages === null){
		return;
	}
	echo '<div id="app" class="content_pagination">';
	echo '<ul class="page">';

	foreach($pages as $page) {
		$active = strpos($page, 'current') !== false;
		$class = 'page__numbers';
		if ($active){
			$class .= ' active__page';
		}
		echo '<li class="' . $class . '">';
		echo $page;
		echo '</li>';
	}
	echo '</ul>';
	echo '</div>';
}



  