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
'icon_box',
 
/** Your Shortcode label and icon */
array(
 
/** Label for your shortcode user interface. This part is required. */
'label' => 'Icon Box',
 
/** Icon or an image attachment for shortcode. Optional. src or dashicons-$icon.  */
'listItemImage' => 'dashicons-slides',
 
/** Shortcode Attributes */
'attrs'          => array(

	/** This is the HTML for Column 1 */
	array(
	'label'        => 'View',
	'attr'         => 'view',
	'type'         => 'radio',
	'description'  => 'Set the view of the icon as "Default", "Boxed" or "Framed". Framed is with a frame surrounding the icon.',
		'options' => array(
	        'default'	=> 'Default',
	        'boxed'		=> 'Boxed',
	        'framed'	=> 'Framed',
	    ),
	),

	array(
	'label'        => 'Background Color',
	'attr'         => 'background',
	'type'         => 'select',
	'description'  => 'Set the background of the entire box "Transparent", "Red", "Gray", or "Blue". Default is transparent.',
		'options' => array(
	        'none'		=> 'Default',
	        'red'		=> 'Red',
	        'gray'		=> 'Gray',
	        'blue'		=> 'Blue'
	    ),
	),

	/** This is the HTML for Column 2 */
	array(
	'label'        => 'Icon',
	'attr'         => 'icon',
	'type'         => 'text',
	'description'  => 'Choose your icon',
	),

	/** This is the HTML for Column 2 */
	array(
	'label'        => 'Title',
	'attr'         => 'title',
	'type'         => 'text',
	'description'  => 'The title text of the box',
	),

	/** Column Ratios */
	array(
	'label'   		=> 'Link',
	'attr'      	=> 'link',
	'type'      	=> 'url',
	'description' 	=> 'Insert a link',
	),

	/** Custom CSS classes */
	array(
	'label'     => 'Description',
	'attr'      => 'description',
	'type'      => 'textarea',
	'description' 	=> 'The HTML for the box',
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

