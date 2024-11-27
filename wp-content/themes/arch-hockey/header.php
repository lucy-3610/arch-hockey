<?php

/**
 * The header for our theme
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script> -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Global Header Scripts -->
	<?php
	$header_scripts = get_field('header_scripts', 'option', false, false);

	if ($header_scripts) :
		echo $header_scripts;
	endif;
	?>

	<!-- Page Header Scripts -->
	<?php the_field('header_script', false, false); ?>

	<?php // Theme/Company Options
	get_template_part('options/theme', 'styles');
	?>

	<?php if (is_admin_bar_showing()) { ?>
		<style>
			header#masthead {
				top: 32px;
			}
		</style>
	<?php } ?>

	<?php wp_head(); ?>
</head>

<?php // ACF Page ID
$page_id = get_field('page_id');
?>

<body <?php if ($page_id) : echo 'id="' . $page_id . '" ';
		endif; ?><?php body_class($page_id . '-page'); ?>>

	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'twentynineteen'); ?></a>

		<header id="masthead">
			<?php get_template_part('template-parts/header/header'); ?>
		</header>
		<!-- #masthead -->
		<div id="content">