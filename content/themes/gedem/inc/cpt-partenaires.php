<?php 
/**
 * 
 * GEDEM77 partenaires Custom Post Type
 * 
 */

function gedem_partenaires_register_post_type(){
   $post_type_partenaires_labels = [
		'name'               => 'Partenaires',
		'singular_name'      => 'Partenaires',
		'add_new'            => 'Ajouter',
		'add_new_item'       => 'Ajouter un partenaire',
		'edit_item'          => 'Modifier le partenaire',
		'view_item'          => 'Voir un partenaire',
		'view_items'         => 'Voir les partenaires',
		'search_items'       => 'Rechercher des partenaires',
		'not_found'          => 'Aucun partenaires n\'a été trouvé',
		'not_found_in_trash' => 'Aucun partenaires n\'a été trouvé dans la corbeille',
		'menu_name'          => 'Partenaires',
		'all_items'          => 'Tous les partenaires',
		'attributes'         => 'Attributs des partenaires',
   ];

   $post_type_partenaires_args = [
      'public'             		=> true,
		'publicly_queryable' 	=> false, // n'affiche pas de permalien/prévisualisation
		'label'              	=> 'Partenaires',
		'labels'             	=> $post_type_partenaires_labels,
		'description'        	=> 'Liste des partenaires',
		'menu_position'      	=> 4,
		'menu_icon'          	=> 'dashicons-awards',
      'hierarchical'       		=> false, // Se comporte comme les articles
      'supports'           		=> [
			'title',
			// 'editor',
			'thumbnail',
			'custom-fields',
			'page-attributes',
		],
		'has_archive'       	=> false,
		'show_in_rest'      	=> true,
		'capability_type'     	=> 'page',
   ];

	// Permet d'ajouter un nouveau type de contenu
	register_post_type(
		'partenaires',
		$post_type_partenaires_args
	);

}
add_action( 'init', 'gedem_partenaires_register_post_type' );