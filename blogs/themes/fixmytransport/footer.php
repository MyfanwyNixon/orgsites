	<?php get_sidebar(); ?>
	</div><!-- END MAIN -->
	<footer id="footer" role="contentinfo">
		<nav>
			<ul>
				<li>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></li>
				<li>Header Illustrations &copy; <a href="https://twitter.com/#!/mockduck">Myf Nixon</a></li>
			</ul>
		</nav>
	</footer>		
	<?php wp_footer(); ?>
	<script type="text/javascript">
	/* <![CDATA[ */
		jQuery('#sidebar .widget:nth-child(even)').css('margin-right', 0);
	/* ]]> */
	</script>
</body>
</html>