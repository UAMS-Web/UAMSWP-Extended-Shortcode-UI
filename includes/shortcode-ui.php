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
	include_once( __DIR__ . '/news-shortcake.php' );
	include_once( __DIR__ . '/uamsbutton-shortcake.php');
	include_once( __DIR__ . '/admincss.php');
	include_once( __DIR__ . '/shortcake-bakery.php' );
}
