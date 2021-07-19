<?php 
/**
 * 
 * GEDEM77 dates Custom Post Type
 * 
 */

function gedem_timeline_register_post_type(){
   $post_type_timeline_labels = [
		'name'               => 'Grandes dates',
		'singular_name'      => 'Grandes dates',
		'add_new'            => 'Ajouter',
		'add_new_item'       => 'Ajouter une nouvelle grande date',
		'edit_item'          => 'Modifier la grande date',
		'view_item'          => 'Voir une grandes dates',
		'view_items'         => 'Voir les grandes dates',
		'search_items'       => 'Rechercher des grandes dates',
		'not_found'          => 'Aucunes grandes dates n\'a été trouvé',
		'not_found_in_trash' => 'Aucunes grandes dates n\'a été trouvé dans la corbeille',
		'menu_name'          => 'Grandes dates',
		'all_items'          => 'Toutes les grandes dates',
		'attributes'         => 'Attributs des grandes dates',
   ];

   $post_type_timeline_args = [
      'public'             => true,
		'publicly_queryable' => false, // n'affiche pas de permalien/prévisualisation
		'label'              => 'Timeline',
		'labels'             => $post_type_timeline_labels,
		'description'        => 'Liste des grandes dates',
		'menu_position'      => 4,
		'menu_icon'          => 'dashicons-clock',
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
		'timeline',
		$post_type_timeline_args
	);

}
add_action( 'init', 'gedem_timeline_register_post_type' );