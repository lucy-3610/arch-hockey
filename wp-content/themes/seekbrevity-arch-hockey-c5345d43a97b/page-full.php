<?php
/*
Template Name: Full Width

Thunder Bolt 2 - Template Files
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

The template for displaying full width pages.
@package Thunder_Bolt_2
Updated Version: 1.0
*/
?>

<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php if(get_field('graphic_header')) { ?>
		<?php include (TEMPLATEPATH . '/template-parts/content/header-graphic.php'); ?>
	<?php } else { ?>
		<?php include (TEMPLATEPATH . '/template-parts/content/header-default.php'); ?>
	<?php } ?>

	<div id="content-wrapper" class="wrapper">
		<div id="content-container" class="container">
			<div id="content-page" class="content-page-full content-area column twelve offset-two">
	
				<?php while ( have_posts() ) : the_post(); ?>
	
					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
					
				<? endwhile; ?>
	
			</div><!-- #content-page -->
		</div><!-- #content-container -->
	</div><!-- #content-wrapper -->

</article><!-- #post-## -->

<?php get_footer(); ?>

