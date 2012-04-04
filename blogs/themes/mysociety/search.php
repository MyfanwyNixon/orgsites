<? get_header(); ?>
  <div class="content content-with-sidebar" role="main">
    <h1><? printf( __( 'Search Results for: %s', 'mysociety' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
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
          <h1 class="entry-title"><? _e( 'Nothing Found', 'mysociety' ); ?></h1>
        </header>

        <div class="entry-content">
          <p><? _e( 'Apologies, but no results were found for the requested search terms. Perhaps being less specific will help find what you are after. Alternatively use the Archive, Category or Tag links.', 'mysociety' ); ?></p>
          <? get_search_form(); ?>
        </div>
      </article>

    <? endif; ?>
  </div>

<? get_sidebar(); ?>

<? get_footer(); ?>