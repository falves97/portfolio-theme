<?php

define('FBALVES_ASSETS_PATH', get_template_directory_uri() . '/assets/dist/');

/**
 * Customizer
 */
function fbalves_customizer_register($wp_customizer)
{
    /**
     * Add section banner
     * @var WP_Customize_Manager $wp_customizer
     */
    $wp_customizer->add_section('fbalves-banner-section', array(
        'title' => 'Banner',
        'priority' => '105',
    ));

    /**
     * Salva imagem no db
     */
    $wp_customizer->add_setting('fbalves-banner-control', array(
        'transport' => 'refresh',
        'sanitize_callback' => 'absint'
    ));

    /**
     * Add control para adcionar a imagem
     */
    $wp_customizer->add_control(new WP_Customize_Media_Control(
        $wp_customizer,
        'fbalves-banner-control',
        array(
            'label' => 'Imagem banner',
            'section' => 'fbalves-banner-section',
            'mime_type' => 'image'
        )
    ));

    /**
     * Titudo do profissional
     */
    $wp_customizer->add_setting('fbalves-banner-title', array(
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh'
    ));

    $wp_customizer->add_control('fbalves-banner-title', array(
        'label' => 'Profição',
        'section' => 'fbalves-banner-section',
        'type' => 'text'
    ));

    /**
     * Descrição da profição ou do profissional
     */
    $wp_customizer->add_setting('fbalves-banner-text', array(
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'refresh'
    ));

    $wp_customizer->add_control('fbalves-banner-text', array(
        'label' => 'Descrição',
        'section' => 'fbalves-banner-section',
        'type' => 'textarea'
    ));
}

add_action('customize_register', 'fbalves_customizer_register');

/**
 * Permite adcionar uma logo no header
 */
function fbalves_portfolio_theme_add_features()
{
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails', array('post'));
}

add_action("after_setup_theme", "fbalves_portfolio_theme_add_features");

/**
 * Habilita o uso de menus no tema
 */
function fbalves_portfolio_theme_menu_register()
{
    register_nav_menu("menu-navegacao", "Menu de Navegação");
}

add_action("init", "fbalves_portfolio_theme_menu_register");

/**
 * Adcionando assets
 */

function fbalves_add_assets()
{
    /**
     * CSS
     */
    wp_enqueue_style('theme-style', FBALVES_ASSETS_PATH . "style.css");

    /**
     * JS
     */
    wp_enqueue_script('index-theme', FBALVES_ASSETS_PATH . 'index.js', in_footer: true);
}

add_action('wp_enqueue_scripts', 'fbalves_add_assets');

/**
 * Verifica se o script a ser adicionado é o index_theme_js que deve ser do tipo modulo
 */
function fbalves_add_script_type_module($tag, $handle, $src)
{
    //Verifica se o nome do script a ser adcionado é igual ao index_theme_js
    if ($handle != 'index-theme') {
        return $tag;
    }

    $tag = '<script type="module" src="' . esc_url($src) . '"></script>';

    return $tag;
}

add_filter('script_loader_tag', 'fbalves_add_script_type_module', accepted_args: 3);