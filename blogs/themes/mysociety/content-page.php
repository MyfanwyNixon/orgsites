<article id="post-<? the_ID() ?>" <? post_class() ?>>
  <header class="entry-header">
    <h1 class="entry-title"><? the_title() ?></h1>
  </header>

  <div class="entry-content">
    <?
      $images = get_field('gallery');
      if($images):
    ?>
      <div class="featured-gallery">
        <ul id="slider_<? the_ID() ?>">
        <? $i = 0; foreach($images as $image): ?>
          <li <?= ($i == 0 ? 'class="first"' : ''); ?>>
            <? $sized = vt_resize( $image['image'], '', 540, 260, true ); ?>
            <a href="<?=wp_get_attachment_url($image['image'])?>"><img src="<?= $sized['url']; ?>" width="<?= $sized['width']; ?>" height="<?= $sized['height']; ?>" alt="<?= $image['alt'] ?>" /></a>
          </li>
        <? $i++; endforeach; ?>
        </ul>
      </div>
    <? endif; ?>

    <? if(get_field('intro')): ?><p class="entry-intro"><? the_field('intro') ?></p><? endif; ?>
    
    <? if(get_field('body')): ?><div class="entry-body"><? the_field('body') ?></div><? endif; ?>
	</div>
</article>