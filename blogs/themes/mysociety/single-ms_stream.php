<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<meta charset="utf-8">
	<title>mySociety Commercial</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/base.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/skeleton.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/layout.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/stream.css">

	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.min.css" rel="stylesheet">

	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

	<script type="text/javascript" src="http://use.typekit.com/bth0qpr.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</head>
<body>

	<div id="header-bar">
		<div class="container">
			<div class="sixteen columns">
				<div id="header-tab">
					<a href="http://mysociety.org"><img src="<?php bloginfo('template_directory'); ?>/img/stream/mysociety_header-logo.png"></a>
				</div>
				<div id="header-nav-button">
					<a href="#"><i class="icon-reorder"></i> Menu</a>
				</div>
				<div id="header-nav">
					<ul>
						<li><a href="#">About</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="sixteen columns">

			<div id="top-wrapper">
				<p id="top-logo"><img src="<?php echo get_field('logo_image'); ?>" style="height:80px"></p>
				<p id="top-strapline"><?php echo get_field('strapline'); ?></p>
			</div>

			<div class="adbanner" style="background-image:url(<?php echo get_field('banner_background_image'); ?>)">
				<a href="<?php echo get_field('banner_button_destination'); ?>"><img src="<?php echo get_field('banner_button_image'); ?>" style="margin:20px"></a>
			</div>

			<p><?php echo get_field('blurb'); ?></p>
		</div>

		<div class="eight columns">

			<hr>

			<h2>Services</h2>

			<p class="lead"><?php echo get_field('services_strapline'); ?></p>
			
			<ul class="product-list">

			<?php foreach(get_field('services') as $post_object): ?>
			
				<li>
					<a href="<?php echo get_permalink($post_object); ?>"><img class="product-icon" src="<?php if(get_field('icon', $post_object->ID)){ echo get_field('icon', $post_object->ID); } else { bloginfo('template_directory'); echo '/img/stream/product-icon.png'; }?>"></a>
					
					<?php if(get_field('headline', $post_object->ID)): ?>
                        <h3><a href="<?php echo get_permalink($post_object); ?>"><?php echo get_field('headline', $post_object->ID); ?></a></h3>
                    <?php else :?>
                        <h3><a href="<?php echo get_permalink($post_object); ?>"><?php echo get_the_title($post_object->ID); ?></a></h3>
                    <?php endif; ?>
                    <?php if(get_field('one_liner', $post_object->ID)): ?>
                        <p><?php echo get_field('one_liner', $post_object->ID)?></p>
                    <?php else : ?>
                        <p><?php echo get_field('strapline', $post_object->ID)?></p>
                    <?php endif?>
				</li>
				
			<?php endforeach; ?>
			
			</ul>

		</div>

		<div class="eight columns">

			<hr>

			<h2>Products</h2>

			<p class="lead"><?php echo get_field('products_strapline'); ?></p>
			
			<ul class="product-list">
			
			<?php foreach(get_field('products') as $post_object): ?>

			
				<li>
					<a href="<?php echo get_permalink($post_object); ?>"><img class="product-icon" src="<?php if(get_field('icon', $post_object->ID)){ echo get_field('icon', $post_object->ID); } else { bloginfo('template_directory'); echo '/img/stream/product-icon.png'; }?>"></a>
					
					<?php if(get_field('headline', $post_object->ID)): ?>
                        <h3><a href="<?php echo get_permalink($post_object); ?>"><?php echo get_field('headline', $post_object->ID); ?></a></h3>
                    <?php else :?>
                        <h3><a href="<?php echo get_permalink($post_object); ?>"><?php echo get_the_title($post_object->ID); ?></a></h3>
                    <?php endif; ?>
                    <?php if(get_field('one_liner', $post_object->ID)): ?>
                        <p><?php echo get_field('one_liner', $post_object->ID)?></p>
                    <?php else : ?>
                        <p><?php echo get_field('strapline', $post_object->ID)?></p>
                    <?php endif?>
				</li>
				
			<?php endforeach; ?>
				
			</ul>

		</div>

		<div class="sixteen columns">

			<hr>

			<h2>Tools</h2>

			<p class="lead"><?php echo get_field('tools_strapline'); ?></p>

		</div>

		<div class="eight columns">

			<ul class="product-list">
			
				<?php foreach(get_field('tools') as $post_object): ?>

			
				<li>
					<a href="<?php echo get_permalink($post_object); ?>"><img class="product-icon" src="<?php if(get_field('icon', $post_object->ID)){ echo get_field('icon', $post_object->ID); } else { bloginfo('template_directory'); echo '/img/stream/product-icon.png'; }?>"></a>
					
					<?php if(get_field('headline', $post_object->ID)): ?>
                        <h3><a href="<?php echo get_permalink($post_object); ?>"><?php echo get_field('headline', $post_object->ID); ?></a></h3>
                    <?php else :?>
                        <h3><a href="<?php echo get_permalink($post_object); ?>"><?php echo get_the_title($post_object->ID); ?></a></h3>
                    <?php endif; ?>
                    <?php if(get_field('one_liner', $post_object->ID)): ?>
                        <p><?php echo get_field('one_liner', $post_object->ID)?></p>
                    <?php else : ?>
                        <p><?php echo get_field('strapline', $post_object->ID)?></p>
                    <?php endif?>
				</li>
				
			<?php endforeach; ?>
			
			</ul>
		</div>

	</div>

	<script type="text/javascript">

	$(function() {
		$('#header-nav-button a').click(function() {
			$('#header-nav').toggle();
		});
	});

	</script>

</body>
</html>
