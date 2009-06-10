<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>;charset=<?php bloginfo('charset'); ?>"/> 
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> 
<title><?php bloginfo('name'); ?><?php wp_title();?></title>

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url');?>" /> 
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<!--css-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/reset.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/text.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/960.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/wpstyle.css" type="text/css" media="screen" title="no title" charset="utf-8"/>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />


<!--css-->

<style type="text/css" media="all">
</style>
<?php wp_head();?>
</head>

<body>
	<div id="container" class="container_16">
		<div id="branding" class="grid_4">
			<h1><a href="<?php bloginfo('siteurl'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
		</div><!--end branding-->
		
		<div id="main_navigation" class="grid_12">
			<ul>
				<li><a href="<?php bloginfo('url');?>/get-foresight-linux/" class="menu">download</a></li>
				<li><a href="<?php bloginfo('url');?>/get-help/" class="menu">support</a></li>
				<li><a href="<?php bloginfo('url');?>/community/" class="menu">community</a></li>
				<li><a href="<?php bloginfo('url');?>/news/" class="menu">news</a></li>
				<li><a href="<?php bloginfo('url');?>/contact/" class="menu no_border">contact</a></li>

			</ul>
		</div><!--end main_navigation-->
		
		<?php include (TEMPLATEPATH . '/banner.php'); ?>