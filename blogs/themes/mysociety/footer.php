<footer class="footer">
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
  <p class="charity_number"><a href="/privacy">Privacy and cookies</a></p>
	<p class="charity_number"><strong>mySociety</strong> limited (<strong>05798215</strong>) is a project of <strong>UK Citizens Online Democracy</strong> (<abbr title="UK Citizens Online Democracy">UKCOD</abbr>) a registered charity in England and Wales, charity number <strong>1076346</strong>, company number <strong>03277032</strong>.</p>
</footer>

<script src="<?php bloginfo('template_url'); ?>/js/libs/jquery-1.7.2.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo('template_url'); ?>/js/libs/jquery.hoverintent.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo('template_url'); ?>/js/libs/jquery.isotope.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo('template_url'); ?>/js/FancyZoom.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo('template_url'); ?>/js/FancyZoomHTML.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo('template_url'); ?>/js/scripts.js" type="text/javascript"></script>

  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script>
    <script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script>
  <![endif]-->

    <?php if ( !OPTION_STAGING ) { ?>
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-660910-12']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <?php } ?>

    <script type="text/javascript">

    var menuIn = false;

    $(function() {
        $('.menu-link a').click(function() {
            $('.header nav').toggle();
        });
    });

    </script>

    <?php if (get_field('javascript_inject')): ?>
    <script type="text/javascript">
      <?php echo get_field('strapline'); ?>
    </script>
    <?php endif; ?>

</body>
</html>
