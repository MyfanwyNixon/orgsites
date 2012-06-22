<div class="blogs-meta">

	<section class="blogkey">
		<h3>Our Blogs:</h3>
		<ul>
			<li><a class="mysociety" href="<?php //TEMP FIX- TODO: check this function currently returning null, have hardcoded link as a temporary fix //get_bloginfo( 'url', 'raw' );?>/blog/">Company Blog</a></li>
			<li><a class="diy" href="http://diy.mysociety.org/">DIY mySociety Blog</a></li>
<?php
			//<li><a class="fmt" href="#">FixMyTransport Blog</a></li>
			//<li><a class="twfy" href="#">TheyWorkForYou Blog</a></li>
			//<li><a class="" href="#">Bloggity Blog Blog</a></li>
?>
		</ul>
	</section>
	
	<?php
		//TODO
		// <section class="widget widget_search">
		// 	<h3 class="widget_title">Search posts:</h3>
		//  php get_search_form();
		// 	</form>
		// </section>
	?>
	
	
	<?php $args = array(
	    'orderby'            => 'count',
		'number'			 => 10,
		'title_li'			 => '',
		'depth'				 => -1
		);
	?>
	<section class="widget widget_categories">
		<h3 class="widget_title"><i class="icon-black-tag"></i>Categories</h3>
		<ul>
			<?php wp_list_categories( $args ); ?> 
		</ul>
	</section>
</div>
