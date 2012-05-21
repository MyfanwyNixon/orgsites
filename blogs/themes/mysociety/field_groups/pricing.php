<?php
/**
 * Activate Add-ons
 * Here you can enter your activation codes to unlock Add-ons to use in your theme. 
 * Since all activation codes are multi-site licenses, you are allowed to include your key in premium themes. 
 * Use the commented out code to update the database with your activation code. 
 * You may place this code inside an IF statement that only runs on theme activation.
 */ 
// if(!get_option('acf_repeater_ac')) update_option('acf_repeater_ac', "xxxx-xxxx-xxxx-xxxx");
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
  'id' => '4fba2156abe23',
  'title' => 'Pricing',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_4fb25835ae761',
      'label' => 'Offer',
      'name' => 'offer',
      'type' => 'repeater',
      'instructions' => 'A price point',
      'required' => '0',
      'sub_fields' => 
      array (
        0 => 
        array (
          'key' => 'field_4fb25835ae77c',
          'label' => 'Overview',
          'name' => 'overview',
          'type' => 'text',
          'default_value' => 'Brief description of the offer',
          'formatting' => 'html',
          'order_no' => '0',
        ),
        1 => 
        array (
          'key' => 'field_4fb25835ae7a3',
          'label' => 'Image',
          'name' => 'image',
          'type' => 'image',
          'save_format' => 'url',
          'preview_size' => 'thumbnail',
          'order_no' => '1',
        ),
        2 => 
        array (
          'key' => 'field_4fb25835ae78a',
          'label' => 'Price from',
          'name' => 'from',
          'type' => 'text',
          'default_value' => '1000',
          'formatting' => 'none',
          'order_no' => '2',
        ),
        3 => 
        array (
          'key' => 'field_4fb25835ae795',
          'label' => 'Details',
          'name' => 'details',
          'type' => 'wysiwyg',
          'toolbar' => 'basic',
          'media_upload' => 'no',
          'order_no' => '3',
        ),
      ),
      'row_limit' => '',
      'layout' => 'row',
      'button_label' => '+ Add Price Point',
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
        'value' => 'ms_council',
        'order_no' => '1',
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