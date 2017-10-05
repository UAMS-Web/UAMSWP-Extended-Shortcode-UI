<?php

namespace UAMS\Shortcode_UI\Icon_Box_Shortcake;

/**
 * Icon Box Shortcode.
 *
 * Inserts an icon box with options
 *
 * @since 0.0.1
 *
 * @param array $args
 * @return array
 */

shortcode_ui_register_for_shortcode(
 
/** Your shortcode handle */
'text_box',
 
/** Your Shortcode label and icon */
array(
 
/** Label for your shortcode user interface. This part is required. */
'label' => 'Text Box',
 
/** Icon or an image attachment for shortcode. Optional. src or dashicons-$icon.  */
'listItemImage' => 'dashicons-slides',
 
/** Shortcode Attributes */
'attrs'          => array(

	/* Background color of the text box */
	array(
	'label'        => 'Background Color',
	'attr'         => 'background',
	'type'         => 'select',
	'description'  => 'Set the background of the entire box "Transparent", "Red", "Gray", or "Blue". Default is none.',
		'options' => array(
	        'none'		=> 'None',
	        'red'		=> 'Red',
	        'gray'		=> 'Gray',
	        'blue'		=> 'Blue',
	        'image'		=> 'Image'
	    ),
	),

	/* Image for the backround, if needed */
	array(
		'label'       => 'Image Background',
		'attr'        => 'attachment',
		'type'        => 'attachment',
		'libraryType' => array( 'image' ),
		'addButton'   => 'Select Image',
		'frameTitle'  => 'Select Image',
		'description' => 'Used for image background only.'
	),

	/** Text Color for image backgrounds */
	array(
	'label'   		=> 'Text Color',
	'attr'      	=> 'color',
	'type'      	=> 'radio',
	    'options' 	=> array(
	        'dark'      => 'Dark',
	        'light'    	=> 'Light',
	    ),
	'description' 	=> 'Choose the color of the text (Dark text over light colored images or light over darker images).',
	),

	/** This is the Title (h2) for text box */
	array(
	'label'        => 'Title',
	'attr'         => 'title',
	'type'         => 'text',
	'description'  => 'The title heading of the box',
	),

	/** Text/content for the text box */
	array(
	'label'     => 'Text',
	'attr'      => 'text',
	'type'      => 'textarea',
	'description' 	=> 'The HTML for the box. Simple HTML is allowed.',
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

