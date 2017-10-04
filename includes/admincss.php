<?php
/**
 * UAMS CSS for Shortcode UI.
 *
 *
 * @since 0.0.1
 *
 */

function admin_editor_styles() {
    add_editor_style( plugins_url( '../css/uamsbuttons-admin.css', __FILE__ ));
    if( class_exists( 'UAMS_Syndication_Shortcode_Base' ) ) { // Check if Syndication is active
    	add_editor_style( plugins_url( '../css/uamssydication-admin.css', __FILE__ ));
	}
	add_editor_style( plugins_url( '../css/col-admin.css', __FILE__ ));
}
add_action( 'admin_init', 'admin_editor_styles' );

wp_enqueue_style( 'shortcake-shortcode-styles', plugins_url( '../css/shortcake-sc-front.css', __FILE__ ) );