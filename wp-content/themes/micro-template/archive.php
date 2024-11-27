<?php
	
/**
 * The template for displaying archive pages
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

<section id="primary" class="content-area">
	<main id="main" class="site-main">
		
		<div class="container">
			<div class="row">
				<div class="col-12">

					<?php if ( have_posts() ) : ?>

						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content/content', 'excerpt' );

						endwhile;

						// Previous/next page navigation.
						twentynineteen_the_posts_navigation();

						// If no content, include the "No posts found" template.
					else :
						get_template_part( 'template-parts/content/content', 'none' );

					endif;
					?>
					
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
		
	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();