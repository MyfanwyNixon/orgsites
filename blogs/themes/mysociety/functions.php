<?php
  //include image resizing extension
  //script is here: https://gist.github.com/1367237
  //based off this: http://core.trac.wordpress.org/ticket/15311
  include('scripts/vt_resize.php');

  //register menus
  if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
      array(
        'primary' => 'Primary Menu',
        'secondary' => 'Secondary Menu'
      )
    );
  }

  //register sidebars
  if ( function_exists('register_sidebar') ) {
    register_sidebar(
      array(
          'id' => 'blog-sidebar',
          'name' => 'Blog Sidebar'
      )
    );
  }

  //register custom post types
  add_action( 'init', 'create_post_type' );
  function create_post_type() {
    
    register_post_type(
      'ms_project',
      array(
        'labels' => array(
          'name'                => __( 'Projects' ),
          'singular_name'       => __( 'Project' ),
          'add_new_item'        => __( 'Add New Project' ),
          'search_items'        => __( 'Search Projects' ),
          'not_found'           => __( 'No projects found' ),
          'not_found_in_trash'  => __( 'No projects found in Trash' )
        ),
       'public'         => true,
       'has_archive'    => true,
       'menu_position'  => 5,
       'rewrite'        => array('slug' => 'projects')
      )
    );

    register_post_type(
      'ms_product',
      array(
        'labels' => array(
          'name'                => __( 'Products' ),
          'singular_name'       => __( 'Product' ),
          'add_new_item'        => __( 'Add New Product'),
          'search_items'        => __( 'Search Products' ),
          'not_found'           => __( 'No products found' ),
          'not_found_in_trash'  => __( 'No products found in Trash' )
        ),
       'public'         => true,
       'has_archive'    => true,
       'menu_position'  => 5,
       'rewrite'        => array('slug' => 'products')
      )
    );

  }


  // ADVANCED CUSTOM FIELDS
  // http://www.advancedcustomfields.com/
  /**
  * Activate Add-ons
  */ 
  if(!get_option('acf_repeater_ac')) update_option('acf_repeater_ac', "QJF7-L4IX-UCNP-RF2W");

  /**
   * Register field groups
   */
  if(function_exists("register_field_group"))
  {
    include('fields/basic.php');
    include('fields/projects-and-products.php');
  }


?>