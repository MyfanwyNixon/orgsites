<?php while ( have_posts() ) : the_post(); ?>
<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

	<header>
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<p class="meta">Written by <span class="author-link"><?php the_author_posts_link() ?></span> on <time datetime="<?php the_time('Y-m-d')?>">Posted <strong><?php the_time('jS F Y') ?></strong></time> in <span class='category-link'><?php the_category(', '); ?></span></p>
	</header>

	<p class="entry">
	  <?php the_content(); ?>
	</p>

	<footer>
		<?php if ( comments_open() ) : ?><a class="comment" href="<?php the_permalink(); ?>#comments"><?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></a><?php endif; ?>
		<?php the_tags('<span class="tags">Tagged as ', ', ', '</span>'); ?>
	</footer>
</article>	
<?php endwhile;?>