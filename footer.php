

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="content">
						<!-- footer widget 1 -->
						<?php
							if(is_active_sidebar('inds_footer1')){
								dynamic_sidebar('inds_footer1');
							}
						?>

						<!-- footer text menu -->
						<section>
							<h4>
								<?php _e('WHEREAS ANY SIDEBAR THAT DOES NOT', 'industrious'); ?>
							</h4>
							<?php
								wp_nav_menu(array(
									'theme_location' => 'footer-menu',
									'menu_class'     => 'alt'
								));

							?>
						</section>
							


						<section>
							<?php
								global $industrious;
							?>
							<h4><?php echo esc_html($industrious['menu_header'], 'industrious'); ?></h4>
							<ul class="plain">
							<!-- twiter -->
								<?php
									if($industrious['twit']):
								?>

								<li>
									<a href="<?php echo esc_url($industrious['twit']); ?>">
										<i class="icon fa-twitter"></i>Twitter
									</a>
								</li>
							<?php endif; ?>

							<!-- facebook -->
								<?php
									if($industrious['fb']):
								?>

								<li>
									<a href="<?php echo esc_url($industrious['fb']); ?>">
										<i class="icon fa-facebook">&nbsp;</i>Facebook
									</a>
								</li>
							<?php endif; ?>

							<!-- instagram -->
								<?php
									if($industrious['instagram']):
								?>

								<li>
									<a href="<?php echo esc_url($industrious['instagram']); ?>">
										<i class="icon fa-instagram">&nbsp;</i>Facebook
									</a>
								</li>
							<?php endif; ?>

							<!-- github -->
								<?php
									if($industrious['git']):
								?>

								<li>
									<a href="<?php echo esc_url($industrious['git']); ?>">
										<i class="icon fa-github">&nbsp;</i>Github
									</a>
								</li>
							<?php endif; ?>

							</ul>
						</section>
					</div>
					<div class="copyright">
						<?php echo $industrious['licence']; ?>
					</div>
				</div>
			</footer>

			<?php wp_footer(); ?>

	</body>
</html>