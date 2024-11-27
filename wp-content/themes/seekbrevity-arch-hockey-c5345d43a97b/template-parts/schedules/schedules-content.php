<?php
/*
Thunder Bolt 2 - Template Parts - Content
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Template part for displaying content on the schedule archive.
@package Thunder_Bolt_2
Updated Version: 1.0
*/

$start_date = get_field('start_date');
$end_date = get_field('end_date');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('schedule-archive-post'); ?>>
	
	<?php if ( has_post_thumbnail() ) { ?>
		<a class="index-thumb-feature" href="<?php the_permalink(); ?>">
		 <?php the_post_thumbnail('small_rec'); ?>
		</a>
	<?php } else { ?>
		<a class="index-thumb-feature" href="<?php the_permalink(); ?>">
			<img src="<?php bloginfo('template_url'); ?>/images/default_post_img.png" />
		</a>
	<?php } ?>
	
	<header class="post-header">
		<h6 class="post-sub-title">Schedule</h6>
		<h2 class="post-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 
		</h2>
		<h4 class="dates">
			<?php echo date('M Y', strtotime($start_date)); ?> - <?php echo date('M Y', strtotime($end_date)); ?>
		</h4>
	</header><!-- .post-header -->

	<a class="button" href="<?php the_permalink(); ?>">View Schedule</a>
	
</article><!-- #post-## -->
