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
  'id' => '4fb27e8eb24a6',
  'title' => 'Team Members',
  'fields' => 
  array (
    0 => 
    array (
      'label' => 'People',
      'name' => 'people',
      'type' => 'repeater',
      'instructions' => 'Add a number of team members',
      'required' => '0',
      'sub_fields' => 
      array (
        0 => 
        array (
          'label' => 'Name',
          'name' => 'name',
          'type' => 'text',
          'default_value' => '',
          'formatting' => 'none',
          'key' => 'field_4fb25ace1cdd9',
          'order_no' => '0',
        ),
        1 => 
        array (
          'label' => 'Mugshot',
          'name' => 'mug',
          'type' => 'image',
          'save_format' => 'url',
          'preview_size' => 'thumbnail',
          'key' => 'field_4fb25ace1cde7',
          'order_no' => '1',
        ),
        2 => 
        array (
          'label' => 'About',
          'name' => 'about',
          'type' => 'wysiwyg',
          'toolbar' => 'basic',
          'media_upload' => 'no',
          'key' => 'field_4fb25ace1cdf2',
          'order_no' => '2',
        ),
      ),
      'row_limit' => '',
      'layout' => 'row',
      'button_label' => '+ Add Team Member',
      'key' => 'field_4fb25ace1cdc2',
      'order_no' => '0',
    ),
  ),
  'location' => 
  array (
    'rules' => 
    array (
      1 => 
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'team.php',
        'order_no' => '1',
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