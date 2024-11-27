<?php

/*
    Template Name: Virtual Class Library Page
*/
$image = get_field('bg_image');
$text = get_field('text'); 
$circle_bg_color = get_field('circle_bg_color');
get_header(); ?>
<script>
$(document).ready(function() {
  $("#input_1").attr("placeholder", "Username");  
  $("#input_2").attr("placeholder", "Password");  
});


</script>
<!-- Virtual Class Library
======================================== -->
<section class="virtual-class-library pt-5">
 
<?php if( current_user_can('virtual_class_library')) { ?>
	<div class="hero-img position-relative">
                <img class="position-absolute" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <div class="container">
			<div class="d-flex flex-column-reverse flex-md-row justify-content-md-between justify-content-sm-center" style="height: 810px">
				
				<div class="col-md-7 col-sm-12 align-self-end">
				<div class="login">
				<div class="login-box">
					<p>Access all of Titanium Yoga’s at-home yoga sessions so you can stay grounded while staying at home.</p>
					
				
					<a class="signout-btn" href="<?php echo wp_logout_url('/studio/virtual-class-library'); ?>"><button>Sign Out</button></a>
				</div>
			</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4 align-self-end text-center text-md-right mb-5 mb-md-2">                
					<div class="circle text-center mb-5" style="background: <?php echo $circle_bg_color; ?>">
						<div class="circle__inner">
							<div class="circle__wrapper">
								<div class="circle__content">
									<?php echo $text; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
        </div>
				<div class="video container mb-5">
					<h2 class="">Namastay in place</h2>
					<p>with</p>
					<img src="/wp-content/uploads/2022/06/logo_color.svg">
					<p class="mt-3">With Titanium Yoga’s at-home yoga sessions, you can stay connected to your practice as well as your mind, body, and soul right from the comfort of your home.</p>
				</div>

			
					<div class="video-section container mb-5">
						<div class="title">
							<div class="image">
								<img src="/wp-content/uploads/2022/06/icon_silver.svg">
							</div>
							<div class="text">
								<h3>Silver</h3>
								<p class="type">BEGINNER CLASS</p>
								<p>Titanium Yoga's silver class is an invigorating full body Vinyasa flow. You'll explore the ujjai breath, tone, stretch, sweat, and learn the fundamentals of the yoga practice.</p>
							</div>
						</div>
						<div class="videos row">
							<?php if( have_rows('silver_videos') ): ?>
								<?php while( have_rows('silver_videos') ): the_row(); ?>
									<div class="video col-md-3 mb-3">
										<div class="video-responsive">
											<?php 
												$url = get_sub_field('video');
												parse_str( parse_url( $url, PHP_URL_QUERY ), $video_vars );
											?>
											<iframe src="https://www.youtube.com/embed/<?php echo $video_vars['v']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</div>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>

					<div class="video-section container mb-5">
						<div class="title">
							<div class="image">
								<img src="/wp-content/uploads/2022/06/icon_gold.svg">
							</div>
							<div class="text">
								<h3>Gold</h3>
								<p class="name">INTERMEDIATE/ADVANCED CLASS</p>
								<p>Step up your yoga practice by sweating out the stress, balancing your body and detoxifying your mind. Flowing poses quickly, engaging your core and challenging your body with inversions and balancing poses.</p>
							</div>
						</div>
						<div class="videos row">
							<?php if( have_rows('gold_videos') ): ?>
								<?php while( have_rows('gold_videos') ): the_row(); ?>
									<div class="video col-md-3 mb-3">
										<div class="video-responsive">
											<?php 
												$url = get_sub_field('video');
												parse_str( parse_url( $url, PHP_URL_QUERY ), $video_vars );
											?>
											<iframe src="https://www.youtube.com/embed/<?php echo $video_vars['v']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</div>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>

					<div class="video-section container mb-5">
						<div class="title">
							<div class="image">
								<img src="/wp-content/uploads/2022/06/icon_titanium.svg">
							</div>
							
							<div class="text">
								<h3>Titanium</h3>
								<p class="name">SIGNATURE CLASS</p>
								<p>Great for people with injuries because we're leaving the chaturangas at the door. Get ready to sweat and deepen your yoga practice. This is our warmest class, but the music will keep you flowing.</p>
							</div>
						</div>
						<div class="videos row">
							<?php if( have_rows('titanium_videos') ): ?>
								<?php while( have_rows('titanium_videos') ): the_row(); ?>
									<div class="video col-md-3 mb-3">
										<div class="video-responsive">
											<?php 
												$url = get_sub_field('video');
												parse_str( parse_url( $url, PHP_URL_QUERY ), $video_vars );
											?>
											<iframe src="https://www.youtube.com/embed/<?php echo $video_vars['v']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</div>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>

					<div class="video-section container mb-5">
						<div class="title">
							<div class="image">
								<img src="/wp-content/uploads/2022/06/icon_oxygen.svg">
							</div>
							
							<div class="text">
								<h3>Oxygen</h3>
								<p class="name">RESTORATIVE & DEEP STRETCH CLASS</p>
								<p>Soften & surrender. Hold restorative postures through the support & comfort of bolsters & blocks. Release pain or heartache from the past and breathe in the moment in front of you. Receive the benefits of Yoga Nidra; a colorful guided meditation leaving you relaxed and restored, with a fresh and awakened perspective.*expecting mom's welcome!</p>
							</div>
						</div>
						<div class="videos row">
							<?php if( have_rows('oxygen_videos') ): ?>
								<?php while( have_rows('oxygen_videos') ): the_row(); ?>
									<div class="video col-md-3 mb-3">
										<div class="video-responsive">
											<?php 
												$url = get_sub_field('video');
												parse_str( parse_url( $url, PHP_URL_QUERY ), $video_vars );
											?>
											<iframe src="https://www.youtube.com/embed/<?php echo $video_vars['v']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</div>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>

					<div class="video-section container mb-5">
						<div class="title">
							<div class="image">
								<img src="/wp-content/uploads/2022/06/icon_diamond.svg">
							</div>
							<div class="text">
								<h3>Extras</h3>
							</div>
						</div>
						<div class="videos row">
							<?php if( have_rows('extra_videos') ): ?>
								<?php while( have_rows('extra_videos') ): the_row(); ?>
									<div class="video col-md-3 mb-3">
										<div class="video-responsive">
											<?php 
												$url = get_sub_field('video');
												parse_str( parse_url( $url, PHP_URL_QUERY ), $video_vars );
											?>
											<iframe src="https://www.youtube.com/embed/<?php echo $video_vars['v']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</div>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
			
			<?php } else {?>

				<!-- [gravityform action="login" title="true" logout_redirect="/studio/virtual-class-library" description="false" forgot_password_text="Forgot Username or Password?" /] -->
			<div class="hero-img position-relative">
                <img class="position-absolute" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <div class="container">
				<div class="d-flex flex-column-reverse flex-md-row justify-content-md-between justify-content-sm-center" style="height: 810px">
				
					<div class="col-md-7 col-sm-12 align-self-end">
					<div class="login">
					<div class="login-box">
						<p>Access all of Titanium Yoga’s at-home yoga sessions so you can stay grounded while staying at home.</p>
						<?php the_content();?>
					</div>
				</div>
					</div>
                    <div class="col-sm-12 col-md-6 col-lg-4 align-self-end text-center text-md-right mb-0 mb-md-2">                
                        <div class="circle text-center mb-5" style="background: <?php echo $circle_bg_color; ?>">
                            <div class="circle__inner">
                                <div class="circle__wrapper">
                                    <div class="circle__content">
										<?php echo $text; ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
				
											<?php  }  ?>
		
		
       
</section><!-- .terms -->

    <!-- INSTAGRAM FEED 
	======================================== -->
    <section class="instagram-feed">
        <div class="container-fluid">
            <div class="row">

            <div class="col-md-12 p-0 text-center">
                <h2 class="mb-0">Follow us on instagram</h2>
                <a href="https://www.instagram.com/titaniumyoga/" target="_blank"><h2 class="mt-0 mb-4">@titaniumyoga</h2></a>
            <?php echo do_shortcode('[instagram-feed feed=1]');?>
            </div>
            
            </div><!-- /.row -->  
        </div><!-- /.container -->
    </section><!-- /.instagram-feed -->


<?php get_footer(); ?>