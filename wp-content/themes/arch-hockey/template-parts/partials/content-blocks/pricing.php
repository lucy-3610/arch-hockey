<?php

/**
 * Template part for displaying the pricing partial
 */

//Advanced Custom Fields
$hide_block             = get_sub_field('hide_block');
?>

<?php if (empty($hide_block)) : ?>

    <!-- PRICING 
	======================================== -->
    <section class="pricing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11 border-primary">
                    <div class="container pt-4 pb-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <h2>Pricing</h2>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <?php if (have_rows('pricing')) : ?>
                                <?php while (have_rows('pricing')) : the_row();
                                    $pricing_header = get_sub_field('pricing_header');
                                    $pricing_header_link = get_sub_field('pricing_header_link');
                                    $price = get_sub_field('price');
                                    $subpricing = get_sub_field('subpricing');
                                ?>

                                    <div class="col-md-6 col-lg-5">
                                        <div class="d-flex justify-content-between">
                                            <h4>
                                                <?php if (!empty($pricing_header_link)) { ?>
                                                    <a target="_blank" href="<?php echo $pricing_header_link; ?>">
                                                        <?php echo $pricing_header; ?>
                                                    </a>
                                                <?php } else {
                                                    echo $pricing_header;
                                                } ?>
                                            </h4>
                                            <h4 class="d-block d-md-none text-right"><?php echo $price; ?></h4>
                                        </div>
                                        <?php if (have_rows('subpricing')) : ?>
                                            <?php while (have_rows('subpricing')) : the_row();
                                                $pricing_subheader = get_sub_field('pricing_subheader');
                                                $sub_price = get_sub_field('sub_price');
                                            ?>
                                                <div class="d-flex justify-content-between ml-sm-4">
                                                    <?php echo $pricing_subheader; ?>
                                                    <div class="d-block d-md-none">
                                                        <?php if ($sub_price) { ?>
                                                            $<?php echo $sub_price; ?>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            <?php endwhile;
                                            wp_reset_postdata(); ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-sm-4 d-none d-md-block">
                                        <h4><?php echo $price; ?></h4>
                                        <?php if (have_rows('subpricing')) : ?>
                                            <?php while (have_rows('subpricing')) : the_row();
                                                $sub_price = get_sub_field('sub_price');
                                            ?>
                                                <?php if ($sub_price) { ?>
                                                    $<?php echo $sub_price; ?>
                                                <?php } ?>
                                            <?php endwhile;
                                            wp_reset_postdata(); ?>
                                        <?php endif; ?>
                                    </div>

                                <?php endwhile;
                                wp_reset_postdata(); ?>
                            <?php endif; ?>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="container">
                                    <div class="row justify-content-center justify-content-xl-start align-items-center">

                                        <?php if (have_rows('logos')) : ?>
                                            <?php while (have_rows('logos')) : the_row();
                                                $logo = get_sub_field('logo');
                                                $width = get_sub_field('width');
                                                $height = get_sub_field('height');
                                            ?>
                                                <div class="col-auto my-2">
                                                    <img style="width: <?php echo $width; ?>px; height: <?php echo $height; ?>px;" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                                                </div>
                                            <?php endwhile;
                                            wp_reset_postdata(); ?>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.pricing -->

<?php endif; ?>