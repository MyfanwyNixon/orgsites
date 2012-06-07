<?php get_header();?>
<header class="header">
	<h1 class="logo"><a href="<?php echo get_bloginfo( 'url', 'raw' ); ?>">mySociety</a></h1>
</header>

<?php if (is_search()) : ?>		
	<h1 class="pagetitle">Search Results: &ldquo;<?php the_search_query(); ?>&rdquo; <?php if (get_query_var('paged')) echo ' &mdash; Page '.get_query_var('paged'); ?></h1>
<?php endif ?>

<div id='content' class='blog'>
	<?php if ( have_posts() ) :?> 
		<div class="blog-entries">
			<?php get_template_part('loop')?>
		</div>
	<?php else: ?>
		<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>

	<?php get_sidebar(); ?>
</div>

<?php get_footer();?>