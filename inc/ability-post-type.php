<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function fbalves_ability_post_type() {
	register_post_type( 'fbalves_ability',
		array(
			'labels'            => array(
				'name'          => 'Habilidades',
				'singular_name' => 'Habilidade',
				'edit_item'     => 'Editar Habilidade',
				'add_new_item'  => 'Adicionar Nova Habilidade'
			),
			'menu_icon'         => 'dashicons-portfolio',
			'menu_position'     => 6,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'has_archive'       => true,
			'rewrite'           => array( 'slug' => 'fbalves-abilities' ),
			'supports'          => array( 'title', 'thumbnail' )
		)
	);
}

add_action( 'init', 'fbalves_ability_post_type' );
