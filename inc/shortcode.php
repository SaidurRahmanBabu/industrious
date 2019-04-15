<?php
	//sectiion Heading title text
	function inds_heading_text($atts, $content = null){

	 	extract(shortcode_atts(
	 		//default values for heading title text section
	 		array(
			 'title' => '',
			 'alignment' => 'center'
			),$atts)
		);
		$content = wpb_js_remove_wpautop($content, true);

		ob_start();
		?>
	<!-- Section html -->
		<section class="wrapper">
			<div class="inner">
				<header class="sepcial">
					<h2 align="<?php echo $alignment; ?>">
						<?php echo esc_html__($title, 'industrious'); ?>
					</h2>
					<p><?php echo __($content, 'industrious'); ?></a></p>
				</header>
			</div>
		</section>

		<?php

		return ob_get_clean();
	}
	add_shortcode("heading_text","inds_heading_text");

//end of heading title text section


	//Theme icon Blurbs
	function inds_blurb($atts){
		$blurb_def = shortcode_atts(
			array(
				//blurb div
				'blurb_class' 				=> '',
				'blurb_id'   					=> '',
				//icons
				'blurb_icon_name' 		=> 'facebook',
				'blurb_icon_color' 		=> '',
				'blurb_icon_align' 		=> 'left',
				'blurb_icon_size'			=> '',

				//heading
				'blurb_titile_tag' 		=> 'h3',
				'blurb_title' 				=> '',
				'blurb_titile_color' 	=> '',
				'blurb_titile_align' 	=> 'left',
				'blurb_titile_weight' => '400',
				'blurb_titile_fsize' 	=> '20',

				//content
				'blurb_content' 						=> '',
				'content_color' 			=> '',
				'content_size' 				=> '14',
				'content_weight' 			=> '300'

			),
			$atts
		);
		 

		$blurbs = <<<EOD
		<div class="highlights">
			<section style="backgound-color: {$atts['sec_bg_color']}">
				<div class="{$blurb_def['blurb_class']}" id="{$blurb_def['blurb_id']}">

					<header align="{$blurb_def['blurb_icon_align']}">

						<a href="#" class="icon fa-{$blurb_def['blurb_icon_name']}" style="
						color:{$blurb_def['blurb_icon_color']};
						font-size:{$blurb_def['blurb_icon_size']}px;
						">
						</a>

						<{$blurb_def['blurb_titile_tag']} style="
						color:{$blurb_def['blurb_titile_color']}; 
						font-weight:{$blurb_def['blurb_titile_weight']};
						font-size:{$blurb_def['blurb_titile_fsize']}px;" 
						align="{$blurb_def['blurb_titile_align']}">

							{$blurb_def['blurb_title']}

						</{$blurb_def['blurb_titile_tag']}>
					</header>

					<p style="
					color:{$blurb_def['content_color']};
					font-size: {$blurb_def['content_size']}px;
					font-weight: {$blurb_def['content_weight']};
					">
				
					{$blurb_def['blurb_content']}
					</p>
				</div>
			</section>
		</div>

EOD;

		return do_shortcode($blurbs);
	}
	add_shortcode( 'ind_blurb', 'inds_blurb' );

	//Theme Section title and text shortcode end


	//Call to action Section
	function inds_cta($atts, $content = null){

	 	extract(shortcode_atts(
	 		array(
			 'cta_title' => '',
			 //'css' 			 => ''
			 'image' 		 => '',
			),$atts)
		);
		$content = wpb_js_remove_wpautop($content, true);

		//css output
		// $css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

		ob_start();
		?>


		<section id="cta" class="wrapper"
		style="background-image: url(<?php echo wp_get_attachment_image_url($image[0]);?>)">
			<div class="inner">
				<h2><?php echo esc_html__($cta_title, 'industrious'); ?></h2>
				<p><?php echo __($content, 'industrious'); ?></a></p>
			</div>
		</section>




		<?php

		return ob_get_clean();
	}
	add_shortcode("cta","inds_cta");
	//end of call to action Section


	//Theme Banner Section
	function inds_banner($atts, $content = null){

	 	extract(shortcode_atts(
	 		//banner default values
	 		array(
			 'banner_title'       => '',
			 'image' 		 					=> '',

			),$atts)
		);
		$content = wpb_js_remove_wpautop($content, true);

		ob_start();
		?>
	<!-- banner html -->
		<section id="banner">
			<div class="inner">

				<h1>
					<?php echo esc_html__($banner_title, 'industrious'); ?>
				</h1>

				<p>
					<?php echo __($content, 'industrious'); ?>
				</p>

			</div>
			<video autoplay loop muted playsinline src="images/banner.mp4"></video>
			<img src="images/banner.mp4" alt="">
		</section>

		<?php

		return ob_get_clean();
	}
	add_shortcode("banner","inds_banner");
	//end banner section


	//Testimonial Section
	function inds_testimonial($atts, $content = null){
		extract(shortcode_atts(
		//testimonial defaul values 
			array(
				'test_name' 	=> 'Jane Doe',
				'designation' => '',
				'screenshots' => ''

			), $atts));

		$content = wpb_js_remove_wpautop($content, true);

		ob_start();
		?>

		<!-- testimonial html -->
		
				<div class="testimonials">
					<section>
						<div class="content">
							<blockquote>
								<p>
									<?php echo __($content, 'industrious'); ?>
								</p>
							</blockquote>
							<div class="author">
									
								<?php
								    $images = wp_get_attachment_image_src( $image_id );
								    echo '<div class="image"><img src="'.$images[0].'"></div>';
								    
								?>

								<p class="credit">- 
									<strong><?php echo $test_name; ?></strong> 
									<span><?php echo $designation; ?></span>
								</p>
							</div>
						</div>
					</section>
				</div>

		<?php
		return ob_get_clean();
	}
	add_shortcode('testimonial', 'inds_testimonial');
	//end testimonial section

//Section Two Output
function backgroundslide($two){
extract(
shortcode_atts(array(
 'header_title' => '',
 'header_des' => '',
 'card_section_two_group' => '',
 'icon' => '',
 'title' => '',
 'description' => '',
 
),$two)
);
ob_start();
?>


		<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2><?php echo esc_html($header_title);?></h2>
						<p><?php echo esc_html($header_des);?></p>
					</header>
					<div class="highlights">
               
 <?php 
	$sec_two_array_loop=vc_param_group_parse_atts($card_section_two_group);
	foreach($sec_two_array_loop as $sec_two_loop_value):
?>

						<section>
							<div class="content">
								<header>
									<a href="#" class="icon"><span class="<?php echo esc_attr($sec_two_loop_value['icon']);?>"></span></a>
									<h3><?php echo esc_html($sec_two_loop_value['title']);?></h3>
								</header>
								<p><?php echo esc_html($sec_two_loop_value['description']);?></p>
							</div>
						</section>


	<?php endforeach; ?>



					</div>
				</div>
			</section>

<?php
return ob_get_clean();
}
add_shortcode('section_two','backgroundslide');



	//Elemnt for Visual Composer 
	require_once('inds-vc.php');
