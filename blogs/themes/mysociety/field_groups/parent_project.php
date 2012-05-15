<?
/**
 * Register field groups
 * The register_field_group function accepts 1 array which holds the relevant data to register a field group
 * You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
 * This code must run every time the functions.php file is read
 */
if(function_exists("register_field_group"))
{
register_field_group(array (
  'id' => '4fb27f44aa8eb',
  'title' => 'Parent Project',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_4fb27366b6e02',
      'label' => 'Parent',
      'name' => 'parent',
      'type' => 'relationship',
      'instructions' => 'Add the parent project',
      'required' => '1',
      'post_type' => 
      array (
        0 => 'ms_project',
      ),
      'taxonomy' => 
      array (
        0 => 'all',
      ),
      'max' => '1',
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
        'value' => 'ms_org',
        'order_no' => '0',
      ),
      1 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_councils',
        'order_no' => '1',
      ),
      2 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_volunteer',
        'order_no' => '2',
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