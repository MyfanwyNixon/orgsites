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
        'secondary' => 'Secondary Menu',
        'sidebar' => 'Sidebar Menu'
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

  //register custom taxonomies
  add_action( 'init', 'create_faq_taxonomies', 0 );
  
  //create one taxonomy, faq_tags for the post type "ms_faq"
  function create_faq_taxonomies() 
  {
    // Add new taxonomy, NOT hierarchical (like tags)
    $labels = array(
      'name' => _x( 'FAQ Tags', 'taxonomy general name' ),
      'singular_name' => _x( 'FAQ Tag', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search FAQ Tags' ),
      'popular_items' => __( 'Popular FAQ Tags' ),
      'all_items' => __( 'All FAQ Tags' ),
      'parent_item' => null,
      'parent_item_colon' => null,
      'edit_item' => __( 'Edit FAQ Tag' ), 
      'update_item' => __( 'Update FAQ Tag' ),
      'add_new_item' => __( 'Add New FAQ Tag' ),
      'new_item_name' => __( 'New FAQ Tag Name' ),
      'separate_items_with_commas' => __( 'Separate FAQ tags with commas' ),
      'add_or_remove_items' => __( 'Add or remove FAQ tags' ),
      'choose_from_most_used' => __( 'Choose from the most used FAQ tags' ),
      'menu_name' => __( 'FAQ Tags' ),
    ); 

    register_taxonomy('ms_faq_tag', 'post', array(
      'hierarchical' => false,
      'labels' => $labels,
      'show_ui' => true,
      'update_count_callback' => '_update_post_term_count',
      'query_var' => true,
      'rewrite' => array( 'slug' => 'faq-tag' ),
    ));
  }

  //register custom post types
  add_action( 'init', 'create_post_type' );
  function create_post_type() {
    
    //projects
    register_post_type(
      'ms_project',
      array(
        'labels' => array(
          'name'                => __( 'Projects', 'mysociety' ),
          'singular_name'       => __( 'Project', 'mysociety' ),
          'add_new_item'        => __( 'Add New Project', 'mysociety' ),
          'edit_item'           => __( 'Edit Project', 'mysociety'),
          'new_item'            => __( 'New Project', 'mysociety' ),
          'view_item'           => __( 'View Project', 'mysociety'),
          'search_items'        => __( 'Search Projects', 'mysociety' ),
          'not_found'           => __( 'No projects found', 'mysociety' ),
          'not_found_in_trash'  => __( 'No projects found in Trash', 'mysociety' )
        ),
       'taxonomies'     => array('category'),
       'public'         => true,
       'has_archive'    => true,
       'menu_position'  => 5,
       'rewrite'        => array('slug' => 'projects')
      )
    );

    //products
    register_post_type(
      'ms_product',
      array(
        'labels' => array(
          'name'                => __( 'Products', 'mysociety' ),
          'singular_name'       => __( 'Product', 'mysociety' ),
          'add_new_item'        => __( 'Add New Product', 'mysociety' ),
          'edit_item'           => __( 'Edit Product', 'mysociety'),
          'new_item'            => __( 'New Product', 'mysociety' ),
          'view_item'           => __( 'View Product', 'mysociety'),
          'search_items'        => __( 'Search Products', 'mysociety' ),
          'not_found'           => __( 'No products found', 'mysociety' ),
          'not_found_in_trash'  => __( 'No products found in Trash', 'mysociety' )
        ),
       'taxonomies'     => array('category'),
       'public'         => true,
       'has_archive'    => false,
       'menu_position'  => 5,
       'rewrite'        => array('slug' => 'products')
      )
    );

    //faqs
    register_post_type(
      'ms_faq',
      array(
        'labels' => array(
          'name'                => __( 'FAQs', 'mysociety' ),
          'singular_name'       => __( 'FAQ', 'mysociety' ),
          'add_new_item'        => __( 'Add New FAQ', 'mysociety' ),
          'edit_item'           => __( 'Edit FAQ', 'mysociety'),
          'new_item'            => __( 'New FAQ', 'mysociety' ),
          'view_item'           => __( 'View FAQ', 'mysociety'),
          'search_items'        => __( 'Search FAQs', 'mysociety' ),
          'not_found'           => __( 'No FAQs found', 'mysociety' ),
          'not_found_in_trash'  => __( 'No FAQs found in Trash', 'mysociety' )
        ),
       'taxonomies'     => array('ms_faq_tag'),
       'public'         => true,
       'has_archive'    => true,
       'menu_position'  => 5,
       'rewrite'        => array('slug' => 'faq')
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
    include('field_groups/gallery.php');
    include('field_groups/basic.php');
    include('field_groups/products-frontpage.php');
    include('field_groups/commercial-options.php');
    include('field_groups/build-your-own.php');
    include('field_groups/projects-and-products-meta.php');
  }


  /*** CUSTOM FUNCTIONS ***/

  /**
   * Date Formatting
   *
   * Prints HTML with meta information for the current post-date/time and author.
   *
   * Ported from Twenty Eleven 1.0
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
      esc_attr( sprintf( __( 'View all posts by %s', 'mysociety' ), get_the_author() ) ),
      get_the_author()
    );
  }
  endif;

  /**
   * Content Navigation
   *
   * Display navigation to next/previous pages when applicable
   * 
   * Ported from Twenty Eleven 1.0
   */
  if ( ! function_exists( 'mysociety_content_nav' ) ) {
    function mysociety_content_nav( $nav_class ) {
      global $wp_query;

      if ( $wp_query->max_num_pages > 1 ) : ?>
        <nav id="pagination" class="<?= $nav_class; ?>">
          <div class="nav-previous"><? next_posts_link( __( 'Previous', 'mysociety' ) ); ?></div>
          <div class="nav-next"><? previous_posts_link( __( 'Next', 'mysociety' ) ); ?></div>
        </nav>
      <? endif;
    }
  }

  /**
   * Template for comments and pingbacks.
   *
   * Used as a callback by wp_list_comments() for displaying the comments.
   *
   * Ported from Twenty Eleven 1.0
   */
  if ( ! function_exists( 'mysociety_comment' ) ) {
    function mysociety_comment( $comment, $args, $depth ) {
      $GLOBALS['comment'] = $comment;
      switch ( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' :
      ?>
      <li class="post pingback">
        <p><? _e( 'Pingback:', 'mysociety' ); ?> <? comment_author_link(); ?><? edit_comment_link( __( 'Edit', 'mysociety' ), '<span class="edit-link">', '</span>' ); ?></p>
      <?
          break;
        default :
      ?>
      <li <? comment_class(); ?> id="li-comment-<? comment_ID(); ?>">
        <article id="comment-<? comment_ID(); ?>" class="comment">
          <header class="comment-meta">
            <div class="comment-author vcard">
              <?
                $avatar_size = 48;
                if ( '0' != $comment->comment_parent )
                  $avatar_size = 32;

                echo get_avatar( $comment, $avatar_size );

                /* translators: 1: comment author, 2: date and time */
                printf( __( '%1$s %2$s', 'mysociety' ),
                  sprintf( '<span class="fn">%s</span>', get_comment_author_link() ),
                  sprintf( '<time pubdate datetime="%1$s">%2$s</time>',
                    get_comment_time( 'c' ),
                    /* translators: 1: date, 2: time */
                    sprintf( __( '%1$s at %2$s', 'mysociety' ), get_comment_date(), get_comment_time() )
                  )
                );
              ?>

              <? edit_comment_link( __( 'Edit', 'mysociety' ), '<span class="edit-link">', '</span>' ); ?>
            </div><!-- .comment-author .vcard -->

            <? if ( $comment->comment_approved == '0' ) : ?>
              <div class="comment-awaiting-moderation"><? _e( 'Awaiting approval', 'mysociety' ); ?></div>
  
            <? endif; ?>
          </header>

          <div class="comment-content"><? comment_text(); ?></div>

          <div class="reply">
            <? comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'mysociety' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
            <a class="comment-permalink" href="<?= esc_url( get_comment_link( $comment->comment_ID ) ) ?>"><? _e( 'Permalink', 'mysociety') ?></a>
          </div><!-- .reply -->
        </article><!-- #comment-## -->
      <?
          break;
      endswitch;
    }
  }




  /**
   * Fixed img captions
   * 
   * See here for reference: http://wp-snippets.com/remove-default-inline-style-of-wp-caption/
   * 
   */
  add_shortcode('wp_caption', 'mysociety_img_caption_shortcode');
  add_shortcode('caption', 'mysociety_img_caption_shortcode');
  
  function mysociety_img_caption_shortcode($attr, $content = null) {
    $output = apply_filters('img_caption_shortcode', '', $attr, $content);
    if ( $output != '' ) return $output;
    extract(shortcode_atts(array(
      'id'=> '',
      'align' => 'alignnone',
      'width' => '',
      'caption' => ''), $attr));
    if ( 1 > (int) $width || empty($caption) )
    return $content;
    if ( $id ) $id = 'id="' . esc_attr($id) . '" ';
    return '<div ' . $id . 'class="wp-caption ' . esc_attr($align)
    . '">'
    . do_shortcode( $content ) . '<p class="wp-caption-text">'
    . $caption . '</p></div>';
  }
?>
