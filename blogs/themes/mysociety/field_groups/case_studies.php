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
  'id' => '4fb27ed100f3d',
  'title' => 'Case Studies',
  'fields' => 
  array (
    0 => 
    array (
      'label' => 'Case Study',
      'name' => 'case_study',
      'type' => 'repeater',
      'instructions' => 'A selection of case studies',
      'required' => '0',
      'sub_fields' => 
      array (
        0 => 
        array (
          'label' => 'Client',
          'name' => 'client',
          'type' => 'text',
          'default_value' => '',
          'formatting' => 'none',
          'key' => 'field_4fb27b94ed74f',
          'order_no' => '0',
        ),
        1 => 
        array (
          'label' => 'Image',
          'name' => 'image',
          'type' => 'text',
          'default_value' => '',
          'formatting' => 'none',
          'key' => 'field_4fb27b94ed76a',
          'order_no' => '1',
        ),
        2 => 
        array (
          'label' => 'Blurb',
          'name' => 'blurb',
          'type' => 'textarea',
          'default_value' => '',
          'formatting' => 'br',
          'key' => 'field_4fb27b94ed783',
          'order_no' => '2',
        ),
      ),
      'row_limit' => '',
      'layout' => 'row',
      'button_label' => '+ Add Case Study',
      'key' => 'field_4fb27b94ed718',
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
    ),
    'allorany' => 'all',
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