<? get_header(); ?>
  <div class="content" role="main">
    <?
      while ( have_posts() ) : the_post();
        get_template_part( 'content', 'page' );
      endwhile;
    ?>
  </div>
<? get_footer(); ?>