<?php
/*
Thunder Bolt 2 - Template Files
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

The template for displaying all single posts.
@package Thunder_Bolt_2
Updated Version: 1.0
*/
?>

<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php include (TEMPLATEPATH . '/template-parts/content/header-single-post.php'); ?>
	
	<div id="content-wrapper" class="wrapper">
		<div id="content-container" class="container">
			<div id="content-single" class="content-area column ten">
				
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('index_thumb_feature');
				} ?>
							
				<?php while ( have_posts() ) : the_post(); ?>
				
					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
					
					<?php include (TEMPLATEPATH . '/template-parts/elements/social-share.php'); ?>
		
				<?php	thunder_bolt_2_post_nav();
		
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
		
				endwhile; ?>
				
			</div><!-- #content-single -->
			
			<?php get_sidebar(); ?>
			
		</div><!-- #content-container -->
	</div><!-- #content-wrapper -->

</article><!-- #post-## -->

<?php get_footer(); ?>
