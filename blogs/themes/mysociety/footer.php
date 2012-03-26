      </div><?//.container?>

      <footer role="contentinfo">

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
        <form id="site-search" role="search" action="/" type="get">
          <label for="search" class="visuallyhidden">Search</label>
          <input id="search" name="s" type="text" placeholder="Keywords...">
          <button type="submit" class="">Go</button>
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