<h1>MS_Project.php</h1>
<h2><?php the_title();?></h2>
	<?php if(get_field('image')) : ?>
		<img src='/<?php get_field('image'); ?>/'>
	<?php endif; ?>
	<p> <?php echo get_field('strapline'); ?> </p>
	<p> <?php echo get_field('overview'); ?> </p>
	
<?php foreach(get_field('facet') as $post_object): ?>
    <h3><a href="<?php echo get_permalink($post_object->ID); ?>"><?php echo get_the_title($post_object->ID) ?></a></h3>
<?php endforeach; ?>