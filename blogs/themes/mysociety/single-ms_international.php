<?php get_header();?>

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
	
			<?php
				//prepare some specific resources 
				$resources = get_field('resources');
				if(count($resources) > 0 ){
					//split these up into the relative bits
					foreach($resources as $resource){
						switch ($resource['type']) {
							case 'public':
						        $public = $resource;
						        break;
							case 'blog':
						        $blog = $resource;
						        break;
						    case 'github':
						        $github = $resource;
						        break;
						    case 'wiki':
						        $wiki = $resource;
						        break;
							case 'document':
						        $document = $resource;
						        break;
							case 'faq':
						        $faq = $resource;
						        break;
							case 'group':
						        $group = $resource;
						        break;
							case 'twitter':
						        $twitter = $resource;
						        break;
							case 'irc':
						        $irc = $resource;
						        break;
							case 'facebook':
						        $facebook = $resource;
						        break;
						}
					}
				}
			?>

				<section class="product-facets">
					<ul>
						<?php if(isset($public)):?><li>
							<h3>Check Out Our Site</h3>
							<p>We run a version ourselves, have a snoop around to see what you can achieve with our tools.</p>
							<p><a class="btn fms" href="<?php echo $public['url'];?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/icons/general/16/info-white.png" style="vertical-align: middle;opacity:0.5" alt=""><?php echo $public['text'];?></a></p>
						<?php endif ?>
						<?php if(isset($document)):?><li>
							<h3>What you will need</h3>
							<p>We have written some non-technical guides detailing the things you will need to setup your own version.</p>
							<p><a class="btn fms" href="<?php echo $document['url'];?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/icons/general/16/info-white.png" style="vertical-align: text-top;opacity:0.5" alt=""> <?php echo $document['text'];?></a></p>
						</li>
						<?php endif ?>
						<?php if(isset($wiki)):?><li>
							<h3>Read the documentation</h3>
							<p>Everything a developer should need to get going is in the wiki, if anything is missing let us know or write it yourself.</p>
							<p><a class="btn fms" href="<?php echo $wiki['url'];?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/icons/general/16/docs-white.png" style="vertical-align: middle;opacity:0.5" alt=""> <?php echo $wiki['text'];?></a></p>
						</li><?php endif ?>
						<?php if(isset($github)):?><li>
							<h3>Download the code</h3>
							<p>Everything is packaged up on Github ready for downloading, forking and contributing your changes back to.</p>
							<p><a class="btn fms" href="<?php echo $github['url'];?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/icons/general/16/download-white.png" style="vertical-align: text-top;opacity:0.5" alt=""> <?php echo $github['text'];?></a></p>
						</li><?php endif ?>
						<?php if(isset($blog)):?><li>
							<h3>What's Happening?</h3>
							<p>Check out the news on development and goings on in our blog</p>
							<p><a class="btn fms" href="<?php echo $blog['url'];?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/icons/general/16/info-white.png" style="vertical-align: middle;opacity:0.5" alt=""><?php echo $blog['text'];?></a></p>
						</li><?php endif ?>
						<?php if(isset($faq)):?><li>
							<h3>Need Answers?</h3>
							<p>Wee've compiled a list of our most frequently asked questions</p>
							<p><a class="btn fms" href="<?php echo $faq['url'];?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/icons/general/16/info-white.png" style="vertical-align: middle;opacity:0.5" alt=""><?php echo $faq['text'];?></a></p>
						</li><?php endif ?>
						<?php if(isset($facebook)):?><li>
							<h3>Like This?</h3>
							<p>You can check out our presence on facebook</p>
							<p><a class="btn fms" href="<?php echo $facebook['url'];?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/icons/general/16/info-white.png" style="vertical-align: middle;opacity:0.5" alt=""><?php echo $facebook['text'];?></a></p>
						</li><?php endif ?>
						<?php if(isset($irc)):?><li>
							<h3>Want to Talk?</h3>
							<p>We hang out on IRC, feel free to join us in the chatroom.</p>
							<p><a class="btn fms" href="<?php echo $irc['url'];?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/icons/general/16/info-white.png" style="vertical-align: middle;opacity:0.5" alt=""><?php echo $irc['text'];?></a></p>
						</li><?php endif ?>
						<?php if(isset($group)): ?><li>
							<h3>Help Each Other</h3>
							<p>Our google group is the place to share your experiences and help others get up and running</p>
							<p><a class="btn fms" href="<?php echo $group['url'];?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/icons/general/16/info-white.png" style="vertical-align: middle;opacity:0.5" alt=""><?php echo $group['text'];?></a></p>
						</li><?php endif ?>
					</ul>
				</section>
		</article>		
		
	</div>
	
	<?php get_footer();?>
	
</body>
</html>