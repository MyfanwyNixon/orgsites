<?php

register_field_group(array (
  'id' => '4fb3a087597f3',
  'title' => 'Project Info',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_4fb258b51eb4b',
      'label' => 'Strapline',
      'name' => 'strapline',
      'type' => 'text',
      'instructions' => 'The strapline appears under the project title',
      'required' => '0',
      'default_value' => 'A witty strapline',
      'formatting' => 'none',
      'order_no' => '0',
    ),
    1 => 
    array (
      'key' => 'field_4fb258b51f1f8',
      'label' => 'Overview*',
      'name' => 'overview',
      'type' => 'textarea',
      'instructions' => 'The overview',
      'required' => '0',
      'toolbar' => 'basic',
      'media_upload' => 'no',
      'order_no' => '1',
	  'formatting' => 'html',
    ),
    2 => 
    array (
      'key' => 'field_4fb397cf752d6',
      'label' => 'Image',
      'name' => 'image',
      'type' => 'image',
      'instructions' => 'The headline image to appear aside the title on the project page',
      'required' => '0',
      'save_format' => 'url',
      'preview_size' => 'thumbnail',
      'order_no' => '2',
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
		'value' => 'ms_project',
		'order_no' => '0'
	  ),
      1 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_org',
        'order_no' => '0',
      ),
      2 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_public',
        'order_no' => '0',
      ),
      3 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_volunteer',
        'order_no' => '0',
      ),	
	  4 => 
	    array (
	      'param' => 'post_type',
	      'operator' => '==',
	      'value' => 'ms_council',
	      'order_no' => '0',
	  ),
  	  5 => 
	    array (
	      'param' => 'post_type',
	      'operator' => '==',
	      'value' => 'ms_international',
	      'order_no' => '0',
	   ),
	),
	'allorany' => 'any'
  ),
  'options' => 
  array (
	'position' => 'normal',
	'layout' => 'default',
	'show_on_page' => 
	array (
	  	0 => 'about',
		1 => 'team',
		2 => 'partners',
		3 => 'contact',
		4 => 'volunteer',
		5 => 'donate',
	)
  ),
  'menu_order' => 0
));

?>