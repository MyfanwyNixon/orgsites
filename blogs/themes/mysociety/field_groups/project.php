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
  'id' => '4fb27e34a37e8',
  'title' => 'Project',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_4fb258b51e211',
      'label' => 'Name',
      'name' => 'name',
      'type' => 'text',
      'instructions' => 'Project name',
      'required' => '1',
      'default_value' => 'New project',
      'formatting' => 'none',
      'order_no' => '0',
    ),
    1 => 
    array (
      'key' => 'field_4fb258b51eb4b',
      'label' => 'Strapline',
      'name' => 'strapline',
      'type' => 'text',
      'instructions' => '',
      'required' => '0',
      'default_value' => 'A witty strapline',
      'formatting' => 'none',
      'order_no' => '1',
    ),
    2 => 
    array (
      'key' => 'field_4fb258b51f1f8',
      'label' => 'Overview',
      'name' => 'overview',
      'type' => 'wysiwyg',
      'instructions' => '',
      'required' => '0',
      'toolbar' => 'basic',
      'media_upload' => 'no',
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
        'value' => 'ms_project',
        'order_no' => '0',
      ),
      1 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_org',
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
    ),
    'allorany' => 'any',
  ),
  'options' => 
  array (
    'position' => 'normal',
    'layout' => 'default',
    'show_on_page' => 
    array (
      0 => 'the_content',
      1 => 'custom_fields',
      2 => 'slug',
    ),
  ),
  'menu_order' => 0,
));
}
?>