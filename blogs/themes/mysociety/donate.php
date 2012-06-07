<?php
/*
Template Name: Donate
*/
?>
<?php get_header(); ?>
	<body>
	
	<?php //TODO Design in the edit this page link?>
	
	<?php get_template_part('logo')?>	
		
	<h1><?php the_title(); ?></h1>
	
	<?php
		if (have_posts()) : while (have_posts()) : the_post();

		the_content();

		endwhile; endif;
	 ?>
	</body>
<?php get_footer(); ?>