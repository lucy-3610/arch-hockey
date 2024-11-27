<?php

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Genesis Block Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	<!-- <script src="https://ajax.aspnetcdn.com/ajax/knockout/knockout-3.1.0.js" type="text/javascript"></script> -->
	<!-- <script type='text/javascript' src='http://ajax.aspnetcdn.com/ajax/knockout/knockout-3.5.0.js'></script> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.5.1/knockout-latest.debug.js" integrity="sha512-per7WBYe3cT9aIDMoF74rYR7wpEDPqyncWqWzBGmJBnhp8H3ZD5fRdTM16IO5ePUEuBlH9DMKF7rHvuazhvDBA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.5.1/knockout-latest.js" integrity="sha512-2AL/VEauKkZqQU9BHgnv48OhXcJPx9vdzxN1JrKDVc4FPU/MEE/BZ6d9l0mP7VmvLsjtYwqiYQpDskK9dG8KBA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
	<!-- <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/knockout/3.5.0/knockout-min.js'></script> -->
	<?php wp_head(); ?>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.5.1/knockout-latest.js" integrity="sha512-2AL/VEauKkZqQU9BHgnv48OhXcJPx9vdzxN1JrKDVc4FPU/MEE/BZ6d9l0mP7VmvLsjtYwqiYQpDskK9dG8KBA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body <?php body_class(); ?>>

	<header id="masthead" class="site-header">
		<div class="top-navigation">
			<!-- Mobile menu -->
			<?php get_template_part('template-parts/content-menu-drawer'); ?>

			<div class="container">
				<div class="site-identity clear d-flex align-items-center">
					<!-- Site title and logo -->
					<?php genesis_block_theme_title_logo(); ?>

					<button class="mode-switch" title="Switch Theme">
						<svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
							<defs></defs>
							<path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
						</svg>
					</button>

					<div class="top-navigation-right">
						<!-- Main navigation -->
						<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e('Main', 'genesis-block-theme'); ?>">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'primary',
									'fallback_cb'    => 'genesis_block_theme_fallback_menu',
								)
							);
							?>
						</nav><!-- .main-navigation -->
					</div><!-- .top-navigation-right -->
				</div><!-- .site-identity-->
			</div><!-- .container -->
		</div><!-- .top-navigation -->
	</header><!-- .site-header -->

	<div id="page" class="hfeed site container">
		<div id="content" class="site-content">