<?php

/**
 * Template part for displaying featured testimonial
 */

//Advanced Custom Fields 
$hide_block     = get_sub_field('hide_block');

?>

<?php if (empty($hide_block)) : ?>
    <section>
        <div class="container img-text-container">

        <?php
            $the_query = new WP_Query(array(
                'post_type' => 'testimonials',
                'post_status' => 'publish',
                'posts_per_page' => 1
                // 'order' => 'ASC'
                ))
        ?>
        <?php /* Start the Loop */
        if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post();
                $video = get_field('video');
            ?>

            <div class="row flex-row-reverse">
                <div class="col-lg-6">
                    <div class="embed-container">
                        <?php echo $video; ?>
                    </div>
                </div>
                <div class="col-lg-6 pt-1 pt-lg-0">
                    <h3 class="h2">Client Testimonials</h3>
                    <h4 class="p"><?php echo the_title(); ?></h4>
                    <?php echo the_content(); ?>
                    <p class="text-right pt-3"><a class="text-uppercase f-700 anchor-primary anchor-secondary-hover" href="/about">Hear More</a></p>
                </div>
            </div><!-- row -->

        <?php endwhile;
        wp_reset_postdata(); ?>
        <?php endif; ?>

        </div><!-- container -->
    </section>

<?php endif; ?>