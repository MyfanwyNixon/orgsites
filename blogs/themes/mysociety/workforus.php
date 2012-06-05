<?
/*
Template Name: Work for Us
*/
?>

<?php get_header(); ?>

	<?php //TODO Design in the edit this page link?>
	<?php edit_post_link(); ?>
	<header class="header">
		<h1 class="logo"><a href="<?php echo get_bloginfo( 'url', 'raw' ); ?>">mySociety</a></h1>
	</header>
	
	<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>
	
<?php get_footer(); ?>