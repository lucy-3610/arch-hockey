<?php

/**
 * The template for displaying the nav wrap
 */
?>

<!-- Mobile Nav -->
<div class="d-lg-none mobile-navigation w-100">
    <div class="row justify-content-between align-items-center nav-wrap px-3 py-2">
        <!-- Logo -->
        <?php get_template_part('template-parts/partials/general/logo'); ?>

        <!-- Main Navigation -->
        <?php get_template_part('template-parts/navigation/mobile', 'nav'); ?>
    </div><!-- /.nav-wrap -->
</div><!-- /.mobile-navigation -->