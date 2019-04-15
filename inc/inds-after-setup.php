<?php
	function inds_theme_setup(){
		//theme supports
		add_theme_support('title-tag');

		add_theme_support('custom-logo', array(
			'height' 			=> 100,
			'width'	 			=> 100,
			'flex-height'	=> true,
			'flex-width' 	=> true,
			'header-text' => true
		));

		add_theme_support('custom-header', array(
	    'width'                  => 1200,
	    'height'                 => 600,
	    'flex-height'            => false,
	    'flex-width'             => false,
	    'default-text-color'     => '#fff',
	    'header-text'            => true,
	    'uploads'                => true,
	    'video'                  => false
		));

		add_theme_support('custom-background');

		add_theme_support('post-thumbnails');

		add_theme_support('post_formats', array(
			'image',
			'video',
			'aside',
			'gallery',
			'quote'
		));

		add_theme_support( 'html5', array( 
			'comment-list', 
			'comment-form', 
			'search-form', 
			'gallery', 
			'caption' 
		));

		//Theme menus
		register_nav_menus(array(
			'main-menu' 	=> __('Main Menu', 'industrious'),
			'footer-menu' => __('Footer Menu', 'industrious')
		));
	}
	add_action('after_setup_theme', 'inds_theme_setup');