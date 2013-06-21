<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>mySociety</title>
  <meta name="description" content="Thoughtful software for organisations and governments">

  <link rel="icon" href="<?php bloginfo('template_directory'); ?>/new-home/favicon.png" type="image/png">
  <link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/new-home/apple-touch-icon-precomposed.png">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/new-home/css/gumby.css">

  <script src="<?php bloginfo('template_directory'); ?>/new-home/js/libs/modernizr-2.6.2.min.js"></script>

</head>

<body>

  <section class="container">

    <div class="row">
      <div class="four columns special head">
        <h1><a href="#" onclick="toggleMenu();" class="menu-toggle only-on-mobile"><i class="icon-menu"></i></a><a href="http://www.mysociety.org"><img src="<?php bloginfo('template_directory'); ?>/new-home/img/mysoc-logo.png" gumby-retina style="width:198px;height:41px;"></a></h1>
      </div>
      <div class="eight columns special head">
        <nav class="greylinks main-nav">
          <ul>
            <!--<li><a href="http://www.mysociety.org/projects">Projects</a></li>-->
            <li><a href="http://www.mysociety.org/contact">Contact</a></li>
            <li><a href="http://www.mysociety.org/blog">Blog</a></li>
            <li><a href="http://www.mysociety.org/about">About</a></li>
          </ul>
        </nav>
      </div>
    </div>

  </section>

  <section class="container special gridded">

    <div class="row">

      <div class="twelve columns">
        <p class="lead-strapline">Using digital technologies to make people powerful</p>
      </div>

    </div>

    <div class="row">

      <div class="four columns product">

        <p class="home-img hide-on-mobile"><a href="uk"><img src="<?php bloginfo('template_directory'); ?>/new-home/img/home/uk.png"></a></p>

        <div class="blocklink"><a href="uk">
          <div class="blocklink-top blocklink-red">&nbsp;</div>
          <div class="blocklink-bottom blocklink-orange">&nbsp;</div>
          UK Sites &amp; Apps
        </a></div>

        <p class="hide-on-mobile">Our UK charitable projects such as FixMyStreet, TheyWorkForYou and WriteToThem.</p>

      </div>

      <div class="four columns product">

        <p class="home-img hide-on-mobile"><a href="international"><img src="<?php bloginfo('template_directory'); ?>/new-home/img/home/international.png"></a></p>

        <div class="blocklink"><a href="international">
          <div class="blocklink-top blocklink-blue">&nbsp;</div>
          <div class="blocklink-bottom blocklink-green">&nbsp;</div>
          International
        </a></div>

        <p class="hide-on-mobile">Tools, advice and support for getting our charitable sites up and running in your country.</p>

      </div>

      <div class="four columns product">

        <p class="home-img hide-on-mobile"><a href="services"><img src="<?php bloginfo('template_directory'); ?>/new-home/img/home/products.png"></a></p>

        <div class="blocklink"><a href="services">
          <div class="blocklink-top blocklink-purple">&nbsp;</div>
          <div class="blocklink-bottom blocklink-violet">&nbsp;</div>
          Products &amp; Consulting
        </a></div>

        <p class="hide-on-mobile">Take advantage of our talents and knowledge, supporting a good cause in the process.</p>

      </div>

    </div>

  </section>

  <section class="container special footer">

    <div class="row">
      <div class="twelve columns">
        <ul class="greylinks hide-on-mobile">
          <li><a href="http://www.mysociety.org/jobs">Work for us</a></li>
          <li><a href="https://secure.mysociety.org/admin/lists/mailman/listinfo/developers-public">Mailing list</a></li>
          <li><a href="http://www.mysociety.org/contact">Contact</a></li>
        </ul>
        <p>mySociety limited (05798215) is a project of UK Citizens Online Democracy (UKCOD) a registered charity in England and Wales, charity number 1076346, company number 03277032.</p>
      </div>
    </div>

  </section>

  <!-- Grab Google CDN's jQuery, fall back to local if offline -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory'); ?>/new-home/js/libs/jquery-1.9.1.min.js"><\/script>')</script>

  <script src="<?php bloginfo('template_directory'); ?>/new-home/js/libs/gumby.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/new-home/js/plugins.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/new-home/js/main.js"></script>

  <script>
    window._gaq = [['_setAccount','UA-660910-12'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>

  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

  <script>

  var menuIn = false;

  function toggleMenu() {
    if (menuIn) {
      $('.main-nav').animate({
        left: '-250px'
      });
      $('body').css('overflow', 'auto').animate({
        left: '0px'
      });
      menuIn = false;
    } else {
      $('.main-nav').animate({
        left: '0px'
      });
      $('body').css('overflow', 'hidden').animate({
        left: '250px'
      });
      menuIn = true;
    }
  }

  </script>

  </body>
</html>
