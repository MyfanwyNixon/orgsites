<?php get_header(); ?>

<section id="main-content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<header>
			<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<!-- <p class="post-meta"><time datetime="<?php the_time('Y-m-d')?>">Posted <strong><?php the_time('jS F Y') ?></strong></time> <span class="author">by <?php the_author() ?></span> <span class="category"> in <?php if (function_exists('parentless_categories')) parentless_categories(','); else the_category( ', ', 'multiple' ); ?></span>. </p> -->
		</header>
		
		<?php if (get_option('fmtblog_show_subpages')=='yes') {
			$subpages = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0&sort_column=menu_order&depth=1');
			if ($subpages) echo '<nav id="subpages"><ul>' . str_replace('</a>',' &rarr;</a>',$subpages) . '</ul></nav>';
		} ?>
		
		<?php the_content(''); ?>

	</article>
	
	<?php comments_template(); ?>

<?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>