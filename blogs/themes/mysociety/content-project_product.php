<article id="post-<? the_ID() ?>" <? post_class() ?>>
  <header class="entry-header">
      <h1 class="entry-title"><? the_title() ?></h1>
  </header>
    
  <div class="entry-content">
    <? if(get_field('intro')): ?><p class="entry-intro"><? the_field('intro') ?></p><? endif; ?>
    <? if(get_field('body')): ?><div class="entry-body"><? the_field('body') ?></div><? endif; ?>
    
    <?
      $images = get_field('gallery');
      if($images):
    ?>
      <ul class="plain-list">
      <? foreach($images as $image): ?>
        <li>
          <? $sized = vt_resize( $image[image], '', 250, 250, true ); ?>
          <img src="<?= $sized[url]; ?>" width="<?= $sized[width]; ?>" height="<?= $sized[height]; ?>" alt="<?= $image['alt'] ?>" />
        </li>
      <? endforeach; ?>
      </ul>
    <? endif; ?>

    <?
      if(get_field('build-your-own')) {
        echo '<h2>Build your own</h2>';
        echo the_field('build-your-own');
      }
    ?>

    <?
      if(get_field('commercial-options')) {
        echo '<h2>Commercial Options</h2>';
        echo the_field('commercial-options');
      }
    ?>

    <?
      $resources = get_field('resources');
      if($resources):
    ?>
      <ul class="plain-list">
      <? foreach($resources as $resource): ?>
        <li>
          <?= $resource[url]; ?> | <?= $resource[type]; ?>
        </li>
      <? endforeach; ?>
      </ul>
    <? endif; ?>

    <?
      $colour = get_field('colour');
      if($colour){
        echo $colour;
      }
    ?>
  </div>
</article>