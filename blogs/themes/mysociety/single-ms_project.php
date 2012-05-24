<? get_header(); ?>

<body id="mysociety-org" class="productpage for_orgs fms">
	
	<header id="header">
		<h1 class="logo"><a href="<?php echo get_bloginfo( 'url', 'raw' ); ?>">mySociety</a></h1>
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
				
				<?php
				 	$resources = get_field('resources');
					if($resources && count($resources) > 0 ){
						foreach($resources as $resource){
							if($resource['type'] == 'public');
							$service = $resource;
						}
					}
				?>
				<?php if($service): ?>
					<p><a class="btn" href="<?php echo $service['url'];?>"><?php echo $service['text'];?></a></p>
				<?php endif?>
				
			</header>
			
			<section class="product-facets">
				<ul>
					<?php foreach(get_field('facet') as $post_object): ?><li>
				    	<h3><?php echo get_field('headline', $post_object->ID)?></h3>
						<p><?php echo get_field('one_liner', $post_object->ID)?></p>
						<p><a class='btn' href="<?php echo get_permalink($post_object->ID); ?>"><?php echo get_field('link_text', $post_object->ID)?></a></p>
					</li><?php endforeach; ?>
				</ul>				
			</section>
			
			
		</article>
		
		
		
		
	</div>
	
	<?php get_footer(); ?>
	
	
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