<?php
/*
	Plugin Name: Boilerplate Plugin
	Plugin URI:
	Description: This is a boilerplate for a plugin.
	Version: 0.1
	Author: Lagercrantz Media
	Author URI: http://www.lagercrantzmedia.se/
*/

include('bp-widget.php');

$bp_plugin = new BP_Plugin();

class BP_Plugin
{
	private $widgets = array( 'BP_Widget' );
	
	
	/*--------------------------------------------------------------------------------------
	*
	*	(Constructor)
	*
	*	@desc: 
	*	@author: 
	*	@since: 
	* 
	*-------------------------------------------------------------------------------------*/
	
	function BP_Plugin()
	{
		// actions
		add_action( 'widgets_init', array($this, 'widgets_init'));
		add_action('init', array($this, 'init'));
	}
	
	
	/*--------------------------------------------------------------------------------------
	*
	*	init
	*
	*	@desc: 
	*	@author: 
	*	@since: 
	* 
	*-------------------------------------------------------------------------------------*/
	
	function init()
	{
	
	}
	
	
	/*--------------------------------------------------------------------------------------
	*
	*	register_widgets
	*
	*	@desc: 
	*	@author: 
	*	@since: 
	* 
	*-------------------------------------------------------------------------------------*/
	
	function widgets_init()
	{
		foreach( $this->widgets as $widget )
		{
			register_widget( $widget );
		}
	}
}