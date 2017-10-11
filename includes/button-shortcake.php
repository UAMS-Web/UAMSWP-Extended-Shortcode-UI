<?php

namespace UAMS\Shortcode_UI\Button_Shortcake;

/**
 * UAMS Button Shortcode.
 *
 * Inserts the button shortcode with atts
 *
 * @since 0.0.1
 *
 * @param array $args
 * @return array
 */
shortcode_ui_register_for_shortcode(
 
/** Your shortcode handle */
'boot_button',
 
/** Your Shortcode label and icon */
array(
 
/** Label for your shortcode user interface. This part is required. */
'label' => 'Basic Button',
 
/** Icon or an image attachment for shortcode. Optional. src or dashicons-$icon.  */
'listItemImage' => 'dashicons-migrate',
 
/** Shortcode Attributes */
'attrs'          => array(

	/** This text will appear in button */
	array(
	'label'        => 'Button Text',
	'attr'         => 'text',
	'type'         => 'text',
	),

	/** This text will appear as a title for the link */
	array(
	'label'        => 'Link Title',
	'attr'         => 'title',
	'type'         => 'text',
	),

	/** This the url desitination */
	array(
	'label'        => 'Link to',
	'attr'         => 'url',
	'type'         => 'url',
	),

	/** Button Color */
	array(
	'label'     => 'Type / Color',
	'attr'      => 'type',
	'type'      => 'select',
	    'options' => array(
	        ''      		=> 'Basic / Gray',
	        'btn-default'	=> 'Default / Ghost',
	        'btn-primary'  	=> 'Primary / UAMS Red',
	        'btn-success'   => 'Success / Green',
	        'btn-info'   	=> 'Info / Blue',
	        'btn-warning'   => 'Warning / Yellow',
	        'btn-danger'   	=> 'Danger / Orange',
	        'btn-link'		=> 'Link / None',
	    ),
	),
 
	/** Button Size */
	array(
	'label'     => 'Size',
	'attr'      => 'size',
	'type'      => 'select',
	    'options' => array(
	        ''      => 'Default',
	        'btn-lg'    => 'Large',
	        'btn-sm'   	=> 'Small',
	    ),
	),

	/** Custom CSS classes */
	array(
	'label'     => 'Custom CSS classes',
	'attr'      => 'class',
	'type'      => 'text',
	),
 
),
 
/** You can select which post types will show shortcode UI */
'post_type'     => array( 'post', 'page' ), 
)
);