<?php

/**
 * The template for displaying the desktop main navigation
 */
?>

<!-- Desktop Navigation -->
<div class="col-lg-5 d-flex align-items-center">
	<ul class="nav main-nav d-block d-md-flex justify-content-center align-items-center">

		<?php if (have_rows('main_menu_item', 'option')) : // Repeater

			while (have_rows('main_menu_item', 'option')) : the_row(); // Main Nav Menu 

				// vars
				$menu_title 		= get_sub_field('menu_title');
				$nav_name 			= str_replace(' ', '', $menu_title);
				$show_in_sub_menu 	= get_sub_field('show_in_sub_menu');
				$link_type 			= get_sub_field('link_type');
				$select_link 		= get_sub_field('select_link');
				$custom_link 		= get_sub_field('custom_link');
				$new_window 		= get_sub_field('new_window');
				$add_sub_menu 		= get_sub_field('add_sub_menu');
				$add_class 			= get_sub_field('add_class');
				$nav_menu_class 	= get_sub_field('nav_menu_class');
				$add_social_icon 	= get_sub_field('add_social_icon');
				$social_icon 		= get_sub_field('social_icon');
		?>

				<li class="main-menu-item<?php if ($add_sub_menu) : ?> has-sub-menu<?php endif; ?> text-uppercase" id="item<?php echo $nav_name; ?>">

					<?php if ($link_type == 'No Link') : ?>
						<span class="anchor-primary-hover"><?php echo $menu_title; ?></span>
						<?php if ($add_sub_menu) : ?>
							<i class="fa-solid fa-angle-down"></i>
						<?php endif; ?>

					<?php else : ?>
						<a href="<?php if ($link_type == 'Select Link') : echo $select_link;
									else : echo $custom_link;
									endif; ?>" <?php if ($new_window) : ?>target="_blank" <?php endif; ?> class="anchor-secondary anchor-primary-hover anchor-primary-active<?php if (!empty($add_class)) : echo ' ' . $nav_menu_class;
																																											endif; ?>">
							<?php echo $menu_title; ?>
							<?php if (!empty($add_social_icon)) : echo $social_icon;
							endif; ?>
							<?php if ($add_sub_menu) : ?>
								<i class="fa-solid fa-angle-down"></i>
							<?php endif; ?>
						</a>
					<?php endif; ?>

					<?php if ($add_sub_menu) :
						if (have_rows('sub_menu')) : // Group
							while (have_rows('sub_menu')) : the_row(); // Main Nav Sub-Menu
								get_template_part('template-parts/navigation/sub-menu', 'nav');
							endwhile;
						endif;
					endif; ?>

				</li><!-- /.main-menu-item -->

		<?php endwhile;

		endif; ?>

	</ul><!-- /.nav -->
</div>
<div class="col-lg-2 d-flex justify-content-center">
	<!-- Logo -->
	<div class="logo-wrap">
		<?php get_template_part('template-parts/partials/general/logo'); ?>
	</div><!-- /.logo-wrap -->
</div>

<div class="col-lg-5 d-flex justify-content-end align-items-center">
	<ul class="nav main-nav d-block d-md-flex justify-content-center align-items-center">

		<?php if (have_rows('main_menu_item_right', 'option')) : // Repeater

			while (have_rows('main_menu_item_right', 'option')) : the_row(); // Main Nav Menu 

				// vars
				$menu_title 		= get_sub_field('menu_title');
				$nav_name 			= str_replace(' ', '', $menu_title);
				$show_in_sub_menu 	= get_sub_field('show_in_sub_menu');
				$link_type 			= get_sub_field('link_type');
				$select_link 		= get_sub_field('select_link');
				$custom_link 		= get_sub_field('custom_link');
				$new_window 		= get_sub_field('new_window');
				$add_sub_menu 		= get_sub_field('add_sub_menu');
				$add_class 			= get_sub_field('add_class');
				$nav_menu_class 	= get_sub_field('nav_menu_class');
				$add_social_icon 	= get_sub_field('add_social_icon');
				$social_icon 		= get_sub_field('social_icon');
		?>

				<li class="main-menu-item<?php if ($add_sub_menu) : ?> has-sub-menu<?php endif; ?> text-uppercase" id="item<?php echo $nav_name; ?>">

					<?php if ($link_type == 'No Link') : ?>
						<span class="anchor-primary-hover"><?php echo $menu_title; ?></span>
						<?php if ($add_sub_menu) : ?>
							<i class="fa-solid fa-angle-down"></i>
						<?php endif; ?>

					<?php else : ?>
						<a href="<?php if ($link_type == 'Select Link') : echo $select_link;
									else : echo $custom_link;
									endif; ?>" <?php if ($new_window) : ?>target="_blank" <?php endif; ?> class="anchor-secondary anchor-primary-hover anchor-primary-active<?php if (!empty($add_class)) : echo ' ' . $nav_menu_class;
																																											endif; ?>">
							<?php echo $menu_title; ?>
							<?php if (!empty($add_social_icon)) : echo $social_icon;
							endif; ?>
							<?php if ($add_sub_menu) : ?>
								<i class="fa-solid fa-angle-down"></i>
							<?php endif; ?>
						</a>
					<?php endif; ?>

					<?php if ($add_sub_menu) :
						if (have_rows('sub_menu')) : // Group
							while (have_rows('sub_menu')) : the_row(); // Main Nav Sub-Menu
								get_template_part('template-parts/navigation/sub-menu', 'nav');
							endwhile;
						endif;
					endif; ?>

				</li><!-- /.main-menu-item -->

		<?php endwhile;

		endif; ?>

	</ul><!-- /.nav -->
</div>