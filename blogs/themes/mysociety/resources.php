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

<section class="section-options">
	<ul class="<?php echo options_how_many_cols(count($resources)); ?>">
	<?php if(isset($public)):?>
		<li>
			<h3>Visit the original version</h3>
			<p class="desc">This code grew from mySociety's own site - check out the original here.</p>
			<p><a class="btn fms" href="<?php echo $public['url'];?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/icons/general/16/info-white.png" style="vertical-align: middle;opacity:0.5" alt=""><?php echo $public['text'];?></a></p>
		</li>
	<?php endif ?>
	<?php if(isset($document)):?>
		<li>
			<h3>Start with the handbook</h3>
			<p class="desc">An easy-read guide, taking you step-by-step through every aspect of setting up your site.</p>
			<p><a class="btn fms" href="<?php echo $document['url'];?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/icons/general/16/info-white.png" style="vertical-align: text-top;opacity:0.5" alt=""> <?php echo $document['text'];?></a></p>
		</li>
	<?php endif ?>
	<?php if(isset($wiki)):?>
		<li>
			<h3>Documentation</h3>
			<p class="desc">Point your developer towards this wiki. Something missing? Let us know, or add it yourself.</p>
			<p><a class="btn fms" href="<?php echo $wiki['url'];?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/icons/general/16/docs-white.png" style="vertical-align: middle;opacity:0.5" alt=""> <?php echo $wiki['text'];?></a></p>
		</li>
	<?php endif ?>
	<?php if(isset($github)):?><li>
			<h3>Download the code</h3>
			<p class="desc">Everything's packaged up on Github: download, fork.. and contribute your changes back.</p>
			<p><a class="btn fms" href="<?php echo $github['url'];?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/icons/general/16/download-white.png" style="vertical-align: text-top;opacity:0.5" alt=""> <?php echo $github['text'];?></a></p>
		</li>
	<?php endif ?>
	<?php if(isset($blog)):?><li>
			<h3>What's happening?</h3>
			<p class="desc">Check out the news on development and goings on in our blog.</p>
			<p><a class="btn fms" href="<?php echo $blog['url'];?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/icons/general/16/info-white.png" style="vertical-align: middle;opacity:0.5" alt=""><?php echo $blog['text'];?></a></p>
		</li>
	<?php endif ?>
	<?php if(isset($faq)):?>
		<li>
			<h3>Need answers?</h3>
			<p class="desc">We've compiled a list of our most frequently asked questions.</p>
			<p><a class="btn fms" href="<?php echo $faq['url'];?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/icons/general/16/info-white.png" style="vertical-align: middle;opacity:0.5" alt=""><?php echo $faq['text'];?></a></p>
		</li>
	<?php endif ?>
	<?php if(isset($facebook)):?><li>
			<h3>Like this?</h3>
			<p class="desc">You can follow us on Facebook.</p>
			<p><a class="btn fms" href="<?php echo $facebook['url'];?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/icons/general/16/info-white.png" style="vertical-align: middle;opacity:0.5" alt=""><?php echo $facebook['text'];?></a></p>
		</li>
	<?php endif ?>
	<?php if(isset($irc)):?>
		<li>
			<h3>Want to talk?</h3>
			<p class="desc">We hang out on IRC - feel free to join us in the chatroom.</p>
			<p><a class="btn fms" href="<?php echo $irc['url'];?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/icons/general/16/info-white.png" style="vertical-align: middle;opacity:0.5" alt=""><?php echo $irc['text'];?></a></p>
		</li>
	<?php endif ?>
	<?php if(isset($group)): ?>
		<li>
			<h3>Help each other</h3>
			<p class="desc">Our Google Group is the place to share your experiences and help others get up and running.</p>
			<p><a class="btn fms" href="<?php echo $group['url'];?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/icons/general/16/info-white.png" style="vertical-align: middle;opacity:0.5" alt=""><?php echo $group['text'];?></a></p>
		</li>
	<?php endif ?>
	</ul>
</section>