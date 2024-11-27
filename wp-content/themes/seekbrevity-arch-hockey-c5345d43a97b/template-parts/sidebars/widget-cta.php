<?php
/*
Thunder Bolt 2 - Template Parts - Sidebar
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Sidebar Widget - Call-To-Action
@package Thunder_Bolt_2
Updated Version: 1.0
*/

$sb_cta_image = get_sub_field('sb_cta_image');
$sb_cta_url = get_sub_field('sb_cta_url');
$sb_cta_headline = get_sub_field('sb_cta_headline');
$sb_cta_copy = get_sub_field('sb_cta_copy');
$sb_cta_button = get_sub_field('sb_cta_button');
?>

<div class="sidebar-cta widget">					
	<?php if($sb_cta_image) { 
		$image = wp_get_attachment_image_src($sb_cta_image, 'sidebar_img');
	?>
		<a class="sb_cta_image" href="<?php echo $sb_cta_url; ?>">
			<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title($sb_cta_image) ?>" />
		</a>
	<?php } if( $sb_cta_headline || $sb_cta_copy ) { ?>
		<div class="sidebar-cta-content"> 
		<?php if( $sb_cta_headline ) { ?>
			<a href="<?php the_sub_field('sb_cta_url'); ?>">
				<h3><?php echo $sb_cta_headline; ?></h3>
			</a>
		<?php } if($sb_cta_copy) { ?>
			<p><?php echo $sb_cta_copy; ?></p>
		<?php } if($sb_cta_button) { ?>
			<a class="button" href="<?php echo $sb_cta_url; ?>"><?php echo $sb_cta_button; ?></a>
		<?php } ?>
		</div>
	<?php } ?>		
</div>	