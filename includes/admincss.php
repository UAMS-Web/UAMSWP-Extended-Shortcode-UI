<?php
/**
 * UAMS CSS for Shortcode UI.
 *
 *
 * @since 0.0.1
 *
 */

function button_editor_styles() {
    add_editor_style( plugins_url( '../css/uamsbuttons-admin.css', __FILE__ ));
    if( class_exists( 'UAMS_Syndication_Shortcode_Base' ) ) {
    	add_editor_style( plugins_url( '../css/uamssydication-admin.css', __FILE__ ));
	}
}
add_action( 'admin_init', 'button_editor_styles' );