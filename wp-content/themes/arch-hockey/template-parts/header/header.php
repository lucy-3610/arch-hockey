<?php

/**
 * The template for displaying the header
 */
?>

<div class="toast bg-blue" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
    <div class="toast-header">
        <strong class="mr-auto">Bootstrap</strong>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>

<div class="container-fluid container-lg">
    <div class="row nav-bar align-items-center">
        <!-- Desktop Nav -->
        <div class="d-none d-lg-flex desktop-navigation w-100 py-2">
            <!-- Main Navigation -->
            <?php get_template_part('template-parts/navigation/main', 'nav'); ?>
        </div><!-- /.desktop-navigation -->
        <div class="col-12 d-lg-none">
            <?php get_template_part('template-parts/navigation/nav', 'wrap'); ?>
        </div><!-- /.col-12 -->
    </div><!-- /.row -->
</div><!-- /.container -->