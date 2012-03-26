<? get_header() ?>
  <div class="content" role="main">
    <h1>Product entry</h1>
    <h2><? the_title() ?></h2>
    
    <p class="intro"><? the_field('intro') ?></p>
    
    <div class="body"><? the_field('body') ?></div>
    
    <? if(get_field('gallery')): ?>
		<ul class="plain-list">
		<? foreach(get_field('gallery') as $image): ?>
			<li>
				<? $sized = vt_resize( $image[image], '', 250, 250, true ); ?>
				<img src="<?= $sized[url]; ?>" width="<?= $sized[width]; ?>" height="<?= $sized[height]; ?>" alt="<?= $image['alt'] ?>" />
			</li>
		<? endforeach; ?>
		</ul>
	<? endif; ?>
  </div>
<? get_footer() ?>