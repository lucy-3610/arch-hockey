<?php

/**
 * The template for displaying the large logo
 */
?>

<?php
// Get Theme Options
$home_link      = get_site_url();
$logo_class     = 'brand-logo';
$large_logo     = get_field('large_logo', 'option');
$logo_path      = pathinfo($large_logo['url']);
?>

<div class="<?php echo $logo_class; ?>">
    <a href="<?php echo $home_link; ?>">
        <?php if ($logo_path['extension'] == 'svg') : ?>
            <?php echo file_get_contents($large_logo['url']); ?>
        <?php else : ?>
            <img src="<?php echo $large_logo['url']; ?>" alt="<?php echo $large_logo['alt']; ?>" />

        <?php endif; ?>
    </a>
</div><!-- .brand-logo -->