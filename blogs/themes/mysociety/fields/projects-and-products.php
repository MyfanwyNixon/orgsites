<?php

register_field_group(array (
  'title' => 'Projects and Products',
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
      'order_no' => '0',
    ),
    1 => 
    array (
      'key' => 'field_4f6c8548bc2f8',
      'label' => 'Build your own',
      'name' => 'build-your-own',
      'type' => 'wysiwyg',
      'toolbar' => 'full',
      'media_upload' => 'yes',
      'instructions' => '',
      'required' => '0',
      'order_no' => '1',
    ),
    2 => 
    array (
      'key' => 'field_4f6c891ec346c',
      'label' => 'Resources',
      'name' => 'resources',
      'type' => 'repeater',
      'sub_fields' => 
      array (
        0 => 
        array (
          'key' => 'field_4f6c891ec3493',
          'label' => 'Title',
          'name' => 'title',
          'type' => 'text',
          'default_value' => '',
          'formatting' => 'none',
          'order_no' => '0',
        ),
        1 => 
        array (
          'key' => 'field_4f6c891ec34a1',
          'label' => 'URL',
          'name' => 'url',
          'type' => 'text',
          'default_value' => '',
          'formatting' => 'none',
          'order_no' => '1',
        ),
        2 => 
        array (
          'key' => 'field_4f6c891ec34aa',
          'label' => 'Type',
          'name' => 'type',
          'type' => 'select',
          'choices' => 
          array (
            'github' => 'GitHub',
            'codeblog' => 'Code blog',
            'wikidocs' => 'Wiki and Docs',
            'twitter' => 'Twitter',
            'example' => 'Example',
            'download' => 'Download',
            'link' => 'Link',
          ),
          'default_value' => '',
          'allow_null' => '0',
          'multiple' => '0',
          'order_no' => '2',
        ),
      ),
      'row_limit' => '',
      'layout' => 'table',
      'instructions' => 'For each type please provide a valid URL except for the Twitter type, where it is required that you just provide the username without the preceding "@".',
      'required' => '0',
      'order_no' => '2',
    ),
    3 => 
    array (
      'key' => 'field_4f6c899cb34a7',
      'label' => 'Mailing List',
      'name' => 'mailing-list',
      'type' => 'text',
      'default_value' => '',
      'formatting' => 'none',
      'instructions' => 'Please provide the Campaign ID (CHECK WHAT THIS IS) from MailChimp here.',
      'required' => '0',
      'order_no' => '3',
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
        'order_no' => '0',
      ),
      1 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_product',
        'order_no' => '1',
      ),
    ),
    'allorany' => 'any',
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
      4 => 'author',
    ),
  ),
  'menu_order' => 0,
));

?>