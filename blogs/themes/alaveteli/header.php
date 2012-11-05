<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        <link href="/wp-content/themes/alaveteli/stylesheets/main.css" media="all" rel="stylesheet" title="Main" type="text/css">
        <link href="/wp-content/themes/alaveteli/stylesheets/fonts.css" media="all" rel="stylesheet" type="text/css">
        <link href="/wp-content/themes/alaveteli/stylesheets/print.css" media="print" rel="stylesheet" type="text/css">
        <!--[if LT IE 8]>
        <style type="text/css">@import url("/stylesheets/ie7.css");</style>
        <![endif]-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24633320-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body <?php body_class(); ?>>

<div class="entirebody">
    <div id="banner">
      <div id="banner_inner">


          <div id="logged_in_bar">
 <img src="/wp-content/themes/alaveteli/images/twitter-16.png" alt="twitter icon" class="twitter-icon"> <a href="http://www.twitter.com/alaveteli_foi">Follow us on twitter</a>

          </div>


        <div id="navigation_search">
            <form action="/" id="navigation_search_form" method="get">
               <p>
                   <input id="navigation_search_query" name="s" size="40" type="text" value="<?php the_search_query(); ?>">
                   <input src="/wp-content/themes/alaveteli/images/search-button.png" type="image">
               </p>
            </form>
        </div>

        <a href="/" id="logo"><img src="/wp-content/themes/alaveteli/images/logo.png" alt="Logo"></a>


        <div id="topnav">
          <ul>
      <?php wp_list_pages('title_li=&depth=1' ); ?>
          </ul>

    </ul>
</div>

      </div>
    </div>
    <div id="wrapper">
        <div id="content">



            <div id="help_about" class="controller_help">

