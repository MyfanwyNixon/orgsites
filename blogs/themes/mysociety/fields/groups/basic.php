<?php

register_field_group(array (
  'title' => 'Basic',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_4f6c7fae9eaa8',
      'label' => 'Introduction',
      'name' => 'intro',
      'type' => 'textarea',
      'default_value' => '',
      'formatting' => 'none',
      'instructions' => '',
      'required' => '0',
      'order_no' => '0'
    ),
    1 => 
    array (
      'key' => 'field_4f6c7faeae066',
      'label' => 'Body',
      'name' => 'body',
      'type' => 'wysiwyg',
      'toolbar' => 'full',
      'media_upload' => 'yes',
      'instructions' => '',
      'required' => '0',
      'order_no' => '1'
    )
  ),
  'location' => 
  array (
    'rules' => 
    array (
      0 => 
      array (
        'param' => 'page_template',
        'operator' => '!=',
        'value' => 'products.php',
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
      0 => 'discussion',
      1 => 'comments',
      2 => 'slug',
      3 => 'author'
    )
  ),
  'menu_order' => 0
));

?>