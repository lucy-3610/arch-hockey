<?php
/*
Thunder Bolt 2 - Template Parts - Content
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Graphic Page Header
@package Thunder_Bolt_2
Updated Version: 1.0
*/

$img_size = 'header_img';
$gh_img = get_field('gh_img'); 
$img_src =  wp_get_attachment_image_src( $gh_img, $img_size );
$gh_cs = get_field('gh_cs');
$gh_placement = get_field('gh_placement');  
$gh_hl = get_field('gh_hl'); 
$gh_tx = get_field('gh_tx'); 
$gh_lt = get_field('gh_lt'); 
$gh_lu = get_field('gh_lu'); 
$gh_nw = get_field('gh_nw'); 
?>


<header 
	id="graphic-header" 
	class="graphic-header-wrapper wrapper content-placement-<?php echo $gh_placement; ?> color-scheme-<?php echo $gh_cs; ?>" 
	style="background-image: url('<?php echo $img_src[0] ?>');"
>
	<div class="graphic-header-container container">
		<div class="graphic-header-content column eight">
			<?php if($gh_hl) { ?>
				<h1 class="title"><?php echo $gh_hl; ?></h1>
			<?php } if($gh_tx) { ?>
				<div class="description"><?php echo $gh_tx; ?> </p>
			<?php } if($gh_lt) { ?>
				<a class="button" href="<?php $gh_lu; ?>" <?php if ($gh_nw) { ?> target="_blank" <?php } ?>>
					<?php echo $gh_lt; ?> 
				</a>
			<?php } ?>
		</div><!-- .graphic-header-content -->
	</div><!-- .graphic-header-container -->
</header><!-- .graphic-header-wrapper -->
