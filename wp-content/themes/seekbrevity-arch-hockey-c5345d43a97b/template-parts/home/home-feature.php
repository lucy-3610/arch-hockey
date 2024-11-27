<?php
/*
Thunder Bolt 2 - Template Parts - Home
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Home page feature
@package Thunder_Bolt_2
Updated Version: 1.0
*/
?>

<section id="home-feature-wrapper"class="wrapper">
	<?php if( have_rows('home_slider') ): ?>
		<div id="header_slide" class="slider-wrapper">
			<?php 
				$hs_count = 1;
				while( have_rows('home_slider') ): the_row(); 
				$image_size = 'header_img';
				$image_field = get_sub_field('img'); 
				$img_src =  wp_get_attachment_image_src( $image_field, $image_size );
			?>
			<div id="slide-<?php echo $hs_count; ?>" class="slide-wrapper wrapper viewport-height" style="background-image: url('<?php echo $img_src[0] ?>');">
			</div>
			<?php  $hs_count = $hs_count + 1; endwhile; ?>
		</div>
	<?php endif; ?>
	
	
	<script>
		$(document).ready(function(){
		  $('#header_slide').slick({
			  autoplay: true,
				autoplaySpeed: 3500,
				arrows: false,
				dots: true,
				fade: true,
		  });
		});
	</script>
</section><!-- #home-feature-wrapper -->
