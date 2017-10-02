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
'listItemImage' => 'dashicons-media-spreadsheet',
 
/** Shortcode Attributes */
'attrs'          => array(

	/** This is the HTML for Column 1 */
	array(
	'label'        => 'Column 1',
	'attr'         => 'col1',
	'type'         => 'textarea',
	'description'  => 'Basic HTML supported. Line breaks automatically become new paragraphs.',
	),

	/** This is the HTML for Column 2 */
	array(
	'label'        => 'Column 2',
	'attr'         => 'col2',
	'type'         => 'textarea',
	'description'  => 'Basic HTML supported. Line breaks automatically become new paragraphs.',
	),

	/** This is the HTML for Column 2 */
	array(
	'label'        => 'Column 3',
	'attr'         => 'col3',
	'type'         => 'textarea',
	'description'  => 'Basic HTML supported. Line breaks automatically become new paragraphs.',
	),

	/** Column Ratios */
	array(
	'label'   		=> 'Column Width Ratio',
	'attr'      	=> 'ratio',
	'type'      	=> 'radio',
	    'options' 	=> array(
	        '4_4_4'     => '33% | 33% | 33%',
	        '3_3_6'    	=> '25% | 25% | 50%',
	        '3_6_3'   	=> '25% | 50% | 25%',
	        '6_3_3'   	=> '50% | 25% | 25%',
	    ),
	'description' 	=> 'Choose the widths for your colums. On mobile devices, columns stack vertically (left on top of right).',
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

