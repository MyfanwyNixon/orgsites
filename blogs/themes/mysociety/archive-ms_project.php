<? get_header(); ?>
  <div class="content" role="main">
    <article>
      <?
        //get the static page
        $static_page_id = 210;
        $static_page = get_post($static_page_id);
      ?>
      <header class="entry-header">
          <h1 class="entry-title"><?= $static_page->post_title ?></h1>
      </header>

      <div class="entry-content">
        <? if(get_field('intro', $static_page_id)): ?><p class="entry-intro"><? the_field('intro', $static_page_id) ?></p><? endif; ?>
        <? if(get_field('body', $static_page_id)): ?><div class="entry-body"><? the_field('body', $static_page_id) ?></div><? endif; ?> 
        
        <?
          global $query_string;
          query_posts( $query_string . '&posts_per_page=10' );
        ?>
        <ul class="block-list">
          <? $i = 0; while (have_posts()) : the_post(); $i++; ?>
            <li id="product-<? the_ID() ?>" class="<? if ($i == 3){echo "last";$i = 0;} ?>">             
              <?
                $images = get_field('gallery');
                if($images) {
                  $sized = vt_resize( $images[0][image], '', 288, 180, true );
                  echo "<a class='thumb' href='".get_permalink()."'><img src='{$sized[url]}' width='{$sized[width]}' height='{$sized[height]}' alt='{$image['alt']}' /></a>";
                }
              ?>

              <h3><a href="<? the_permalink() ?>"><? the_title() ?></a></h3>

              <?
                $intro = get_field('intro');
                if (strlen($intro) > 100)
                  echo '<p class="desk-only">'.substr($intro, 0, 100) . '...</p>';
                else
                  echo "<p class='desk-only'>{$intro}</p>";
              ?>
            </li>
          <? endwhile; ?>
        </ul>
        <?
          mysociety_content_nav( 'nav-below' );
          wp_reset_query();
        ?>
      </div>
    </article>
  </div>
<? get_footer(); ?>