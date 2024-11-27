<?php

/**
 * The template for displaying the footer nav wrap
 */
?>

<div class="footer-nav">
    <div class="footer-nav-main text-center text-lg-left my-4 m-sm-4">
        <?php get_template_part('template-parts/footer/footer', 'nav-main'); ?>
    </div><!-- footer-nav-main -->

    <div class="footer-nav-bottom d-block d-sm-flex justify-content-center align-items-center text-center mt-4">
        <?php get_template_part('template-parts/footer/footer', 'nav-bottom'); ?>
    </div><!-- footer-nav-bottom -->
</div><!-- .footer-nav -->