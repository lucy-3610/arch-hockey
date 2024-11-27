<?php echo do_shortcode('[searchandfilter fields="search,category,post_tag" submit_label="Filter"]'); ?>
<div class="tile-row">
    <?php
    $the_query = new WP_Query(array(
        'category_name' => $category_name,
        'tag' => $tag,
        'post_status' => 'publish',
        'posts_per_page' => -1,
    ))
    ?>
    <?php /* Start the Loop */
    if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post();
            $link = get_field('link');
            $blog_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
            $alt_text = get_post_meta(get_post_thumbnail_id(get_the_ID()), '_wp_attachment_image_alt', true);
            $subheader = get_field('subheader'); ?>

            <div class="d-flex justify-content-center">
                <a href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer">
                    <div class="tile">
                        <div class="overlay">
                        </div>
                        <div class="img-container">
                            <img src="<?php echo $blog_image[0]; ?>" alt="<?php echo $alt_text; ?>">
                        </div>
                        <div class="text">
                            <h1><?php echo the_title(); ?></h1>
                            <h2 class="animate-text"><?php echo $subheader; ?></h2>
                            <div class="animate-content"><?php echo the_content(); ?></div>
                            <div class="dots">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        <?php endwhile;
        wp_reset_postdata(); ?>
    <?php endif; ?>
</div>