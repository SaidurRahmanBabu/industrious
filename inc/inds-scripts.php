<?php
	
	function inds_scripts(){
		//css files 

		wp_enqueue_style('inds-style', get_template_directory_uri() . '/assets/css/main.css', array(), time(), 'all');
		
		wp_enqueue_style( 'inds-main', get_stylesheet_uri(), array(), time(), 'all' );

		//js files

		wp_enqueue_script('inds-browser', get_template_directory_uri() . '/assets/js/browser.min.js', array(), 'null', true);

		wp_enqueue_script('inds-breakpoints', get_template_directory_uri() . '/assets/js/breakpoints.min.js', array(), 'null', true);

		wp_enqueue_script('inds-util', get_template_directory_uri() . '/assets/js/util.js', array(), 'null', true);

		wp_enqueue_script('inds-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true);

	}
	add_action( 'wp_enqueue_scripts', 'inds_scripts' ); 