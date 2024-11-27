<?php

/**
 * Template part for displaying the image gallery partial
 */

//Advanced Custom Fields
$hide_block             = get_sub_field('hide_block');
$category_name;
?>

<?php if (empty($hide_block)) : ?>

    <!-- IMAGE GALLERY 
	======================================== -->
    <section class="image-gallery">
        <div class="container">
            <div class="filter d-flex flex-column flex-sm-row justify-content-center text-center mb-4">
                <h3 data-filter="All" class="active mx-auto mx-sm-3 mb-3">All</h3>
                <?php
                $args = array(
                    'post_type' => 'image',
                    'child_of'                 => 0,
                    'parent'                   => '',
                    'orderby'                  => 'name',
                    'order'                    => 'ASC',
                    'hide_empty'               => 1,
                    'hierarchical'             => 1,
                    'pad_counts'               => false
                );
                $categories = get_categories($args);

                foreach ($categories as $category) {
                    $url = get_term_link($category); ?>
                    <h3 class="mx-auto mx-sm-3 mb-3" data-filter="<?php echo $category->name; ?>"><?php echo $category->name; ?></h3>
                <?php
                }
                ?>

            </div>
            <div class="row" id="photo-gallery">
                <?php
                $the_query = new WP_Query(array(
                    'post_type' => 'image',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                ))
                ?>
                <?php /* Start the Loop */
                $slide_to_index = 0;
                if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post();
                        $blog_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                        $alt_text = get_post_meta(get_post_thumbnail_id(get_the_ID()), '_wp_attachment_image_alt', true);
                        foreach ((get_the_category()) as $category) {
                            //this would print cat names.. You can arrange in list or whatever you want..
                            $category_list =  '"' . $category->cat_name . '",';
                        } ?>

                        <figure class="col-md-6 col-lg-3 picture-item" data-groups='["<? echo strip_tags(get_the_category_list('", "')); ?>"]'>
                            <div class="aspect">
                                <img class="photo d-flex mx-auto mb-3" src="<?php echo $blog_image[0]; ?>" data-toggle="modal" data-target="#photo-modal" alt="<?php echo $alt_text; ?>">
                            </div>
                        </figure>
                    <?php
                        $slide_to_index++;
                    endwhile;
                    wp_reset_postdata(); ?>
                <?php endif; ?>
                <div class="col-1 js-shuffle-sizer"></div>
            </div>
        </div>
        <div class="modal fade" id="photo-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog shadow" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="image-container"></div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /.image-gallery -->

    <script>
        var $imageSrc, $imageAlt;
        $('.photo').click(function() {
            $imageSrc = $(this).attr('src');
            $imageAlt = $(this).attr('alt');
        });
        var img;
        $('#photo-modal').on('shown.bs.modal', function(e) {
            img = $('<img class="d-flex mx-auto">')
            img.attr('src', $imageSrc);
            img.attr('alt', $imageAlt);
            img.appendTo('.image-container');
        })

        $('#photo-modal').on('hidden.bs.modal', function(e) {
            img.remove();
        })

        const Shuffle = window.Shuffle; // Assumes you're using the UMD version of Shuffle (for example, from unpkg.com).
        const element = document.getElementById('photo-gallery');
        const sizer = element.querySelector('.js-shuffle-sizer');

        const shuffleInstance = new Shuffle(element, {
            itemSelector: '.picture-item',
            sizer: sizer, // could also be a selector: '.js-shuffle-sizer'
        });

        shuffleInstance.filter();

        $('.filter h3').on('click', function() {
            $('.filter h3').each(function() {
                $(this).removeClass('active');
            });

            $(this).addClass('active');

            var filterVar = $(this).data('filter');
            console.log(filterVar)

            if (filterVar == "All") {
                shuffleInstance.filter();
            } else {
                shuffleInstance.filter(filterVar);
            }
        });
    </script>

<?php endif; ?>