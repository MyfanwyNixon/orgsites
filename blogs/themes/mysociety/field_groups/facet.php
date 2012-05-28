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
  'id' => '4fb519297161b',
  'title' => 'Project Facet',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_4fb27366b6e02',
      'label' => 'Facet',
      'name' => 'facet',
      'type' => 'relationship',
      'instructions' => 'A facet of a project ie. Fix My Street for Organisations, Fix My Street for Councils etc.',
      'required' => '0',
      'post_type' => 
      array (
        0 => 'ms_org',
        1 => 'ms_council',
        2 => 'ms_public',
        3 => 'ms_volunteer',
		4 => 'ms_international',
      ),
      'taxonomy' => 
      array (
        0 => 'all',
      ),
      'max' => '-1',
      'order_no' => '0',
    ),
  ),
  'location' => 
  array (
    'rules' => 
    array (
      3 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_project',
        'order_no' => '3',
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