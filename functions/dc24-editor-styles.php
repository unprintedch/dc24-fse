<?php

function dc24_enqueue_block_editor_styles() {
    wp_enqueue_style( 'dc24-editor-styles', get_template_directory_uri() . '/dist/editor-out.css', false, '1.0', 'all' );
}
add_action( 'enqueue_block_editor_assets', 'dc24_enqueue_block_editor_styles' );
