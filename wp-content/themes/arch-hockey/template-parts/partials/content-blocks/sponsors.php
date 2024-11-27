<?php

/**
 * Template part for displaying the sponsors partial
 */

//Advanced Custom Fields
$hide_block             = get_sub_field('hide_block');
?>

<?php if (empty($hide_block)) : ?>

    <!-- SPONSORS 
	======================================== -->
    <section class="sponsors py-3">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <?php
                $the_query = new WP_Query(array(
                    'post_type' => 'sponsor',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    // 'order' => 'ASC'
                ))
                ?>
                <?php /* Start the Loop */
                if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post();
                        $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                        $alt_text = get_post_meta(get_post_thumbnail_id(get_the_ID()), '_wp_attachment_image_alt', true);
                        $width = get_field('width');
                        $height = get_field('height');

                        if (get_the_title() === "Spacer") { ?>
                            <div class="col-12 d-none d-lg-block"></div>

                        <?php } else { ?>
                            <div class="col-auto my-2">
                                <img style="width: <?php echo $width; ?>px; height: <?php echo $height; ?>px;" src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>">
                            </div>
                        <?php } ?>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                <?php endif; ?>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.sponsors -->

<?php endif; ?>