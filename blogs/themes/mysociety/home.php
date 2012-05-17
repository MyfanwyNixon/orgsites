<h1>MySociety</h1>

<?get_header();?>

<h2>Projects</h2>
<?php
	$args = array( 'post_type' => 'ms_project', 'posts_per_page' => 10 );
	$loop = new WP_Query( $args );
?>

<?php while ( $loop->have_posts() ) : ?>
	<?php $loop -> the_post(); ?>
	<div class="entry-content">
		<h3><a href='/<?php the_permalink();?>/'><?php the_title(); ?></a></h3>
		<p><?php echo get_field('one_liner'); ?></p>
	</div>
<?php endwhile; ?>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>