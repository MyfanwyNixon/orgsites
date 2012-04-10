<? get_header(); ?>
  <div class="content content-with-sidebar" role="main">
    <?
      if ( have_posts() ) :
        /* Queue the first post, that way we know
         * what author we're dealing with (if that is the case).
         *
         * We reset this later so we can run the loop
         * properly with a call to rewind_posts().
         */
        the_post();
    ?>
    <h1><? printf( __( 'blog: %s', 'mysociety' ), '<span>' . get_the_author() . '</span>' ); ?></h1>

    <? if ( get_the_author_meta( 'description' ) ) : ?>
      <div id="author-info">
        <div id="author-avatar">
          <?= get_avatar( get_the_author_meta( 'user_email' ) ); ?>
        </div>
        <div id="author-description">
          <h2><? printf( __( 'About %s', 'mysociety' ), get_the_author() ); ?></h2>
          <? the_author_meta( 'description' ); ?>
        </div>
      </div>
    <? endif; ?>

    <?        
        rewind_posts();

        while ( have_posts() ) : the_post();
          get_template_part( 'content' );
        endwhile;
        
        mysociety_content_nav( 'nav-below' );
      else :
    ?>

      <article id="post-0" class="post no-results not-found">
        <header class="entry-header">
          <h2 class="entry-title"><? _e( 'Nothing Found', 'mysociety' ); ?></h2>
        </header>

        <div class="entry-content">
          <p><? _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'mysociety' ); ?></p>
          <? get_search_form(); ?>
        </div>
      </article>

    <? endif; ?>
  </div>

<? get_sidebar(); ?>

<? get_footer(); ?>