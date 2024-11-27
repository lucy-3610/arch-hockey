<?php

/**
 * Template part for displaying the blog partial
 */

//Advanced Custom Fields
$hide_block             = get_sub_field('hide_block');
?>

<?php if (empty($hide_block)) : ?>

    <!-- BLOG 
	======================================== -->
    <section class="blog">
        <div class="container">
            <div class="row justify-content-center">
                <?php
                $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                $the_query = new WP_Query(array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => '10',
                    'paged'          => $paged
                ))
                ?>
                <?php /* Start the Loop */
                if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                        <div class="col-lg-6 text-center my-3">
                            <?php get_template_part('template-parts/content/content', 'excerpt'); ?>
                        </div>

                    <?php endwhile;

                    wp_reset_postdata(); ?>
                    <div class="d-flex justify-content-center mt-3">
                        <?php
                        // Page navigation.
                        echo paginate_links(array(
                            'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                            'total'        => $the_query->max_num_pages,
                            'current'      => max(1, get_query_var('paged')),
                            'format'       => '?paged=%#%',
                            'show_all'     => true,
                            'type'         => 'plain',
                            'end_size'     => 2,
                            'mid_size'     => 1,
                            'prev_next'    => true,
                            'add_args'     => false,
                            'add_fragment' => '',
                        )); ?>
                    </div>
                <?php endif; ?>

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.pricing -->

<?php endif; ?>