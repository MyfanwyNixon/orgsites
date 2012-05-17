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
					<?php $loop -> the_post(); ?>
					<li id="product-<?php /* TODO: Add an ID for each project eg: product-fms. Could be url encoded title */ ?>" class="<?php /* TODO: Add the following classes where appropiate: for_orgs for_public for_volunteers for_international */ ?>">
						<h3><a href="/<?php the_permalink();?>/"><?php the_title(); ?></a></h3>
						<p><?php echo get_field('one_liner'); ?></p>
						<p class="sections">
							<?php /* TODO: Output the appropiate links for the facets */ ?>
							<a class="for_orgs" href="/<?php the_permalink();?>/">for Organisations</a> | 
							<a class="for_public" href="/<?php the_permalink();?>/">for the Public</a> | 
							<a class="for_volunteers" href="/<?php the_permalink();?>/">for Volunteers</a> | 
							<a class="for_international" href="/<?php the_permalink();?>/">International</a>
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
	
	<script type="text/javascript">
		$(document).ready(function() {
			
			var productList = $('.product-list');
			var filters = $('.product-filters a');
			
			// Count down for ordering the products in the same order as loaded
			var orderCountdown = productList.children('li').length * 4;
			
			productList.isotope({ 
				itemSelector : 'li',
				layoutMode : 'fitRows',
				getSortData : {
					for_orgs : function( $elem ) {
						if($elem.hasClass('for_orgs')){ return orderCountdown--; }
						else{ return 0; }
					},
					for_public : function( $elem ) {
						if($elem.hasClass('for_public')){ return orderCountdown--; }
						else{ return 0; }
					},
					for_volunteers : function( $elem ) {
						if($elem.hasClass('for_volunteers')){ return orderCountdown--; }
						else{ return 0; }
					},
					for_international : function( $elem ) {
						if($elem.hasClass('for_international')){ return orderCountdown--; }
						else{ return 0; }
					}
				}
			});
			
			
			// When hovering a filter fade the products not in this class
			var filterProductsHover = function(){
				
				productList.children('li').removeClass('blur');
				$('.product-filters').removeClass('filtered');
				$(this).removeClass('selected');
				
				var productClass = $(this).attr('class');
				
				productList
					.removeClass('for_orgs')
					.removeClass('for_public')
					.removeClass('for_volunteers')
					.removeClass('for_international')
					.children(':not(li.'+productClass+')')
					.addClass('blur');
					
				productList.isotope({ 
					filter : "",
					sortBy : productClass,
					sortAscending : false
				});
				
				selectFilter();
				$(this).addClass('selected');
			};
			
			// When leaving a filter fade all the products back in
			var filterProducts = function(){
					//productList.children('li').removeClass('blur');
			};
			
			// Select a filter
			var selectFilter = function(){
				
				// Remove selected class from all filters
				$('.product-filters a').removeClass('selected');
				
				// Get class to filter by
				var productClass = $(this).attr('class');
				
				// Select the clicked filter
				$(this).addClass('selected');
				
				// Add class to filters to fade all non-selected filters
				$('.product-filters').addClass('filtered');
				
				// Filter the products
				//productList.isotope({ filter: '.'+productClass });
				productList.addClass(productClass);
				
				return false;
			}
			
			// Setup for HoverIntent
			var hi_config = {    
				over: filterProductsHover,
				out: filterProducts,
				interval: 300,
				sensitivity: 5
			};
			
			
			$('.product-filters a').hoverIntent(hi_config);
			$('.product-filters a').on('click', selectFilter);
				
				
		});
		
	</script>
	
</body>
</html>