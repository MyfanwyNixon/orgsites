<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<meta charset="utf-8">
	<title><?php echo get_the_title(); ?> - mySociety</title>

	<meta name="description" content="<?php echo get_field('meta_description'); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/base.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/skeleton.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/layout.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/stream.css">

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
						<li><a href="http://www.mysociety.org/about/">About</a></li>
						<li><a href="http://www.mysociety.org/blog/">Blog</a></li>
						<li><a href="http://www.mysociety.org/contact/">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="sixteen columns">

				<div id="top-wrapper">
					<p id="top-logo"><img class="page-logo" src="<?php echo get_field('logo_image'); ?>"></p>
					<p id="top-strapline"><?php echo get_field('strapline'); ?></p>
				</div>

				<?php if (get_field('banner_background_image') AND get_field('banner_button_destination') AND get_field('banner_button_image')): ?>
				<div class="adbanner" style="background-image:url(<?php echo get_field('banner_background_image'); ?>)">
					<a href="<?php echo get_field('banner_button_destination'); ?>"><img src="<?php echo get_field('banner_button_image'); ?>" style="margin:20px"></a>
				</div>
				<?php else: ?>
					<?php if (get_field('blurb')): ?>
				<hr>
					<?php endif; ?>
				<?php endif; ?>

				<?php if (get_field('blurb')): ?>
				<div class="blurb">
					<?php echo get_field('blurb'); ?>
				</div>
				<?php endif; ?>
			</div>
		</div>

		<?php foreach (get_field('sections') as $section): ?>

			<?php if ($section['width'] == 'single'): ?>

				<div class="eight columns">

					<hr>

					<h2><?php echo $section['title']; ?></h2>

					<?php if ($section['strapline']): ?>
					<p class="lead"><?php echo $section['strapline']; ?></p>
					<?php endif; ?>

					<ul class="product-list">

						<?php foreach($section['items'] as $item): ?>

						<li>
							<a href="<?php echo $item['destination']; ?>"><img class="product-icon" src="<?php echo $item['icon']; ?>"></a>
	                        <h3><a href="<?php echo $item['destination']; ?>"><?php echo $item['title']; ?></a></h3>
	                        <p><?php echo $item['strapline']; ?></p>
						</li>

						<?php endforeach; ?>

					</ul>

				</div>

			<?php elseif ($section['width'] == 'double'): ?>

				<div class="row">
					<div class="sixteen columns">

						<hr>

						<h2><?php echo $section['title']; ?></h2>

						<?php if ($section['strapline']): ?>
						<p class="lead"><?php echo $section['strapline']; ?></p>
						<?php endif; ?>

					</div>
				</div>

				<div class="row">

				<?php $items = $section['items']; ?>

					<div class="eight columns">

						<ul class="product-list">

							<?php for($i = 0; $i < count($items); $i+=2):

								$item = $items[$i]; ?>


							<li>
								<a href="<?php echo $item['destination']; ?>"><img class="product-icon" src="<?php echo $item['icon']; ?>"></a>
		                        <h3><a href="<?php echo $item['destination']; ?>"><?php echo $item['title']; ?></a></h3>
		                        <p><?php echo $item['strapline']; ?></p>
							</li>

						<?php endfor; ?>

						</ul>
					</div>

					<div class="eight columns">

						<ul class="product-list">

							<?php for($i = 1; $i < count($items); $i+=2):

								$item = $items[$i]; ?>


							<li>
								<a href="<?php echo $item['destination']; ?>"><img class="product-icon" src="<?php echo $item['icon']; ?>"></a>
		                        <h3><a href="<?php echo $item['destination']; ?>"><?php echo $item['title']; ?></a></h3>
		                        <p><?php echo $item['strapline']; ?></p>
							</li>

						<?php endfor; ?>

						</ul>
					</div>

				</div>

			<?php endif; ?>

		<?php endforeach; ?>

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
