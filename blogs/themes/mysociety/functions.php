<?

  //register custom post types
  add_action( 'init', 'create_post_type' );
  function create_post_type() {
		//generic projects
		register_post_type(
			'ms_project',
			array(
				'labels' => array(
					'name'				=> __( 'Projects', 'mysociety' ),
					'singular_name'		=> __( 'Project', 'mysociety' ),
					'add_new_item'		=> __( 'Add New Project', 'mysociety' ),
					'edit_item'			=> __( 'Edit Project', 'mysociety'),
					'new_item'			=> __( 'New Project', 'mysociety' ),
					'view_item'			=> __( 'View Project', 'mysociety'),
					'search_items'		=> __( 'Search Projects', 'mysociety' ),
					'not_found'			=> __( 'No projects found', 'mysociety' ),
					'not_found_in_trash'	=> __( 'No projects found in Trash', 'mysociety' 
				)
			),
			'taxonomies'		=> array('category'),
			'public'			=> true,
			'has_archive'	=> false,
			'menu_position'	=> 5,
			'rewrite'		=> array('slug' => 'projects', 'with_front'	=> false),
			)
		);
		
		//for organisations
		register_post_type(
			'ms_org',
			array(
				'labels' => array(
					'name'				=> __( 'For Organisations', 'mysociety' ),
					'singular_name'		=> __( 'Commercial Project', 'mysociety' ),
					'add_new_item'		=> __( 'Add New Commercial Project', 'mysociety' ),
					'edit_item'			=> __( 'Edit Commercial Project', 'mysociety'),
					'new_item'			=> __( 'New Commercial Project', 'mysociety' ),
					'view_item'			=> __( 'View commercial Project', 'mysociety'),
					'search_items'		=> __( 'Search Commercial Projects', 'mysociety' ),
					'not_found'			=> __( 'No projects found', 'mysociety' ),
					'not_found_in_trash'	=> __( 'No projects found in Trash', 'mysociety' 
				)
			),
			'taxonomies'		=> array('category'),
			'public'			=> true,
			'has_archive'	=> false,
			'menu_position'	=> 5,
			'rewrite'		=> array('slug' => 'for-orgs', 'with_front'	=> false),
			)
		);
		
		//for councils
		register_post_type(
			'ms_council',
			array(
				'labels' => array(
					'name'				=> __( 'For Councils', 'mysociety' ),
					'singular_name'		=> __( 'Civil Project', 'mysociety' ),
					'add_new_item'		=> __( 'Add New Civic Project', 'mysociety' ),
					'edit_item'			=> __( 'Edit Civic Project', 'mysociety'),
					'new_item'			=> __( 'New Civic Project', 'mysociety' ),
					'view_item'			=> __( 'View Civic Project', 'mysociety'),
					'search_items'		=> __( 'Search Civic Projects', 'mysociety' ),
					'not_found'			=> __( 'No projects found', 'mysociety' ),
					'not_found_in_trash'	=> __( 'No projects found in Trash', 'mysociety' 
				)
			),
			'taxonomies'		=> array('category'),
			'public'			=> true,
			'has_archive'	=> false,
			'menu_position'	=> 5,
			'rewrite'		=> array('slug' => 'for-councils', 'with_front' => false),
			)
		);
		
		//for the public
		register_post_type(
			'ms_public',
			array(
				'labels' => array(
					'name'				=> __( 'For The Public', 'mysociety' ),
					'singular_name'		=> __( 'Public Project', 'mysociety' ),
					'add_new_item'		=> __( 'Add New Public Project', 'mysociety' ),
					'edit_item'			=> __( 'Edit Public Project', 'mysociety'),
					'new_item'			=> __( 'New Public Project', 'mysociety' ),
					'view_item'			=> __( 'View Public Project', 'mysociety'),
					'search_items'		=> __( 'Search Public Projects', 'mysociety' ),
					'not_found'			=> __( 'No projects found', 'mysociety' ),
					'not_found_in_trash'	=> __( 'No projects found in Trash', 'mysociety' 
				)
			),
			'taxonomies'		=> array('category'),
			'public'			=> true,
			'has_archive'	=> false,
			'menu_position'	=> 5,
			'rewrite'		=> array('slug' => 'for-the-public', 'with_front' 	=> false),
			)
		);
		
		//for volunteers
		register_post_type(
			'ms_volunteer',
			array(
				'labels' => array(
					'name'				=> __( 'For Volunteers', 'mysociety' ),
					'singular_name'		=> __( 'Volunteer Project', 'mysociety' ),
					'add_new_item'		=> __( 'Add New Volunteer Project', 'mysociety' ),
					'edit_item'			=> __( 'Edit Volunteer Project', 'mysociety'),
					'new_item'			=> __( 'New Volunteer Project', 'mysociety' ),
					'view_item'			=> __( 'View Volunteer Project', 'mysociety'),
					'search_items'		=> __( 'Search Volunteer Projects', 'mysociety' ),
					'not_found'			=> __( 'No projects found', 'mysociety' ),
					'not_found_in_trash'	=> __( 'No projects found in Trash', 'mysociety' 
				)
			),
			'taxonomies'		=> array('category'),
			'public'			=> true,
			'has_archive'	=> false,
			'menu_position'	=> 5,
			'rewrite'		=> array('slug' => 'for-volunteers', 'with_front' 	=> false),
			)
		);
		
		//International
		register_post_type(
			'ms_international',
			array(
				'labels' => array(
					'name'				=> __( 'International', 'mysociety' ),
					'singular_name'		=> __( 'International Project', 'mysociety' ),
					'add_new_item'		=> __( 'Add New International Project', 'mysociety' ),
					'edit_item'			=> __( 'Edit International Project', 'mysociety'),
					'new_item'			=> __( 'New International Project', 'mysociety' ),
					'view_item'			=> __( 'View International Project', 'mysociety'),
					'search_items'		=> __( 'Search International Projects', 'mysociety' ),
					'not_found'			=> __( 'No projects found', 'mysociety' ),
					'not_found_in_trash'	=> __( 'No projects found in Trash', 'mysociety' 
				)
			),
			'taxonomies'		=> array('category'),
			'public'			=> true,
			'has_archive'	=> false,
			'menu_position'	=> 5,
			'rewrite'		=> array('slug' => 'international', 'with_front' 	=> false),
			)
		);
		
		// NOTE: if you add another custom post type uncomment this line below
		flush_rewrite_rules();
	}

	//register custom menu types
	add_action('init', 'register_custom_menu');

	function register_custom_menu() {
		register_nav_menu('footer_menu', __('Footer Menu'));
	}

	//register the purchase of custom fields once and only once
	if(!get_option('acf_repeater_ac')) update_option('acf_repeater_ac', OPTION_WORDPRESS_ACF_REPEATER);

	// register ACF field groups
	if(function_exists("register_field_group")) {
		include 'field_groups/basic.php';//Basic project info
		include 'field_groups/meta_data.php';//Page meta data
		include 'field_groups/case_studies.php';//Project case studies
		include 'field_groups/facet.php';//Facets of a project (for orgs, for councils etc)
		include 'field_groups/features.php';//Project features
		include 'field_groups/homepage_filter.php';//Text that appears for the project on the homepage
		include 'field_groups/project_text.php';//Text that appears for the facet on it's parent project page
		include 'field_groups/partners.php';//Commerical and charitable partners
		include 'field_groups/pricing.php';//Core pricing
		include 'field_groups/extras.php'; //Pricing extras
		include 'field_groups/resources.php'; //Project reqsources
		include 'field_groups/team_member.php';	//People
		include 'field_groups/faq.php'; //FAQs	
	}
	
	//include some custom scripts for helping in page templates
	include('custom_scripts/entitle.php'); //rewrites titles in facet pages correctly (TODO deprecate)
	include('custom_scripts/pages-with-template.php'); //runs meta queries on wordpress to check whether a page has a certina template
	include 'custom_scripts/theme_comments.php'; //writes out comment blocks in blog posts
	include 'custom_scripts/resources.php'; //counts resources and features to ensure we mark up in CS correctly
	
	
?>