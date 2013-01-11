<?/**
 * Register field groups
 * The register_field_group function accepts 1 array which holds the relevant data to register a field group
 * You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
 * This code must run every time the functions.php file is read
 */
if(function_exists("register_field_group"))
{
register_field_group(array (
  'id' => '50ef708e19a16',
  'title' => 'Funders',
  'fields' => 
  array (
    0 => 
    array (
      'label' => 'Funders',
      'name' => 'funders',
      'type' => 'repeater',
      'instructions' => 'A list of funders',
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
          'key' => 'field_50ef703c38e68',
          'order_no' => '0',
        ),
        1 => 
        array (
          'label' => 'Icon',
          'name' => 'icon',
          'type' => 'image',
          'save_format' => 'url',
          'preview_size' => 'thumbnail',
          'key' => 'field_50ef703c38ecf',
          'order_no' => '1',
        ),
        2 => 
        array (
          'label' => 'detail',
          'name' => 'detail',
          'type' => 'textarea',
          'default_value' => '',
          'formatting' => 'html',
          'key' => 'field_50ef703c38f3a',
          'order_no' => '2',
        ),
      ),
      'row_limit' => '',
      'layout' => 'row',
      'button_label' => 'Add Funder',
      'key' => 'field_50ef703c38e01',
      'order_no' => '0',
    ),
  ),
  'location' => 
  array (
    'rules' => 
    array (
      0 => 
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'funders.php',
        'order_no' => '0',
      ),
    ),
    'allorany' => 'all',
  ),
  'options' => 
  array (
    'position' => 'normal',
    'layout' => 'default',
    'hide_on_screen' => 
    array (
      0 => 'excerpt',
      1 => 'discussion',
      2 => 'comments',
      3 => 'author',
      4 => 'format',
      5 => 'featured_image',
    ),
  ),
  'menu_order' => 0,
));
}?>