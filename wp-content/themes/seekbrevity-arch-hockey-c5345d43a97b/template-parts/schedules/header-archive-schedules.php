<?php
/*
Thunder Bolt 2 - Template Parts - Content
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Schedules Archive Header
@package Thunder_Bolt_2
Updated Version: 1.0
*/

$thumb_id = get_field('schedules_ahi','options');
$thumb_url =  wp_get_attachment_image_src( $thumb_id, 'header_img' );
?>

<header id="archive-header" class="page-header-wrapper wrapper" <?php if($thumb_id) {?>style="background-image: url('<?php echo $thumb_url[0]; ?>');" <?php } ?>>
	<div class="page-header-container container">
		<div class="page-header column sixteen">
			<h1 class="title">Schedules</h1>
		</div> <!-- .page-header -->
	</div> <!-- .page-header-container -->
</header> <!-- .page-header-wrapper -->
