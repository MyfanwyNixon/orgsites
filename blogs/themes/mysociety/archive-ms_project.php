<? get_header(); ?>
  <div class="content" role="main">
    <? if ( have_posts() ) : ?>
    <ul>
      <? while ( have_posts() ) : the_post(); ?>
        <li id="product-<? the_ID() ?>" <? post_class() ?>>
          <a href="<? the_permalink() ?>"><? the_title() ?></a>
          
          <?
            $images = get_field('gallery');
            if($images) {
              $sized = vt_resize( $images[0][image], '', 50, 50, true );
              echo "<img src='{$sized[url]}' width='{$sized[width]}' height='{$sized[height]}' alt='{$image['alt']}' />";
            }
          ?>

          <?
            $intro = get_field('intro');
            if (strlen($intro) > 100)
              echo substr($intro, 0, 100) . '...';
          ?>
        </li>
      <? endwhile; ?>
    </ul>
    <?
        mysociety_content_nav( 'nav-below' );
      endif;
    ?>
  </div>
<? get_footer(); ?>