<?php
/**
 * Activate Add-ons
 * Here you can enter your activation codes to unlock Add-ons to use in your theme. 
 * Since all activation codes are multi-site licenses, you are allowed to include your key in premium themes. 
 * Use the commented out code to update the database with your activation code. 
 * You may place this code inside an IF statement that only runs on theme activation.
 */ 
if(!get_option('acf_repeater_ac')) update_option('acf_repeater_ac', OPTION_WORDPRESS_ACF_REPEATER);
// if(!get_option('acf_options_ac')) update_option('acf_options_ac', "xxxx-xxxx-xxxx-xxxx");
// if(!get_option('acf_flexible_content_ac')) update_option('acf_flexible_content_ac', "xxxx-xxxx-xxxx-xxxx");


/**
 * Register field groups
 * The register_field_group function accepts 1 array which holds the relevant data to register a field group
 * You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
 * This code must run every time the functions.php file is read
 */
if(function_exists("register_field_group"))
{
register_field_group(array (
  'id' => '4fba212bcbfe4',
  'title' => 'Resources',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_4fb277b04dfd6',
      'label' => 'Resources',
      'name' => 'resources',
      'type' => 'repeater',
      'instructions' => 'Links to project resources',
      'required' => '0',
      'sub_fields' => 
      array (
        0 => 
        array (
          'key' => 'field_4fb277b04dfed',
          'label' => 'Type',
          'name' => 'type',
          'type' => 'select',
          'choices' => 
          array (
            'github' => 'github',
            'wiki' => 'wiki',
            'group' => 'group',
            'irc' => 'irc',
            'twitter' => 'twitter',
            'blog' => 'blog',
            'faq' => 'faq',
            'leaflet' => 'leaflet',
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
        'order_no' => '1',
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
        'order_no' => '4',
      ),
      3 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_public',
        'order_no' => '2',
      ),
      4 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_council',
        'order_no' => '4',
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