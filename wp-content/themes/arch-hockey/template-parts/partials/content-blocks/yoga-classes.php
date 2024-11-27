<?php

/**
 * Template part for displaying the yoga classes partial
 */

//Advanced Custom Fields
$hide_block              = get_sub_field('hide_block');
$classes                 = get_sub_field('classes');

?>

<?php if (empty($hide_block)) : ?>

    <!-- YOGA CLASSES 
	======================================== -->
    <section class="yoga-classes">
        <div class="container">

            <div class="row justify-content-center align-items-stretch">

                <?php if( have_rows('classes') ): 
                //loop through rows
                while( have_rows('classes') ): the_row();
                    $element_symbol     = get_sub_field('image');
                    $class_title        = get_sub_field('class_title');
                    $class_level        = get_sub_field('class_level');
                    $description        = get_sub_field('description');
                    $temperature        = get_sub_field('temperature');
                    $heat_level         = get_sub_field('heat_level');
                    $demo               = get_sub_field('demo');
                    $shop_url           = get_sub_field('shop_url');
                ?>
                    <!-- class columns -->
                    <div class="col-md-5 col-lg text-center px-lg-0 align-items-center position-relative class-column mb-4 mb-lg-0">
                        <img class="element-symbol" src="<?php echo $element_symbol; ?>" alt="">

                        <!-- main content has a right border to divide columns on desktop -->
                        <div class="column-main-content">
                            <div class="class-title-container px-2">
                                <h3 class="h2"><?php echo $class_title; ?></h3>
                                <h4 class="p"><?php echo $class_level; ?></h4>
                            </div>
                            <p class="f-600 blue px-sm-2 px-xl-3"><?php echo $description; ?></p>
                        </div>

                        <!-- thermometer -->
                        <div class="thermometer-space">
                            <div class="thermometer mx-auto mx-lg-1 mx-xl-3">

                                <div class="thermo-height level-<?php echo $heat_level; ?>">
                                    <div class="thermometer-body thermo-<?php echo $heat_level; ?> bg-blue w-100">
                                        <h5 class="text-white h1 f-400"><?php echo $temperature; ?></h5>
                                    </div>
                                </div>

                                <div class="thermometer-base bg-blue mb-4">
                                    <div class="btns-container w-100 d-flex justify-content-between">
                                        <button class="btn-gray text-uppercase" data-toggle="modal" data-target="#classdemo-modal-<?php echo get_row_index(); ?>">demo</button>
                                        <a href="" class="btn btn-gray text-uppercase">book</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- end class columns -->


                    <!-- Demo Popup -->
                    <div class="modal fade" id="classdemo-modal-<?php echo get_row_index(); ?>" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class='embed-container'><iframe src='<?php echo $demo; ?>' frameborder='0' allowfullscreen></iframe></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Demo Popup -->
                    

                <?php endwhile; ?>
                <?php endif; ?>

            
            </div><!-- /.row -->

        </div><!-- /.container -->

        <!-- raise temperature bars on scroll -->
        <script>
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if(entry.isIntersecting) {
                        //if yoga class is in view, add the temperature increase transition
                        entry.target.classList.add('temperature-transition');
                        return;
                    }
                    // if no longer in view, remove the animation
                    entry.target.classList.remove('temperature-transition');
                });
            });
            //track yoga classes
            observer.observe(document.querySelector('.thermo-1'));
            observer.observe(document.querySelector('.thermo-2'));
            observer.observe(document.querySelector('.thermo-3'));
            observer.observe(document.querySelector('.thermo-4'));
            observer.observe(document.querySelector('.thermo-5'));
        </script>
    </section><!-- /.yoga-classes -->

<?php endif; ?>



