<?php

if (!defined('ABSPATH')) {
    exit;
}


/**
 * Add meta_box para link do projeto
 */
function fbalves_add_meta_box_link()
{
    foreach (array('fbalves_project', 'fbalves_social') as $scream) {
        add_meta_box(
            'fbalves_box_post_link',
            'Link',
            'fbalves_box_link_html',
            $scream
        );
    }
}

add_action('add_meta_boxes', 'fbalves_add_meta_box_link');

/**
 * Html da meta_box de link
 */
function fbalves_box_link_html($post)
{
    $link = get_post_meta($post->ID, '_fbalves_link', true);
    ?>
    <input
        type="url"
        id="fbalves_link"
        name="fbalves_link"
        style="width: 100%"
        value=<?php echo('"' . $link . '"'); ?>
    />
    <?php
}

function fbalves_save_link($post_id)
{
    if (array_key_exists('fbalves_link', $_POST)) {
        $link = sanitize_text_field($_POST['fbalves_link']);
        update_post_meta(
            $post_id,
            '_fbalves_link',
            $link
        );
    }
}

add_action('save_post', 'fbalves_save_link');