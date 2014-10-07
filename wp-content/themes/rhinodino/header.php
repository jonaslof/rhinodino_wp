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

	<!-- typekit -->
	<script type="text/javascript" src="//use.typekit.net/wnt0uga.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
	<!--[if IE]>
		<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.86772.js"></script>
	<![endif]-->
		
	<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>

	<aside id="sidebar" class="sidebar">
		<div class="logo">
			<a href="<?php echo get_bloginfo('siteurl'); ?>" title="Rhino Dino"><img src="<?php echo get_bloginfo('template_directory'); ?>/public/assets/img/svg/general/logo_v1_white.svg" alt="Rhino Dino logo"></a>
		</div>
		<?php bp2012_main_menu('Huvudmeny'); ?>

		<div class="sidebar-widgets">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
				<?php dynamic_sidebar('sidebar-bottom'); ?>
			<?php endif; ?>
		</div>
	</aside>