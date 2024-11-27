<?php
/*
Thunder Bolt 2 - Template Files
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

The main template file (index).
@package Thunder_Bolt_2
Updated Version: 1.0
*/
?>

<?php get_header(); ?>

	<?php include (TEMPLATEPATH . '/template-parts/content/header-blog.php'); ?>
	
	<div id="content-wrapper" class="wrapper">
		<div id="content-container" class="container">
			<div id="content-index" class="content-area column ten">
	
			<?php
			if ( have_posts() ) :
			
				while ( have_posts() ) : the_post();
	
					get_template_part( 'template-parts/content/content', get_post_format() );
	
				endwhile;
	
				thunder_bolt_2_paging_nav();
	
			else :
	
				get_template_part( 'template-parts/content/content', 'none' );
	
			endif; ?>
	
			</div><!-- #content-index -->
			
			<?php get_sidebar(); ?>
			
		</div><!-- #content-container -->
	</div><!-- #content-wrapper -->

<?php get_footer(); ?>

