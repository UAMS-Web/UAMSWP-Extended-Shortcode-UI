<?php

namespace UAMS\Shortcode_UI\News_Shortcake;

/**
 * UAMSWP News Syndication Shortcode.
 *
 * Inserts the uamswp_news shortcode with atts
 *
 * @since 0.0.1
 *
 * @param array $args
 * @return array
 */
shortcode_ui_register_for_shortcode(
 
/** Your shortcode handle */
'uamswp_news',
 
/** Your Shortcode label and icon */
array(
 
/** Label for your shortcode user interface. This part is required. */
'label' => 'News Syndication',
 
/** Icon or an image attachment for shortcode. Optional. src or dashicons-$icon.  */
'listItemImage' => 'dashicons-rss',
 
/** Shortcode Attributes */
'attrs'          => array(
 
	/** Output format */
	array(
	'label'     => 'Format',
	'attr'      => 'output',
	'type'      => 'select',
	    'options' => array(
	        'headlines'      => 'Headline',
	        'excerpts'    => 'Excerpt',
	        'cards'     => 'Card',
	        'full'     => 'Full',
	    ),
	'description'  => 'Preferred output format',
	),

	array(
	 
	/** This label will appear in user interface */
	'label'        => 'Category',
	'attr'         => 'site_category_slug',
	'type'         => 'text',
	'description'  => 'Please enter the filter / category',
	),

	/** Count - Number of articles */
	array(
	'label'        => 'Count',
	'attr'         => 'count',
	'type'         => 'number',
	'description'  => 'Number of news articles to display',
	'meta'   => array(
			'placeholder' 	=> esc_html__( '1' ),
			'min'			=> '1',
			'step'			=> '1',
		),
	),

	/** Offset - Number of articles to skip */
	array(
	'label'        => 'Offset',
	'attr'         => 'offset',
	'type'         => 'number',
	'description'  => 'Number of news articles to skip',
	'meta'   => array(
			'placeholder' 	=> esc_html__( '0' ),
			'min'			=> '0',
			'step'			=> '1',
		),
	),

	/** ID - ID of specific of articles */
	array(
	'label'        => 'Post ID',
	'attr'         => 'id',
	'type'         => 'number',
	'description'  => 'Specific ID of article',
	),

 
),
 
/** You can select which post types will show shortcode UI */
'post_type'     => array( 'post', 'page' ), 
)
);
