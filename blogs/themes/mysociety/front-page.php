<? get_header(); ?>
  <div class="content" role="main">
    <article id="post-<? the_ID() ?>" class="homepage">
      <header class="entry-header">
        <section class="banner">
          <img class="mob-only" src="<? bloginfo( 'template_url' ) ?>/assets/images/mob-homepage-banner.png" alt="Welcome to mySociety" />
          <img class="desk-only" src="<? bloginfo( 'template_url' ) ?>/assets/images/homepage-banner.png" alt="Welcome to mySociety" />
        </section>

        <? if(get_field('intro')): ?><p class="entry-intro"><? the_field('intro') ?></p><? endif; ?>
      </header>

      <div class="entry-content">
        <div id="news-and-twitter">
          <section class="news_box">
            <h2 class="bubble orange_icon">News</h2>
            <ul class="news-list">
              <?
                $news_query = new WP_Query("posts_per_page=4");
                while ($news_query->have_posts()) : $news_query->the_post();
              ?>
                <li>
                  <h3 class="entry-title"><a href="<? the_permalink() ?>"><? the_title() ?></a></h3>
                  <small class="entry-date"><? mysociety_posted_on() ?></small>
                </li>
              <?    
                endwhile;
              ?>
            </ul>
          </section>

          <section class="twitter_box">
            <h2 class="twitter green_icon"><? _e( 'Twitter', 'mysociety' ) ?></h2>
            <a class="green_button" href="http://twitter.com/mySociety">@mySociety</a>
            <ul class="tweets">
              <li>
                <span>13 Mar</span>
                <small><a href="http://ow.ly/9CvOe">http://ow.ly/9CvOe</a> "Ministers expect councils to make savings on road maintenance" - one way is to put problem-reporting online!</small>
              </li>
              <li>
                <span>13 Mar</span>
                <small>FixMyStreet is available for council websites: <a href="http://ow.ly/9CvUF">http://ow.ly/9CvUF</a> - slashes costs and makes reporting easy for users.</small>
              </li>
            </ul>
          </section>
        </div>

        <nav id="homepage-tab-nav" class="desk-only">
          <ul id="tab-nav">
            <li><a href="#not-for-profit-projects"><? _e( 'Not-for-profit Projects', 'mysociety' ) ?></a></li>
            <li><a href="#commercial-products"><? _e( 'Commercial Products', 'mysociety' ) ?></a></li>
          </ul>
        </nav>
        
        <div id="homepage-tabs" class="tabs">
          <section id="not-for-profit-projects" class="project_product-section grey_back">
            <h2 class="pound"><? _e( 'Not-for-profit Projects', 'mysociety' ) ?></h2>
            
            <div id="not_for_profit_projects_tabs" class="project_product-section-inner">
              <? $not_for_profit_posts = new WP_Query('post_type=ms_project&posts_per_page=6'); ?>
              <? $i = 0; while ($not_for_profit_posts->have_posts()) : $not_for_profit_posts->the_post(); $i++; ?>
                <? if ($i == 1 || $i == 4): ?>
                <ul class="block-list">
                <? endif; ?>
                  <li id="project-<? the_ID() ?>" class="<? if ($i == 3 || $i == 6){echo "last";} ?>">
                    <?
                      $images = get_field('gallery');
                      if($images) {
                        $sized = vt_resize( $images[0]['image'], '', 288, 180, true );
                        echo "<a class='thumb' href='".get_permalink()."'><img src='{$sized['url']}' width='{$sized['width']}' height='{$sized['height']}' alt='{$image['alt']}' /></a>";
                      }
                    ?>

                    <h3><a href="<? the_permalink() ?>"><? the_title() ?></a></h3>

                    <?
                      $intro = get_field('intro');
                      if (strlen($intro) > 100)
                        echo '<p class="desk-only">'.substr($intro, 0, 100) . '...</p>';
                      else
                        echo "<p class='desk-only'>{$intro}</p>";
                    ?>
                  </li>
                <? if ($i == 3): ?>
                </ul>
                <? endif; ?>
              <? endwhile; ?>
              </ul>
            </div>
          </section>

          <section id="commercial-products" class="project_product-section blue_back">
            <h2 class="pound"><? _e( 'Commercial Products', 'mysociety' ) ?></h2>
            
            <div id="commercial_products_tabs" class="project_product-section-inner">
              <? $commercial_products = new WP_Query('post_type=ms_product&posts_per_page=6'); ?>
              <? $i = 0; while ($commercial_products->have_posts()) : $commercial_products->the_post(); $i++; ?>
                <? if ($i == 1 || $i == 4): ?>
                <ul class="block-list">
                <? endif; ?>
                  <li id="project-<? the_ID() ?>" class="<? if ($i == 3 || $i == 6){echo "last";} ?>">
                    <?
                      $images = get_field('gallery');
                      if($images) {
                        $sized = vt_resize( $images[0]['image'], '', 288, 180, true );
                        echo "<a class='thumb' href='".get_permalink()."'><img src='{$sized['url']}' width='{$sized['width']}' height='{$sized['height']}' alt='{$image['alt']}' /></a>";
                      }
                    ?>

                    <h3><a href="<? the_permalink() ?>"><? the_title() ?></a></h3>

                    <?
                      $intro = get_field('intro');
                      if (strlen($intro) > 100)
                        echo '<p class="desk-only">'.substr($intro, 0, 100) . '...</p>';
                      else
                        echo "<p class='desk-only'>{$intro}</p>";
                    ?>
                  </li>
                <? if ($i == 3): ?>
                </ul>
                <? endif; ?>
                <? endwhile; ?>
              </ul>
            </div>
          </section>
        </div>

        <section id="our-clients">
          <h2>Our Clients</h2>
          <img src="<? bloginfo('template_url') ?>/assets/images/clients.png" />
        </section>
      </div>
    </article>
  </div>
<? get_footer(); ?>