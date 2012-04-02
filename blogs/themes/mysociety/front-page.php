<? get_header(); ?>
  <div class="content" role="main">
    <article id="post-<? the_ID() ?>" class="homepage">
    <header class="entry-header">
      <section class="banner">
      <?
        $images = get_field('gallery');
        if($images):
      ?>
        <img src="<?= $images[0]['image']; ?>" alt="<?= $images[0]['alt'] ?>" />
      <? else: ?>
        <img src="<? bloginfo( 'template_url' ) ?>/assets/images/homepage-banner.png" alt="Welcome to mySociety" />
      <? endif; ?>
      </section>

      <? if(get_field('intro')): ?><p class="entry-intro"><? the_field('intro') ?></p><? endif; ?>
    </header>

    <div class="entry-content">
      <section id="not-for-profit-projects" class="project_product-section">
        <h2 class="pound grey_icon"><? _e( 'Not-for-profit Projects', 'mysociety' ) ?></h2>
        
        <div class="project_product-section-inner">
          <ul class="block-list">
            
          </ul>
        </div>
      </section>

      <section id="commercial-products" class="project_product-section">
        <h2 class="pound <?= $colour; ?>_icon"><? _e( 'Commercial Products', 'mysociety' ) ?></h2>
        
        <div class="project_product-section-inner">
          <ul class="block-list">

          </ul>
        </div>
      </section>
    </div>
  </article>
  </div>
<? get_footer(); ?>