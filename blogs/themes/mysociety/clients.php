<?php
/*
Template Name: Clients
*/
?>
<?php get_header(); ?>

<div id="content">
    <article id="clients_intro" class="article">
	
		<section class='section_intro'>
			<header>
				<h2><?php the_title();?></h2>
			</header>
			<?php
		    if (have_posts()) : while (have_posts()) : the_post();
		        the_content();
		    endwhile; endif;
		    ?>
		</section>
	</article>
	<article id='clients_list' class='product'>
		<section class='product-options-casestudy'>
			<?php $values = get_field('clients'); ?>
			<?php if($values) : ?>
			    <ul class="two_up">
					<?php foreach($values as $value) : ?>
			        <li class='clear'>
						<h4><?php echo $value['name']; ?></h4>
			            <?php if($value['image']) : ?>
			               	<img src="<?php echo $value['image']; ?>" alt="<?php echo $value['name']; ?>">
			            <?php endif ?>
			            <?php echo $value['description']; ?>
			        </li>
					<?php endforeach ?>
			    </ul>
			<?php endif ?>
		</section>
		
    </article>
</div>

<?php get_footer(); ?>
