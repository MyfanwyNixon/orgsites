<?php

register_field_group(array (
  'title' => 'Meta',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_4f6c899cb34a7',
      'label' => 'Mailing List',
      'name' => 'mailing-list',
      'type' => 'text',
      'default_value' => '',
      'formatting' => 'none',
      'instructions' => 'Please provide the Campaign ID (CHECK WHAT THIS IS) from MailChimp here.',
      'required' => '0',
      'order_no' => '0'
    ),
    1 => 
    array (
      'key' => 'field_4f71cc84c31b8',
      'label' => 'Colour',
      'name' => 'colour',
      'type' => 'select',
      'choices' => array(
        'yellow' => 'Yellow',
        'blue' => 'Blue'
      ),
      'default_value' => '',
      'allow_null' => '0',
      'multiple' => '0',
      'order_no' => '1'
    ),
    2 => 
    array (
      'key' => 'field_4f71ced276f70',
      'label' => 'Council',
      'name' => 'council',
      'type' => 'text',
      'default_value' => '',
      'formatting' => 'none',
      'order_no' => '2'
    ),
    3 => 
    array (
      'label' => 'Category',
      'name' => 'related_category',
      'type' => 'categories',
      'post_type' => 'post',
      'child_of' => '',
      'parent' => '',
      'orderby' => 'name',
      'order' => 'ASC',
      'hide_empty' => '1',
      'hierarchical' => '1',
      'taxonomy' => 'category',
      'include' => '',
      'exclude' => '',
      'display_type' => 'drop_down',
      'ret_val' => '0',
      'instructions' => 'Select the category that matches this project or product. This enables such joyous things as the news feed from that category.',
      'required' => '1',
      'key' => 'field_4f759525ed61f',
      'order_no' => '3'
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
    'position' => 'side',
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