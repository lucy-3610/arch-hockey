<?php
$link = get_field('link');
$blog_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
$alt_text = get_post_meta(get_post_thumbnail_id(get_the_ID()), '_wp_attachment_image_alt', true);
$subheader = get_field('subheader'); ?>

<div class="d-flex justify-content-center">
	<a href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer">
		<div class="tile">
			<div class="overlay">
			</div>
			<div class="img-container">
				<img src="<?php echo $blog_image[0]; ?>" alt="<?php echo $alt_text; ?>">
			</div>
			<div class="text">
				<h1><?php echo the_title(); ?></h1>
				<h2 class="animate-text"><?php echo $subheader; ?></h2>
				<div class="animate-content"><?php echo the_content(); ?></div>
				<div class="dots">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
	</a>
</div>