<?php
/**
 * Register field groups
 * The register_field_group function accepts 1 array which holds the relevant data to register a field group
 * You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
 * This code must run every time the functions.php file is read
 */
if(function_exists("register_field_group"))
{
register_field_group(array (
  'id' => '4fc35498a9865',
  'title' => 'Partners',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_4fb4edd1496d8',
      'label' => 'Partner',
      'name' => 'partner',
      'type' => 'repeater',
      'instructions' => 'Add a partner\'s details',
      'required' => '0',
      'sub_fields' => 
      array (
        0 => 
        array (
          'key' => 'field_4fb4edd1496fb',
          'label' => 'Name',
          'name' => 'name',
          'type' => 'text',
          'default_value' => '',
          'formatting' => 'none',
          'order_no' => '0',
        ),
        1 => 
        array (
          'key' => 'field_4fb4edd14970a',
          'label' => 'Icon',
          'name' => 'icon',
          'type' => 'image',
          'save_format' => 'url',
          'preview_size' => 'thumbnail',
          'order_no' => '1',
        ),
        2 => 
        array (
          'key' => 'field_4fb4edd149716',
          'label' => 'Detail',
          'name' => 'detail',
          'type' => 'wysiwyg',
          'toolbar' => 'basic',
          'media_upload' => 'no',
          'order_no' => '2',
        ),
      ),
      'row_limit' => '',
      'layout' => 'row',
      'button_label' => '+ Add Parnter',
      'order_no' => '0',
    ),
  ),
  'location' => 
  array (
    'rules' => 
    array (
      0 => 
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'partners.php',
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
    ),
  ),
  'menu_order' => 2,
));
}
?>