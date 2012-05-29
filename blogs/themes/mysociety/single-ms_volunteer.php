<!-- a page for volunteers -->
<? get_header(); ?>

<?php //TODO Design in the edit this page link?>
<?php edit_post_link(); ?>
<header id="header">
	<h1 class="logo"><a href="<?php echo get_bloginfo( 'url', 'raw' ); ?>">mySociety</a></h1>
</header>

<h1><?php the_title();?></h1>

<h2><?php echo get_field('strapline')?> </h2>

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
<? get_footer(); ?>