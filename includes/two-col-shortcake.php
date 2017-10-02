<?php

namespace UAMS\Shortcode_UI\UAMS_Two_Col_Shortcake;

/**
 * Two Column Shortcode.
 *
 * Inserts the two colums shortcode with width options
 *
 * @since 0.0.1
 *
 * @param array $args
 * @return array
 */

shortcode_ui_register_for_shortcode(
 
/** Your shortcode handle */
'sc_two_col',
 
/** Your Shortcode label and icon */
array(
 
/** Label for your shortcode user interface. This part is required. */
'label' => 'Row, Two Columns',
 
/** Icon or an image attachment for shortcode. Optional. src or dashicons-$icon.  */
'listItemImage' => 'dashicons-media-document',
 
/** Shortcode Attributes */
'attrs'          => array(

	/** This is the HTML for Column 1 */
	array(
	'label'        => 'Column 1',
	'attr'         => 'col1',
	'type'         => 'textarea',
	//'encode' => true,
	'meta' => array(
		'class' => 'shortcake-richtext',
		),
	'description'  => 'Basic HTML supported. Line breaks automatically become new paragraphs.',
	),

	/** This is the HTML for Column 2 */
	array(
	'label'        => 'Column 2',
	'attr'         => 'col2',
	'type'         => 'textarea',
	'description'  => 'Basic HTML supported. Line breaks automatically become new paragraphs.',
	// 'encode' => true,
	// 'meta' => array(
	// 	'class' => 'shortcake-richtext',
	// 	),
	),

	/** Button Color */
	array(
	'label'   		=> 'Column Width Ratio',
	'attr'      	=> 'ratio',
	'type'      	=> 'radio',
	    'options' 	=> array(
	        '6_6'      	=> '50% | 50%',
	        '4_8'    	=> '33% | 66%',
	        '3_9'   	=> '25% | 75%',
	        '8_4'   	=> '66% | 33%',
	        '9_3'   	=> '75% | 25%',
	    ),
	'description' 	=> 'Choose the widths for your colums. On mobile devices, columns stack vertically (left on top of right).',
	),

	/** Icon options */
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

