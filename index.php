	<?php
	//Template Name: home Page
	?>
	<!-- header -->
	<?php get_header(); ?>
	
	<!-- main content -->
	<?php while(have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>

<!-- footer -->
	<?php get_footer(); ?>