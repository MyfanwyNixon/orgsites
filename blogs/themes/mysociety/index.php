<?php get_header();?>

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args= array(
	'post_type' => 'post',
	'paged' => $paged
);
query_posts($args);
?>
<div id='content' class='blog'>
	<?php if (is_search()) : ?>		
		<hgroup>
			<h2>Search results</h2>
			<h3>Search Results: &ldquo;<?php the_search_query(); ?>&rdquo; <?php if (get_query_var('paged')) echo ' &mdash; Page '.get_query_var('paged'); ?></h3>
		</hgroup>
	<?php elseif (is_category()) : ?>
		<hgroup>
			<h2>mySociety Blog</h2>
			<h3><?php single_cat_title('Blog posts in the category '); ?></h3>
		</hgroup>
	<?php else :?>
		<hgroup>
			<h2>mySociety Blog</h2>
			<h3>Keeping up to date with mySociety developments</h3>
		</hgroup>
	<?php endif;?>
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
