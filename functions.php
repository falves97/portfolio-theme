<?php

define( 'FBALVES_ASSETS_PATH', get_template_directory_uri() . '/assets/dist/' );


/**
 * Permite adcionar uma logo no header
 */
function fbalves_portfolio_theme_add_features() {
	add_theme_support( "custom-logo" );
}

add_action( "after_setup_theme", "fbalves_portfolio_theme_add_features" );

/**
 * Habilita o uso de menus no tema
 */
function fbalves_portfolio_theme_menu_register() {
	register_nav_menu( "menu-navegacao", "Menu de Navegação" );
}

add_action( "init", "fbalves_portfolio_theme_menu_register" );

/**
 * Adcionando assets
 */

function fbalves_add_assets() {
	/**
	 * CSS
	 */
	wp_enqueue_style( 'theme-style', FBALVES_ASSETS_PATH . "style.css" );

	/**
	 * JS
	 */
	wp_enqueue_script( 'index-theme', FBALVES_ASSETS_PATH . 'index.js', in_footer: true );
}

add_action( 'wp_enqueue_scripts', 'fbalves_add_assets' );

/**
 * Verifica se o script a ser adicionado é o index_theme_js que deve ser do tipo modulo
 */
function fbalves_add_script_type_module( $tag, $handle, $src ) {
	//Verifica se o nome do script a ser adcionado é igual ao index_theme_js
	if ( $handle != 'index-theme' ) {
		return $tag;
	}

	$tag = '<script type="module" src="' . esc_url( $src ) . '"></script>';

	return $tag;
}

add_filter( 'script_loader_tag', 'fbalves_add_script_type_module', accepted_args: 3 );