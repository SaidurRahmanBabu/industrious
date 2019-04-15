<?php
	//theme script files
	require_once(get_theme_file_path( '/inc/inds-scripts.php' ));

	//theme setup
	require_once(get_theme_file_path( '/inc/inds-after-setup.php' ));

	//theme widgets
	require_once(get_theme_file_path( 'inc/inds-wigets.php' ));
	
	//shortcodes
	require_once(get_theme_file_path('/inc/shortcode.php'));

	//Redux FramWork
	if ( !class_exists( 'redux-framework' ) && file_exists( dirname( __FILE__ ) . '/redux-framework/ReduxCore/framework.php' ) ) {
	    require_once( dirname( __FILE__ ) . '/redux-framework/ReduxCore/framework.php' );
	}
	if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/redux-framework/sample/function-config.php' ) ) {
	    require_once( dirname( __FILE__ ) . '/redux-framework/sample/function-config.php' );
	}
