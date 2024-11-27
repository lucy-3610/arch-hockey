<?php

/**
 * Template part for displaying the hero partial
 */

//Advanced Custom Fields
$hide_block             = get_sub_field('hide_block');
$image = get_sub_field('bg_image');
$text = get_sub_field('text'); 
$circle_bg_color = get_sub_field('circle_bg_color');
?>

<?php if (empty($hide_block)) : ?>

    <!-- HERO 
	======================================== -->
    <section class="hero">
        <div class="hero-img position-relative">
                <img class="position-absolute" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <div class="container">
                <div class="row justify-content-end" style="height: 810px">
                    <div class="col-sm-8 col-md-6 col-lg-4 align-self-end text-center text-md-right mb-5 mb-md-2">                
                        <div class="circle text-center mb-5" style="background: <?php echo $circle_bg_color; ?>">
                            <div class="circle__inner">
                                <div class="circle__wrapper">
                                    <div class="circle__content">
                                        <?php echo $text; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <!-- <div class="hovering-bookyour-visit-hero">
                                <a class="btn-blue white" href="/">BOOK YOUR VISIT</a>
                            </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /.hero -->

<?php endif; ?>