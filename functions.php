<?php

/**
 * Load all of the styles
 *
 * @since 0.1.0
 */
function bb_gailscorner_load_css() {
    wp_enqueue_style( 'bb-blueprint-gailscorner', get_stylesheet_directory_uri() . '/assets/css/gailscorner.css', false, null, 'all' );
}

add_action( 'wp_enqueue_scripts', 'bb_gailscorner_load_css', 20 );

/**
 * Disable access to admin menu options client doesn't need
 *
 * @since 0.1.0
 */
function bb_remove_menu_pages() {
	remove_menu_page( 'edit.php' );
	remove_menu_page( 'edit-comments.php' );
}

add_action( 'admin_menu', 'bb_remove_menu_pages' );
