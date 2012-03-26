<article id="post-<? the_ID() ?>" <? post_class() ?>>
  <header class="entry-header">
      <h1 class="entry-title"><? the_title() ?></h1>
  </header>
    
  <div class="entry-content">
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
</article>