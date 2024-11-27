<?php
/*
Thunder Bolt 2 - Template Parts - Content
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Template part for displaying content on the POW archive.
@package Thunder_Bolt_2
Updated Version: 1.0
*/

$pow_photo = get_field('pow_photo');
$pow_src =  wp_get_attachment_image_src( $pow_photo, 'small_sqr' );
$pow_name = get_field('pow_name');
$pow_number = get_field('pow_number');
$pow_team = get_field('pow_team');
$week_number = get_field('week_number');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('pow-archive'); ?>>
	
	<?php if ($pow_photo) { ?> 
		<img class="pow-img" src="<?php echo $pow_src[0] ?>" />
	<?php } else { ?>
		<img class="pow-img" src="<?php bloginfo('template_url'); ?>/images/default_post_img.png" />
	<?php } ?>
	
	<div class="pow-meta">
		<span class="session"><?php echo get_the_term_list( $post->ID, 'pow-session', '', ', ' ); ?> </span> &bull;
		<span class="division"><?php echo get_the_term_list( $post->ID, 'pow-division', '', ', ' ); ?></span> &bull;
		<span class="week_number"><?php echo $week_number; ?></span>
	</div><!-- .pow-meta -->

	<div class="pow-details">
		<div class="pow-number"><?php echo $pow_number; ?></div>
		<div class="pow-name-team">
			<div class="pow-name"><?php echo $pow_name; ?></div>
			<div class="pow-team"><?php echo $pow_team; ?></div>
		</div>
	</div>
	
</article><!-- #post-## -->
