<?php

/**
 * The template for displaying the mobile navigation
 */
$email_address        = get_field('email_address', 'option');
?>

<div class="mobile-nav">

	<nav class="navbar">

		<div id="mobile-navigation" class="navbar-collapse collapse">

			<ul class="navbar-nav bg-theme-primary mb-2">

				<?php if (have_rows('main_menu_item', 'option')) : // Repeater

					while (have_rows('main_menu_item', 'option')) : the_row(); // Main Nav Menu

						$menu_title 		= get_sub_field('menu_title');
						$link_type 			= get_sub_field('link_type');
						$select_link 		= get_sub_field('select_link');
						$custom_link 		= get_sub_field('custom_link');
						$new_window 		= get_sub_field('new_window');
						$show_in_sub_menu 	= get_sub_field('show_in_sub_menu');
						$add_sub_menu 		= get_sub_field('add_sub_menu');
						$sub_menu 			= get_sub_field('sub_menu');
				?>

						<li class="mobile-main-menu-item <?php if ($sub_menu) : ?>mobile-dropdown<?php endif; ?>">
							<?php if (empty($add_sub_menu)) : ?>
								<a href="<?php if ($link_type == 'Select Link') : echo $select_link;
											else : echo $custom_link;
											endif; ?>" <?php if ($new_window) : ?>target="_blank" <?php endif; ?>>
									<?php echo $menu_title; ?>
								</a>

							<?php else : ?>
								<span class="has-sub font-weight-bold text-uppercase d-inline-block"><?php echo $menu_title; ?></span>
							<?php endif; ?>

							<?php if ($add_sub_menu) : ?>
								<div class="dropdown-caret"><i class="fas fa-caret-down"></i></div><!-- /.dropdown-caret -->

								<?php if (have_rows('sub_menu')) : // Group

									while (have_rows('sub_menu')) : the_row();

										// vars
										$sub_menu = get_sub_field('sub_menu'); // Group Field 
								?>

										<ul>
											<?php if (have_rows('sub_menu_item')) : // Repeater 
											?>

												<?php if ($show_in_sub_menu) : ?>
													<li class="sub-menu-item">
														<a href="<?php if ($link_type == 'Select Link') : echo $select_link;
																	else : echo $custom_link;
																	endif; ?>" <?php if ($new_window) : ?>target="_blank" <?php endif; ?>>
															<?php echo $menu_title; ?>
														</a>
													</li><!-- /.sub-menu-item -->
												<?php endif; ?>

												<?php while (have_rows('sub_menu_item')) : the_row();

													// vars
													$sub_menu_title 		= get_sub_field('sub_menu_title');
													$sub_menu_link_type 	= get_sub_field('sub_menu_link_type');
													$sub_menu_select_link 	= get_sub_field('sub_menu_select_link');
													$sub_menu_custom_link 	= get_sub_field('sub_menu_custom_link');
													$new_window 			= get_sub_field('new_window');
												?>

													<li class="sub-menu-item">
														<a href="<?php if ($sub_menu_link_type == 'Select Link') : echo $sub_menu_select_link;
																	else : echo $sub_menu_custom_link;
																	endif; ?>" <?php if ($new_window) : ?>target="_blank" <?php endif; ?>>
															<?php echo $sub_menu_title; ?>
														</a>
													</li><!-- /.sub-menu-item -->

											<?php endwhile;

											endif; ?>
										</ul><!-- /ul -->

							<?php endwhile;

								endif;

							endif; ?>

						</li><!-- /. -->

				<?php endwhile;

				endif; ?>

				<!-- Social Menu -->
				<div class="mobile-social-menu bg-black d-flex flex-column d-sm-none align-items-center">
					<div class="d-flex justify-content-center align-items-center mb-2">
						<a class="color-white color-primary-hover" target="_blank" rel="noopener noreferrer" href="mailto:<?php echo $email_address; ?>">
							<i class="fa-solid fa-envelope fa-xl mr-2"></i>
							<?php echo $email_address; ?>
						</a>
					</div>

					<?php get_template_part('template-parts/partials/general/social', 'menu'); ?>
				</div>

			</ul><!-- /.navbar-nav -->

		</div><!-- /#mobile-navigation -->

	</nav><!-- /.navbar -->

</div><!-- /.mobile-nav -->

<button class="navbar-toggler mobile-nav-btn color-primary" type="button" data-toggle="collapse" data-target="#mobile-navigation" aria-controls="mobile-navigation" aria-expanded="false" aria-label="Toggle navigation">
	<i class="fas fa-bars"></i>
</button><!-- /.mobile-nav-btn -->