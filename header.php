<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />

		<?php wp_head(); ?>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
					<a href="<?php bloginfo('home');?>" class="logo">
						<?php
							global $industrious;
							if(isset($industrious['logo'])){
								?>
								<img src="<?php echo esc_url($industrious['logo']['url']); ?>">
								<?php
							}
							else{
								echo $industrious['text_logo'];
							}
						?>
					</a>
				<nav>
					<a href="#menu"><?php _e( 'Menu', 'industrious' ); ?></a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">

				<?php
					wp_nav_menu(array(
						'theme_location' => 'main-menu',
						'menu_class' => 'links',
						'container' => 'ul'
					));
				?>

			</nav>