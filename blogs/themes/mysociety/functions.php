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
       'public'         => true,
       'has_archive'    => false,
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
   * Register field types
   */
  if(function_exists("register_field"))
  {
    register_field('Categories_field', dirname(__File__) . '/fields/types/categories.php');
  }

  /**
   * Register field groups
   */
  if(function_exists("register_field_group"))
  {
    include('fields/groups/basic.php');
    include('fields/groups/projects-and-products.php');
    include('fields/groups/products-front.php');
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
        <nav id="pagination" class="<?php echo $nav_class; ?>">
          <div class="nav-previous"><?php next_posts_link( __( 'Previous', 'mysociety' ) ); ?></div>
          <div class="nav-next"><?php previous_posts_link( __( 'Next', 'mysociety' ) ); ?></div>
        </nav>
      <?php endif;
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
      </li>
      <?
          break;
        default :
      ?>
      <li <? comment_class(); ?> id="li-comment-<? comment_ID(); ?>">
        <article id="comment-<? comment_ID(); ?>" class="comment">
          <header class="comment-meta">
            <div class="comment-author vcard">
              <?
                $avatar_size = 68;
                if ( '0' != $comment->comment_parent )
                  $avatar_size = 39;

                echo get_avatar( $comment, $avatar_size );

                /* translators: 1: comment author, 2: date and time */
                printf( __( '%1$s on %2$s <span class="says">said:</span>', 'mysociety' ),
                  sprintf( '<span class="fn">%s</span>', get_comment_author_link() ),
                  sprintf( '<a href="%1$s"><time pubdate datetime="%2$s">%3$s</time></a>',
                    esc_url( get_comment_link( $comment->comment_ID ) ),
                    get_comment_time( 'c' ),
                    /* translators: 1: date, 2: time */
                    sprintf( __( '%1$s at %2$s', 'mysociety' ), get_comment_date(), get_comment_time() )
                  )
                );
              ?>

              <? edit_comment_link( __( 'Edit', 'mysociety' ), '<span class="edit-link">', '</span>' ); ?>
            </div><!-- .comment-author .vcard -->

            <? if ( $comment->comment_approved == '0' ) : ?>
              <em class="comment-awaiting-moderation"><? _e( 'Your comment is awaiting moderation.', 'mysociety' ); ?></em>
              <br />
            <? endif; ?>
          </header>

          <div class="comment-content"><?php comment_text(); ?></div>

          <div class="reply">
            <?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply <span>&darr;</span>', 'mysociety' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
          </div><!-- .reply -->
        </article><!-- #comment-## -->
      </li>
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