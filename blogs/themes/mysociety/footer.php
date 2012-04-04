        <div class="clearfix"></div>
      </div><?//.container?>


      <div id="banners" class="container">
          <a href="/" class="hire-us-banner"><img src="<? bloginfo( 'template_url' ) ?>/assets/images/banner-hire-us.png" /></a>
          <a href="/" class="donate-banner"><img src="<? bloginfo( 'template_url' ) ?>/assets/images/banner-donate.png" /></a>
      </div>

      <footer id="site-footer" role="contentinfo">
        <div class="container">
          <small>mySociety is a project of UK Citizens Online Democracy (UKCOD). UKCOD is a registered charity in England and Wales, no. 1076346.<br>Its company number is 03277032, and mySociety Ltd's is 05798215.</small>
        </div>
      </footer>
    </div><?//.table-cell?>
    
    <div id="nav-wrapper">
      <div role="navigation" class="container">
        <header class="mob-only">
          <a href="#site-header" id="skip-to-top">Top</a>
        </header>
        <?
          wp_nav_menu(array(
            'theme_location' => 'secondary',
            'container'      => false, 
            'menu_id'        => 'secondary-menu'
          ));

          wp_nav_menu(array(
            'theme_location' => 'primary',
            'container'      => false, 
            'menu_id'        => 'primary-menu'
          ));
        ?>
        <form id="site-search" role="search" action="<?= esc_url( home_url( '/' ) ); ?>" type="get">
          <label for="search" class="visuallyhidden"><? _e( 'Search', 'mysociety' ); ?></label>
          <input id="search" name="s" type="text" placeholder="<? esc_attr_e( 'Keywords...', 'mysociety' ); ?>">
          <button type="submit" name="submit"><? esc_attr_e( 'Go', 'mysociety' ); ?></button>
        </form>
      </div>
    </div>
  </div><?//.wrapper?>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<? bloginfo( 'template_url' )?>/assets/js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <script src="<? bloginfo( 'template_url' )?>/assets/js/libs/jquery.placeholder.min.js" charset="utf-8"></script>
  <script src="<? bloginfo( 'template_url' )?>/assets/js/mysociety.js"></script>

  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
  <? wp_footer(); ?>
</body>

</html>