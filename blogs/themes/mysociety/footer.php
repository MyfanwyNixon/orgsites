<footer id="footer">
	<section>		
		<nav id="footer_links">
			<ul>
				<li><a class="logo" href="<?php echo get_bloginfo( 'url', 'raw' ); ?>">mySociety</a></li>
				<?php wp_nav_menu(array('menu' => 'footer_menu')); ?>
			</ul>
		</nav>
		
		<div id="footer_blurb">
			<p>We build websites that give the public simple, tangible ways to connect with and improve their society. As well as offering tools directly to the public we provide integration and development services for local authorities, corporates and government. As a UK Charity our own work has a national focus but our vision is global,  we open source our projects and encourage international adaptation.</p>
		</div>
		
	</section>
</footer>

<script src="<?php bloginfo('template_url'); ?>/js/libs/jquery-1.7.2.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo('template_url'); ?>/js/libs/jquery.hoverintent.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo('template_url'); ?>/js/libs/jquery.isotope.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo('template_url'); ?>/js/FancyZoom.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo('template_url'); ?>/js/FancyZoomHTML.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">setupZoom();</script>
