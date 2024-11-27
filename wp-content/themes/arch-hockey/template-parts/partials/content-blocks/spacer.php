<?php

/**
 * Template part for displaying the spacer partial
 */

//Advanced Custom Fields 
$hide_block = get_sub_field('hide_block');
$margin = get_sub_field('margin');

?>

<?php if (empty($hide_block)) : ?>

	<!-- SPACER
	========================= -->
	<section class="spacer">
		<div class="container-fluid">
			<div class="row">
				<div class="my-<?php echo $margin['xs_margin']; ?> my-sm-<?php echo $margin['sm_margin']; ?> my-md-<?php echo $margin['md_margin']; ?> my-lg-<?php echo $margin['lg_margin']; ?> my-xl-<?php echo $margin['xl_margin']; ?>"></div>
			</div>
		</div>
	</section>

<?php endif; ?>