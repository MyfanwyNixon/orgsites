<aside id="sidebar">
  <section class="sidebar-archive">
    <h3>Archive</h3>
    <ul class="sidebar-list">
      <? wp_get_archives('type=yearly'); ?>
    </ul>
  </section>

  <section class="sidebar-categories">
    <h3>Categories</h3>
    <ul class="sidebar-list">
      <?
        $categories = get_categories(); 
        if ( $categories ) {
          foreach ($categories as $category) {
            echo "<li><a href='/category/{$category->category_nicename}'>{$category->cat_name}</a></li>";
          }
        }
      ?>
    </ul>
  </section>

  <section class="sidebar-tags">
    <h3>Tags</h3>
    <ul class="sidebar-list">
      <?
        $tags = get_tags();
        if ( $tags ) {
          foreach ($tags as $tag) {
            echo "<li><a href='/tag/{$tag->slug}'>{$tag->name}</a></li>";
          }
        }
      ?>
    </ul>
  </section>
</aside>