<?
  //first things first, set the colour var
  get_field('colour') ? $colour = get_field('colour') : $colour = '';
?>

<article id="post-<? the_ID() ?>" <? post_class() ?>>
  <header class="entry-header">
    <h1 class="entry-title"><? the_title() ?></h1>
    <? if(get_field('intro')): ?><p class="entry-intro"><? the_field('intro') ?></p><? endif; ?>

    <?
      $images = get_field('gallery');
      if($images):
    ?>
      <div class="featured-gallery">
        <ul id="slider_<? the_ID() ?>">
        <? $i = 0; foreach($images as $image): ?>
          <li <?= ($i == 0 ? 'class="first"' : ''); ?>>
            <? $sized = vt_resize( $image['image'], '', 385, 219, true ); ?>
            <a href="<?=wp_get_attachment_url($image['image'])?>"><img src="<?= $sized['url']; ?>" width="<?= $sized['width']; ?>" height="<?= $sized['height']; ?>" alt="<?= $image['alt'] ?>" /></a>
          </li>
        <? $i++; endforeach; ?>
        </ul>
      </div>
    <? endif; ?>

    <?
      if(get_field('commercial-options') && get_field('build-your-own')):
        $settabs = TRUE;
    ?>
      <nav id="project-tab-nav" class="desk-only">
        <ul id="tab-nav">
          <li><a class="<?= $colour; ?>_button pound white_icon" href="#commercial-options"><? _e( 'Commercial Options', 'mysociety' ) ?></a></li>
          <li><a class="<?= $colour; ?>_button build white_icon " href="#build-your-own"><? _e( 'Build Your Own', 'mysociety' ) ?></a></li>
        </ul>
      </nav>
    <? endif; ?>
  </header>
    
  <div class="entry-content">
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
                $twitter_user = $resources[$i]['url'];
                break;
          }
          $i++;
        }
      }
    ?>

      <?= ($settabs === TRUE ? '<div class="tabs">' : '');?>
      <? if(get_field('commercial-options')): ?>
        <section id="commercial-options" class="project_product-section <?= ($settabs === TRUE ? 'tab' : '');?>">
          <h2 class="pound <?= $colour; ?>_icon"><? _e( 'Commercial Options', 'mysociety' ) ?></h2>
          
          <div class="project_product-section-inner">
            <?= the_field('commercial-options') ?>
          </div>
        </section>
      <? endif; ?>

      <? if(get_field('build-your-own')) : ?>
        <section id="build-your-own" class="project_product-section <?= $colour; ?>_back  <?= ($settabs === TRUE ? 'tab' : '');?>">
          <h2 class="build <?= $colour; ?>_icon"><? _e( 'Build your own', 'mysociety' ) ?></h2>
          
          <div class="project_product-section-inner">
            <? if($resources): ?>
            <div class="content-with-sidebar">
            <? endif; ?>
              <?= the_field('build-your-own') ?>
            <? if($resources): ?>
            </div>
            <aside class="sidebar">
              <ul class="resource-list">
              <? foreach($resources as $resource): ?>
                <? if($resource['type'] !== 'twitter'): ?>
                <li>
                  <a class="<?= $resource['type']; ?> <?= $colour; ?>_icon" href="<?= $resource['url']; ?>"><?= ($resource['title'] ? $resource['title'] : $resource['mod_type']); ?></a>
                </li>
                <? endif; ?>
              <? endforeach; ?>
              </ul>
            </aside>
            <? endif; ?>
          </div>
        </section>
      <? endif; ?>
      <?= ($settabs === TRUE ? '</div>' : '');?>

      <div class="content-with-sidebar">
        <? //get the latest post that matches the category(s) of this entry
          $post_id = get_the_id();
          $cat_array = wp_get_post_categories($post_id);
        ?>
        <? if($cat_array): ?>
          <h2 class="bubble <?= $colour; ?>_icon"><? _e( 'News', 'mysociety' ) ?></h2>
          <?
            $news_query = new WP_Query( array( 'category__in' => $cat_array, 'posts_per_page' => '1' ) );

            while ($news_query->have_posts()) : $news_query->the_post();
              get_template_part( 'content' );
            endwhile;
            wp_reset_query();
            //instead of showing pagination we should just show a link to the blog category page?
          ?>
        <? endif; ?>
      </div>
      <aside class="sidebar big-sidebar">
        <? if($twitter_user): ?>
          <section class="twitter_box">
            <h2 class="twitter <?= $colour; ?>_icon"><? _e( 'Twitter', 'mysociety' ) ?></h2>
            <a class="<?= $colour; ?>_button" href="http://twitter.com/<?= $twitter_user; ?>">@<?= $twitter_user; ?></a>
            <ul class="tweets">
              <li>
                <span>13 Mar</span>
                <small><a href="http://ow.ly/9CvOe">http://ow.ly/9CvOe</a> "Ministers expect councils to make savings on road maintenance" - one way is to put problem-reporting online!</small>
              </li>
              <li>
                <span>13 Mar</span>
                <small>FixMyStreet is available for council websites: <a href="http://ow.ly/9CvUF">http://ow.ly/9CvUF</a> - slashes costs and makes reporting easy for users.</small>
              </li>
              <li>
                <span class="tw_date">13 Mar</span>
                <small>We're helping make the Philippines "a smoother, less perforated place": <a href="http://www.mysociety.org/2012/03/06/international-potholing/">http://www.mysociety.org/2012/03/06/international-potholing/</a></small>
              </li>
              <li>
                <span class="tw_date">13 Mar</span>
                <small>One of our most-viewed reports this week - strong smell coming from <a href="http://twitter.com/">#Hammersmith</a> park: <a href="http://ow.ly/9pblZ">http://ow.ly/9pblZ</a></small>
              </li>
            </ul>
          </section>
        <? endif; ?>

        <? get_template_part( 'mailchimp' ); ?>
      </aside>
    <!-- pagination? -->
  </div>
</article>