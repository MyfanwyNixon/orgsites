<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->

<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php echo get_the_title(); ?> - mySociety</title>

    <meta name="description" content="<?php echo get_field('meta_description'); ?>">

    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/new/favicon.png" type="image/png">
    <link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/new/apple-touch-icon-precomposed.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/new/main/css/gumby.css">

    <script src="<?php bloginfo('template_directory'); ?>/new/js/libs/modernizr-2.6.2.min.js"></script>

    <script type="text/javascript" src="http://use.typekit.com/bth0qpr.js"></script>
    <script type="text/javascript">
        try{Typekit.load();}catch(e){}
    </script>

</head>

<body>
    <div class="container special head">
        <div class="row">
            <div class="twelve columns">
                <div class="ms-tab">
                    <a href="http://mysociety.org"><img src="<?php bloginfo('template_directory'); ?>/new/main/img/ms-tab-logo.png"></a>
                </div>

                <div class="menu-link">
                    <a href="#"><i class="icon-menu"></i> Menu</a>
                </div>

                <nav>
                    <ul>
                        <li><a href="http://www.mysociety.org/about/">About</a></li>

                        <li><a href="http://www.mysociety.org/projects/">Projects</a></li>

                        <li><a href="http://www.mysociety.org/blog/">Blog</a></li>

                        <li><a href="http://www.mysociety.org/contact/">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="row">
            <h2><img src="<?php echo get_field('logo_image'); ?>"></h2>
        </div>
    </div>

    <div class="container">

        <?php if (get_field('strapline') AND get_field('strapline_background_colour') AND get_field('strapline_text_colour')): ?>
        <div class="row">
            <div class="twelve columns special strapline" style="color:<?php echo get_field('strapline_text_colour'); ?>;background:<?php echo get_field('strapline_background_colour'); ?>;">
                <p><?php echo get_field('strapline'); ?></p>
            </div>
        </div>
        <?php endif; ?>

        <?php if (get_field('banner_background_image') AND get_field('banner_height') AND get_field('banner_destination')): ?>
        <div class="row not-on-mobile">
            <div class="twelve columns special image-banner" style="height:<?php echo get_field('banner_height'); ?>px;background:<?php echo get_field('banner_background_colour'); ?> url(<?php echo get_field('banner_background_image'); ?>);">
                <a href="<?php echo get_field('banner_destination'); ?>">
                    <div class="row">
                        <div class="ten columns centered">
                            <div class="row">
                                <?php if (get_field('banner_logo')): ?>
                                <div class="four columns valign" style="height:<?php echo get_field('banner_height'); ?>px;text-align:center;">
                                    <div><img src="<?php echo get_field('banner_logo'); ?>"></div>
                                </div>
                                <?php endif; ?>

                                <?php if (get_field('banner_strapline') AND get_field('banner_strapline_text_colour') AND get_field('banner_strapline_background_colour')): ?>
                                <div class="eight columns" style="color:<?php echo get_field('banner_strapline_text_colour'); ?>;background:<?php echo get_field('banner_strapline_background_colour'); ?>;padding:20px 10px;">
                                    <?php echo get_field('banner_strapline'); ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <?php endif; ?>

        <?php if (count(get_field('logo_banner_images')) > 0 AND get_field('logo_banner_background_colour')): ?>
        <div class="row not-on-mobile">
            <div class="twelve columns" style="text-align:center;background:<?php echo get_field('logo_banner_background_colour'); ?>;">
                <?php foreach (get_field('logo_banner_images') as $logo_banner_image): ?>
                <img src="<?php echo $logo_banner_image['image']; ?>">
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <div class="row">

            <?php $rowtotal = 0; ?>

            <?php foreach (get_field('list_sections') as $section): ?>

                <?php

                switch ($section['width']) {

                    case 'four':

                        $width = 4;
                        $cols = 1;
                        $subcolwidth = 'twelve';
                        break;

                    case 'eight':

                        $width = 8;
                        $cols = 2;
                        $subcolwidth = 'six';
                        break;

                    case 'twelve':

                        $width = 12;
                        $cols = 3;
                        $subcolwidth = 'four';
                        break;
                }

                // Catch any overrunning rows and skip them down

                $rowtotal += $width;

                if ($rowtotal > 12) {
                    echo '</div><div class="row">';
                    $rowtotal = $width;
                }

                ?>

                <div class="<?php echo $section['width']; ?> columns special itemlist">

                    <?php if ($section['title']): ?>
                    <h3><?php echo $section['title']; ?></h3>
                    <?php endif; ?>

                    <?php if ($section['lead_text']): ?>
                    <p class="lead"><?php echo $section['lead_text']; ?></p>
                    <?php endif; ?>

                    <div class="row">

                        <?php for ($i = 0; $i < $cols; $i++): ?>

                        <div class="<?php echo $subcolwidth; ?> columns">

                            <ul>

                                <?php for ($j = $i; $j < count($section['items']); $j+=$cols):
                                $item = $section['items'][$j]; ?>

                                <li>
                                    <a href="<?php echo $item['destination']; ?>"><img class="product-icon" src="<?php echo $item['icon'] ? $item['icon'] : bloginfo('template_directory') . '/new/main/img/product-icon.png'; ?>"></a>
                                    <div class="product-inset">
                                        <h4><a href="<?php echo $item['destination']; ?>"><?php echo $item['title']; ?></a></h4>

                                        <p><?php echo $item['text']; ?></p>
                                    </div>
                                </li>

                                <?php endfor; ?>

                            </ul>

                        </div>
                        <?php endfor; ?>

                    </div>
                </div>

            <?php endforeach; ?>

        </div>

        <?php if (get_field('cta_background_colour') AND get_field('cta_text')): ?>
        <div class="row">
            <div class="twelve columns special cta" style="background:<?php echo get_field('cta_background_colour'); ?>;">
                <?php echo get_field('cta_text'); ?>
            </div>
        </div>
        <?php endif; ?>

    </div>

    <div class="container special footer">
        <div class="row">
            <div class="twelve columns">
                <ul class="hide-on-mobile">
                    <li><a href="http://www.mysociety.org/about">About</a></li>

                    <li><a href="http://www.mysociety.org/jobs">Jobs</a></li>

                    <li><a href="http://www.mysociety.org/blog">Blog</a></li>

                    <li><a href="http://www.mysociety.org/helpus">Get Involved</a></li>

                    <li><a href="http://www.mysociety.org/donate">Donate</a></li>

                    <li><a href="http://www.mysociety.org/contact">Contact Us</a></li>

                    <li><a href="http://www.mysociety.org/press-area">Press</a></li>
                </ul>

                <p>mySociety limited (05798215) is a project of UK Citizens Online Democracy (UKCOD) a registered charity in England and Wales, charity number 1076346, company number 03277032.</p>
            </div>
        </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        window.jQuery || document.write('<script src="<?php bloginfo('template_directory'); ?>/new/js/libs/jquery-1.9.1.min.js"><\/script>')
    </script>

    <script src="<?php bloginfo('template_directory'); ?>/new/js/libs/gumby.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory'); ?>/new/js/plugins.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory'); ?>/new/js/main.js" type="text/javascript"></script>

    <script type="text/javascript">
        window._gaq = [['_setAccount','UA-660910-12'],['_trackPageview'],['_trackPageLoadTime']];
        Modernizr.load({
          load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
        });
    </script>

    <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
    <![endif]-->

    <script type="text/javascript">

    var menuIn = false;

    $(function() {
        $('.menu-link a').click(function() {
            $('.special.head nav').toggle();
        });
    });

    </script>

</body>
</html>
