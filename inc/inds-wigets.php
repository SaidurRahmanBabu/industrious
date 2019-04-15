<?php

	function inds_widgets(){
		//footer widget 1
    register_sidebar( array(
      'name' => __( 'Text Block', 'industrious' ),
      'id' => 'inds_footer1',
      'description' => __('Footer 1 Text Block', 'industrious'),
      'before_widget' => '<section>',
			'after_widget'  => '</p></section>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2><p>',
			));

    register_sidebar(array(
    	'name' => __('Footer Credit', 'industrious'),
    	'id' => 'footer_credit',
    	'description' => __('Register licence agreement', 'industrious')
    ));

	}
	add_action('widgets_init', 'inds_widgets');