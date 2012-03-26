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


  /*** CUSTOM FUNCTIONS ***/

  /**
   * Date Formatting
   *
   * Prints HTML with meta information for the current post-date/time and author.
   * Modded from the WordPress Twenty Eleven theme
   */
  if ( ! function_exists( 'mysociety_posted_on' ) ) :
  function mysociety_posted_on() {
    printf( __( '
      <time class="entry-date" datetime="%1$s" pubdate>%2$s</time>
      <span class="author vcard">by <a class="url fn n" href="%3$s" title="%4$s" rel="author">%5$s</a></span>
      ' ),
      esc_attr( get_the_date( 'c' ) ),
      esc_html( get_the_date( 'l, F jS, Y' ) ),
      esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
      esc_attr( sprintf( __( 'View all posts by %s'), get_the_author() ) ),
      get_the_author()
    );
  }
  endif;

  /**
   * Content Navigation
   *
   * Display navigation to next/previous pages when applicable
   */
  if ( ! function_exists( 'mysociety_content_nav' ) ) {
    function mysociety_content_nav( $nav_class ) {
      global $wp_query;

      if ( $wp_query->max_num_pages > 1 ) : ?>
        <nav id="pagination" class="<?php echo $nav_class; ?>">
          <div class="nav-previous"><?php next_posts_link( __( 'Previous' ) ); ?></div>
          <div class="nav-next"><?php previous_posts_link( __( 'Next' ) ); ?></div>
        </nav>
      <?php endif;
    }
  }

?>