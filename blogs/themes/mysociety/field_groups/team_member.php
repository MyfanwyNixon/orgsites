<?
if(!get_option('acf_repeater_ac')) update_option('acf_repeater_ac', OPTION_WORDPRESS_ACF_REPEATER);

/**
 * Register field groups
 * The register_field_group function accepts 1 array which holds the relevant data to register a field group
 * You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
 * This code must run every time the functions.php file is read
 */
if(function_exists("register_field_group"))
{
register_field_group(array (
  'id' => '4fb51908266be',
  'title' => 'Team Members',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_4fb25ace1cdc2',
      'label' => 'People',
      'name' => 'people',
      'type' => 'repeater',
      'instructions' => 'Add a number of team members',
      'required' => '0',
      'sub_fields' => 
      array (
        0 => 
        array (
          'key' => 'field_4fb25ace1cdd9',
          'label' => 'Name',
          'name' => 'name',
          'type' => 'text',
          'default_value' => '',
          'formatting' => 'none',
          'order_no' => '0',
        ),
        1 => 
        array (
          'label' => 'Position',
          'name' => 'position',
          'type' => 'text',
          'default_value' => '',
          'formatting' => 'none',
          'key' => 'field_4fb4e82cb8a8f',
          'order_no' => '1',
        ),
        2 => 
        array (
          'key' => 'field_4fb25ace1cde7',
          'label' => 'Mugshot',
          'name' => 'mug',
          'type' => 'image',
          'save_format' => 'url',
          'preview_size' => 'thumbnail',
          'order_no' => '2',
        ),
        3 => 
        array (
          'key' => 'field_4fb25ace1cdf2',
          'label' => 'About',
          'name' => 'about',
          'type' => 'wysiwyg',
          'toolbar' => 'basic',
          'media_upload' => 'no',
          'order_no' => '3',
        ),
      ),
      'row_limit' => '',
      'layout' => 'row',
      'button_label' => '+ Add Team Member',
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