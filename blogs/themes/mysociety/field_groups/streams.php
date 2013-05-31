<?php

register_field_group(array (
  'id' => '51a8855acc5b2',
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
      'key' => 'field_51a61d45a510e',
      'label' => 'Banner Button Destination',
      'name' => 'banner_button_destination',
      'type' => 'text',
      'instructions' => 'The destination URL of the banner button.',
      'required' => '1',
      'default_value' => '',
      'formatting' => 'html',
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
      'key' => 'field_51a8851d6ddba',
      'label' => 'Sections',
      'name' => 'sections',
      'type' => 'repeater',
      'instructions' => 'Sections to appear under the blurb.',
      'required' => '0',
      'sub_fields' =>
      array (
        0 =>
        array (
          'key' => 'field_51a8851d6de20',
          'label' => 'Width',
          'name' => 'width',
          'type' => 'select',
          'choices' =>
          array (
            'single' => 'Single Column',
            'double' => 'Double Column',
          ),
          'default_value' => 'single',
          'allow_null' => '0',
          'multiple' => '0',
          'order_no' => '0',
        ),
        1 =>
        array (
          'key' => 'field_51a8851d6de93',
          'label' => 'Title',
          'name' => 'title',
          'type' => 'text',
          'default_value' => '',
          'formatting' => 'html',
          'order_no' => '1',
        ),
        2 =>
        array (
          'key' => 'field_51a8851d6def3',
          'label' => 'Strapline',
          'name' => 'strapline',
          'type' => 'text',
          'default_value' => '',
          'formatting' => 'html',
          'order_no' => '2',
        ),
        3 =>
        array (
          'key' => 'field_51a8851d6df5b',
          'label' => 'Items',
          'name' => 'items',
          'type' => 'repeater',
          'sub_fields' =>
          array (
            0 =>
            array (
              'key' => 'field_51a8851d6dfc8',
              'label' => 'Title',
              'name' => 'title',
              'type' => 'text',
              'default_value' => '',
              'formatting' => 'html',
              'order_no' => '0',
            ),
            1 =>
            array (
              'key' => 'field_51a8851d6e030',
              'label' => 'Strapline',
              'name' => 'strapline',
              'type' => 'text',
              'default_value' => '',
              'formatting' => 'html',
              'order_no' => '1',
            ),
            2 =>
            array (
              'key' => 'field_51a8851d6e099',
              'label' => 'Icon',
              'name' => 'icon',
              'type' => 'image',
              'save_format' => 'url',
              'preview_size' => 'medium',
              'order_no' => '2',
            ),
            3 =>
            array (
              'key' => 'field_51a8851d6e101',
              'label' => 'Destination',
              'name' => 'destination',
              'type' => 'text',
              'default_value' => '',
              'formatting' => 'none',
              'order_no' => '3',
            ),
          ),
          'row_limit' => '',
          'layout' => 'table',
          'button_label' => 'Add Item',
          'order_no' => '3',
        ),
      ),
      'row_limit' => '',
      'layout' => 'row',
      'button_label' => 'Add Section',
      'order_no' => '6',
    ),
  ),
  'location' =>
  array (
    'rules' =>
    array (
      1 =>
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_stream',
        'order_no' => '1',
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
