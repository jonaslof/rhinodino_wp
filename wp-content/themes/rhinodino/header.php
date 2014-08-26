<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	
	<?php if( wp_title("", false) != '' ) : ?>
	<title><?php bloginfo('name'); ?> &raquo; <?php wp_title("", true); ?></title>
	<?php else : ?>
	<title><?php bloginfo('name'); ?> &raquo; <?php bloginfo('description'); ?></title>
	<?php endif; ?>
	
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<!--[if IE]>
		<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.86772.js"></script>
	<![endif]-->
		
	<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>


	
	<header id="site-header">
		<hgroup class="page-header">
		</hgroup>

		<?php //bp2012_main_menu('site-navigation'); ?>
	</header>