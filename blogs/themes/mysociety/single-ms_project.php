<? get_header(); ?>

<body id="mysociety-org" class="productpage for_orgs fms">

	<?php //TODO Design in the edit this page link?>
	<?php edit_post_link(); ?>
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
					<h2><?php the_title();?></h2>
					<h3><?php echo get_field('strapline')?></h3>
				</hgroup>
				
				<p><?php echo get_field('overview')?></p>
				
			</header>
			
			<section class="product-facets">
				<ul>
					<?php foreach(get_field('facet') as $post_object): ?><li>
						<?php if(get_field('headline', $post_object->ID)): ?>
					    	<h3><?php echo get_field('headline', $post_object->ID); ?></h3>
						<?php else :?>
							<h3><?php echo get_the_title($post_object->ID); ?></h3>
						<?php endif; ?>
						<?php if(get_field('one_liner', $post_object->ID)): ?>
							<p><?php echo get_field('one_liner', $post_object->ID)?></p>
						<?php else : ?>
							<p><?php echo get_field('strapline', $post_object->ID)?></p>
						<?php endif?>
						<?php if(get_field('link_text', $post_object->ID)): ?>
							<p><a class='btn' href="<?php echo get_permalink($post_object->ID); ?>"><?php echo get_field('link_text', $post_object->ID)?></a></p>
						<?php else :?>
							<p><a class='btn' href="<?php echo get_permalink($post_object->ID); ?>">Find out more</a></p>
						<?php endif ?>
					</li><?php endforeach; ?>
				</ul>				
			</section>
			
			
		</article>
		
		
		
		
	</div>
	
	<?php get_footer(); ?>
	
</body>
</html>