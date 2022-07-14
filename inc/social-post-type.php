<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function fbalves_social_post_type() {
	register_post_type( 'fbalves_social',
		array(
			'labels'            => array(
				'name'          => 'Redes Sociais',
				'singular_name' => 'Rede Social',
				'edit_item'     => 'Editar Rede Social',
				'add_new_item'  => 'Adicionar nova rede social'
			),
			'menu_icon'         => 'dashicons-share',
			'menu_position'     => 8,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'has_archive'       => true,
			'rewrite'           => array( 'slug' => 'fbalves-sociais' ),
			'supports'          => array( 'title', 'thumbnail' )
		)
	);
}

add_action( 'init', 'fbalves_social_post_type' );