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

<?php
	$args = array( 'post_type' => 'post', 'posts_per_page' => 5, 'post_status' => 'publish');
	$loop = new WP_Query( $args );
?>

<?php while ( $loop->have_posts() ) : ?>
	<?php $loop -> the_post(); ?>
	<li id="product-<?php /* TODO: Add an ID for each project eg: product-fms. Could be url encoded title */ ?>" class="<?php /* TODO: Add the following classes where appropiate: for_orgs for_public for_volunteers for_international */ ?>">
		<h3><a href="/<?php the_permalink();?>/"><?php the_title(); ?></a></h3>
		<p><?php echo get_field('one_liner'); ?></p>
		<p class="sections">
			<?php /* TODO: Output the appropiate links for the facets */ ?>
			<a class="for_orgs" href="/<?php the_permalink();?>/">for Organisations</a> | 
			<a class="for_public" href="/<?php the_permalink();?>/">for the Public</a> | 
			<a class="for_volunteers" href="/<?php the_permalink();?>/">for Volunteers</a> | 
			<a class="for_international" href="/<?php the_permalink();?>/">International</a>
		</p>
	</li>
<?php endwhile; ?>

<?php get_footer();?>