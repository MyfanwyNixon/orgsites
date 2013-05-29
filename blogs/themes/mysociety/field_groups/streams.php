<?php

register_field_group(array (
  'id' => '51a61ebfde445',
  'title' => 'Streams',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_51a61953bd198',
      'label' => 'Logo Image',
      'name' => 'logo_image',
      'type' => 'image',
      'instructions' => 'The image to display as this stream\'s logo.',
      'required' => '1',
      'save_format' => 'url',
      'preview_size' => 'medium',
      'order_no' => '0',
    ),
    1 => 
    array (
      'key' => 'field_51a61953bda81',
      'label' => 'Strapline',
      'name' => 'strapline',
      'type' => 'text',
      'instructions' => 'A strapline to appear at the side of the stream logo.',
      'required' => '1',
      'default_value' => '',
      'formatting' => 'html',
      'order_no' => '1',
    ),
    2 => 
    array (
      'key' => 'field_51a61c39cd79d',
      'label' => 'Banner Background Image',
      'name' => 'banner_background_image',
      'type' => 'image',
      'instructions' => '',
      'required' => '1',
      'save_format' => 'url',
      'preview_size' => 'medium',
      'order_no' => '2',
    ),
    3 => 
    array (
      'key' => 'field_51a61c39cddb6',
      'label' => 'Banner Button Image',
      'name' => 'banner_button_image',
      'type' => 'image',
      'instructions' => '',
      'required' => '1',
      'save_format' => 'url',
      'preview_size' => 'medium',
      'order_no' => '3',
    ),
    4 => 
    array (
      'label' => 'Banner Button Destination',
      'name' => 'banner_button_destination',
      'type' => 'text',
      'instructions' => 'The destination URL of the banner button.',
      'required' => '1',
      'default_value' => '',
      'formatting' => 'html',
      'key' => 'field_51a61d45a510e',
      'order_no' => '4',
    ),
    5 => 
    array (
      'key' => 'field_51a61b375d4f2',
      'label' => 'Blurb',
      'name' => 'blurb',
      'type' => 'textarea',
      'instructions' => 'A short one-paragraph blurb to describe this stream.',
      'required' => '1',
      'default_value' => '',
      'formatting' => 'html',
      'order_no' => '5',
    ),
    6 => 
    array (
      'key' => 'field_51a61b375da85',
      'label' => 'Services Strapline',
      'name' => 'services_strapline',
      'type' => 'text',
      'instructions' => 'A short line to advertise services.',
      'required' => '1',
      'default_value' => '',
      'formatting' => 'html',
      'order_no' => '6',
    ),
    7 => 
    array (
      'key' => 'field_51a61b375dfe8',
      'label' => 'Services',
      'name' => 'services',
      'type' => 'relationship',
      'instructions' => 'Which mySociety services relate to this stream?',
      'required' => '1',
      'post_type' => 
      array (
        0 => 'ms_project',
        1 => 'ms_org',
        2 => 'ms_council',
        3 => 'ms_public',
        4 => 'ms_volunteer',
        5 => 'ms_international',
      ),
      'taxonomy' => 
      array (
        0 => 'all',
      ),
      'max' => '-1',
      'order_no' => '7',
    ),
    8 => 
    array (
      'label' => 'Products Strapline',
      'name' => 'products_strapline',
      'type' => 'text',
      'instructions' => 'A short line to advertise products.',
      'required' => '1',
      'default_value' => '',
      'formatting' => 'html',
      'key' => 'field_51a61d45a785f',
      'order_no' => '8',
    ),
    9 => 
    array (
      'label' => 'Products',
      'name' => 'products',
      'type' => 'relationship',
      'instructions' => 'Which mySociety products relate to this stream?',
      'required' => '1',
      'post_type' => 
      array (
        0 => 'ms_project',
        1 => 'ms_org',
        2 => 'ms_council',
        3 => 'ms_public',
        4 => 'ms_volunteer',
        5 => 'ms_international',
      ),
      'taxonomy' => 
      array (
        0 => 'all',
      ),
      'max' => '-1',
      'key' => 'field_51a61d45a7e02',
      'order_no' => '9',
    ),
    10 => 
    array (
      'label' => 'Tools Strapline',
      'name' => 'tools_strapline',
      'type' => 'text',
      'instructions' => 'A short line to advertise tools.',
      'required' => '1',
      'default_value' => '',
      'formatting' => 'html',
      'key' => 'field_51a61d45a83bf',
      'order_no' => '10',
    ),
    11 => 
    array (
      'label' => 'Tools',
      'name' => 'tools',
      'type' => 'relationship',
      'instructions' => 'Which mySociety tools relate to this stream?',
      'required' => '1',
      'post_type' => 
      array (
        0 => 'ms_project',
        1 => 'ms_org',
        2 => 'ms_council',
        3 => 'ms_public',
        4 => 'ms_volunteer',
        5 => 'ms_international',
      ),
      'taxonomy' => 
      array (
        0 => 'all',
      ),
      'max' => '-1',
      'key' => 'field_51a61d45a8ac5',
      'order_no' => '11',
    ),
  ),
  'location' => 
  array (
    'rules' => 
    array (
      0 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_stream',
        'order_no' => '0',
      ),
    ),
    'allorany' => 'all',
  ),
  'options' => 
  array (
    'position' => 'normal',
    'layout' => 'default',
    'show_on_page' => 
	array (
	  	0 => 'slug',
		1 => 'custom_fields',
	)
  ),
  'menu_order' => 0,
));
