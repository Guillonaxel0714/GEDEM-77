<?php 
/**
 * 
 * GEDEM77 adhérents Custom Post Type
 * 
 */

function gedem_adherents_register_post_type(){
   	$post_type_adherents_labels = [
		'name'               => 'Les adhérents',
		'singular_name'      => 'Les adhérents',
		'add_new'            => 'Ajouter',
		'add_new_item'       => 'Ajouter un nouveau adhérent',
		'edit_item'          => 'Modifier',
		'view_item'          => 'Voir un adhérent',
		'view_items'         => 'Voir les adhérents',
		'search_items'       => 'Rechercher',
		'not_found'          => 'Aucun adhérent n\'a été trouvé',
		'not_found_in_trash' => 'Aucun adhérent n\'a été trouvé dans la corbeille',
		'menu_name'          => 'Adhérents',
		'all_items'          => 'Tous les adhérents',
		'attributes'         => 'Attributs des adhérents',
   	];     

   	$post_type_adherents_args = [
      	'public'             => true,
		'publicly_queryable' => false, // n'affiche pas de permalien/prévisualisation
		'label'              => 'adhérents',
		'labels'             => $post_type_adherents_labels,
		'description'        => 'Liste des adhérents',
		'menu_position'      => 6,
		'menu_icon'          => 'dashicons-buddicons-buddypress-logo',
      	'hierarchical'       => false, // Se comporte comme les articles
      	'supports'           => [
			'title',
			// 'editor',
			'thumbnail',
			'custom-fields',
			'page-attributes',
		],
		'has_archive'       => false,
		'show_in_rest'      => true,
   	];

	// Permet d'ajouter un nouveau type de contenu
	register_post_type(
		'adhérents',
		$post_type_adherents_args
	);

}
add_action( 'init', 'gedem_adherents_register_post_type' );