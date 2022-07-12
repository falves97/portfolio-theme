<?php

if (!defined('ABSPATH')) {
    exit;
}

function fbalves_projects_post_type()
{
    register_post_type('fbalves_project',
        array(
            'labels' => array(
                'name' => 'Projetos',
                'singular_name' => 'Projeto'
            ),
            'menu_icon' => 'dashicons-portfolio',
            'menu_position' => 6,
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'fbalves-projects'),
            'supports' => array('title', 'thumbnail')
        )
    );
}

add_action('init', 'fbalves_projects_post_type');