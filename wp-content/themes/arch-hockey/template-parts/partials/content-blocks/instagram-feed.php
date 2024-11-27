<?php

/**
 * Template part for displaying the instagram feed partial
 */

//Advanced Custom Fields
$hide_block             = get_sub_field('hide_block');
?>

<?php if (empty($hide_block)) : ?>

    <!-- INSTAGRAM FEED 
	======================================== -->
    <section class="instagram-feed">
        <div class="container-fluid">
            <div class="row">

            <div class="col-md-12 p-0 text-center">
                <h2 class="mb-0">Follow us on instagram</h2>
                <a href="https://www.instagram.com/titaniumyoga/" target="_blank"><h2 class="mt-0 mb-4">@titaniumyoga</h2></a>
            <?php echo do_shortcode('[instagram-feed feed=1]');?>
            </div>
            
            </div><!-- /.row -->  
        </div><!-- /.container -->
    </section><!-- /.instagram-feed -->

<?php endif; ?>