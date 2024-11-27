<?php

/**
 * The template for displaying archive pages
 */

get_header();
?>

<section id="primary" class="content-area">
	<?php
	// Flexible Content
	if (have_rows('content_blocks')) :
		while (have_rows('content_blocks')) : the_row();
			get_template_part('template-parts/partials/all', 'partials');
		endwhile;
	endif; ?>
	<main id="main" class="site-main">
		<div class="container">
			<div class="row">

				<?php if (have_posts()) : ?>

				<?php
					while (have_posts()) :
						the_post();

						get_template_part('template-parts/content/content', 'excerpt');

					endwhile;

					// Previous/next page navigation.
					twentynineteen_the_posts_navigation();

				// If no content, include the "No posts found" template.
				else :
					get_template_part('template-parts/content/content', 'none');

				endif;
				?>

			</div>
		</div>
	</main>
</section>

<?php
get_footer();
