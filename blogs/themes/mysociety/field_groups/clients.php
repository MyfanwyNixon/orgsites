<?/**
 * Register field groups
 * The register_field_group function accepts 1 array which holds the relevant data to register a field group
 * You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
 * This code must run every time the functions.php file is read
 */

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => '50e4e9f605f83',
		'title' => 'Clients',
		'fields' => 
		array (
			0 => 
			array (
				'key' => 'field_11',
				'label' => 'Clients',
				'name' => 'clients',
				'type' => 'repeater',
				'order_no' => 0,
				'instructions' => 'A list of clients',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'null',
							'operator' => '==',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => 
				array (
					'field_12' => 
					array (
						'label' => 'Name',
						'name' => 'name',
						'type' => 'text',
						'instructions' => 'The name of the client',
						'column_width' => '',
						'default_value' => '',
						'formatting' => 'html',
						'order_no' => 0,
						'key' => 'field_12',
					),
					'field_13' => 
					array (
						'label' => 'Image',
						'name' => 'image',
						'type' => 'image',
						'instructions' => 'An image or logo to accompany the client ',
						'column_width' => '',
						'save_format' => 'url',
						'preview_size' => 'thumbnail',
						'order_no' => 1,
						'key' => 'field_13',
					),
					'field_14' => 
					array (
						'label' => 'Description',
						'name' => 'description',
						'type' => 'textarea',
						'instructions' => 'A description of our involvement with the client (formatted as HTML)',
						'column_width' => '',
						'default_value' => '',
						'formatting' => 'html',
						'order_no' => 2,
						'key' => 'field_14',
					),
				),
				'row_min' => 0,
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add Client',
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
			'layout' => 'no_box',
			'hide_on_screen' => 
			array (
				0 => 'excerpt',
				1 => 'discussion',
				2 => 'comments',
				3 => 'revisions',
				4 => 'slug',
				5 => 'author',
				6 => 'format',
				7 => 'featured_image',
				8 => 'categories',
				9 => 'tags',
				10 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
}
?>