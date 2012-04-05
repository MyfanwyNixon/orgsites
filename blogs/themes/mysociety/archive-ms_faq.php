<? get_header(); ?>
  <div class="content-with-sidebar" role="main">
    <h1><? _e( 'FAQs', 'mysociety' ) ?></h1>
    
    <?
      global $query_string;
      query_posts( $query_string . '&posts_per_page=50' );

      while (have_posts()) : the_post();
    ?>
      <article id="post-<? the_ID() ?>" <? post_class() ?>>
        <header class="entry-header">
          <h2 class="entry-title"><? the_title() ?></h2>
        </header>

        <div class="entry-content">
          <? if(get_field('intro', $static_page_id)): ?><p class="entry-intro"><? the_field('intro', $static_page_id) ?></p><? endif; ?>
          <? if(get_field('body', $static_page_id)): ?><div class="entry-body"><? the_field('body', $static_page_id) ?></div><? endif; ?> 
        </div>

        <div class="entry-meta">
          
          
          
          <div class="entry-tags">
            <?
              $faqtags = the_terms( $post->ID, 'ms_faq_tag', '<span>Tagged:</span> ', '<span class="sep">, </span>', '' );

              foreach ($faqtags as $tag) {
                echo "<a href='/tag/{$tag->slug}'>{$tag->name}</a>";
              }
            ?>
          </div>
          
        </div>
      </article>
    <? endwhile; ?>

    <?
      mysociety_content_nav( 'nav-below' );
      wp_reset_query();
    ?>
  </div>

  <aside id="page-sidebar" class="sidebar">
      <section class="sidebar-tags">
      <h3>Tags</h3>
      <ul class="sidebar-list">
        <? //display tags that have been used on faq posts ONLY
          // $faqtags = the_terms( $post->ID, 'faq-tag', '', ', ', '' );
          // if ( $faqtags ) {
          //   foreach ($faqtags as $tag) {
          //     echo "<li><a href='/tag/{$tag->slug}'>{$tag->name}</a></li>";
          //   }
          // }
        ?>
      </ul>
    </section>

    <section class="sidebar-mailing-list">
      <? get_template_part( 'mailchimp', 'mysociety' ); ?>
    </section>
  </aside>
<? get_footer(); ?>