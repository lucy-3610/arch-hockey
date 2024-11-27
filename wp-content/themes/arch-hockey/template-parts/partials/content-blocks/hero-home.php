<?php

/**
 * Template part for displaying the home hero partial
 */

//Advanced Custom Fields
$hide_block             = get_sub_field('hide_block');
$heading                = get_sub_field('heading');
$subheading             = get_sub_field('subheading');
$button_1_title         = get_sub_field('button_1_title');
$button_1_link          = get_sub_field('button_1_link');
$button_2_title         = get_sub_field('button_2_title');
$button_2_link          = get_sub_field('button_2_link');
?>

<?php if (empty($hide_block)) : ?>

    <!-- HOME HERO
	======================================== -->
    <section class="hero-home">
        <div class="overlay"></div>
        <span class="d-none d-lg-block absolute-center color-white">
            <i class="fa-solid fa-football fa-3x mx-4"></i>
        </span>
        <div class="container">
            <div class="row justify-content-center justify-content-lg-end">
                <div class="col-md-10 col-lg-6 color-white text-center text-lg-left">
                    <h1 class="text-shadow"><?php echo $heading; ?></h1>
                    <div class="divider-line mt-2 mb-3 mt-lg-1 mb-lg-2 mx-auto mx-lg-0"></div>
                    <h3 class="f-400 mb-4"><?php echo $subheading; ?></h3>
                    <div class="d-flex d-sm-block d-xl-flex flex-column flex-sm-row">
                        <a class="btn color-white anchor-primary-hover" rel="noopener noreferrer" href="<?php echo esc_url($button_1_link); ?>"><?php echo $button_1_title; ?></a>
                        <a class="btn color-white anchor-primary-hover ml-sm-3 ml-lg-0 ml-xl-3 mt-3 mt-sm-0 mt-lg-3 mt-xl-0" rel="noopener noreferrer" href="<?php echo esc_url($button_2_link); ?>"><?php echo $button_2_title; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /.hero-home -->

<?php endif; ?>