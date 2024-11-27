<?php
/*
Thunder Bolt 2 - Template Parts - Home
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Home page Champions
@package Thunder_Bolt_2
Updated Version: 1.0
*/
?>

<section id="home-champs-wrapper"class="wrapper">
	<div id="home-champs-container " class="container">
			<h2>Recent Champions</h2>
		<div id="champs_slide">
			<?php
				$args = array( 'posts_per_page' => 8, 'post_type' => 'champions');
				$lastposts = get_posts( $args );
				foreach ( $lastposts as $post ) :
				setup_postdata( $post ); 
				$champ_img = get_field('champ_img');
				$champ_src =  wp_get_attachment_image_src( $champ_img, 'large_rec' );
				$champ_full_src =  wp_get_attachment_image_src( $champ_img, 'full' );
				$champ_team = get_field('champ_team');
			?>
			
			<div class="champs_slide">			
				<?php if ($champ_img) { ?> 
					<a class="image-popup-fit-width" href="<?php echo $champ_full_src[0] ?>" data-name="<?php echo $champ_team; ?>" data-title="Champions">
						<img class="champ-img" src="<?php echo $champ_src[0] ?>" />
					</a>
				<?php } else { ?>
					<img class="champ-img" src="<?php bloginfo('template_url'); ?>/images/default_post_img.png" />
				<?php } ?>
				<div class="champ-details">
					<div class="champ-name"><?php echo $champ_team; ?></div>
					<div class="champ-meta">
						<span class="session"><?php echo get_the_term_list( $post->ID, 'champion-session', '', ', ' ); ?> </span> &bull;
						<span class="division"><?php echo get_the_term_list( $post->ID, 'champion-division', '', ', ' ); ?></span>
					</div><!-- .pow-meta -->
				</div>
			</div>
					
			<?php endforeach; wp_reset_postdata(); ?>
				
		</div><!-- #champs_slide -->
	</div>
</section><!-- #home-feature-wrapper -->


<script>
$('#champs_slide').slick({
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