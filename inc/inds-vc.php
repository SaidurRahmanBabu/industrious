<?php

	function inds_section_title(){
		//Section heading Title Text
		vc_map(array(
			'name' => __('Inds Section Title Text', 'industrious'),
			'description' => __('Section Title Text', 'industrious'),
			'base' => 'heading_text',
			'icon' => '',
			'show_settings_on_create' => true,
			'category' 				=> __('Industrious Content', 'industrious'),
			'params' => array(
				array(
					'param_name' => 'title',
					'type' => 'textfield',
					'heading' => __('Title', 'indstrious'),
					'description' => __('Type Heading Title', 'indstrious')
				),
				array(
					'param_name' => 'content',
					'type' => 'textarea_html',
					'heading' => __('Text', 'indstrious'),
					'description' => __('Type Heading Text', 'indstrious')

				)
			)
		));


	//Theme Icon Blurb Section
		vc_map(array(
			//name of the element
			'name' 						=> __('Inds Blurb', 'industrious'),
			//description of the element
			'description' 		=> __('Section Icon Blurb', 'industrious'),
			//base is the name of the shortcode
			'base' 						=> 'ind_blurb',
			//icon for the element
			'icon' 						=> 'fa fa-address-card',
			'show_settings_on_create' => true,
			//item for vc element menu
			'category' 				=> __('Industrious Content', 'industrious'),
			//params are the input field for the element
			'params' => array(
				//blurb icon
				array(
					'type' 				=> 'textfield',
					'description' => __('Blurb Font-awesome Icon Name', 'industrious'),
					'holder'			=> 'div',
					'param_name' 	=> 'blurb_icon_name',
					'admin_label' => true,
					'heading' 		=> __('Icon Name', 'industrious'),
					'value' 			=> 'facebook'
				), 

				array(
					'type' 				=> 'textfield',
					'description' => __('Blurb Icon Font Size', 'industrious'),
					'holder'			=> 'div',
					'param_name' 	=> 'blurb_icon_size',
					'admin_label' => true,
					'heading' 		=> __('Icon Font Size', 'industrious')
				), 

				array(
					'type' 				=> 'colorpicker',
					'description' => __('Blurb Font-awesome Icon Color', 'industrious'),
					'holder'			=> 'div',
					'param_name' 	=> 'blurb_icon_color',
					'admin_label' => true,
					'heading' 		=> __('Icon Color', 'industrious')
				), 

				array(
					'type' 				=> 'dropdown',
					'description' => __('Blurb Font-awesome Icon Alignment', 'industrious'),
					'holder'			=> 'div',
					'param_name' 	=> 'blurb_icon_align',
					'admin_label' => true,
					'heading' 		=> __('Icon Alignment', 'industrious'),
					'value' 			=> array('left', 'center', 'right')
				),

			// //Blurb Title

				array(
					'type' 				=> 'textfield',
					'description' => __('Write Blurb Title', 'industrious'),
					'holder'			=> 'div',
					'param_name' 	=> 'blurb_title',
					'admin_label' => true,
					'heading' 		=> __('Blurb Title', 'industrious')
				),

				array(
					'type' 				=> 'dropdown',
					'description' => __('Blurb Title Tag', 'industrious'),
					'holder'			=> 'div',
					'param_name' 	=> 'blurb_titile_tag',
					'admin_label' => true,
					'heading' 		=> __('Choose Title Tag', 'industrious'),
					'value' 			=> array('h1', 'h2', 'h3', 'h4', 'h5', 'h6')
				),

				array(
					'type' 				=> 'textfield',
					'description' => __('Blurb Title Font Size', 'industrious'),
					'holder'			=> 'div',
					'param_name' 	=> 'blurb_titile_fsize',
					'admin_label' => true,
					'heading' 		=> __('Title Font Size', 'industrious'),
					'value' 			=> '24'
				),

				array(
					'type' 				=> 'dropdown',
					'description' => __('Title Font Weight', 'industrious'),
					'holder'			=> 'div',
					'param_name' 	=> 'blurb_titile_weight',
					'admin_label' => true,
					'heading' 		=> __('Blurb Title Font Weight', 'industrious'),
					'value' 			=> array('300', '400', '500', '600', '700', '800', '900')
				),

				array(
					'type' 				=> 'dropdown',
					'description' => __('Blurb Title Alignment', 'industrious'),
					'holder'			=> 'div',
					'param_name' 	=> 'blurb_titile_align',
					'admin_label' => true,
					'heading' 		=> __('Titile Alignment', 'industrious'),
					'value' 			=> array('left', 'center', 'right')
				),

				array(
					'type' 				=> 'colorpicker',
					'description' => __('Blurb Title Color', 'industrious'),
					'holder'			=> 'div',
					'param_name' 	=> 'blurb_titile_color',
					'admin_label' => true,
					'heading' 		=> __('Title Color', 'industrious')
				),

			// 	//blurb Content
				
				array(
					'type' => 'textarea',
					'holder' => 'div',
					'class' => '',
					'admin_label' => true,
					'heading' => __('Text', 'industrious'),
					'param_name' => 'blurb_content',
					'description' => __('Type your section content', 'industrious')

				),
				
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'admin_label' => true,
					'heading' => __('ext Font Size', 'industrious'),
					'param_name' => 'content_size',
					'description' => __('Text Font Size', 'industrious')

				),
				
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'admin_label' => true,
					'heading' => __('Font Weight', 'industrious'),
					'param_name' => 'content_weight',
					'description' => __('Text Font Weight', 'industrious')

				),
				
				array(
					'type' => 'colorpicker',
					'holder' => 'div',
					'admin_label' => true,
					'heading' => __('Text Color', 'industrious'),
					'param_name' => 'content_color',
					'description' => __('Set Text Color', 'industrious')

			 	),

			// 	//div class and id
				
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'admin_label' => true,
					'heading' => __('Class', 'industrious'),
					'param_name' => 'blurb_class',
					'description' => __('Set a class', 'industrious')

				),
				
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'admin_label' => true,
					'heading' => __('ID', 'industrious'),
					'param_name' => 'blurb_id',
					'description' => __('Set a id', 'industrious')

				),


				//css field
				array(
			  'type' => 'css_editor',
			  'heading' => __( 'Css', 'industrious' ),
			  'param_name' => 'sec_bg_color',
			  'group' => __( 'Design options', 'industrious' ),
			  ),


			)));//end vc_map, array, params

		
	//inds_cta call to action
	vc_map(array(

      'name' 				=> __('Inds CTA','industrious'),
      'description' => __('Call To Action','industrious'),
      'base' 				=> 'cta',
      'category' 		=> 'Industrious Content',
      'icon' 				=> 'fa fa-map',
      'class' 			=> '',
      'params' 			=> array(
        array(
          'param_name' => 'cta_title',
          'type' => 'textfield',
          'heading'=> 'Title',     
        ),

       array(
        'param_name' => 'content',
        'type' => 'textarea_html',
        'heading'=> 'Description',
          
      ),

       array(
        'param_name' => 'image',
        'type' => 'attach_image',
        'heading'=> 'Select Image',
          
      ),


			//css field
			// array(
		 //  'type' => 'css_editor',
		 //  'heading' => __( 'Css', 'industrious' ),
		 //  'param_name' => 'css',
		 //  'group' => __( 'Design options', 'industrious' ),
		 //  ),
    )

  ));


  //Banner Section
  vc_map(array(
  	'name' => __('Inds Banner', 'industrious'),
  	'description' => __('Set Banner Elements', 'industrious'),
  	'base' => 'banner',
  	'category' 		=> 'Industrious Content',
  	'icon'=> '',
  	'class' => '',
  	'params' => array(
  		array(
  			'param_name' => 'banner_title',
  			'type' => 'textfield',
  			'heading' => __('Title', 'industrious'),
  			'description' => __('Banner Title', 'industrious')
  		),

  		array(
  			'param_name' => 'content',
  			'type' => 'textarea_html',
  			'heading' => __('Description', 'industrious'),
  			'description' => __('Banner Description', 'industrious')
  		)
  	)
  )); //end vc_map banner section


  //Testimonial Section
  vc_map(array(
  	'name' => __('Inds Testimonial', 'industrious'),
  	'description' => __('Set Testimonial Contents', 'industrious'),
  	'base' => 'testimonial',
  	'category' 		=> 'Industrious Content',
  	'icon'=> '',
  	'class' => '',
  	'params' => array(
  		array(
  			'param_name' => 'name',
  			'type' => 'textfield',
  			'heading' => __('Name', 'industrious'),
  			'description' => __('Name of the commentor', 'industrious')
  		),

  		array(
  			'param_name' => 'designation',
  			'type' => 'textfield',
  			'heading' => __('Designation', 'industrious'),
  			'description' => __('Designation of the commentor', 'industrious')
  		),

  		array(
  			'param_name' => 'content',
  			'type' => 'textarea_html',
  			'heading' => __('Description', 'industrious'),
  			'description' => __('Testimonial Content', 'industrious')
  		),

  		array(
  			'param_name' => 'screenshots',
  			'type' => 'attach_image',
  			'heading' => __('Image', 'industrious'),
  			'description' => __('Commentor Image', 'industrious')
  		)
  	)
  )); //end vc_map testimonial section


  //Testimonial Section
  vc_map(array(
  	'name' => __('Inds Testimonial', 'industrious'),
  	'description' => __('Set Testimonial Contents', 'industrious'),
  	'base' => 'testimonial',
  	'category' 		=> 'Industrious Content',
  	'icon'=> '',
  	'class' => '',
  	'params' => array(
  		array(
  			'param_name' => 'name',
  			'type' => 'textfield',
  			'heading' => __('Name', 'industrious'),
  			'description' => __('Name of the commentor', 'industrious')
  		),

  		
  ))); //end vc_map testimonial section

  vc_map(
	  array(
	  	'name' => __('Test', 'industrious'),
		  'base' => 'test',
		  'category' 		=> 'Industrious Content',
		  'params' => array(
			  array(
			  'heading' => 'Testimonial Contents',
			  'param_name' => 'simple_textfield',
			  ),
		  // params group
			  array(
			  'type' => 'param_group',
			  'value' => '',
			  'param_name' => 'card_section_two_group',
			  // Note params is mapped inside param-group:
			  'params' => array(
			  array(
			  'type' => 'textfield',
			  'value' => '',
			  'heading' => 'Enter your title(multiple field)',
			  'param_name' => 'title',
			  ),
			  array(
			  'type' => 'textarea',
			  'value' => '',
			  'heading' => 'Enter your description(multiple field)',
			  'param_name' => 'description',
			  )
		  )
		  )
	  )
  )
);




	} //end function hexa_google_map
	add_action('vc_before_init', 'inds_section_title');