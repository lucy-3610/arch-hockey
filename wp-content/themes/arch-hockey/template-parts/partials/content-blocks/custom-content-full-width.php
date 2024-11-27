<?php
/**
 * Template part for displaying the full width custom content partial
 */

//Advanced Custom Fields
$custom_content = get_sub_field('custom_content');
$hide_block = get_sub_field('hide_block');

?>

<?php if (empty($hide_block)) : ?>

	<!-- CUSTOM CONTENT: CONTAINER-FLUID
	======================================== -->
	<section class="full-width-container">
		<div class="container-fluid">

			<?php echo $custom_content; ?>
			
		</div><!-- /.container-fluid -->
	</section><!-- /.full-width-container -->

<?php endif; ?>