<?php

/**
 * The template for displaying the small logo
 */
?>

<?php
// Get Theme Options
$home_link      = get_site_url();
$logo_class     = 'brand-logo';
$small_logo     = get_field('small_logo', 'option');
$logo_path      = pathinfo($small_logo['url']);
?>

<div class="<?php echo $logo_class; ?>">
    <a href="<?php echo $home_link; ?>">
        <?php if ($logo_path['extension'] == 'svg') : ?>
            <?php echo file_get_contents($small_logo['url']); ?>
        <?php else : ?>
            <img src="<?php echo $small_logo['url']; ?>" alt="<?php echo $small_logo['alt']; ?>" />

        <?php endif; ?>
    </a>
</div><!-- .brand-logo -->