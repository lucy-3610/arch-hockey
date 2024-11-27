<?php
/*
Template Name: Home

Thunder Bolt 2 - Template Files
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

The template for displaying the Home page.
@package Thunder_Bolt_2
Updated Version: 1.0
*/

$display_pow = get_field('display_pow');
$display_champs = get_field('display_champs');
?>

<?php get_header(); ?>

	<?php include (TEMPLATEPATH . '/template-parts/home/home-feature.php'); ?>
	<?php include (TEMPLATEPATH . '/template-parts/home/home-upcoming-games.php'); ?>
	
	<div id="content-wrapper" class="wrapper">
		<div id="content-container" class="container">
			<div id="home-content-left" class="content-area column seven left">
				<?php include (TEMPLATEPATH . '/template-parts/home/home-intro.php'); ?>
			</div>
			<div id="home-content-right" class="content-area column six offset-one right">
				<?php include (TEMPLATEPATH . '/template-parts/home/home-standings.php'); ?>
			</div>
		</div>
	</div>
	
	
	<?php if($display_pow) { ?>
		<?php include (TEMPLATEPATH . '/template-parts/home/home-pow.php'); ?>
	<?php } if($display_champs)	{ ?>
		<?php include (TEMPLATEPATH . '/template-parts/home/home-champs.php'); ?>
	<?php } ?>
	
<?php get_footer(); ?>

