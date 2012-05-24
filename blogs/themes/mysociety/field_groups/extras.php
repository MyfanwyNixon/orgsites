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
  'id' => '4fbdf218c2696',
  'title' => 'Extras',
  'fields' => 
  array (
    0 => 
    array (
      'label' => 'Extras label',
      'name' => 'extras_label',
      'type' => 'text',
      'instructions' => 'The text that appears alongside the heading \'extras\'',
      'required' => '0',
      'default_value' => 'Integration Options',
      'formatting' => 'none',
      'key' => 'field_4fbdf208708d9',
      'order_no' => '0',
    ),
    1 => 
    array (
      'label' => 'Extras',
      'name' => 'extras',
      'type' => 'repeater',
      'instructions' => 'The extra features that can be added',
      'required' => '0',
      'sub_fields' => 
      array (
        0 => 
        array (
          'label' => 'name',
          'name' => 'name',
          'type' => 'text',
          'default_value' => 'the name of the extra',
          'formatting' => 'none',
          'key' => 'field_4fbdf208711fc',
          'order_no' => '0',
        ),
        1 => 
        array (
          'label' => 'Price from',
          'name' => 'from',
          'type' => 'text',
          'default_value' => '',
          'formatting' => 'none',
          'key' => 'field_4fbdf20871210',
          'order_no' => '1',
        ),
        2 => 
        array (
          'label' => 'Price Ongoing',
          'name' => 'ongoing',
          'type' => 'text',
          'default_value' => '',
          'formatting' => 'none',
          'key' => 'field_4fbdf20871222',
          'order_no' => '2',
        ),
      ),
      'row_limit' => '',
      'layout' => 'table',
      'button_label' => '+ Add Row',
      'key' => 'field_4fbdf208711db',
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
        'value' => 'ms_org',
        'order_no' => '0',
      ),
      1 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_council',
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
    ),
  ),
  'menu_order' => 0,
));
}
?>