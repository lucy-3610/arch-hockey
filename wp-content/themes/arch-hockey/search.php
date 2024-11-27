<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

<div class="post-content">
    <div class="container pt-4">
        <div class="row">
            <div class="col-lg-8">
                <?php if (have_posts()) : ?>
                <?php
                    // Start the Loop.
                    while (have_posts()) :
                        the_post();

                        /*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that
				 * will be used instead.
				 */
                        get_template_part('template-parts/content/content', 'excerpt');

                    // End the loop.
                    endwhile;

                    // Previous/next page navigation.
                    twentynineteen_the_posts_navigation();

                // If no content, include the "No posts found" template.
                else :
                    get_template_part('template-parts/content/content', 'none');

                endif;
                ?>
            </div>
            <div class="col-lg-4">
                <div class="mt-3">
                    <?php get_search_form(); ?>
                </div>
                <div class="border-primary p-3 p-sm-4 mt-4">
                    <h4 class="mt-0">Recent Posts</h4>
                    <?php
                    $the_query = new WP_Query(array(
                        'post_status' => 'publish',
                        'posts_per_page' => 5,
                    ))
                    ?>
                    <?php /* Start the Loop */
                    if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                            <a href="<?php the_permalink(); ?>">
                                <div class="text-uppercase letter-spacing-8"><?php the_title(); ?></div>
                            </a>
                            <hr class="bg-theme-primary">

                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
