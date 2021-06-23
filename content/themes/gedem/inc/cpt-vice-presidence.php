<?php 
/**
 * 
 * GEDEM77 vice-présidence Custom Post Type
 * 
 */

function gedem_vice_presidence_register_post_type(){
   $post_type_vice_presidence_labels = [
		'name'               => 'La vice-présidence',
		'singular_name'      => 'La vice-présidence',
		'add_new'            => 'Ajouter',
		'add_new_item'       => 'Ajouter un nouveau vice-président',
		'edit_item'          => 'Modifier',
		'view_item'          => 'Voir un vice-président',
		'view_items'         => 'Voir les vices-présidents',
		'search_items'       => 'Rechercher',
		'not_found'          => 'Aucun vice-président n\'a été trouvé',
		'not_found_in_trash' => 'Aucun vice-président n\'a été trouvé dans la corbeille',
		'menu_name'          => 'Vice-présidence',
		'all_items'          => 'Tous les vices-présidents',
		'attributes'         => 'Attributs des vices-présidents',
   ];

   $post_type_vice_presidence_args = [
      'public'             => true,
		'publicly_queryable' => false, // n'affiche pas de permalien/prévisualisation
		'label'              => 'Vice-présidence',
		'labels'             => $post_type_vice_presidence_labels,
		'description'        => 'Liste de la vice-présidence',
		'menu_position'      => 6,
		'menu_icon'          => 'dashicons-businessperson',
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
		'vice-prsidence',
		$post_type_vice_presidence_args
	);

}
add_action( 'init', 'gedem_vice_presidence_register_post_type' );