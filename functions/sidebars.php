<?php
/**
 * Registers the sidebars available in the theme.
 *
 * @package WordPress-960
 */

if ( !function_exists('wp960_register_sidebars') ) {
	function wp960_register_sidebars() {
		register_sidebar(array(
			'name' => 'Right Sidebar',
			'before_widget' => '<div class="sidebar widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		));
		register_sidebar(array(
			'name' => 'Left Sidebar',
			'before_widget' => '<div class="sidebar widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		));
		register_sidebar(array(
			'name' => 'Header',
			'before_widget' => '<div class="header widget grid_6">',
			'after_widget' => '</div>',
			'before_title' => '<span class="header-widget-title">',
			'after_title' => '</span>'
		));
		register_sidebar(array(
			'name' => 'Footer',
			'before_widget' => '<div class="footer widget grid_6">',
			'after_widget' => '</div>',
			'before_title' => '<span class="footer-widget-title">',
			'after_title' => '</span>'
		));
		register_sidebar(array(
			'name' => 'Search',
			'before_widget' => '<div class="search widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		));
	}
}

add_action( 'init', 'wp960_register_sidebars', 1 );
