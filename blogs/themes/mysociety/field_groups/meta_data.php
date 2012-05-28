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
  'id' => '4fc409c4d712f',
  'title' => 'Meta Data',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_4fc4098eb0169',
      'label' => 'Meta description',
      'name' => 'meta_description',
      'type' => 'text',
      'instructions' => 'Description meta tag content (defaults to site description)',
      'required' => '0',
      'default_value' => '',
      'formatting' => 'none',
      'order_no' => '0',
    ),
    1 => 
    array (
      'key' => 'field_4fc4098eb2c81',
      'label' => 'Meta keywords',
      'name' => 'meta_keywords',
      'type' => 'text',
      'instructions' => 'Comma separated meta keywords for the page (no default)',
      'required' => '0',
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
        'value' => 'page',
        'order_no' => '0',
      ),
      1 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_project',
        'order_no' => '1',
      ),
      2 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_org',
        'order_no' => '2',
      ),
      3 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_council',
        'order_no' => '3',
      ),
      4 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_public',
        'order_no' => '4',
      ),
      5 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_volunteer',
        'order_no' => '5',
      ),
      6 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_international',
        'order_no' => '6',
      ),
    ),
    'allorany' => 'any',
  ),
  'options' => 
  array (
    'position' => 'side',
    'layout' => 'default',
    'show_on_page' => 
    array (
    ),
  ),
  'menu_order' => 5,
));
}
?>