<?php
/*
Thunder Bolt 2 - Template Parts - Modules
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Page Builder Module: 50/50
@package Thunder_Bolt_2
Updated Version: 1.0
*/

$mcs = get_sub_field('mcs');
$placement = get_sub_field('placement');
$m_b_img = get_sub_field('m_b_img');
$m_b_img_src = wp_get_attachment_image_src($m_b_img, 'header_img');
?>

<div id="module-fifty-fifty-<?php echo $mod_count; ?>" class="module-fifty-fifty-wrapper module-wrapper wrapper block-placemment-<?php echo $placement;?> module-color-scheme-<?php echo $mcs; ?>"
	<?php if($m_b_img) {?> style="background-image: url('<?php echo $m_b_img_src[0]; ?>');" <?php } ?>>
		
	<div class="module-fifty-fifty-container container">
		<?php if( have_rows('bl') ): ?>
			<?php 
				while( have_rows('bl') ): 
				the_row(); 
				$ct = get_sub_field('ct');
				$bcs = get_sub_field('bcs');
				$img = get_sub_field('img');
				$img_src = wp_get_attachment_image_src($img, 'large_sqr');
				$vl = get_sub_field('vl');
				$b_img = get_sub_field('b_img');
				$b_img_src = wp_get_attachment_image_src($b_img, 'large_sqr');
				$hl = get_sub_field('hl');
				$tx = get_sub_field('tx');
				$lt = get_sub_field('lt');
				$lu = get_sub_field('lu');
				$nw = get_sub_field('nw');
			?>
					
				<?php if( $ct == "text") { ?>
					<div class="fifty-fifty fifty-fifty-text block-color-scheme-<?php echo $bcs;?>" <?php if($b_img) {?> style="background-image: url('<?php echo $b_img_src[0]; ?>');" <?php } ?>>
						<div class="fifty-fifty-content">	
							<?php if($hl) {?> <h2><?php echo $hl; ?></h2> <?php } ?>
							<?php if($tx) { echo $tx; } ?>
							<?php if($lt) { ?>
								<a class="button" href="<?php echo $lu; ?>"><?php echo $lt; ?></a>
							<?php } ?>
						</div>
					</div>
					
					
				<?php } elseif( $ct == "image") { ?>
					<figure class="fifty-fifty fifty-fifty-img fifty-fifty-media block-color-scheme-<?php echo $bcs;?>" style="background-image: url('<?php echo $img_src[0]; ?>');">
					</figure>
					
				<?php } elseif( $ct == "video") { ?>
					<figure class="fifty-fifty fifty-fifty-video fifty-fifty-media block-color-scheme-<?php echo $bcs;?>" style="background-image: url('<?php echo $img_src[0]; ?>');">
						<?php if($vl) { ?>	
							 <a class="video-link popup-video" href="<?php echo $vl; ?>">
								<i class="fa fa-play-circle"></i>
							</a>
						<?php } ?>
					</figure>
				
				<?php } ?>
		 		  
		  <?php endwhile; ?>
		<?php endif; ?>
	</div><!-- .module-fifty-fifty-container -->
</div><!-- .module-fifty-fifty-wrapper -->
