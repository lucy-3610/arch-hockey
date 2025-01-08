<?php

/*
    Template Name: Divisions Page Template
*/

get_header(); ?>

<section class="splash pt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center">Divisions</h2>
            </div>
        </div>
    </div>
</section>

<section class="body py-5">
    <div class="container">
        <div class="row justify-content-center">
            <?php
            $args = array(
                'post_type' => 'division',   // Specify your custom post type
                'posts_per_page' => -1      // Display all posts
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();

                    $title = get_the_title();
                    $division = strtolower(str_replace([' – ', ' '], [' ', '-'], $title));
                    // Display post content here as needed
                    echo '<div class="division text-center bg-tertiary-light p-5">';

                    get_template_part('template-parts/partials/general/logo');
                    echo '<h4 class="mt-4">' . get_the_title() . '</h4>';
                    echo '<p>' . get_the_content() . '</p>';

                    echo '<div class="d-flex flex-column align-items-center">';
                    echo '<a class="btn-primary bg-tertiary-hover" href="/divisions/' . $post->post_name . '">View</a>';
                    // echo '<a class="btn-primary bg-tertiary-hover my-2" href="/schedules/' . $post->post_name . '">Schedules</a>';
                    // echo '<a class="btn-primary bg-tertiary-hover" href="/stats/' . $post->post_name . '">Player Stats</a>';
                    echo '</div>';
                    echo '</div>';

                endwhile;
            endif;

            // Reset post data after the loop
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>