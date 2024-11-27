<?php

/**
 * Template part for displaying the checklist partial
 */

//Advanced Custom Fields
$hide_block      = get_sub_field('hide_block');

$checklist_title = get_sub_field('checklist_title');
$site_type       = get_sub_field('site_type');
?>

<?php if (empty($hide_block)) : ?>

    <!-- CHECKLIST 
	======================================== -->
    <section class="checklist-block">
        <div class="container">
            <div class="row">
                <h1><?php echo $checklist_title; ?></h1>
            </div>
            <div class="row mb-5">
                <div class="col-lg-3">
                    <select name="cars" id="site-type">
                        <option value="full">Full Site</option>
                        <option value="micro">Micro Site</option>
                        <option value="lp">Landing Page</option>
                        <option value="express">Express LP</option>
                        <option value="attack">Attack LP</option>
                    </select>
                </div>
                <div class="col-auto">
                    <span class="Checkbox_checkbox form_checkbox ">
                        <span class="Checkbox_icon ">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"></path>
                            </svg>
                        </span>
                        <input id="form-checkbox" type="checkbox">
                    </span>
                    <label>Form?</label>
                </div>
                <div class="col-auto">
                    <span class="Checkbox_checkbox posts_checkbox ">
                        <span class="Checkbox_icon ">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"></path>
                            </svg>
                        </span>
                        <input id="posts-checkbox" type="checkbox">
                    </span>
                    <label>Posts with comments?</label>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 checklist-choices">
                    <?php if (have_rows('checklist')) : ?>
                        <?php while (have_rows('checklist')) : the_row();
                            $bullet = get_sub_field('bullet');
                            $subbullets = get_sub_field('subbullets');
                            $required = get_sub_field('required');
                            $required_str = '';
                            foreach ($required as $type) {
                                $required_str .= ' ' . $type;
                            }
                            $field_name = 'required';
                            $field = get_field_object($field_name);
                            $form = get_sub_field('form');
                            $posts = get_sub_field('posts');
                            $add_form = $form ? "form" : "";
                            $add_posts = $posts ? "posts" : "";
                            if ($form || $posts) {
                                $required_str = "full micro lp express attack";
                            }

                            if (get_row_index() % 2 !== 0) :
                        ?>

                                <div class="CategoryItem_item__1KWXH CategoryItem_closed__puRcC <?php echo $required_str . " " . $add_form . " " . $add_posts; ?> mb-3">
                                    <div class="CategoryItem_name__3arUH ">
                                        <label>
                                            <span class="Checkbox_checkbox__3pwM6 Checkbox_checkbox ">
                                                <span class="Checkbox_icon Checkbox_icon__yWXiN ">
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"></path>
                                                    </svg>
                                                </span>
                                                <input type="checkbox">
                                            </span>
                                            <?php echo $bullet; ?>
                                        </label>
                                        <?php if ($subbullets) : ?>
                                            <span class="CategoryItem_arrow__2q0AQ">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" style="width:20px;height:20px" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path>
                                                </svg>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="CategoryItem_resources__1Vl2V">
                                        <div class="CategoryItem_resourcesItem__dUN0Y mt-2 pl-5">
                                            <?php echo $subbullets; ?>
                                        </div>
                                    </div>
                                </div>

                        <?php endif;
                        endwhile;
                        wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
                <div class="col-lg-6 checklist-choices">
                    <?php if (have_rows('checklist')) : ?>
                        <?php while (have_rows('checklist')) : the_row();
                            $bullet = get_sub_field('bullet');
                            $subbullets = get_sub_field('subbullets');
                            $required = get_sub_field('required');
                            $required_str = '';
                            foreach ($required as $type) {
                                $required_str .= ' ' . $type;
                            }
                            $field_name = 'required';
                            $field = get_field_object($field_name);
                            $form = get_sub_field('form');
                            $posts = get_sub_field('posts');
                            $add_form = $form ? "form" : "";
                            $add_posts = $posts ? "posts" : "";
                            if ($form || $posts) {
                                $required_str = "full micro lp express attack";
                            }

                            if (get_row_index() % 2 === 0) :
                        ?>

                                <div class="CategoryItem_item__1KWXH CategoryItem_closed__puRcC <?php echo $required_str . " " . $add_form . " " . $add_posts; ?> mb-3">
                                    <div class="CategoryItem_name__3arUH ">
                                        <label>
                                            <span class="Checkbox_checkbox Checkbox_checkbox__3pwM6 ">
                                                <span class="Checkbox_icon Checkbox_icon__yWXiN ">
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"></path>
                                                    </svg>
                                                </span>
                                                <input type="checkbox">
                                            </span>
                                            <?php echo $bullet; ?>
                                        </label>
                                        <?php if ($subbullets) : ?>
                                            <span class="CategoryItem_arrow__2q0AQ">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" style="width:20px;height:20px" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path>
                                                </svg>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="CategoryItem_resources__1Vl2V">
                                        <div class="CategoryItem_resourcesItem__dUN0Y mt-2 pl-5">
                                            <?php echo $subbullets; ?>
                                        </div>
                                    </div>
                                </div>

                        <?php endif;
                        endwhile;
                        wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row justify-content-end">
                <button onclick="clearProgress()">Reset</button>
            </div>
        </div><!-- /.container -->
    </section><!-- /.pricing -->

    <section class="progressbar">
        <div class="container">
            <div class="row mt-5">
                <div class="progressbar-container">
                    <div class="progressbar-bar"></div>
                </div>
                <div class="d-flex justify-content-between w-100 mt-3">
                    <p>Progress: <span class="progress-amount">0%</span></p>
                    <p><span class="required-checked">0</span>/<span class="required-total">0</span></p>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>