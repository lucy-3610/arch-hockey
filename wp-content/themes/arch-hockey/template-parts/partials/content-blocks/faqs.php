<?php

/**
 * Template part for displaying the faq partial
 */

//Advanced Custom Fields
$hide_block             = get_sub_field('hide_block');
?>

<?php if (empty($hide_block)) : ?>

    <!-- FAQs 
	======================================== -->
    <section class="faq">
        <div class="container">

        <?php
            $the_query = new WP_Query(array(
                'post_type' => 'faq',
                'post_status' => 'publish',
                'posts_per_page' => -1,
            ))
        ?>

        <?php
        /* Start the Loop */
        if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
            $faq_category = get_field('faq_category');
        ?>

            <div class="row" id="faq-<?php echo $faq_category; ?>">
                <div class="col-12 text-center">

                    <!-- category title -->
                    <h2><?php echo the_title(); ?></h2>

                    <!-- loop through the questions of the post -->
                    <?php if (have_rows('questions_and_answers')) : ?>
                        <?php while (have_rows('questions_and_answers')) : the_row();
                            $question = get_sub_field('question');
                            $answer = get_sub_field('answer');
                        ?>

                        <!-- the faq -->
                            <div class="faq pb-3">
                                <h3><?php echo $question; ?></h3>
                                <p class="h3 f-500"><?php echo $answer; ?></p>
                            </div>
                        
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <!-- up to top icon -->
                    <a href="#faq-<?php echo $faq_category; ?>"><img src="/wp-content/uploads/2022/06/4_faq_uparrow.svg" alt="scroll to top arrow icon"></a>

                </div>
                
            </div><!-- /.row -->  

        <?php endwhile;
        wp_reset_postdata(); ?>
        <?php endif; ?>

        </div><!-- /.container -->
    </section><!-- /.faq -->

    <script>
        $(document).on('click', 'a[href^="#"]', function (event) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top
            }, 500);
        });
    </script>

<?php endif; ?>