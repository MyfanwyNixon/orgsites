
<div id="sidebar">
	
	<section id="report-problem">
		<p>Had a bad journey?</p>
		<p><a href="http://www.fixmytransport.com/">Report a problem</a></p>
	</section>
	
	<section id="about_journal">
		<h3>About this journal:</h3>

		<p>This is a journal from the volunteers behind <a href="http://www.fixmytransport.com/" title="FixMyTransport: Report, view and resolve public transport problems">FixMyTransport</a>, a free and independent website that helps people report and resolve issues with public transport in the open.</p>

		<nav id="main-nav" role="navigation"><?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?></nav>
	</section>
	
	<aside>
		<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>

			<?php if ( function_exists('dynamic_sidebar') ) dynamic_sidebar( 'primary-widget-area' ); ?>


		<?php else : ?>

			<section class="widget-container widget_search">
				<?php get_search_form(); ?>
			</section>

			<section id="archives" class="widget-container">
				<h3 class="widget-title"><?php _e( 'Archives', 'twentyten' ); ?></h3>
				<ul>
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>
			</section>

			<section id="meta" class="widget-container">
				<h3 class="widget-title"><?php _e( 'Meta', 'twentyten' ); ?></h3>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</section>

		<?php endif; ?>
	</aside>
</div>