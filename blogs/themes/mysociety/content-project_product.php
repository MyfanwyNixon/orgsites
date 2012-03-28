<article id="post-<? the_ID() ?>" <? post_class() ?>>
  <header class="entry-header">
      <h1 class="entry-title"><? the_title() ?></h1>
  </header>
    
  <div class="entry-content">
    <? if(get_field('intro')): ?><p class="entry-intro"><? the_field('intro') ?></p><? endif; ?>
    
    <?
      $images = get_field('gallery');
      if($images):
    ?>
      <ul id="featured-gallery">
      <? foreach($images as $image): ?>
        <li>
          <? $sized = vt_resize( $image['image'], '', 385, 219, true ); ?>
          <a href="<?=wp_get_attachment_url($image['image'])?>"><img src="<?= $sized['url']; ?>" width="<?= $sized['width']; ?>" height="<?= $sized['height']; ?>" alt="<?= $image['alt'] ?>" /></a>
        </li>
      <? endforeach; ?>
      </ul>
    <? endif; ?>



    <?
      //set up resources stuff
      $resources = get_field('resources');
      if($resources) {
        $i = 0;
        foreach($resources as $resource) {
          //modify the type strings
          switch ($resource['type']) {
            case 'wikidocs':
                $resources[$i]['mod_type'] = 'Wiki + Docs';
                break;
            case 'codeblog':
                $resources[$i]['mod_type'] = 'Code blog';
                break;
            case 'github':
                $resources[$i]['mod_type'] = 'GitHub';
                break;
            case 'twitter':
                $resources[$i]['mod_type'] = 'Twitter';
                break;
          }
          $i++;
        }
      }

      //set colour
      get_field('colour') ? $colour = get_field('colour') : $colour = '';
    ?>

    <? if(get_field('commercial-options')): ?>
      <section class="project_product-section">
        <h2>Commercial Options</h2>
        <div class="project_product-section-inner">
          <?= the_field('commercial-options') ?>
        </div>
      </section>
    <? endif; ?>

    <? if(get_field('build-your-own')) : ?>
      <section class="project_product-section <?= $colour; ?>_back">
        <h2>Build your own</h2>
        <div class="project_product-section-inner">
          <?= the_field('build-your-own') ?>

          <? if($resources): ?>
            <ul class="resource-list">
            <? foreach($resources as $resource): ?>
              <? if($resource['type'] !== 'twitter'): ?>
              <li>
                <a class="<?= $resource['type']; ?> <?= $colour; ?>_icon" href="<?= $resource['url']; ?>"><?= ($resource['title'] ? $resource['title'] : $resource['mod_type']); ?></a>
              </li>
              <? endif; ?>
            <? endforeach; ?>
            </ul>
          <? endif; ?>
        </div>
      </section>
    <? endif; ?>


    <!-- twitter -->
    <!-- news -->
    <!-- pagination? -->
  </div>
</article>