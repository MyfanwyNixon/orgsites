<? get_header(); ?>
  <div class="content-with-sidebar" role="main">
    <?
      while ( have_posts() ) : the_post();
        get_template_part( 'content', 'page' );
      endwhile;
    ?>
  </div>

<? get_sidebar('page'); ?>

<? get_footer(); ?>