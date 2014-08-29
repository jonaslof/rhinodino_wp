<?php

	/*------------------------------------------------------------------*\
	 *	Load scripts													*
	\*------------------------------------------------------------------*/
	
	if( !is_admin() )
	{
		wp_deregister_script('jquery');
		wp_register_script('jquery', ("http://code.jquery.com/jquery-latest.min.js"), false);
		wp_enqueue_script('jquery');

		wp_deregister_style('styles');
		wp_register_style('styles', (get_bloginfo('template_directory') . "/public/assets/css/styles.css"), false);
		wp_enqueue_style('styles');
	}

	/*------------------------------------------------------------------*\
	 *	Menu functions													*
	\*------------------------------------------------------------------*/
	
	// HTML5 Bootstrap menu
	
	function bp2012_main_menu( $id )
	{
		$args = array(
			'container'		=> false, 
			'menu_class'	=> 'main-menu', 
			'menu_id'		=> $id,
			'items_wrap'    => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'echo'			=> false,
			'depth'			=> 1
		);
		
		echo '<nav role="navigation">';
			echo wp_nav_menu( $args );
		echo '</nav>';
	}
	
	// Add Bootstrap classes to menu:

	function bp2012_menu_class( $classes, $item )
	{
		if( in_array('current_page_item', $classes) )
		{
			$classes[] = "active";
		}
		return $classes;
	}
	
	add_filter('nav_menu_css_class', 'bp2012_menu_class', 10 , 2);

	register_nav_menus( 'main_menu' );

	/**
	 * Images
	 */
	add_image_size('hero', 1240, 434, array('center', 'center'));
	add_image_size('portfolio', 620, 448, array('center', 'center'));
	add_image_size('gallery', 1120, 9999);

	add_theme_support( 'post-thumbnails' ); 


	/**
	 * Custom post types
	 */
	function custom_post_type() {
		$args = array(
			'public' => true,
			'label'  => 'Portfolio',
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt')
		);
		register_post_type( 'portfolio', $args );
	}
	add_action( 'init', 'custom_post_type' );


	/**
	 * Sidebars
	 */
	
	$args = array(
		'name'          => 'Sidebar bottom',
		'id'            => 'sidebar-bottom',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '' 
	);
	register_sidebar( $args );
	
?>