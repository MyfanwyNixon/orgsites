<article id="post-<? the_ID() ?>" <? post_class() ?>>
  <header class="entry-header">
    <h2 class="entry-date"><a href="<? the_permalink() ?>"><? the_title() ?></a></h2>
    <div class="entry-date"><? mysociety_posted_on() ?></div>
    <? 
      $categories_list = get_the_category_list( __( ', ' ) );
      if ( $categories_list ):
    ?>
      <div class="entry-categories">
        <? printf( __( '<span>Posted in:</span> %1$s', 'mysociety' ), $categories_list ); ?>
      </div>
    <? endif; ?>
  </header>

  <div class="entry-content">
    <? if(get_field('intro')): ?><p class="entry-intro"><? the_field('intro') ?></p><? endif; ?>
    <? if(get_field('body')): ?><div class="entry-body"><? the_field('body') ?></div><? endif; ?>
	</div>

  <div class="entry-meta">
    <?
      $tags_list = get_the_tag_list( '', __( ', ' ) );
      if ( $tags_list ):
    ?>
      <div class="entry-tags">
        <? printf( __( '<span>Tagged:</span> %1$s', 'mysociety' ), $tags_list ); ?>
      </div>
    <? endif; ?>

    <?
      if ( comments_open() && ! post_password_required() ) : 
        comments_popup_link(  __( 'Comment', 'mysociety' ), _x( '1 Comment', 'comments number' ), _x( '% Comments', 'comments number' ), 'comment-button' );
      endif;
    ?>
  </div>
</article>