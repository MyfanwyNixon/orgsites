<? get_header(); ?>

<body id="mysociety-org" class="productpage for_orgs fms">
	
	<?php //TODO Design in the edit this page link?>
	<?php edit_post_link(); ?>
	<header class="header">
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
					<h2><?php the_title();?></h2>
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
			
			<?php if(isset($support)):?>
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
				<ul><?php if(is_array($features) && count($features) > 0):?><li>
						<h3>Key Features</h3>
						<p>You’ll have technical support from our talented team of developers and a real person you can pick up a phone and call instead of fighting with a faceless call centre.</p>
						<p><a class="btn fms" href="#key-features">Read <strong>Key Features</strong></a></p>
					</li><?php endif ?><?php if(is_array($prices) && count($prices) > 0):?><li>
						<h3>Pricing Options</h3>
						<p>Check out our core product pricing below but feel free to get in touch if you'd like us to cook you up something special.<br/>&nbsp;</p>
						<p><a class="btn fms" href="#pricing-options">View <strong>Pricing Options</strong></a></p>
					</li><?php endif ?><?php if(is_array($features) && count($studies) > 0):?><li>
						<h3>Case Studies</h3>
						<p> An A4 PDF with a breakdown of all the facts, prices and contact information you'll need to make a decision.<br/>&nbsp;</p>
						<p><a class="btn fms" href="#download-datasheet"><strong>Download the Datasheet</strong> (PDF)</a></p>
					</li><?php endif?></ul>
			</section>
			
			
			<?php if(is_array($features) && count($features) > 0):?>
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
			
			<?php if(is_array($prices) && count($prices) > 0):?>
				<section class="product-options-pricing">
					<h3>Pricing: <em><?php echo get_field('pricing'); ?></em></h3>
					<ul>
						<?php foreach($prices as $price): ?><li>
							<h4><?php echo $price['overview'] ?></h4>
							<p><?php echo $price['price'] ?></p>
							<p><?php echo $price['details'] ?></p>
						</li><?php endforeach ?>
					</ul>
			
					<?php if(is_array(get_field('extras')) && count(get_field('extras')) > 0):?>
						<h3>Extras:￼ <em><?php echo get_field('extras_label'); ?></em></h3>
						<ul class="product-options-pricing-extras">
						<?php foreach(get_field('extras') as $extra): ?>
							<li>
								+ <h4><?php echo $extra['name']?></h4>
								<p><?php echo $extra['price']?></p>
							</li>
						<?php endforeach ?>
						</ul>
					<?php endif ?>
					
				</section>
			<?php endif?>
			
			<?php if(is_array($studies) && count($studies) > 0): ?>
			<section class="product-options-casestudy">
				<h3>Case Studies: <em><?php echo get_field('case_subtitle')?></em></h3>
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
					</li><?php endforeach ?>
				</ul>
			</section>
			<?php endif?>
		</article>

	</div>
	
	<?php get_footer();?>
	
</body>
</html>