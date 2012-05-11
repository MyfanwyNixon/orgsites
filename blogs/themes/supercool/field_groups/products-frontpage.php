<?php

register_field_group(array (
  'id' => '4f8be25568afa',
  'title' => 'Products Front',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_4f71b9444b1b3',
      'label' => 'Introduction',
      'name' => 'intro',
      'type' => 'textarea',
      'default_value' => '',
      'formatting' => 'none',
      'instructions' => '',
      'required' => '0',
      'order_no' => '0',
    ),
    1 => 
    array (
      'label' => 'Product Section',
      'name' => 'product-section',
      'type' => 'repeater',
      'sub_fields' => 
      array (
        0 => 
        array (
          'label' => 'Title',
          'name' => 'title',
          'type' => 'text',
          'default_value' => '',
          'formatting' => 'none',
          'key' => 'field_4f71bf4a22b54',
          'order_no' => '0',
        ),
        1 => 
        array (
          'label' => 'Text Snippet',
          'name' => 'text_snippet',
          'type' => 'textarea',
          'default_value' => '',
          'formatting' => 'none',
          'key' => 'field_4f71bf4a22b60',
          'order_no' => '1',
        ),
        2 => 
        array (
          'label' => 'Product',
          'name' => 'product',
          'type' => 'relationship',
          'post_type' => 
          array (
            0 => 'ms_product',
          ),
          'taxonomy' => 
          array (
            0 => 'all',
          ),
          'max' => '1',
          'key' => 'field_4f71bf4a22b68',
          'order_no' => '2',
        ),
      ),
      'row_limit' => '',
      'layout' => 'table',
      'instructions' => '',
      'required' => '0',
      'key' => 'field_4f71bf4a22b42',
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
        'operator' => '==',
        'value' => 'products.php',
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
      0 => 'discussion',
      1 => 'slug',
      2 => 'author'
    )
  ),
  'menu_order' => 0
));

?>