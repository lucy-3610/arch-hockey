<?php
/*
Thunder Bolt 2 - Template Parts - Content
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Index/Blog Header
@package Thunder_Bolt_2
Updated Version: 1.0
*/

$postsPage = get_option( 'page_for_posts' );
$bh_feature_post = get_field('bh_feature_post', $postsPage );
?>

<?php 
	if($bh_feature_post) {
		if( $bh_feature_post ): 
		$post = $bh_feature_post;
		setup_postdata( $post ); 
			$thumb_id = get_post_thumbnail_id();
			$thumb_url = wp_get_attachment_image_src($thumb_id,'header_img', true);
	?>
	
		<header id="blog-header-featured-post" class="page-header-wrapper wrapper" <?php if($thumb_url) {?>style="background-image: url('<?php echo $thumb_url[0]; ?>');" <?php } ?>>
			<div class="page-header-container container">
				<div class="page-header column sixteen">
					<div class="feature-post-date">
						<?php the_date(); ?>
					</div><!-- .feature-post-date -->
					<?php the_title( '<h1 class="single-title">', '</h1>' ); ?>
					<div class="feature-cat">
						<?php echo get_the_term_list( $post->ID, 'category', '', ', ' ); ?>
					</div><!-- .single-cat -->
					<div class="feature-excerpt"><?php echo excerpt(40); ?></div>
					<div class="feature-header-share">
						<a class="button read-more" href="<?php the_permalink(); ?>">Read More</a>
						<?php include (TEMPLATEPATH . '/template-parts/elements/social-share.php'); ?>
					</div> <!-- .single-header-share -->
				</div> <!-- .page-header -->
			</div> <!-- .page-header-container -->
		</header> <!-- .page-header-wrapper-->		
		
	
<?php 
		wp_reset_postdata();
		endif; 
	} else { 
		$bh_img = get_field('bh_img', $postsPage); 
		$bh_img_src =  wp_get_attachment_image_src($bh_img, 'header_img');
		$blog_title = get_field('blog_title', $postsPage);
		$blog_description	= get_field('blog_description', $postsPage);
?>

	<header id="blog-header" class="page-header-wrapper wrapper"  <?php if($bh_img_src) {?> style="background-image: url('<?php echo $bh_img_src[0]; ?>');" <?php } ?>>
		<div class="page-header-container container">
			<div class="page-header column sixteen">
				<?php if($blog_title) { ?>
				  <h1 class="title"><?php echo $blog_title; ?></h1>
				<?php } else { ?>
					<h1 class="title"><?php echo get_the_title($postsPage); ?></h1>
				<?php } if($blog_description) { ?>
				  <p class="description"><?php echo $blog_description; ?></p>
				<?php } ?>
			</div> <!-- .page-header -->
		</div> <!-- .page-header-container -->
	</header> <!-- .page-header-wrapper-->
	
<?php } ?>
