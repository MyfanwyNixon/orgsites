<? get_header(); ?>

<body id="mysociety-org" class="productpage">

	<?php get_template_part('logo')?>	
	
	<div id="content">
		
		<article class="products">
			
			<header class="section_intro">
				<div class="images">
					<ul class="slider">
						<?php if(get_field('image')):?>
						<li><a href="<?php echo get_field('image'); ?>"><img src="<?php echo get_field('image'); ?>" alt="<?php the_title().' Feature Image';?>"></a></li>
					<?php else :?>
						<li><a href="#"><img src="http://placehold.it/460x370" alt="Default image"></a></li>
					<?php endif ?>
					</ul>
				</div>
				
				<hgroup>
					<h2><?php the_title();?></h2>
					<h3><?php echo get_field('strapline')?></h3>
				</hgroup>
				
				<p><?php echo get_field('overview')?></p>
				<?php // TODO add a field in admin for the main site url and add it here, have done it manually for now
				//<p><a class="btn" href="">visit <strong>siteUrlHere</strong>.com</a></p> ?>
				
			</header>
			
			<section class="section-options">
				<ul class="">
					<?php $facets = get_field('facet'); ?>
					<?php if(is_array($facets) && count($facets) > 0) : ?>
						<?php foreach(get_field('facet') as $post_object): ?><li>
							<?php if(get_field('headline', $post_object->ID)): ?>
						    	<h3><?php echo get_field('headline', $post_object->ID); ?></h3>
							<?php else :?>
								<h3><?php echo get_the_title($post_object->ID); ?></h3>
							<?php endif; ?>
							<?php if(get_field('one_liner', $post_object->ID)): ?>
								<p class="desc"><?php echo get_field('one_liner', $post_object->ID)?></p>
							<?php else : ?>
								<p class="desc"><?php echo get_field('strapline', $post_object->ID)?></p>
							<?php endif?>
							<?php if(get_field('link_text', $post_object->ID)): ?>
								<p><a class='btn' href="<?php echo get_permalink($post_object->ID); ?>"><?php echo get_field('link_text', $post_object->ID)?></a></p>
							<?php else :?>
								<p><a class='btn' href="<?php echo get_permalink($post_object->ID); ?>">Find out more</a></p>
							<?php endif ?>
						</li><?php endforeach; ?>
					<?php endif; ?>
				</ul>				
			</section>
			
			
		</article>
		
		
		
		
	</div>
	
	<?php get_footer(); ?>
	
</body>
</html>