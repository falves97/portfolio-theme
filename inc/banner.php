<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Customizer
 */
function fbalves_customizer_register( $wp_customizer ) {
	/**
	 * Add section banner
	 * @var WP_Customize_Manager $wp_customizer
	 */
	$wp_customizer->add_section( 'fbalves-banner-section', array(
		'title'    => 'Banner',
		'priority' => '105',
	) );

	/**
	 * Salva imagem no db
	 */
	$wp_customizer->add_setting( 'fbalves-banner-control', array(
		'transport'         => 'refresh',
		'sanitize_callback' => 'absint'
	) );

	/**
	 * Add control para adcionar a imagem
	 */
	$wp_customizer->add_control( new WP_Customize_Media_Control(
		$wp_customizer,
		'fbalves-banner-control',
		array(
			'label'     => 'Imagem banner',
			'section'   => 'fbalves-banner-section',
			'mime_type' => 'image'
		)
	) );

	/**
	 * Titudo do profissional
	 */
	$wp_customizer->add_setting( 'fbalves-banner-title', array(
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'refresh'
	) );

	$wp_customizer->add_control( 'fbalves-banner-title', array(
		'label'   => 'Profição',
		'section' => 'fbalves-banner-section',
		'type'    => 'text'
	) );

	/**
	 * Descrição da profição ou do profissional
	 */
	$wp_customizer->add_setting( 'fbalves-banner-text', array(
		'sanitize_callback' => 'sanitize_textarea_field',
		'transport'         => 'refresh'
	) );

	$wp_customizer->add_control( 'fbalves-banner-text', array(
		'label'   => 'Descrição',
		'section' => 'fbalves-banner-section',
		'type'    => 'textarea'
	) );
}

add_action( 'customize_register', 'fbalves_customizer_register' );
