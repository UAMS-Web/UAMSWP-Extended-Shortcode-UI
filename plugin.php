<?php
/*
Plugin Name: UAMSWP Extended Shortcode UI
Version: 0.0.2
Description: Extends the Shortcode UI plugin.
Author: Todd McKee, Original: washingtonstateuniversity, jeremyfelt
Author URI: https://www.uams.edu/
Plugin URI: https://github.com/UAMS-Web/UAMSWP-Extended-Shortcode-UI
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// This plugin uses namespaces and requires PHP 5.3 or greater.
if ( version_compare( PHP_VERSION, '5.3', '<' ) ) {
	add_action( 'admin_notices', create_function( '',
	"echo '<div class=\"error\"><p>" . __( 'UAMSWP Extended Shortcode UI requires PHP 5.3 to function properly. Please upgrade PHP or deactivate the plugin.', 'wsuwp-extended-shortcode-ui' ) . "</p></div>';" ) );
	return;
} else {
	include_once __DIR__ . '/includes/shortcode-ui.php';
}
