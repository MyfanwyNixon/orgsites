<? get_header() ?>
  <div class="content" role="main">
    <h1>Product entry</h1>
    <h2><? the_title() ?></h2>
    
    <p class="intro"><? the_field('intro') ?></p>
    
    <div class="body"><? the_field('body') ?></div>
    

    <h3>At the moment timthumb throws a 500 server error if the image filename starts with a Capital letter. Boo. Resolve this.</h3>
    <? if(get_field('hero-image')): ?>
		<ul class="plain-list">
		<? foreach(get_field('hero-image') as $image): ?>
			<li>
				<img src="<?= get_bloginfo( 'template_url' ) . '/scripts/timthumb.php?src=' . $image['image'] . '&w=320' ?>" alt="<?= $image['alt'] ?>">
			</li>
		<? endforeach; ?>
		</ul>
	<? endif; ?>
  </div>
<? get_footer() ?>