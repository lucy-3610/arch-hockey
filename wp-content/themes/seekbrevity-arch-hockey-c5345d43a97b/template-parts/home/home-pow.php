<?php
/*
Thunder Bolt 2 - Template Parts - Home
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Home page POW
@package Thunder_Bolt_2
Updated Version: 1.0
*/
?>

<section id="home-pow-wrapper"class="wrapper">
	<div id="home-pow-container" class="container">
		<h2>Player of the Week</h2>
		<div id="pow_slide">
			<?php
				$args = array( 'posts_per_page' => 8, 'post_type' => 'pow');
				$lastposts = get_posts( $args );
				foreach ( $lastposts as $post ) :
				setup_postdata( $post ); 
				$pow_photo = get_field('pow_photo');
				$pow_src =  wp_get_attachment_image_src( $pow_photo, 'small_sqr' );
				$pow_name = get_field('pow_name');
				$pow_number = get_field('pow_number');
				$pow_team = get_field('pow_team');
				$week_number = get_field('week_number');	
			?>
		
				<div class="pow_slide">
					<?php if ($pow_photo) { ?> 
						<img class="pow-img" src="<?php echo $pow_src[0] ?>" />
					<?php } else { ?>
						<img class="pow-img" src="<?php bloginfo('template_url'); ?>/images/default_post_img.png" />
					<?php } ?>
					
					<div class="pow-meta">
						<span class="session"><?php echo get_the_term_list( $post->ID, 'pow-session', '', ', ' ); ?> </span> &bull;
						<span class="division"><?php echo get_the_term_list( $post->ID, 'pow-division', '', ', ' ); ?></span> &bull;
						<span class="week_number"><?php echo $week_number; ?></span>
					</div><!-- .pow-meta -->
				
					<div class="pow-details">
						<div class="pow-number"><?php echo $pow_number; ?></div>
						<div class="pow-name-team">
							<div class="pow-name"><?php echo $pow_name; ?></div>
							<div class="pow-team"><?php echo $pow_team; ?></div>
						</div>
					</div>		
				</div>
			
			<?php endforeach; wp_reset_postdata(); ?>
				
		</div><!-- #pow_slide -->
	</div>
</section><!-- #home-feature-wrapper -->


<script>
$('#pow_slide').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>
