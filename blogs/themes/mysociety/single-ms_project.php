<h1>MS_Project.php</h1>
<?php
	//the project title
	the_title();
	
	//the project strapline
	echo get_field('strapline');
	
	//the project's image
	echo get_field('image');
	
	//the project overview
	echo get_field('overview');
?>
<?php foreach(get_field('facet') as $post_object): ?>
    <li><a href="<?php echo get_permalink($post_object->ID); ?>"><?php echo get_the_title($post_object->ID) ?></a></li>
<?php endforeach; ?>