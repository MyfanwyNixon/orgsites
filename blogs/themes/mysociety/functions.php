<?php
  if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
      array(
        'primary' => 'Primary Menu',
        'secondary' => 'Secondary Menu'
      )
    );
  }

  if ( function_exists('register_sidebar') )
  register_sidebar(array(
          'id' => 'blog-sidebar',
          'name' => 'Blog Sidebar'
      ));


  // add_action( 'init', 'create_post_type' );
  // function create_post_type() {
  //         register_post_type( 'uf_gig',
  //                 array(
  //                         'labels' => array(
  //                                 'name' => __( 'Gigs' ),
  //                                 'singular_name' => __( 'Gig' )
  //                         ),
  //                         'public' => true,
  //                         'has_archive' => true,
  //                         'rewrite' => array('slug' => 'gigs')
  //                 )
  //         );
  // }
?>