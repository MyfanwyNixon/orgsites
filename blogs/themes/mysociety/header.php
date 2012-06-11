<!DOCTYPE html><!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en-gb"><![endif]--><!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en-gb"><![endif]--><!--[if IE 8]><html class="no-js lt-ie9" lang="en-gb"><![endif]--><!--[if gt IE 8]>
<!-- --><html lang="en-gb" class="no-js"><![endif]-->
<head>
	<meta charset="UTF-8">
	
	<meta name="creator" content="http://www.mysociety.org/">
	<meta http-equiv="imagetoolbar" content="false">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<?php if(is_single() || is_page()): ?>
		<?php if(is_array(get_field('meta_description'))) :?>
			<meta name="description" content="<?php echo get_field('meta_description'); ?>">
		<?php endif; ?>
	<?php endif; ?>
	
	<title><?php
	        if ( is_single() ) { single_post_title(); }
	        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); }
	        elseif ( is_page() ) { bloginfo('name'); print ' | '; single_post_title(''); }
	        elseif ( is_search() ) { bloginfo('name'); print ' | Search Results for ' . wp_specialchars($s); get_page_number(); }
			elseif ( is_category() ) { bloginfo('name'); single_cat_title(' | Posts in Category '); }
	        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
	        else { bloginfo('name'); wp_title('|'); get_page_number(); }
	?></title>
	
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" media="screen, print" charset="utf-8">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/print.css" type="text/css" media="print" charset="utf-8">
	<!--[if IE]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/ie.css" type="text/css" media="screen, print" charset="utf-8"><![endif]-->
w	
	<script src="<?php bloginfo('template_url'); ?>/js/libs/modernizr-2.5.3.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" src="http://use.typekit.com/bth0qpr.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>