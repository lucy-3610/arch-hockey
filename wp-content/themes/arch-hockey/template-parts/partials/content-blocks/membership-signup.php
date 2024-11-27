<?php

/**
 * Template part for displaying the membership-signup partial
 */

//Advanced Custom Fields
$hide_block             = get_sub_field('hide_block');
?>

<?php if (empty($hide_block)) : ?>

    <!-- MEMBERSHIP SIGNUP 
	======================================== -->
    <section class="membership-signup">
        <div class="container">
            <div class="row color-white">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="bg-black px-3 px-sm-4 pt-5 d-flex flex-column drop-shadow h-100">
                        <h2 class="position-relative text-center text-uppercase f-900 mb-5">Individual <br>Memberships</h2>
                        <?php if (have_rows('individual_membership')) : ?>
                            <?php while (have_rows('individual_membership')) : the_row();
                                $member_type = get_sub_field('member_type');
                                $member_description = get_sub_field('member_description');
                                $price = get_sub_field('price');
                            ?>
                                <div class="mb-5">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="text-uppercase f-700"><?php echo $member_type; ?></h3>
                                        <h3 class="f-900 pl-2">$<?php echo $price; ?></h3>
                                    </div>

                                    <div class="divider-line bg-theme-tertiary my-2"></div>

                                    <?php echo $member_description; ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <div class="absolute-button">
                            <a rel="noopener noreferrer" href="<?php echo site_url('/memberships/personal-membership'); ?>"><button class="btn btn-white bg-white bg-theme-primary-hover color-primary border-primary-hover">Signup</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-black px-3 px-sm-4 pt-5 d-flex flex-column drop-shadow h-100">
                        <h2 class="position-relative text-center text-uppercase f-900 mb-5">Corporate <br>Sponsorships</h2>
                        <?php if (have_rows('corporate_sponsorships')) : ?>
                            <?php while (have_rows('corporate_sponsorships')) : the_row();
                                $member_type = get_sub_field('member_type');
                                $member_description = get_sub_field('member_description');
                                $price = get_sub_field('price');
                            ?>
                                <div class="mb-5">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="text-uppercase f-700"><?php echo $member_type; ?></h3>
                                        <h3 class="f-900 pl-2">$<?php echo $price; ?></h3>
                                    </div>

                                    <div class="divider-line bg-theme-tertiary my-2"></div>

                                    <?php echo $member_description; ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <h3 class="mb-2">All Levels of Memberships Include:</h3>
                        <div class="mb-5">
                            <?php if (have_rows('all_memberships')) : ?>
                                <?php while (have_rows('all_memberships')) : the_row();
                                    $all_member_perks = get_sub_field('all_member_perks');
                                ?>
                                    <div class="d-flex align-items-center my-1">
                                        <span class="color-primary">
                                            <i class="fa-solid fa-football ml-3 mr-2"></i>
                                        </span>
                                        <?php echo $all_member_perks; ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="absolute-button">
                            <a rel="noopener noreferrer" href="<?php echo site_url('/memberships/business-membership/'); ?>"><button class="btn btn-white bg-white bg-theme-primary-hover color-primary border-primary-hover">Signup</button></a>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.membership-signup -->

<?php endif; ?>