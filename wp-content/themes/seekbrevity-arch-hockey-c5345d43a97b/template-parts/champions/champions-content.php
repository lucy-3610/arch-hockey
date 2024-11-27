<?php
/*
Thunder Bolt 2 - Template Parts - Content
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Template part for displaying content on the Champions archive.
@package Thunder_Bolt_2
Updated Version: 1.0
*/

$champ_img = get_field('champ_img');
$champ_src =  wp_get_attachment_image_src( $champ_img, 'large_rec' );
$champ_full_src =  wp_get_attachment_image_src( $champ_img, 'full' );
$champ_team = get_field('champ_team');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('champ-archive'); ?>>
	
	<?php if ($champ_img) { ?> 
		<a class="image-link" href="<?php echo $champ_full_src[0] ?>" data-name="<?php echo $champ_team; ?>" data-title="Champions">
			<img class="champ-img" src="<?php echo $champ_src[0] ?>" />
		</a>
	<?php } else { ?>
		<img class="champ-img" src="<?php bloginfo('template_url'); ?>/images/default_post_img.png" />
	<?php } ?>
	<div class="champ-details">
		<div class="champ-name"><?php echo $champ_team; ?></div>
		<div class="champ-meta">
			<span class="session"><?php echo get_the_term_list( $post->ID, 'champion-session', '', ', ' ); ?> </span> &bull;
			<span class="division"><?php echo get_the_term_list( $post->ID, 'champion-division', '', ', ' ); ?></span>
		</div><!-- .pow-meta -->
	</div>
	
</article><!-- #post-## -->