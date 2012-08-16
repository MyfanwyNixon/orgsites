<?

	add_theme_support( 'automatic-feed-links' );

	// Add other size image support
	if ( function_exists('add_image_size') ) {
	    add_image_size( 'feature-thumb', 460, 9999 );
	}

	//register custom menu types
	add_action('init', 'register_custom_menu');

	function register_custom_menu() {
		register_nav_menu('footer_menu', __('Footer Menu'));
	}

	//register the purchase of custom fields once and only once
	if(!get_option('acf_repeater_ac')) update_option('acf_repeater_ac', OPTION_WORDPRESS_ACF_REPEATER);
	
	//include some custom scripts for helping in page templates
	include 'custom_scripts/theme_comments.php'; //writes out comment blocks in blog posts
	
?>
