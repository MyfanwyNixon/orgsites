<? get_header(); ?>
  <div class="content" role="main">
    <? if ( have_posts() ) : ?>

      <? while ( have_posts() ) : the_post(); ?>

        <? get_template_part( 'content' ); ?>

      <? endwhile; ?>

    <? else : ?>

      <article id="post-0" class="post no-results not-found">
        <header class="entry-header">
          <h1 class="entry-title"><?php _e( 'Nothing Found' ); ?></h1>
        </header>

        <div class="entry-content">
          <p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.' ); ?></p>
          <?php get_search_form(); ?>
        </div>
      </article>

    <?php endif; ?>
  </div>
<? get_footer(); ?>