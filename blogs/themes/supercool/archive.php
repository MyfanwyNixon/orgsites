<? get_header(); ?>
  <div class="content content-with-sidebar" role="main">
    <h1>
    <?
    if ( is_day() ) :
		printf( __( 'blog: %s', 'mysociety' ), '<span>' . get_the_date() . '</span>' );
	elseif ( is_month() ) :
		printf( __( 'blog: %s', 'mysociety' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'mysociety' ) ) . '</span>' );
	elseif ( is_year() ) :
		printf( __( 'blog: %s', 'mysociety' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'mysociety' ) ) . '</span>' );
	elseif ( is_category() ) :
		printf( __( 'blog: %s', 'mysociety' ), '<span>' . single_cat_title( '', false ) . '</span>' );
	elseif ( is_tag() ) :
		printf( __( 'blog: %s', 'mysociety' ), '<span>' . single_tag_title( '', false ) . '</span>' );
	else :
		_e( 'blog: archives', 'mysociety' );
	endif;
	?>
	</h1>


    <?
      if ( have_posts() ) :
        
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