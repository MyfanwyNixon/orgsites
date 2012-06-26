<?php
/*
Template Name: FAQ
*/
?>
<?php get_header(); ?>

    <div id="content">

	<article class="products">
		
		<section class="q_and_a">
			
			<h2><?php the_title();?></h2>
			<?php 

				$faqs = get_field('faqs'); 
				$count = 0;
			?>			

			<!--Contents -->
			<ul id='contents'>
				<?php if(is_array($faqs) && count($faqs) > 0) : foreach($faqs as $faq) :?>
					<!-- Write up some FAQs! -->
					<li><a href="#q<?php echo $count?>"><?php printf($faq['question'])?></a></li>
				<?php endforeach; endif; ?>
			</ul>

			<!-- Q&A -->
			<?php $count = 0; ?>
			<?php if(is_array($faqs) && count($faqs) > 0) : foreach($faqs as $faq) :?>
				<!-- Write up some FAQs! -->
				<dt id="q<?php echo $count;?>"><?php printf($faq['question'])?></dt>
				<dd>
					<?php printf($faq['answer'])?>
					<p><a class="back-to-top" href="#content"><strong>&#8673;</strong> back to top</a></p>
				</dd>
				<?php $count++; ?>
			<?php endforeach; endif; ?>
		</section>
	</article>
</div>

<?php get_footer();?>
