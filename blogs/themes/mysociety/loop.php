<?php while ( have_posts() ) : the_post(); ?>
<?php
    $is_blog_post = 1;
    $extra_classes = 'blog-post';

    if (property_exists( $post, 'data') && $post->data && $post->data != 'NULL') {
        $data = unserialize( base64_decode( $post->data ) );

        $is_blog_post = 0;
        // we should probably have a mapping for this somewhere but I'm not sure where
        $extra_classes = 'linked-blog-post linked-blog-' . $data['linked_parent']['blog_id'];
    } ?>

<article <?php post_class($extra_classes) ?> id="post-<?php the_ID(); ?>">

	<header>
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<p class="meta">Written by <span class="author-link"><?php the_author_posts_link() ?></span> on <time datetime="<?php the_time('Y-m-d')?>">Posted <strong><?php the_time('jS F Y') ?></strong></time> in <span class='category-link'><?php the_category(', '); ?></span></p>
	</header>

  <?php if ($is_blog_post) { ?>
	<p class="entry">
	  <?php the_content(); ?>
	</p>

	<footer>
		<?php if ( comments_open() ) : ?><a class="comment" href="<?php the_permalink(); ?>#comments"><?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></a><?php endif; ?>
		<?php the_tags('<span class="tags">Tagged as ', ', ', '</span>'); ?>
	</footer>
  <?php } ?>
</article>	
<?php endwhile;?>

<?php if (  $wp_query->max_num_pages > 1 ) : ?>
    <div id="nav-below" class="navigation">
        <div class="nav-previous"><?php next_posts_link( '<span class="meta-nav">&larr;</span> Older posts' ); ?></div>
        <div class="nav-next"><?php previous_posts_link( 'Newer posts <span class="meta-nav">&rarr;</span>' ); ?></div>
    </div><!-- #nav-below -->
<?php endif; ?>

