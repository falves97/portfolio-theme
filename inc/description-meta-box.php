<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add meta_box para descrição
 */
function fbalves_add_meta_box_description() {

	foreach ( array( 'fbalves_project', 'fbalves_ability' ) as $scream ) {
		add_meta_box(
			'fbalves_box_description',
			'Descrição',
			'fbalves_box_description_html',
			$scream
		);
	}
}

add_action( 'add_meta_boxes', 'fbalves_add_meta_box_description' );

/**
 * Html da meta_box de Descrição
 */
function fbalves_box_description_html( $post ) {
	$desc = get_post_meta( $post->ID, '_fbalves_description', true );
	?>
    <textarea
            name="fbalves_description"
            id="fbalves_description"
            rows="10"
            style="width: 100%"
    ><?= $desc ?></textarea>
	<?php
}

function fbalves_save_description( $post_id ) {
	if ( array_key_exists( 'fbalves_description', $_POST ) ) {
		$desc = sanitize_textarea_field( $_POST['fbalves_description'] );
		update_post_meta(
			$post_id,
			'_fbalves_description',
			$desc
		);
	}
}

add_action( 'save_post', 'fbalves_save_description' );