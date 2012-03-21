<?php
  register_nav_menu( 'primary', __( 'Primary Menu', 'mysociety' ) );

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