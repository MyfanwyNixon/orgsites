<!-- a page for organisations -->
<? get_header(); ?>
<h1><?php the_title();?></h1>

<h2><?php echo get_field('strapline')?> </h2>

<p><?php echo get_field('overview')?> </p>

<?php if(get_field('feature')) : ?>
	<h3>Features</h3>
	<?php foreach(get_field('feature') as $feature): ?>
	    <div>
			<h4><?php echo $feature['heading']; ?></h4>
			<p><?php echo $feature['detail']; ?></p>
		</div>
	<?php endforeach; ?>
<?php endif ?>

<?php if(get_field('case_study')) : ?>
	<h3>Case Studies</h3>
	<?php foreach(get_field('case_study') as $case): ?>
	    <div>
			<?php if($case['image']):?>
				<img src='<?php echo $case['image']; ?>' alt='<?php echo $case['client'].'logo'?>'>
			<?php endif ?>
			<h4><?php echo $case['client']; ?></h4>
			<p><?php echo $case['blurb']; ?></p>
		</div>
	<?php endforeach; ?>
<?php endif ?>

<?php if(get_field('offer')) : ?>
	<h3>Pricing</h3>
	<?php foreach(get_field('offer') as $price_point): ?>
	    <div>
			<?php if($price_point['image']):?>
				<img src='<?php echo $price_point['image']; ?>' alt='Price point image'>
			<?php endif ?>
			<h4><?php echo $price_point['overview']; ?></h4>
			<h5><?php echo 'from '.$price_point['from']; ?></h5>
			<p><?php echo $price_point['details']; ?></p>
		</div>
	<?php endforeach; ?>
<?php endif ?>

<?php if(get_field('resources')) : ?>
	<h3>Resources</h3>
	<ul>
	<?php foreach(get_field('resources') as $resource): ?>
	    <li>
			<a href='<?php echo $resource['url']; ?>'><?php echo $resource['text']; ?></>
		</li>
	<?php endforeach; ?>
	</ul>
<?php endif ?>

<? get_footer(); ?>