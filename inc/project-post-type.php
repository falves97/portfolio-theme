<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function fbalves_project_post_type() {
	register_post_type( 'fbalves_project',
		array(
			'labels'            => array(
				'name'          => 'Projetos',
				'singular_name' => 'Projeto',
				'edit_item'     => 'Editar Projeto',
				'add_new_item'  => 'Adicionar novo projeto'
			),
			'menu_icon'         => 'dashicons-portfolio',
			'menu_position'     => 7,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'has_archive'       => true,
			'rewrite'           => array( 'slug' => 'fbalves-projects' ),
			'supports'          => array( 'title', 'thumbnail' )
		)
	);
}

add_action( 'init', 'fbalves_project_post_type' );

/**
 * Categoria para saber saber quais tecnologias foram usadads no projeto
 */
function fbalves_register_taxonomy_technology() {
	register_taxonomy(
		'fbalves_technology',
		array( 'fbalves_project' ),
		array(
			'hierarchical'      => true,
			'labels'            => array(
				'name'          => 'Tecnologias',
				'singular_name' => 'Tecnologia',
				'search_items'  => 'Procurar Tecnologias',
				'all_items'     => 'Todas as Tecnologias',
				'edit_item'     => 'Editar Tecnologia',
				'update_item'   => 'Atualizar Tecnologia',
				'add_new_item'  => 'Adicionar Nova Tecnologia',
				'new_item_name' => 'Novo Nome da Tecnologia',
				'menu_name'     => 'Tecnologia',
			),
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => [ 'slug' => 'fbalves-technology' ],
		)
	);
}

add_action( 'init', 'fbalves_register_taxonomy_technology' );
