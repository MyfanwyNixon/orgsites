<div id="comments">
  <? if ( post_password_required() ) : ?>
    <p class="nopassword"><? _e( 'This post is password protected. Enter the password to view any comments.', 'mysociety' ); ?></p>
  </div><? //#comments ?>
  <?
      /* Stop the rest of comments.php from being processed,
       * but don't kill the script entirely -- we still have
       * to fully load the template.
       */
      return;
    endif;
  ?>

  <? if ( have_comments() ) : ?>
    <h2 id="comments-title"><? printf( _n( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'mysociety' ),
          number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' ); ?></h2>

    <?
      // are there comments to loop through?
      if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
    ?>
    <nav id="comment-nav-above">
      <div class="nav-previous"><? previous_comments_link( __( '&larr; Older Comments', 'mysociety' ) ); ?></div>
      <div class="nav-next"><? next_comments_link( __( 'Newer Comments &rarr;', 'mysociety' ) ); ?></div>
    </nav>
    <? endif; ?>

    <ol class="commentlist">
      <?
        /* Loop through and list the comments. Tell wp_list_comments()
         * to use mysociety_comment() to format the comments.
         * If you want to overload this in a child theme then you can
         * define mysociety_comment() and that will be used instead.
         * See mysociety_comment() in functions.php for more.
         */
        wp_list_comments( array( 'callback' => 'mysociety_comment' ) );
      ?>
    </ol>

    <?
      // are there comments to navigate through?
      if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
    ?>
    <nav id="pagination" class="nav-below">
      <div class="nav-previous"><? previous_comments_link( __( 'Older Comments', 'mysociety' ) ); ?></div>
      <div class="nav-next"><? next_comments_link( __( 'Newer Comments', 'mysociety' ) ); ?></div>
    </nav>
    <? endif; ?>

  <?
    /* If there are no comments and comments are closed, let's leave a little note, shall we?
     * But we don't want the note on pages or post types that do not support comments.
     */
    elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
  ?>
    <p class="nocomments"><? _e( 'Sorry, comments are closed.', 'mysociety' ); ?></p>
  <? endif; ?>

  <?
    $args = array(
      'title_reply' => __( 'Leave a comment', 'mysociety' ),
      'title_reply_to' => __( 'Leave a reply to %s', 'mysociety' ),
      'cancel_reply_link' => __( 'cancel reply', 'mysociety' ),
      'label_submit' => __( 'Post Comment', 'mysociety' ),
      'comment_notes_after' => '',
      'comment_field' => '<label for="comment">' . _x( 'Comment ', 'noun' ) . '<span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="' . __( 'Please be nice :)', 'mysociety' ) . '"></textarea>',
      'fields' => array(
        'author' => '<label for="author">' . __( 'Name ', 'mysociety' ) . ( $req ? '<span class="required">*</span>' : '' ) . '</label>' .
          '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' placeholder="' . __( 'Your name', 'mysociety' ) . '" />',
        'email'  => '<label for="email">' . __( 'Email ', 'mysociety' ) . ( $req ? '<span class="required">*</span>' : '' ) . '</label>' .
          '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' placeholder="' . __( 'Your email address', 'mysociety' ) . '"/>',
        'url'    => '<label for="url">' . __( 'Website', 'mysociety' ) . '</label>' .
          '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" placeholder="' . __( 'Your website url', 'mysociety' ) . '" />'
      )
    );
    comment_form($args);
  ?>

</div><? //#comments ?>