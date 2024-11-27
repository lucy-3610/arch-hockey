<?php

/**
 * Template part for displaying the max width custom content partial
 */

//Advanced Custom Fields
$custom_content = get_sub_field('custom_content');
$hide_block = get_sub_field('hide_block');

?>

<?php if (empty($hide_block)) : ?>

	<!-- CUSTOM CONTENT: CONTAINER
	======================================== -->
	<section class="max-width-container">
		<div class="container">
			<?php echo $custom_content; ?>
		</div><!-- /.container -->
	</section><!-- /.max-width-container -->

<?php endif; ?>