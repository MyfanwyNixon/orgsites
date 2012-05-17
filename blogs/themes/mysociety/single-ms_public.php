<!-- Public Page -->
<?php get_header(); ?>

<h1><?php the_title();?></h1>

<h2><?php echo get_field('strapline')?> </h2>

<?php if(get_field('image')) :?>
	<div>
		<img src='<?php echo get_field('image')?>' alt='<?php the_title().' image';?>'>
	</div>
<?php endif ?>

<p><?php echo get_field('overview')?> </p>

<?php if(get_field('resources')) : ?>
	<h3>Resources</h3>
	<ul>
	<?php foreach(get_field('resources') as $resource): ?>
	    <li>
			<a href='<?php echo $resource['url']; ?>'><?php echo $resource['text']; ?></>
		</li>
	<?php endforeach; ?>
	</ul>
<?php endif ?>


<?php get_footer();?>