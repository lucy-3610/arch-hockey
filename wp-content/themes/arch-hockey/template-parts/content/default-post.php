<?php

/**
 * Template part for displaying default posts
 */
?>

<div class="post-content">
	<div class="container pt-4">
		<div class="row">
			<div class="col-lg-8">
				<div class="text-center">
					<div class="text-uppercase letter-spacing-2 my-3"><?php the_date(); ?></div>
					<h4><?php the_title(); ?></h4>
				</div>
				<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen'),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					)
				);

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . __('Pages:', 'twentynineteen'),
						'after'  => '</div>',
					)
				); ?>
				<div class="row mb-5">
					<div class="col-12">
						<?php // Get current page URL 
						$shareURL = urlencode(get_permalink());

						// Get current page title
						$shareTitle = str_replace(' ', '%20', get_the_title());

						// Get Post Thumbnail for pinterest
						$shareThumbnail = $image['url'];

						$twitterURL = 'https://twitter.com/intent/tweet?text=' . $shareTitle . '&amp;url=' . $shareURL;
						$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u=' . $shareURL;
						$linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $shareURL . '&amp;title=' . $shareTitle;
						$pinterestURL = 'https://pinterest.com/pin/create/button/?url=' . $shareURL . '&amp;media=' . $shareThumbnail . '&amp;description=' . $shareTitle;
						?>

						<div class="share-social d-flex justify-content-center align-items-center mt-4">
							<span class="share-title">Share to social media</span>
							<a href="<?php echo $facebookURL; ?>" target="_blank" class="d-flex justify-content-center align-items-center anchor-primary anchor-white-hover mx-3">
								<div class="d-flex justify-content-center align-items-center social-icon">
									<i class="fa-brands fa-facebook-f"></i>
								</div><!-- .social-icon -->
							</a>
						</div>
					</div>
				</div>
				<div class="d-flex justify-content-between mb-3">
					<div><?php previous_post_link(); ?></div>
					<div><?php next_post_link(); ?></div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="mt-3">
					<?php get_search_form(); ?>
				</div>
				<div class="border-primary p-3 p-sm-4 mt-4">
					<h4 class="mt-0">Recent Posts</h4>
					<?php
					$the_query = new WP_Query(array(
						'post_status' => 'publish',
						'posts_per_page' => 5,
					))
					?>
					<?php /* Start the Loop */
					if ($the_query->have_posts()) : ?>
						<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

							<a href="<?php the_permalink(); ?>">
								<div class="text-uppercase letter-spacing-8"><?php the_title(); ?></div>
							</a>
							<hr class="bg-theme-primary">

						<?php endwhile;
						wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>