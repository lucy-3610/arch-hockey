<?php
/*
Thunder Bolt 2 - Template Parts - Home
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Home page intro
@package Thunder_Bolt_2
Updated Version: 1.0
*/

$intro_image = get_field('intro_image');
$intro_image_src =  wp_get_attachment_image_src($intro_image, 'small_rec');
$intro_hl = get_field('intro_hl');
$intro_sh = get_field('intro_sh');
$intro_tx = get_field('intro_tx');
$intro_lt = get_field('intro_lt');
$intro_lu = get_field('intro_lu');
?>

<?php if ($intro_tx) { ?>
	<section id="home-intro-wrapper"class="wrapper">
		<?php if ($intro_image) { ?>	
			<h2 class="intro_hl"><?php echo $intro_hl; ?></h2>
		<?php } if ($intro_image) { ?>
			<img class="intro_image" src="<?php echo $intro_image_src[0]; ?>"/>
		<?php } if ($intro_sh) { ?>
			<h4 class="intro_sh"><?php echo $intro_sh; ?></h4>
		<?php } ?>
		
		<div class="intro_tx">
			<?php echo $intro_tx; ?>
		</div>
		
		<?php if ($intro_lu) { ?>
			<a class="button" href="<?php echo $intro_lu; ?>"><?php echo $intro_lt; ?></a>
		<?php } ?>
	   
	</section><!-- #home-feature-wrapper -->
<?php } ?>

