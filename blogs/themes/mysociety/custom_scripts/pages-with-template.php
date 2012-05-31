<?php
	// Get all pages that use a particular template.
	//
	// The $templates argument should be an array of template names.
	// Returns a WP_Query object representing all the pages that use one
	// of the listed templates.
	//
	// This is used in footer-about.php to generate the navigation sections.
	function pages_with_template($templates) {
		$templates["compare"] = "IN";
		return new WP_Query(
			array(
				'post_type' => 'page',
				'meta_query' => array(
					array(
						'key' => '_wp_page_template',
						'value' => $templates
					)
				)
			)
		);
	}
?>
