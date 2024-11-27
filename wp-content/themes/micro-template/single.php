<?php

/**
 * The template for displaying all single content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

<section id="primary" class="content-area">
	<main id="main" class="site-main">

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content/post', 'router' );
				endwhile;
			?>
		</article><!-- #post-<?php the_ID(); ?> -->

	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();