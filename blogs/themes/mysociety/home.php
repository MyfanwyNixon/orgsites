<? get_header(); ?>
  <div class="content content-with-sidebar" role="main">
    <h1>blog</h1>

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