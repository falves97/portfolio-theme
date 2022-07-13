<?php

if (!defined('ABSPATH')) {
    exit;
}

function fbalves_social_post_type()
{
    register_post_type('fbalves_social',
        array(
            'labels' => array(
                'name' => 'Redes Sociais',
                'edit_item' => 'Editar Rede Social',
                'add_new_item' => 'Adicionar nova rede social'
            ),
            'menu_icon' => 'dashicons-share',
            'menu_position' => 7,
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'fbalves-sociais'),
            'supports' => array('title', 'thumbnail')
        )
    );
}

add_action('init', 'fbalves_social_post_type');