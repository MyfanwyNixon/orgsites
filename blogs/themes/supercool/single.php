<? get_header(); ?>
  <div class="content-with-sidebar" role="main">
    <? while ( have_posts() ) : the_post();
      get_template_part( 'content', 'single_post' );
      comments_template( '', true );
    ?>
      <nav id="pagination" class="nav-single">
            <span class="nav-previous"><? previous_post_link( '%link', __( 'Previous', 'mysociety' ) ); ?></span>
            <span class="nav-next"><? next_post_link( '%link', __( 'Next', 'mysociety' ) ); ?></span>
      </nav>
    <?
      endwhile;
    ?>
  </div>

<? get_sidebar(); ?>

<? get_footer(); ?>