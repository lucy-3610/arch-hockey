<?php

/**
 * Template part for displaying post archives and search results
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="mt-4">

	<a href="<?php the_permalink(); ?>">
		<h4><?php the_title(); ?></h4>
	</a>
	<div class="text-uppercase letter-spacing-2 my-3"><?php the_date(); ?></div>
	<p class="mb-4"><?php the_excerpt(); ?></p>
	<p>
		<a href="<?php the_permalink(); ?>" class="btn-blue text-uppercase mt-2">View Post</a>
	</p>

</article>