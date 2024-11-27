<?php
/*
Thunder Bolt 2 - Template Files
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

The template for displaying the header.
@package Thunder_Bolt_2
Updated Version: 1.0
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Meta Info
================================================== -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Social Sharing Meta
================================================== -->
<?php include (TEMPLATEPATH . '/template-parts/elements/social-share/open-graph.php'); ?>

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/images/favicon.ico">
<link rel="apple-touch-icon" href="<?php bloginfo( 'template_url' ); ?>/images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo( 'template_url' ); ?>/images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo( 'template_url' ); ?>/images/apple-touch-icon-114x114.png">

<!-- Fonts
================================================== -->
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,400,400italic,700,700italic' rel='stylesheet' type='text/css'>

<!-- Header Functions
================================================== -->
<?php wp_head(); ?>
</head>

<body id="body" <?php body_class(); ?>>
<div id="page" class="site">
	
	<?php include (TEMPLATEPATH . '/template-parts/header/header-message-bar.php'); ?>
	
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'thunder-bolt' ); ?></a>

	<div id="header-wrapper" class="wrapper gray"> 
		<header id="masthead" class="site-header container" role="banner">
			
				
			
			<div class="navigation-row">
				<?php include (TEMPLATEPATH . '/template-parts/header/header-branding.php'); ?>
				<?php include (TEMPLATEPATH . '/template-parts/header/header-main-nav.php'); ?>
			</div> <!-- .navigation-row -->
			
			<?php include (TEMPLATEPATH . '/template-parts/header/header-mobile-nav.php'); ?>
			
		</header><!-- #masthead -->
	</div><!-- #header-wrapper -->
	
	<div id="template-wrapper" class="wrapper">
		<div id="template" class="site-content">
