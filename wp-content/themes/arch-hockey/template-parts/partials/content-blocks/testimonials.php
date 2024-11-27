<?php

/**
 * Template part for displaying the testimonials partial
 */

//Advanced Custom Fields
$hide_block             = get_sub_field('hide_block');
?>

<?php if (empty($hide_block)) : ?>

    <!-- TESTIMONIALS 
	======================================== -->
    <section class="testimonials">
        <div class="container">
            <div class="row justify-content-center">
                <h2>Testimonials</h2>
            </div>
            <div class="row">

                <?php
                $the_query = new WP_Query(array(
                    'post_type' => 'testimonials',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                ))
                ?>
                <?php /* Start the Loop */
                if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post();
                        $video = get_field('video'); ?>

                        <div class="col-lg-6 text-center mt-3 mb-4">
                            <div class="embed-container">
                                <?php echo $video; ?>
                            </div>
                            <h4 class="my-3"><?php echo the_title(); ?></h4>
                        </div>

                    <?php endwhile;
                    wp_reset_postdata(); ?>
                <?php endif; ?>

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.testimonials -->

<?php endif; ?>