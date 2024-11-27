<?php

/**
 * The template for displaying the top bar
 */
?>

<?php
// Get Theme Options
$email_address        = get_field('email_address', 'option');
?>

<div class="d-flex justify-content-between w-100 color-white py-2">

    <div class="d-flex justify-content-center align-items-center">
        <a class="color-white color-primary-hover" target="_blank" rel="noopener noreferrer" href="mailto:<?php echo $email_address; ?>">
            <i class="fa-solid fa-envelope fa-xl mr-2"></i>
            <?php echo $email_address; ?>
        </a>
    </div>

    <?php get_template_part('template-parts/partials/general/social', 'menu'); ?>

</div>