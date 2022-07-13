<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Permite adcionar uma logo no header
 */
function fbalves_portfolio_theme_add_features()
{
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails',
        array(
            'post',
            'fbalves_project',
            'fbalves_social'
        )
    );
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
