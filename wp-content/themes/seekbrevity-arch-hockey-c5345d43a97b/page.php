<?php
/*
Thunder Bolt 2 - Template Files
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

The template for displaying default pages.
@package Thunder_Bolt_2
Updated Version: 1.0
*/

$gh_display = get_field('gh_display');
?>

<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php if($gh_display) { ?>
		<?php include (TEMPLATEPATH . '/template-parts/content/header-graphic.php'); ?>
	<?php } else { ?>
		<?php include (TEMPLATEPATH . '/template-parts/content/header-default.php'); ?>
	<?php } ?>
	
	<div id="content-wrapper" class="wrapper">
		<div id="content-container" class="container">
			<div id="content-page" class="content-page-default content-area column ten">
	
				<?php while ( have_posts() ) : the_post(); ?>
	
					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
	
			  <?php endwhile; ?>
	
			</div><!-- #content-page -->
			
			<?php get_sidebar(); ?>
	
		</div><!-- #content-container -->
	</div><!-- #content-wrapper -->
	
</article><!-- #post-## -->

<?php get_footer(); ?>