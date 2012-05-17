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
  'id' => '4fb4f5382010d',
  'title' => 'Resources',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_4fb277b04dfd6',
      'label' => 'Links',
      'name' => 'links',
      'type' => 'repeater',
      'instructions' => 'Links to project resources',
      'required' => '0',
      'sub_fields' => 
      array (
        0 => 
        array (
          'key' => 'field_4fb277b04dfed',
          'label' => 'Destination',
          'name' => 'destination',
          'type' => 'select',
          'choices' => 
          array (
            'github: GitHub' => 'github: GitHub',
            'wiki' => 'Wiki',
            'group: Google Group' => 'group: Google Group',
            'IRC: IRC Channel' => 'IRC: IRC Channel',
            'Twitter: twitter name' => 'Twitter: twitter name',
            'Blog: Blog' => 'Blog: Blog',
            'faq: FAQ' => 'faq: FAQ',
            'leaflet' => 'Downloadable Leaflet',
          ),
          'default_value' => '',
          'allow_null' => '0',
          'multiple' => '0',
          'order_no' => '0',
        ),
        1 => 
        array (
          'key' => 'field_4fb277b04e03c',
          'label' => 'Link Text',
          'name' => 'text',
          'type' => 'text',
          'default_value' => 'Link text',
          'formatting' => 'none',
          'order_no' => '1',
        ),
        2 => 
        array (
          'key' => 'field_4fb277b04e059',
          'label' => 'URL',
          'name' => 'url',
          'type' => 'text',
          'default_value' => 'http//example.com',
          'formatting' => 'none',
          'order_no' => '2',
        ),
      ),
      'row_limit' => '',
      'layout' => 'table',
      'button_label' => '+ Add Resource',
      'order_no' => '0',
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
        'value' => 'ms_volunteer',
        'order_no' => '0',
      ),
      1 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_public',
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
        'value' => 'ms_public',
        'order_no' => '3',
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