<?php get_header();?>
 <!-- Start the Loop. -->
<?php if ( have_posts() ) : ?>
	
	<div class="blog-entries">
		<?php while ( have_posts() ) : the_post(); ?>

		<article class="blog-post" id="post-<?php the_ID(); ?>">

			<header>
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<p class="meta">Written by <?php the_author_posts_link() ?> on <?php the_time('F jS, Y') ?> in <?php the_category(', '); ?></p>
			</header>
		
		    <?php the_content(); ?>

			<footer>
				<?php the_tags('<span class="tags">Tagged as ', ', ', '</span>'); ?>
			</footer>
			
			<?php comments_template(); ?>
		</article>	
	
	</div>
<?php endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_sidebar(); ?>
