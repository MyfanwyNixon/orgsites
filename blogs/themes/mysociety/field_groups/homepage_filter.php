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
  'id' => '4fb4af835fea3',
  'title' => 'Homepage Text',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_4fb39a1912cf9',
      'label' => 'Icon',
      'name' => 'icon',
      'type' => 'image',
      'instructions' => 'Icon to appear alongside the project on the homepage',
      'required' => '1',
      'save_format' => 'url',
      'preview_size' => 'thumbnail',
      'order_no' => '0',
    ),
    1 => 
    array (
      'key' => 'field_4fb39a191328f',
      'label' => 'One liner',
      'name' => 'one_liner',
      'type' => 'text',
      'instructions' => 'A one liner to describe the project on the homepage.',
      'required' => '1',
      'default_value' => '',
      'formatting' => 'none',
      'order_no' => '1',
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
    ),
    'allorany' => 'all',
  ),
  'options' => 
  array (
    'position' => 'side',
    'layout' => 'default',
    'show_on_page' => 
    array (
      	0 => 'slug',
		1 => 'custom_fields',
    ),
  ),
  'menu_order' => 0,
));
}
?>