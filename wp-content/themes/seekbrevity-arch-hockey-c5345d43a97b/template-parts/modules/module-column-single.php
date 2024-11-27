<?php
/*
Thunder Bolt 2 - Template Parts - Modules
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Page Builder Module: Single Column (to be used in the module-columns.php)
@package Thunder_Bolt_2
Updated Version: 1.0
*/

$img = get_sub_field('img');
$img_src = wp_get_attachment_image_src($img, 'small_rec');
$hl = get_sub_field('hl');
$tx = get_sub_field('tx');
$lt = get_sub_field('lt');
$lu = get_sub_field('lu');
$nw = get_sub_field('nw');
?>

<?php if($lu) { ?>
			 						
	<?php if($img) { ?>
		<a class="column-img" href="<?php echo $lu; ?>" <?php if ($nw) { ?> target="_blank" <?php } ?>>
			<img src="<?php echo $img_src[0]; ?>" alt="<?php echo get_the_title($img) ?>" />
		</a>
	<?php } if($hl) { ?>
		<a class="column-hl" href="<?php echo $lu; ?>" <?php if ($nw) { ?> target="_blank" <?php } ?>>
			<h3><?php echo $hl; ?></h3>
		</a>
	<?php } if($tx) { ?>
		<?php echo $tx; ?>
	<?php } if($lt) { ?>
		<a class="button" href="<?php echo $lu; ?>" <?php if ($nw) { ?> target="_blank" <?php } ?>><?php echo $lt; ?></a>
	<?php } ?>


<?php } else { ?>

	<?php if($img) { ?>
		<div class="column-img">
			<img src="<?php echo $img_src[0]; ?>" alt="<?php echo get_the_title($img) ?>" />
		</div>
	<?php } if($hl) { ?>
		<h3><?php echo $hl; ?></h3>
	<?php } if($tx) { ?>
		<?php echo $tx; ?>
	<?php } ?>
	
<?php } ?>




