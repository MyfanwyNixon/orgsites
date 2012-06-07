<?php get_header();?>
<header class="header">
	<h1 class="logo"><a href="<?php echo get_bloginfo( 'url', 'raw' ); ?>">mySociety</a></h1>
</header>
<div id='content' class='blog'>
	 <!-- Start the Loop. -->
	<?php if ( have_posts() ) : ?>
	
		<div class="blog-entries">
			<?php while ( have_posts() ) : the_post(); ?>

			<article class="blog-post" id="post-<?php the_ID(); ?>">

				<header>
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<p class="meta">Written by <span class="author-link"><?php the_author_posts_link(); ?></span> on <?php the_time('F jS, Y') ?> in <span class='catagory-link'><?php the_category(', '); ?></span></p>
				</header>
		
			    <?php the_content(); ?>

				<footer>
					<?php the_tags('<span class="tags">Tagged as ', ', ', '</span>'); ?>
					<?php comments_template(); ?>
				</footer>
			

			</article>	
	
		</div>
	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
	<?php get_sidebar(); ?>
</div>
