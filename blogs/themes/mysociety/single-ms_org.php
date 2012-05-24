<? get_header(); ?>

<body id="mysociety-org" class="productpage for_orgs fms">
	
	<header id="header">
		<h1 class="logo"><a href="<?php echo get_bloginfo( 'url', 'raw' ); ?>">mySociety</a></h1>
	</header>
	
	<div id="content">
		<article class="product">

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
			
			<?php 
				// check that we have an email support or sales resource
				$resources = get_field('resources');
				if(count($resources) > 0) {
				  foreach($resources as $resource){
					if($resource['type'] == 'email' || $resource['type'] == 'sales'){
						$support = $resource; 
					}
				  }
				}
			?>
			
			<?php if($support):?>
				<div class="action">
					<p><a href="mailto:<?php echo $support['url'] ?>"><?php echo $support['text'] ?></a></p>
				</div>
			<?php endif ?>
			
			
			<?php 
				// do some checks and present the correct links
				$features = get_field('feature');
				$prices = get_field('offer');
				$studies = get_field('case_study'); 
			?>	
			<section class="product-options">
				<ul><li>
						<h3>Key Features</h3>
						<p>You’ll have technical support from our talented team of developers and a real person you can pick up a phone and call instead of fighting with a faceless call centre.</p>
						<p><a class="btn fms" href="#key-features">Read <strong>Key Features</strong></a></p>
					</li><li>
						<h3>Pricing Options</h3>
						<p>Prices range from <strong>£?????</strong> for a branded version of FixMyStreet; to <strong>£??????</strong> for a fully CRM integrated site and mobile apps.<br/>&nbsp;</p>
						<p><a class="btn fms" href="#pricing-options">View <strong>Pricing Options</strong></a></p>
					</li><li>
						<h3>Case Studies</h3>
						<p> An A4 PDF with a breakdown of all the facts, prices and contact information you'll need to make a decision.<br/>&nbsp;</p>
						<p><a class="btn fms" href="#download-datasheet"><strong>Download the Datasheet</strong> (PDF)</a></p>
					</li></ul>
			</section>
			
			
			<?php if(count($features) > 0):?>
			<section id='key-features' class="product-options-features">
				<h3>Features <em><?php echo get_field('feature_text');?></em></h3>
				<ul>
					<?php foreach($features as $feature):?><li>
							<h4><?php echo $feature['heading'];?></h4>
							<!-- TODO RESIZE TO 160 wide-->
							<?php if($feature['image']): ?>
								<a href="#"><img src="<?php echo $feature['image'];?>" alt="<?php echo $feature['heading'].' Feature Image';?>"></a>
							<?php endif ?>
							<p><?php echo $feature['detail'];?></p>
						</li><?php endforeach ?>
				</ul>
			</section>
			<?php endif?>
			
			<?php if(count($prices) > 0):?>
				<section class="product-options-pricing">
					<h3>Pricing: <em>Our charges are all-inclusive, with no hidden extras</em></h3>
					<ul>
						<?php foreach($prices as $price): ?><li>
							<h4><?php echo $price['overview'] ?></h4>
							<p>From: <strong>&pound;<?php echo $price['from'] ?></strong> then &pound;<?php echo $price['ongoing'] ?> p.a.</p>
							<p><?php echo $price['details'] ?></p>
						</li><?php endforeach ?>
					</ul>
				
					<?php if(get_field('extras') && count(get_field('extras')) > 0):?>
						<h3>Extras:￼ <em><?php echo get_field('extras_label'); ?></em></h3>
						<ul class="product-options-pricing-extras">
						<?php foreach(get_field('extras') as $extra): ?>
							<li>
								+ <h4><?php echo $extra['name']?></h4>
								<p><strong>First year from: &pound;<?php echo $extra['from']?></strong> then &pound;<?php echo $extra['ongoing']?> p.a.</p>
							</li>
						<?php endforeach ?>
						</ul>
					<?php endif ?>
				</section>
			<?php endif?>
			
			<!-- TODO general bespoke development link -->
			<div class="action">
				<p><a href="#">If you would like our developers to cook you up something bespoke <strong>get in-touch</strong>.</a></p>
			</div>
			
			<?php if(count($studies) > 0): ?>
			<section class="product-options-casestudy">
				<h3>Case Studies: <em>Our charges are all-inclusive, with no hidden extras</em></h3>
				<ul>
				<?php foreach($studies as $study): ?><li>
						<h4>Case Study: <?php echo $study['client']; ?></h4>
						<!-- TODO image if and link to client page -->
						<?php if($study['image']) :?>
							<a href="<?php $study['link'];?>"><img src="<?php echo $study['image']; ?>" alt="<?php echo $study['client']; ?>"></a>
						<?php else :?>
							<a href="#"><img src="http://placehold.it/460x195" alt=""></a>
						<?php endif?>
						<p><?php echo $study['blurb'] ?></p>
						<p><a class="btn" href="<?php $study['link'];?>">Download Case Study</a></p>
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