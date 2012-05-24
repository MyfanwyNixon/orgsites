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
  'id' => '4fbe275fa8eda',
  'title' => 'Project Text',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_4fbe26db888dd',
      'label' => 'Headline',
      'name' => 'headline',
      'type' => 'text',
      'instructions' => 'The headline text for this project\'s \'facet\'',
      'required' => '1',
      'default_value' => '',
      'formatting' => 'none',
      'order_no' => '0',
    ),
    1 => 
    array (
      'key' => 'field_4fbe26db89030',
      'label' => 'One liner',
      'name' => 'one_liner',
      'type' => 'text',
      'instructions' => 'The one line statement that appears below the headline',
      'required' => '1',
      'default_value' => '',
      'formatting' => 'html',
      'order_no' => '1',
    ),
    2 => 
    array (
      'key' => 'field_4fbe26db895a7',
      'label' => 'Link text',
      'name' => 'link_text',
      'type' => 'text',
      'instructions' => 'the text to present for click through ie \'click here to find out more\'',
      'required' => '1',
      'default_value' => 'click here to find out more',
      'formatting' => 'none',
      'order_no' => '2',
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
      2 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_public',
        'order_no' => '2',
      ),
      3 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_volunteer',
        'order_no' => '3',
      ),
      4 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_international',
        'order_no' => '4',
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
  'menu_order' => 0,
));
}
?>