<?php get_header();?>
 <!-- Start the Loop. -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<article class="blog-post">

		<header>
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<p class="meta">Written by <?php the_author_posts_link() ?> on <?php the_time('F jS, Y') ?> in <?php the_category(', '); ?></p>
		</header>
		
		<p class="entry">
		  <?php the_content(); ?>
		</p>

		<footer>
			<?php get_comments(); ?> 
		</footer>
		
	</article>	
<?php endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_sidebar(); ?>
