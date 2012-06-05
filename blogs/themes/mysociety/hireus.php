<?
/*
Template Name: Hire Us
*/
?>

<?php get_header(); ?>
	<body>
	
	<?php //TODO Design in the edit this page link?>
	<?php edit_post_link(); ?>
	<header class="header">
		<h1 class="logo"><a href="<?php echo get_bloginfo( 'url', 'raw' ); ?>">mySociety</a></h1>
	</header>	
		
	<h1><?php the_title(); ?></h1>
	
	<?php
		if (have_posts()) : while (have_posts()) : the_post();

		the_content();

		endwhile; endif;
	 ?>
	</body>
<?php get_footer(); ?>