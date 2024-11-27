<?php

/*
    Template Name: Contact Us Page Template
*/

get_header(); ?>

<section class="splash bg-theme-primary">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 color-white d-none d-lg-block"></div>
            <div class="col-lg-6 text-center color-white px-3 py-5 p-sm-5">
                <div class="form mx-auto">
                    <?php gravity_form('Contact Us', true, true, false, '', false); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/partials/content-blocks/google', 'maps');
get_template_part('template-parts/partials/content-blocks/memberships'); ?>

<?php get_footer(); ?>