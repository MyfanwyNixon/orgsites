<?/**
 * Register field groups
 * The register_field_group function accepts 1 array which holds the relevant data to register a field group
 * You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
 * This code must run every time the functions.php file is read
 */
if(function_exists("register_field_group"))
{
register_field_group(array (
  'id' => '50ef7072a958d',
  'title' => 'Clients',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_50ef6f7b972aa',
      'label' => 'Clients',
      'name' => 'clients',
      'type' => 'repeater',
      'instructions' => 'Add a new client',
      'required' => '1',
      'sub_fields' => 
      array (
        0 => 
        array (
          'key' => 'field_50ef6f7b97321',
          'label' => 'name',
          'name' => 'name',
          'type' => 'text',
          'default_value' => '',
          'formatting' => 'none',
          'order_no' => '0',
        ),
        1 => 
        array (
          'key' => 'field_50ef6f7b97388',
          'label' => 'description',
          'name' => 'description',
          'type' => 'textarea',
          'default_value' => '',
          'formatting' => 'html',
          'order_no' => '1',
        ),
        2 => 
        array (
          'key' => 'field_50ef6f7b973f2',
          'label' => 'image',
          'name' => 'image',
          'type' => 'image',
          'save_format' => 'url',
          'preview_size' => 'thumbnail',
          'order_no' => '2',
        ),
      ),
      'row_limit' => '',
      'layout' => 'row',
      'button_label' => 'Add Client',
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
        'value' => 'clients.php',
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
		0 => 'excerpt'
    ),
  ),
  'menu_order' => 0,
));
}?>