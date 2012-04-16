<?php

register_field_group(array (
  'id' => '4f8be249f090d',
  'title' => 'Commercial Options',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_4f6c891eb9aa4',
      'label' => 'Commercial Options',
      'name' => 'commercial-options',
      'type' => 'wysiwyg',
      'toolbar' => 'full',
      'media_upload' => 'yes',
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
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_project',
        'order_no' => '0'
      ),
      1 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_product',
        'order_no' => '1'
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
      0 => 'custom_fields',
      1 => 'discussion',
      2 => 'comments',
      3 => 'slug',
      4 => 'author'
    )
  ),
  'menu_order' => 0
));

?>