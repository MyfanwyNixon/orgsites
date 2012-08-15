<?php get_header(); ?>

<section id="main-content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<header>
			<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<p class="post-meta"><time datetime="<?php the_time('Y-m-d')?>">Posted <strong><?php the_time('jS F Y') ?></strong></time> <span class="author">by <?php the_author() ?></span> <span class="category"> in <?php if (function_exists('parentless_categories')) parentless_categories(','); else the_category( ', ', 'multiple' ); ?></span>. </p>
		</header>
		
		<?php the_content(''); ?>
		
		<footer>
			<?php the_tags('<span class="tags">Tagged as ', ', ', '</span>'); ?>
		</footer>
	</article>
	
	<?php comments_template(); ?>
	
<?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>