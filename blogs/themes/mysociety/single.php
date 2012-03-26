<? get_header(); ?>
  <div class="content" role="main">
    <? while ( have_posts() ) : the_post();
      get_template_part( 'content' );
      comments_template( '', true );
    ?>
      <nav id="pagination" class="nav-single">
            <span class="nav-previous"><? previous_post_link( '%link', __( 'Previous' ) ); ?></span>
            <span class="nav-next"><? next_post_link( '%link', __( 'Next' ) ); ?></span>
      </nav>
    <?
      endwhile;
    ?>
  </div>
<? get_footer(); ?>