<?php
/*
Thunder Bolt 2 - Template Parts - Modules
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Page Builder Module: Full Width
@package Thunder_Bolt_2
Updated Version: 1.0
*/
$ct = get_sub_field('ct');
$img = get_sub_field('img');
$img_src = wp_get_attachment_image_src($img, 'full');
$cs = get_sub_field('cs');
$vi = get_sub_field('vi');
$vi_src = wp_get_attachment_image_src($vi , 'header_img');
$vbt = get_sub_field('vbt');
$vu = get_sub_field('vu');
$content = get_sub_field('content');
?>


<div id="module-full-<?php echo $mod_count; ?>" class="module-full-wrapper module-wrapper wrapper color-scheme-<?php echo $cs; ?>">
	
	
	
	<!-- Full Width Image -->
	<?php if($ct == 'image') { ?>
		<div class="full-width-img">
			<img src="<?php echo $img_src[0]; ?>" alt="<?php echo get_the_title($img) ?>" />
		</div>
	<!-- End Full Width Image -->
	
	
	
	<!-- Full Width Video -->
	<?php } if($ct == 'video') { ?>
		<div id="full-width-video-<?php echo $mod_count?>" class="full-width-video full-width" style="background-image: url('<?php echo $vi_src[0]; ?>');">
			<?php if(get_sub_field('vu')) { ?>	
				 <a class="video-link popup-video" href="<?php echo $vu; ?>">
					 <span class="button">
						<span class="icon icon-play"><i class="fa fa-play-circle"></i></span>
						<span class="vbt"><?php echo $vbt; ?></span>
					 </span>
				</a>
			<?php } ?>
		</div>
	<!-- End Full Width Video -->
	
	
	
	<!-- Full Width Slider -->
	<?php } if($ct == 'slider') { ?>
		<div id="full-width-slider-<?php echo $mod_count?>" class="full-width-slider">
		  <?php 
			  while( have_rows('slides') ): 
			  the_row(); 
				$img = get_sub_field('img');
				$img_src = wp_get_attachment_image_src($img, 'header_img');
				$cs = get_sub_field('cs');
				$placement = get_sub_field('placement');
				$hl = get_sub_field('hl');
				$sh = get_sub_field('sh');
				$tx = get_sub_field('tx');
				$lt = get_sub_field('lt');
				$lu = get_sub_field('lu');
				$nw = get_sub_field('nw');
			?>
	  		<div class="full-width-slide slide-color-scheme-<?php echo $cs; ?> slide-content-<?php echo $placement; ?>" style="background-image: url('<?php echo $img_src[0]; ?>');">   
		  		<div class="container">
				  	<div class="full-width-slide-content slide-content column eight">
							<?php if($hl) { ?> 
								<h1><?php echo $hl; ?></h1>
							<?php } if($sh) { ?> 
								<h4><?php echo $sh; ?></h4>
							<?php } if($tx) { ?> 
								<p><?php echo $tx; ?></p>
							<?php } if($lt) { ?>
								<a class="button" href="<?php echo $lu; ?>" <?php if ($nw) { ?> target="_blank" <?php } ?>>
									<?php echo $lt; ?>
								</a>
							<?php } ?>
				  	</div>		
					</div>
			  </div>
		  
		  <?php endwhile; ?>
		</div> <!-- .related_inventory_sliders -->

		<script>
			$('#full-width-slider-<?php echo $mod_count?>').slick({ 
				dots: true,
				adaptiveHeight: true,
				responsive: [
			    {
			      breakpoint: 768,
			      settings: {
			        arrows: false,
			      }
			    }
			  ]
			});
			$(window).load(function() {
			  if ( $('#full-width-slider-<?php echo $mod_count?> .full-width-slide.slick-current').is('.slide-color-scheme-white, .slide-color-scheme-light') ) {
				  $('#full-width-slider-<?php echo $mod_count?>').removeClass('light-nav dark-nav').addClass('dark-nav');
			  } else {
				  $('#full-width-slider-<?php echo $mod_count?>').removeClass('light-nav dark-nav').addClass('light-nav');
			  }
			});
			$('#full-width-slider-<?php echo $mod_count?>').on('afterChange', function(event, slick, currentSlide, nextSlide){
			  if ( $('#full-width-slider-<?php echo $mod_count?> .full-width-slide.slick-current').is('.slide-color-scheme-white, .slide-color-scheme-light') ) {
				  $('#full-width-slider-<?php echo $mod_count?>').removeClass('light-nav dark-nav').addClass('dark-nav');
			  } else {
				  $('#full-width-slider-<?php echo $mod_count?>').removeClass('light-nav dark-nav').addClass('light-nav');
			  }
			});
		</script>
	<!-- End Full Width Slider -->
	
	
	
	<!-- Full Width Content -->
	<?php } if($ct == 'content') { ?>
		<div class="full-width-content-container content-container container">
			<div class="full-width-content content-area column offset-two twelve">
				<?php echo $content; ?>
			</div>
		</div>
	<!-- End Full Width Content -->
	<?php } ?>
	
	
	
</div> <!-- .module-full-wrapper -->

