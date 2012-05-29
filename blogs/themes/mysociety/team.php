<?php
/*
Template Name: Team
*/
?>

<?php get_header();?>

<?php //TODO Design in the edit this page link?>
<?php edit_post_link(); ?>
<header id="header">
	<h1 class="logo"><a href="<?php echo get_bloginfo( 'url', 'raw' ); ?>">mySociety</a></h1>
</header>

<h1><?php the_title();?></h1>
<?php $values = get_field('people'); ?>
<?php if($values) : ?>
	<div class='person'>
		<?php foreach($values as $value) : ?>
			<h3> <?php echo $value['name']; ?> </h3>
			<?php if($value['mug']) : ?>
				<img src= '<?php echo $value['mug']; ?>' alt='<?php echo 'mugshot of '.$value['name']; ?>'>
			<?php endif ?>
			<p><?php echo $value['about']; ?></p>
		<?php endforeach ?>
	</div>
<?php endif ?>

<? get_footer(); ?>