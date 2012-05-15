<?php

register_field_group(array (
  'id' => '4f8be25040669',
  'title' => 'People',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_4f6c7faec06f5',
      'label' => 'Person',
      'name' => 'person',
      'type' => 'repeater',
      'sub_fields' => 
      array (
        0 => 
        array (
          'key' => 'field_4f6c859b62cf8',
          'label' => 'Image',
          'name' => 'image',
          'type' => 'image',
          'save_format' => 'id',
          'preview_size' => 'thumbnail',
          'order_no' => '0'
        ),
        1 => 
        array (
          'key' => 'field_4f6c8702eebff',
          'label' => 'Alt',
          'name' => 'alt',
          'type' => 'text',
          'default_value' => '',
          'formatting' => 'none',
          'order_no' => '1'
        ),
        2 => 
        array (
          'key' => 'field_4f6c8702eec0f',
          'label' => 'Name',
          'name' => 'name',
          'type' => 'text',
          'default_value' => '',
          'formatting' => 'none',
          'order_no' => '2'
        ),
		3 => 
        array (
          'key' => 'field_4f6c8703eec0f',
          'label' => 'Text',
          'name' => 'text',
          'type' => 'wysiwyg',
		  'toolbar' => 'full',
		  'media_upload' => 'no',
          'order_no' => '3'
        )
      ),
      'row_limit' => '15',
      'layout' => 'table',
      'instructions' => '',
      'required' => '0',
      'order_no' => '0'
    )
  ),
  'location' => 
  array (
    'rules' => 
    array (
      0 => 
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'about.php',
        'order_no' => '0'
      ),
      1 => 
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'default',
        'order_no' => '1'
      ),
      2 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_project',
        'order_no' => '2'
      ),
      3 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_product',
        'order_no' => '3'
      ),
      4 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'post',
        'order_no' => '4'
      )
    ),
    'allorany' => 'any'
  ),
  'options' => 
  array (
    'position' => 'normal',
    'layout' => 'default',
    'show_on_page' => 
    array (
      0 => 'team',
    )
  ),
  'menu_order' => 0
));

?>