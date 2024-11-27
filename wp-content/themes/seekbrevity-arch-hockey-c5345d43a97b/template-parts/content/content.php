<?php
/*
Thunder Bolt 2 - Template Parts - Content
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Template part for displaying a content on the index & archive.
@package Thunder_Bolt_2
Updated Version: 1.0
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php if ( has_post_thumbnail() ) { ?>
		<a class="index-thumb-feature" href="<?php the_permalink(); ?>">
		 <?php the_post_thumbnail('index_thumb_rec'); ?>
		</a>
	<?php } ?>
	
	<header class="post-header">
		<h2 class="post-title">
			<a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
		</h2>
		<div class="post-meta">
			<?php thunder_bolt_2_posted_on(); ?>
		</div><!-- .post-meta -->
	</header><!-- .post-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	<a class="button" href="<?php the_permalink(); ?>">Read More</a>
	
	<?php include (TEMPLATEPATH . '/template-parts/elements/social-share.php'); ?>
	
</article><!-- #post-## -->
