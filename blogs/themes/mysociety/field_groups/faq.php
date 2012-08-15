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
  'id' => '4fd0b0ae4dac2',
  'title' => 'FAQ',
  'fields' => 
  array (
    0 => 
    array (
      'label' => 'FAQs',
      'name' => 'faqs',
      'type' => 'repeater',
      'instructions' => 'Add questions and answers',
      'required' => '0',
      'sub_fields' => 
      array (
        0 => 
        array (
          'label' => 'Question',
          'name' => 'question',
          'type' => 'text',
          'default_value' => 'A Question',
          'formatting' => 'none',
          'key' => 'field_4fd0b0a6c89ed',
          'order_no' => '0',
        ),
        1 => 
        array (
          'label' => 'Answer',
          'name' => 'answer',
          'type' => 'wysiwyg',
          'toolbar' => 'basic',
          'media_upload' => 'yes',
          'key' => 'field_4fd0b0a6c8ac8',
          'order_no' => '1',
        ),
      ),
      'row_limit' => '',
      'layout' => 'row',
      'button_label' => 'Add Question',
      'key' => 'field_4fd0b0a6c895f',
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
        'value' => 'faq.php',
        'order_no' => '0',
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
      0 => 'slug',
	  1 => 'custom_fields',
    ),
  ),
  'menu_order' => 0,
));
}

?>