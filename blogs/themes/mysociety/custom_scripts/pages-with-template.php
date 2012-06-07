<?php
	// Get all pages that use a particular template.
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
