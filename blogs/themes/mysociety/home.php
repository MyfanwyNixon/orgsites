<?get_header();?>

<body id="mysociety-org" class="homepage">
	
	<header class="header">
		<h1 class="logo"><a href="/">mySociety</a></h1>
		<p class="oneliner">Usability with purpose.</p>
	</header>
	
	<div id="content">
		<section id="products">
			<h2>Products</h2>
			
			<?php
			// <!-- Insert with JS as it makes more sense to just have a list if the filters aren't going to work anyway -->
			// <!-- <ul class="product-filters">	
			// 	<li>
			// 		<a class="for_orgs" href="#">
			// 			<strong>For Organisations</strong>
			// 			Software products, services and consulting. For Government, Councils and Corporates.
			// 		</a>
			// 	</li>
			// 	<li>
			// 		<a class="for_public" href="#">
			// 			<strong>For the Public</strong>
			// 			Our core charitable UK sites like TheyWorkForYou, FixMyStreet and FixMyTransport
			// 		</a>
			// 	</li>
			// 	<li>
			// 		<a class="for_volunteers" href="#">
			// 			<strong>For Volunteers</strong>
			// 			Most of our sites are Open Source and we welcome contributors
			// 		</a>
			// 	</li>
			// 	<li>
			// 		<a class="for_international" href="#">
			// 			<strong>International</strong>
			// 			Want to run a mySociety site in your own country? We’re here to help.
			// 		</a>
			// 	</li>
			// </ul> -->
			?>
			
			<ul class="product-list">
				<?php
					$args = array( 'post_type' => 'ms_project', 'posts_per_page' => 20 );
					$loop = new WP_Query( $args );
				?>

				<?php while ( $loop->have_posts() ) : ?>
					<?php 
						// loop over the posts facets and assign the correct tags
						$loop -> the_post();
						$tags = array(); // an array of tags
						if(get_field('facet')){
							foreach(get_field('facet') as $ms_post){
								switch ($ms_post->post_type){
								    case 'ms_public':
										$key = 'for_public';
								        array_push($tags, $key);
								        break;
								    case 'ms_org':
										$key = 'for_orgs';
								        array_push($tags,$key);
								        break;
									case 'ms_council':
										$key = 'for_councils';
								        array_push($tags,$key);
								        break;
								    case 'ms_volunteer':
										$key = 'for_volunteers';
								        array_push($tags,$key);
								        break;
								    case 'ms_international':
								        $key = 'for_international';
								        array_push($tags,$key);
								        break;
									default:
										$key = $ms_post->post_type;
								        array_push($tags,$key);
								}
							}
						}
					?>
					<li class="<?php echo implode($tags, ' '); ?>" <?php if(get_field('icon')){echo 'style=\'background-image: url('.get_field('icon').');\'';} ?>>
						<?php if(is_array($tags) && count($tags) > 1 ) : ?>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<?php else : ?>
							<?php //TODO: link straight through to the permalink of the single project page if possible?>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<?php endif ?>
						<p><?php echo get_field('one_liner'); ?></p>
						<p class="sections">
							<?php 
								if(get_field('facet')){
									$sections = array(); // an array of sections under each project title
									foreach(get_field('facet') as $ms_post){
										switch ($ms_post->post_type){
										    case 'ms_org':
												array_push($sections,'<a class="for_orgs" href="'.$ms_post->guid.'">for&nbsp;Organisations</a>');  
										        break;
										    case 'ms_public':
												array_push($sections, '<a class="for_public" href="'.$ms_post->guid.'">for&nbsp;the&nbsp;Public</a>'); 
										        break;
										    case 'ms_volunteer':
												array_push($sections, '<a class="for_volunteers" href="'.$ms_post->guid.'">for&nbsp;Volunteers</a>'); 
										        break;
										    case 'ms_international':
												array_push($sections, '<a class="for_international" href="'.$ms_post->guid.'">International</a>'); 
										        break;
										}
									}
									echo implode($sections, ' | ');
								}
							?>
						</p>
					</li>
				<?php endwhile; ?>

				<?php wp_reset_query(); ?>
			</ul>
			<p style="clear:both"></p>
		</section>

		<?php get_footer('about')?>
		
	</div>
	
	<?php get_footer(); ?>
	
	
</body>
</html>