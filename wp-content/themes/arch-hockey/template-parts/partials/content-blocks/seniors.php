<?php

/**
 * Template part for displaying the seniors partial
 */

$theme_primary_color    = get_field('theme_primary_color', 'option');
$rgba_primary = hex2rgba($theme_primary_color, 0.5);

$counter = 0;

//Advanced Custom Fields
$hide_block             = get_sub_field('hide_block');
?>

<?php if (empty($hide_block)) : ?>

    <!-- SENIORS
	======================================== -->
    <section class="seniors">
        <section class="d-none d-lg-block absolute-center">
            <i class="fa-solid fa-football fa-3x mx-4"></i>
        </section>
        <div class="container">
            <div class="row">

                <?php
                $the_query = new WP_Query(array(
                    'post_type' => 'senior',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                ))
                ?>
                <?php /* Start the Loop */
                if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post();
                        $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                        $jersey_number = get_field('jersey_number');
                        $counter++; ?>

                        <div class="col-lg-6">
                            <h3 class="text-center f-900">
                                #<?php echo $jersey_number; ?>
                                <span class="f-400 ml-2"><?php echo the_title(); ?></span>
                            </h3>
                        </div>

                    <?php endwhile;
                    wp_reset_postdata(); ?>
                <?php endif; ?>

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.seniors -->

<?php endif; ?>