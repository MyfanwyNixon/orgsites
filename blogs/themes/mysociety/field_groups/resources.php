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
			'public' => 'Public Site',
            'github' => 'GitHub',
            'wiki' => 'Wiki',
            'group' => 'Google Group',
            'irc' => 'IRC Channel',
            'twitter' => 'Twitter',
            'blog' => 'Blog link',
			'facebook' => 'Facebook page',
            'faq' => 'FAQ',
            'document' => 'Document',
            'brochure' => 'Brochure',
			'email' => 'Support email',
			'press' => 'Press email',
			'sales' => 'Sales email (wrap action in <strong></strong>)'
          ),
          'default_value' => '',
          'allow_null' => '0',
          'multiple' => '0',
          'order_no' => '0',
        ),
        1 => 
        array (
          'key' => 'field_4fb277b04e03c',
          'label' => 'Link Text*',
          'name' => 'text',
          'type' => 'text',
          'default_value' => 'Link text',
          'formatting' => 'html',
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
        3 => 
        array (
          'key' => 'field_4fb277b04e060',
          'label' => 'Promoted',
          'name' => 'promoted',
          'type' => 'textarea',
          'default_value' => '',
          'formatting' => 'html',
          'order_no' => '3',
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
	  5 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'ms_international',
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
	  	0 => 'slug',
		1 => 'custom_fields',
    ),
  ),
  'menu_order' => 0,
));
}
?>
