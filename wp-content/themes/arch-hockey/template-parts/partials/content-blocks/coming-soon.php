<?php

/**
 * Template part for displaying the coming soon partial
 */

$theme_primary_color    = get_field('theme_primary_color', 'option');
$rgba_primary = hex2rgba($theme_primary_color, 0.5);

//Advanced Custom Fields
$hide_block             = get_sub_field('hide_block');
?>

<?php if (empty($hide_block)) : ?>

    <!-- COMING SOON 
	======================================== -->
    <section class="coming-soon">
        <div class="container">
            <div class="row">

                <?php
                $the_query = new WP_Query(array(
                    'post_type' => 'coming soon',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                ))
                ?>
                <?php /* Start the Loop */
                if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post();
                        $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>

                        <div class="col-12 d-flex justify-content-center text-center text-uppercase white my-1 p-sm-5" style="background: linear-gradient(to bottom, <?php echo $rgba_primary; ?>, <?php echo $rgba_primary; ?>), url('<?php echo $image[0]; ?>') no-repeat center center;background-size: cover;">
                            <div class="py-4">
                                <h1>
                                    <?php echo the_title(); ?>
                                    <br>
                                    <?php echo the_content(); ?>
                                </h1>
                            </div>
                        </div>

                    <?php endwhile;
                    wp_reset_postdata(); ?>
                <?php endif; ?>

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.coming-soon -->

<?php endif; ?>