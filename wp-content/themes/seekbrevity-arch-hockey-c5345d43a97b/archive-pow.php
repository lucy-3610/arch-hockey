<?php
/*
Thunder Bolt 2 - Template Files
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

The template for displaying the POW archive.
@package Thunder_Bolt_2
Updated Version: 1.0
*/
?>

<?php get_header(); ?>
	
	<?php include (TEMPLATEPATH . '/template-parts/pow/header-archive-pow.php'); ?>
	
	<div id="content-wrapper" class="wrapper">
		<div id="content-container" class="container">
			<div id="content-archive" class="content-area column sixteen">
	
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/pow/pow-content', get_post_format() );
				endwhile;
					thunder_bolt_2_paging_nav();
				else :
					get_template_part( 'template-parts/pow/pow', 'none' );
			endif; ?>
	
			</div><!-- #content-archive -->
		</div><!-- #content-container -->
	</div><!-- #content-wrapper -->

<?php get_footer(); ?>


