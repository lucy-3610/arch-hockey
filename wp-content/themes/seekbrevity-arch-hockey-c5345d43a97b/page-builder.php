<?php
/*
Template Name: Page Builder

Thunder Bolt 2 - Template Files
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

The template for displaying the page builder modules.
@package Thunder_Bolt_2
Updated Version: 1.0
*/

$gh_display = get_field('gh_display');
?>

<?php get_header(); ?>
	
	<?php if($gh_display) { ?>
		<?php include (TEMPLATEPATH . '/template-parts/content/header-graphic.php'); ?>
	<?php } else { ?>
		<?php include (TEMPLATEPATH . '/template-parts/content/header-default.php'); ?>
	<?php } ?>

	<?php include (TEMPLATEPATH . '/template-parts/modules/page-builder.php'); ?>

<?php get_footer(); ?>

