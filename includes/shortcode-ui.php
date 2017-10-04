<?php

namespace UAMS\Shortcode_UI;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'plugins_loaded', 'UAMS\Shortcode_UI\bootstrap' );
/**
 * Loads the rest of the plugin.
 *
 * @since 0.0.1
 */
function bootstrap() {
	include_once( __DIR__ . '/image-shortcake.php' );
	if( class_exists( 'UAMS_Syndication_Shortcode_Base' ) ) { // Check if Syndication is active
		include_once( __DIR__ . '/news-shortcake.php' );
	}
	include_once( __DIR__ . '/shortcake-shortcodes.php');
	include_once( __DIR__ . '/uamsbutton-shortcake.php');
	include_once( __DIR__ . '/two-col-shortcake.php');
	include_once( __DIR__ . '/three-col-shortcake.php');
	include_once( __DIR__ . '/icon-box-shortcake.php');
	include_once( __DIR__ . '/admincss.php'); // Add Shortcode CSS to backend
	include_once( __DIR__ . '/shortcake-bakery.php' );
}
