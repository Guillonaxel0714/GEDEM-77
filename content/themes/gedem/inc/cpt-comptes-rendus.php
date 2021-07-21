<?php 
/**
 * 
 * GEDEM77 comptes rendus de réunions Custom Post Type
 * 
 */

function gedem_comptes_rendus_register_post_type(){
   	$post_type_comptes_rendus_labels = [
		'name'               => 'Les comptes rendus de réunions',
		'singular_name'      => 'Les comptes rendus de réunions',
		'add_new'            => 'Ajouter',
		'add_new_item'       => 'Ajouter un compte rendu',
		'edit_item'          => 'Modifier',
		'view_item'          => 'Voir un compte rendu',
		'view_items'         => 'Voir les comptes rendus',
		'search_items'       => 'Rechercher',
		'not_found'          => 'Aucun compte rendu n\'a été trouvé',
		'not_found_in_trash' => 'Aucun compte rendu n\'a été trouvé dans la corbeille',
		'menu_name'          => 'Comptes rendus',
		'all_items'          => 'Tous les comptes rendus',
		'attributes'         => 'Attributs des comptes rendus',
   	];     

   	$post_type_comptes_rendus_args = [
      	'public'             => true,
		'publicly_queryable' => false, // n'affiche pas de permalien/prévisualisation
		'label'              => 'comptes_rendus',
		'labels'             => $post_type_comptes_rendus_labels,
		'description'        => 'Liste des comptes rendus',
		'menu_position'      => 6,
		'menu_icon'          => 'dashicons-text-page',
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
		'capability_type'     => 'page',
   	];

	// Permet d'ajouter un nouveau type de contenu
	register_post_type(
		'comptes_rendus',
		$post_type_comptes_rendus_args
	);
}
add_action( 'init', 'gedem_comptes_rendus_register_post_type' );