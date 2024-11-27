<?php

/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Genesis Block Theme
 */

get_header();
?>

<div id="post-wrap">
	<?php
	if (have_posts()) :

		the_post();

		get_template_part('template-parts/content-portfolio');

	else :

		get_template_part('template-parts/content-none');

	endif;
	?>
</div>

<?php the_posts_pagination(); ?>

<?php get_footer(); ?>