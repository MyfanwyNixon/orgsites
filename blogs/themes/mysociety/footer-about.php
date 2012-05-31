<section id="about-mysociety">
	<h2>About <strong>mySociety</strong></h2>
	
	<?php
		// Print a navigation section, given the section name and an array of template names
		function print_nav_section($section_name, $templates) {
			echo "<strong>$section_name:</strong>";
			echo "<ul>";
			$loop = pages_with_template($templates);
			while ( $loop->have_posts() ) {
				$loop->the_post();
				echo "<li><a href=\"". esc_html(get_permalink()). "\">". esc_html(get_the_title()). "</a></li>";
			}
			echo "</ul>";
			wp_reset_postdata();
		}
	?>
	
	<nav>
		<?php
			print_nav_section("Learn more about us", array('about.php', 'team.php'));
			print_nav_section("Support us", array('donate.php', 'volunteer.php', 'workforus.php'));
			print_nav_section("Get in-touch", array('contact.php', 'support.php', 'hireus.php', 'press.php'));
		?>
	</nav>
	
	<p><strong>We build websites that give the public simple, tangible ways to connect with and improve their society.</strong> As well as offering tools directly to the public we provide integration and development services for local authorities, corporates and government. As a UK Charity our own work has a national focus but our vision is global,  we open source our projects and encourage international adaptation.</p>
	
	<h3>About <strong>UKCOD</strong></h3>
	<p>UK Citizens Online Democracy (<abbr title="UK Citizens Online Democracy">UKCOD</abbr>) is a registered charity and is the sole owner of mySociety Limited.</p>
</section>