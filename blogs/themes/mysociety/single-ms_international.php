<?php get_header();?>

<body id="mysociety-org" class="productpage for_orgs fms">
	
	<header id="header">
		<h1 class="logo"><a href="homepage.html">mySociety</a></h1>
	</header>
	
	<div id="content">
		
		<article class="products">
			
			<header>
				
				<ul class="screenshots">
					<?php if(get_field('image')):?>
						<li><a href="#"><img src="<?php echo get_field('image'); ?>" alt="<?php the_title().' Feature Image';?>"></a></li>
					<?php else :?>
						<li><a href="#"><img src="http://placehold.it/460x370" alt="Default image"></a></li>
					<?php endif ?>
				</ul>
				
				<hgroup>
					<h2><strong><?php the_title();?></strong> <?php echo entitle($post);?></h2>
					<h3><?php echo get_field('strapline')?></h3>
				</hgroup>
				
				<p><?php echo get_field('overview')?></p>
				
			</header>
			
			<?php if(count(get_field('features')) > 0):?>
			<section class="product-facets">
				<h3>Features <em><?php echo get_field('feature_text');?></em></h3>
				<ul>
					<?php foreach(get_field('features') as $feature):?><li>
							<h3><?php echo $feature['heading'];?></h3>
							<p><?php echo $feature['detail'];?></p>
							<?php // TODO ADD BUTTON LINK! ?>
							<p><a class="btn fms" href="#">A default link <strong>TODO</strong></a></p>
					</li><?php endforeach ?>
				</ul>
			</section>
			<?php endif?>			
			
		</article>		
		
	</div>
	
	<?php get_footer();?>
	
	
	<script src="../js/libs/jquery-1.7.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="../js/libs/jquery.hoverintent.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="../js/libs/jquery.isotope.min.js" type="text/javascript" charset="utf-8"></script>
	
	<script src="../js/FancyZoom.js" type="text/javascript" charset="utf-8"></script>
	<script src="../js/FancyZoomHTML.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">$(document).ready(function() {
		setupZoom();
	});
	</script>
	
</body>
</html>

<!-- a page for volunteers -->
<? get_header(); ?>
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