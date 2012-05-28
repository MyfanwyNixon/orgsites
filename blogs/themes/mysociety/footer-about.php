<section id="about-mysociety">
	<h2>About <strong>mySociety</strong></h2>
	
	<nav>
		<strong>Learn more about us:</strong>
		<?php
			$args = array('post_type' => 'page', 'meta_query' => array( 'relation' => 'OR', array('key' => '_wp_page_template', 'value' => 'about.php'), array('key' => '_wp_page_template', 'value' => 'team.php')));
			$loop = new WP_Query( $args );
		?>
		<ul>
		<?php while ( $loop->have_posts() ) : ?>
			<?php
				$loop -> the_post();
			?>
			<li><a href='<?the_permalink();?>'><?php the_title(); ?></a></li>
		<?php endwhile; ?>
		</ul>
		<?php wp_reset_query(); ?>
		
		<!-- <ul>
			<li><a href="#">History of mySociety & UKCOD</a></li>
			<li><a href="#">About the Team</a></li>
			<li><a href="#">Read our Blogs/Journals</a></li>
		</ul> -->

		<strong>Support us:</strong>
		<?php
			$args = array('post_type' => 'page', 'meta_query' => array( 'relation' => 'OR', array('key' => '_wp_page_template', 'value' => 'donate.php'), array('key' => '_wp_page_template', 'value' => 'volunteer.php') , array('key' => '_wp_page_template', 'value' => 'workforus.php')));
			$loop = new WP_Query( $args );
		?>
		<ul>
		<?php while ( $loop->have_posts() ) : ?>
			<?php
				$loop -> the_post();
			?>
			<li><a href='<?the_permalink();?>'><?php the_title(); ?></a></li>
		<?php endwhile; ?>
		</ul>
		<?php wp_reset_query(); ?>
		<!-- <ul>
			<li><a href="#">Volunteer</a></li>
			<li><a href="#">Donate</a></li>
			<li><a href="#">Job vacancies</a></li>
		</ul> -->

		<strong>Get in-touch:</strong>
		<?php
			$args = array('post_type' => 'page', 'meta_query' => array( 'relation' => 'OR', array('key' => '_wp_page_template', 'value' => 'contact.php'), array('key' => '_wp_page_template', 'value' => 'support.php'), array('key' => '_wp_page_template', 'value' => 'hireus.php'), array('key' => '_wp_page_template', 'value' => 'press.php')));
			$loop = new WP_Query( $args );
		?>
		<ul>
		<?php while ( $loop->have_posts() ) : ?>
			<?php
				$loop -> the_post();
			?>
			<li><a href='<?the_permalink();?>'><?php the_title(); ?></a></li>
		<?php endwhile; ?>
		</ul>
		<?php wp_reset_query(); ?>
		<!-- <ul>
			<li><a href="#">General Contact Information</a></li>
			<li><a href="#">Talk about hiring us</a></li>
			<li><a href="#">Product Support / Questions</a></li>
		</ul> -->
		
	</nav>
	
	<p><strong>We build websites that give the public simple, tangible ways to connect with and improve their society.</strong> As well as offering tools directly to the public we provide integration and development services for local authorities, corporates and government. As a UK Charity our own work has a national focus but our vision is global,  we open source our projects and encourage international adaptation.</p>
	
	<h3>About <strong>UKCOD</strong></h3>
	<p>UK Citizens Online Democracy (<abbr title="UK Citizens Online Democracy">UKCOD</abbr>) is a registered charity and is the sole owner of mySociety Limited.</p>
</section>