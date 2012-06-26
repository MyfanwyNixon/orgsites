<!-- Public Page -->
<?php
get_header();
get_template_part('header', 'single');

if(get_field('resources')) : ?>
	<h3>Resources</h3>
	<ul>
	<?php foreach(get_field('resources') as $resource): ?>
	    <li>
			<a href='<?php echo $resource['url']; ?>'><?php echo $resource['text']; ?></a>
		</li>
	<?php endforeach; ?>
	</ul>
<?php endif ?>

<!-- TODO get some posts to display -->
<?php
	$args = array( 'post_type' => 'post', 'posts_per_page' => 5 );
	$loop = new WP_Query( $args );
?>
<h3>Blog</h3>
<?php while ( $loop->have_posts() ) : ?>
	<?php $loop -> the_post(); ?>
	<h4><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h4>
	<p><?php the_content(); ?></p>
	<p><small><?php the_category(', ');?></small></p>
<?php endwhile; ?>

<?php get_footer();?>
