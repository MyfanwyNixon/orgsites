<?php

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_streams',
		'title' => 'Streams',
		'fields' => array (
			array (
				'key' => 'field_519ca9f0b1a5e',
				'label' => 'Logo Image',
				'name' => 'logo_image',
				'type' => 'image',
				'instructions' => 'The image to display for this stream\'s logo.',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'full',
			),
			array (
				'key' => 'field_519ca8bf3627f',
				'label' => 'Strapline',
				'name' => 'strapline',
				'type' => 'text',
				'instructions' => 'A strapline to appear at the side of the stream title',
				'required' => 1,
				'default_value' => '',
				'formatting' => 'html',
			),
			array (
				'key' => 'field_519ca9bab1a5d',
				'label' => 'Blurb',
				'name' => 'blurb',
				'type' => 'textarea',
				'instructions' => 'A short one-paragraph blurb to describe this stream.',
				'required' => 1,
				'default_value' => '',
				'formatting' => 'html',
			),
			array (
				'key' => 'field_519cb10bc07a9',
				'label' => 'Services Strapline',
				'name' => 'services_strapline',
				'type' => 'text',
				'instructions' => 'A short line to advertise services.',
				'required' => 1,
				'default_value' => '',
				'formatting' => 'html',
			),
			array (
				'post_type' => array (
					0 => 'ms_project',
					1 => 'ms_org',
					2 => 'ms_council',
					3 => 'ms_public',
					4 => 'ms_volunteer',
					5 => 'ms_international',
				),
				'max' => '',
				'taxonomy' => array (
					0 => 'all',
				),
				'filters' => array (
					0 => 'search',
				),
				'result_elements' => array (
					0 => 'post_type',
					1 => 'post_title',
				),
				'key' => 'field_519cb12fc07aa',
				'label' => 'Services',
				'name' => 'services',
				'type' => 'relationship',
				'instructions' => 'Which mySociety services relate to this stream?',
				'required' => 1,
			),
			array (
				'key' => 'field_519cb0d1c07a7',
				'label' => 'Products Strapline',
				'name' => 'products_strapline',
				'type' => 'text',
				'instructions' => 'A short line to advertise products.',
				'required' => 1,
				'default_value' => '',
				'formatting' => 'html',
			),
			array (
				'post_type' => array (
					0 => 'ms_project',
					1 => 'ms_org',
					2 => 'ms_council',
					3 => 'ms_public',
					4 => 'ms_volunteer',
					5 => 'ms_international',
				),
				'max' => '',
				'taxonomy' => array (
					0 => 'all',
				),
				'filters' => array (
					0 => 'search',
				),
				'result_elements' => array (
					0 => 'post_type',
					1 => 'post_title',
				),
				'key' => 'field_519cac3244037',
				'label' => 'Products',
				'name' => 'products',
				'type' => 'relationship',
				'instructions' => 'Which mySociety products relate to this stream?',
				'required' => 1,
			),
			array (
				'key' => 'field_519cb151c07ab',
				'label' => 'Tools Strapline',
				'name' => 'tools_strapline',
				'type' => 'text',
				'instructions' => 'A short line to advertise tools.',
				'required' => 1,
				'default_value' => '',
				'formatting' => 'html',
			),
			array (
				'post_type' => array (
					0 => 'ms_project',
					1 => 'ms_org',
					2 => 'ms_council',
					3 => 'ms_public',
					4 => 'ms_volunteer',
					5 => 'ms_international',
				),
				'max' => '',
				'taxonomy' => array (
					0 => 'all',
				),
				'filters' => array (
					0 => 'search',
				),
				'result_elements' => array (
					0 => 'post_type',
					1 => 'post_title',
				),
				'key' => 'field_519cb16dc07ac',
				'label' => 'Tools',
				'name' => 'tools',
				'type' => 'relationship',
				'instructions' => 'Which mySociety tools relate to this stream?',
				'required' => 1,
			),
			array (
				'key' => 'field_519cb6331b7b5',
				'label' => 'Banner Background Image',
				'name' => 'banner_background_image',
				'type' => 'image',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'medium',
			),
			array (
				'key' => 'field_519cb64a1b7b6',
				'label' => 'Banner Button Image',
				'name' => 'banner_button_image',
				'type' => 'image',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
			),
			array (
				'post_type' => array (
					0 => 'all',
				),
				'multiple' => 0,
				'allow_null' => 0,
				'key' => 'field_519cb6591b7b7',
				'label' => 'Banner Button Destination',
				'name' => 'banner_button_destination',
				'type' => 'page_link',
				'required' => 1,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'ms_stream',
					'order_no' => '0',
					'group_no' => '0',
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'discussion',
				3 => 'comments',
				4 => 'author',
				5 => 'format',
				6 => 'featured_image',
				7 => 'categories',
				8 => 'tags',
				9 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
}
