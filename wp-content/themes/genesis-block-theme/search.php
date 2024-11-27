<?php

/**
 * The template for displaying Search results.
 *
 * @package Genesis Block Theme
 */

get_header(); ?>

<div id="post-wrap">
	<?php
	if (have_posts()) :
		echo do_shortcode('[searchandfilter fields="search,category,post_tag" submit_label="Filter"]'); ?>
		<div class="tile-row">

			<?php while (have_posts()) :
				the_post();

				get_template_part('template-parts/content-search');
			endwhile; ?>

		</div>

	<?php else :
	?>
		<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'genesis-block-theme'); ?></p>
	<?php endif; ?>
</div>

<?php the_posts_pagination(); ?>

<?php get_footer(); ?>