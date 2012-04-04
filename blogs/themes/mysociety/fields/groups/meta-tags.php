<?php

register_field_group(array (
  'title' => 'Meta',
  'fields' => 
  array (
    0 => 
    array (
      'label' => 'Tags',
      'name' => 'related_tag',
      'type' => 'categories',
      'post_type' => 'ms_faq',
      'child_of' => '',
      'parent' => '',
      'orderby' => 'id',
      'order' => 'ASC',
      'hide_empty' => '1',
      'hierarchical' => '1',
      'taxonomy' => 'post_tag',
      'include' => '',
      'exclude' => '',
      'display_type' => 'checkboxes',
      'ret_val' => '0',
      'instructions' => '',
      'required' => '0',
      'key' => 'field_4f7c7f5deaaf3',
      'order_no' => '0',
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
        'value' => 'ms_faq',
        'order_no' => '0'
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