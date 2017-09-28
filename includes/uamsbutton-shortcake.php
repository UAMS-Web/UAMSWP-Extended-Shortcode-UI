<?php

namespace UAMS\Shortcode_UI\UAMSButton_Shortcake;

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
'button',
 
/** Your Shortcode label and icon */
array(
 
/** Label for your shortcode user interface. This part is required. */
'label' => 'UAMS Button',
 
/** Icon or an image attachment for shortcode. Optional. src or dashicons-$icon.  */
'listItemImage' => 'dashicons-external',
 
/** Shortcode Attributes */
'attrs'          => array(

	/** This text will appear in button */
	array(
	'label'        => 'Button Text',
	'attr'         => 'text',
	'type'         => 'text',
	),

	/** This the url desitination */
	array(
	'label'        => 'Destination URL',
	'attr'         => 'url',
	'type'         => 'url',
	),

	/** Button Color */
	array(
	'label'     => 'Color',
	'attr'      => 'color',
	'type'      => 'select',
	    'options' => array(
	        ''      	=> 'Default',
	        'red'    	=> 'Red',
	        'gray'   	=> 'Gray',
	        'green'   	=> 'Green',
	        'blue'   	=> 'Blue',
	        'yellow'   	=> 'Yellow',
	    ),
	),

	/** Icon options */
	array(
	'label'     => 'Icon',
	'attr'      => 'type',
	'type'      => 'select',
	    'options' => array(
	        'go'      	=> 'Default',
	        'plus'		=> 'Plus',
	        'external' 	=> 'External',
	        'play' 		=> 'Play',
	    ),
	),
 
	/** Button Size */
	array(
	'label'     => 'Size',
	'attr'      => 'size',
	'type'      => 'select',
	    'options' => array(
	        ''      	=> 'Medium',
	        'large'    	=> 'Large',
	        'small'   	=> 'Small',
	    ),
	),
 
),
 
/** You can select which post types will show shortcode UI */
'post_type'     => array( 'post', 'page' ), 
)
);

