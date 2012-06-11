<?php get_header();?>

<?php get_template_part('logo')?>	

<?php if (is_search()) : ?>		
	<h1 class="pagetitle">Search Results: &ldquo;<?php the_search_query(); ?>&rdquo; <?php if (get_query_var('paged')) echo ' &mdash; Page '.get_query_var('paged'); ?></h1>
<?php endif ?>


<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args= array(
	'post_type' => 'post',
	'paged' => $paged
);
query_posts($args);
?>
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