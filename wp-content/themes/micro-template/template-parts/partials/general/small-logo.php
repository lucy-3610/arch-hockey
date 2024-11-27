<?php

/**
 * The template for displaying the small logo
 */
?>

<?php
$small_logo = get_field('small_logo', 'option');
$brand_name = get_field('brand_name', 'option');
?>


<a href="<?php echo get_site_url(); ?>"><img src="<?php echo $small_logo['url']; ?>" alt="<?php echo $small_logo['alt'] ?>" /></a>