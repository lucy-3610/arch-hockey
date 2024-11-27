<?php
/*
Thunder Bolt 2 - Template Parts - Footer
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Sub Footer
@package Thunder_Bolt_2
Updated Version: 1.0
*/

$copyright_date = get_field('copyright_date','options');
$gi_name = get_field('gi_name','options');
$custom_copy_right = get_field('custom_copy_right','options')
?>

<footer id="sub-footer" class="container">

	<div id='copyright' class="column eight left">
		<?php if($copyright_date) { ?>
			&copy; <?php echo date("Y") ?> <?php echo $gi_name; ?>
		<?php } else { ?>
			<?php if($custom_copy_right) { ?>
				<?php echo $custom_copy_right; ?>
			<?php } ?>
		<?php } ?>
		<?php if( have_rows('legal_links', 'options') ): ?>
			<ul id="legal_links">
				<?php 
					while( have_rows('legal_links', 'options') ): the_row(); 
					$link_url = get_sub_field('link_url', 'options');
					$new_window = get_sub_field('new_window','options');
					$link_text = get_sub_field('link_text', 'options');
				?>
					<li class="legal_link">
						<a href="<?php echo $link_url; ?>" <?php if($new_window) { ?> target="_blank" <?php } ?> >
							<?php echo $link_text; ?>
						</a>
					</li>
				<?php endwhile; ?>
			</ul> <!-- #legal-links-->
		<?php endif; ?>
	</div><!-- #copyright-->
		
	<div id='site-credit' class="column eight right">
		<a href="http://seekbrevity.com/" target="_blank">Coded with Love by Brevity, in St. Louis.</a>
	</div> <!-- #site-credit-->

</footer><!-- #sub-footer -->

