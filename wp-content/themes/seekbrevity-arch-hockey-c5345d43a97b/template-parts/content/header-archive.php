<?php
/*
Thunder Bolt 2 - Template Parts - Content
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Archive Header
@package Thunder_Bolt_2
Updated Version: 1.0
*/

$queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;  

if (get_field('cat_img', $taxonomy.'_'.$term_id)) {  
	$cat_img = get_field('cat_img',  $taxonomy.'_'.$term_id);
	$img_src =  wp_get_attachment_image_src( $cat_img, 'header_img');
} else {
	$postsPage = get_option( 'page_for_posts' );
	$bh_img = get_field('bh_img', $postsPage); 
	$img_src =  wp_get_attachment_image_src($bh_img, 'header_img');
}
?>

<header id="archive-header" class="page-header-wrapper wrapper" <?php if($img_src) {?> style="background-image: url('<?php echo $img_src[0]; ?>');" <?php } ?>>
	<div class="page-header-container container">
		<div class="page-header column sixteen">
			<h1 class="title"><?php the_archive_title(); ?></h1>
			<div class="description"><?php the_archive_description(); ?></div>
		</div> <!-- .page-header -->
	</div> <!-- .page-header-container -->
</header> <!-- .page-header-wrapper -->
