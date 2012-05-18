<?get_header();?>

<body id="mysociety-org" class="homepage">
	
	<header id="header">
		<h1 class="logo"><a href="homepage.html">mySociety</a></h1>
		<p class="oneliner">A social enterprise that  makes people powerful <a href="#about-mysociety">learn more…</a></p>
	</header>
	
	<div id="content">
		<section id="products">
			<h2>Products</h2>
			
			<!-- Insert with JS as it makes more sense to just have a list if the filters aren't going to work anyway -->
			<ul class="product-filters">	
				<li>
					<a class="for_orgs" href="#">
						<strong>For Organisations</strong>
						Software products, services and consulting. For Government, Councils and Corporates.
					</a>
				</li>
				<li>
					<a class="for_public" href="#">
						<strong>For the Public</strong>
						Our core charitable UK sites like TheyWorkForYou, FixMyStreet and FixMyTransport
					</a>
				</li>
				<li>
					<a class="for_volunteers" href="#">
						<strong>For Volunteers</strong>
						Most of our sites are Open Source and we welcome contributors
					</a>
				</li>
				<li>
					<a class="for_international" href="#">
						<strong>International</strong>
						Want to run a mySociety site in your own country? We’re here to help.
					</a>
				</li>
			</ul>
			
			<ul class="product-list">
				<?php
					$args = array( 'post_type' => 'ms_project', 'posts_per_page' => 10 );
					$loop = new WP_Query( $args );
				?>

				<?php while ( $loop->have_posts() ) : ?>
					<?php 
						// loop over the posts facets and assign the correct tags
						$loop -> the_post();
						if(get_field('facet')){
							$tags = array(); // an array of tags
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
					<li class="<?php echo implode($tags, ' '); ?>">
						<?php if( count($tags) > 1 ) : ?>
							<h3><a href="/<?php the_permalink(); ?>/"><?php the_title(); ?></a></h3>
						<?php else : ?>
							<?php //TODO: link straight through to the permalink of the single project page if possible?>
							<h3><a href="/<?php the_permalink();?>/"><?php the_title(); ?></a></h3>
						<?php endif ?>
						<p><?php echo get_field('one_liner'); ?></p>
						<p class="sections">
							<?php 
								if(get_field('facet')){
									$sections = array(); // an array of tags
									foreach(get_field('facet') as $ms_post){
										switch ($ms_post->post_type){
										    case 'ms_org':
												array_push($sections,'<a class="for_orgs" href="'.$ms_post->guid.'">for Organisations</a>'); 
										        break;
										    case 'ms_public':
												array_push($sections, '<a class="for_public" href="'.$ms_post->guid.'">for the Public</a>'); 
										        break;
										    case 'ms_volunteer':
												array_push($sections, '<a class="for_volunteers" href="'.$ms_post->guid.'">for Volunteers</a>'); 
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
		
		
		<section id="about-mysociety">
			<h2>About <strong>mySociety</strong></h2>
			
			<nav>
				<strong>Learn more about us:</strong>
				<ul>
					<li><a href="#">History of mySociety & UKCOD</a></li>
					<li><a href="#">About the Team</a></li>
					<li><a href="#">Read our Blogs/Journals</a></li>
				</ul>

				<strong>Support us:</strong>
				<ul>
					<li><a href="#">Volunteer</a></li>
					<li><a href="#">Donate</a></li>
					<li><a href="#">Job vacancies</a></li>
				</ul>

				<strong>Get in-touch:</strong>
				<ul>
					<li><a href="#">General Contact Information</a></li>
					<li><a href="#">Talk about hiring us</a></li>
					<li><a href="#">Product Support / Questions</a></li>
				</ul>
				
			</nav>
			
			<p><strong>We build websites that give the public simple, tangible ways to connect with and improve their society.</strong> As well as offering tools directly to the public we provide integration and development services for local authorities, corporates and government. As a UK Charity our own work has a national focus but our vision is global,  we open source our projects and encourage international adaptation.</p>
			
			<h3>About <strong>UKCOD</strong></h3>
			<p>UK Citizens Online Democracy (<abbr title="UK Citizens Online Democracy">UKCOD</abbr>) is a registered charity and is the sole owner of mySociety Limited.</p>
		</section>
		
	</div>
	
	<?php get_footer(); ?>
	
	<script src="<?php bloginfo('template_url'); ?>/js/homepage.js" type="text/javascript"></script>
	
</body>
</html>