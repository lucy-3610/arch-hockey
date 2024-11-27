<?php
/**
 * The template for displaying the footer bottom navigation
 */


// Get Theme Options
$home_link      = get_site_url();
$logo_class     = 'brand-logo';
$brand_name     = get_field('brand_name', 'option');
$small_logo     = get_field('small_logo', 'option'); 
//$logo_path      = pathinfo($large_logo['url']);
?>

<?php // Main Footer Menu

    if( have_rows('footer_menu_bottom', 'option') ): // Repeater

        while ( have_rows('footer_menu_bottom', 'option') ) : the_row();

            $menu_title         = get_sub_field('menu_title');
            $nav_name           = str_replace(' ', '', $menu_title);
            $show_in_sub_menu   = get_sub_field('show_in_sub_menu');
            $link_type          = get_sub_field('link_type');
            $select_link        = get_sub_field('select_link');
            $custom_link        = get_sub_field('custom_link');
            $add_sub_menu       = get_sub_field('add_sub_menu');
            $add_class 		    = get_sub_field('add_class');
            $footer_menu_class 	= get_sub_field('footer_menu_class');

            ?>

            <div class="nav-group-wrap py-md-0 mx-3">

                <ul class="list-unstyled mb-2">

                    <li class="main-menu-item has-sub-menu d-flex" id="item<?php echo $nav_name; ?>">

                        <div class="w-100">

                            <?php if ($link_type == 'No Link'): ?>
                                <span class="gray"><?php echo $menu_title; ?></span>
                            <?php else: ?>
                                <a href="<?php if ($link_type == 'Select Link'): echo $select_link; else: echo $custom_link; endif;?>" class="copyright-links<?php if ( !empty($add_class) ) : echo ' ' . $footer_menu_class; endif; ?>">
                                    <?php echo $menu_title; ?>
                                </a>
                            <?php endif; ?>
                        
                            <?php // Main Footer Sub-Menu
                            if($add_sub_menu):

                                if( have_rows('sub_menu') ): //Group

                                    while ( have_rows( 'sub_menu') ) : the_row();
                                            
                                        if( have_rows('sub_menu_item') ): // Repeater ?>

                                            <ul class="list-unstyled mb-0">

                                                <?php while ( have_rows( 'sub_menu_item') ) : the_row();
                                                    // vars
                                                    $sub_menu_title         = get_sub_field('sub_menu_title');
                                                    $sub_menu_link_type     = get_sub_field('sub_menu_link_type');
                                                    $sub_menu_select_link   = get_sub_field('sub_menu_select_link');
                                                    $sub_menu_custom_link   = get_sub_field('sub_menu_custom_link');
                                                    $new_window             = get_sub_field('new_window');
                                                    ?>

                                                    <li class="sub-menu-item">
                                                        <a href="<?php if ($sub_menu_link_type == 'Select Link'): echo $sub_menu_select_link; else: echo $sub_menu_custom_link; endif;?>" <?php if($new_window): ?>target="_blank"<?php endif; ?> class="copyright-links<?php if ( !empty($add_class) ) : echo ' ' . $footer_menu_class; endif; ?>">
                                                            <?php echo $sub_menu_title; ?>
                                                        </a>
                                                    </li>
                                                <?php endwhile; ?>

                                            </ul>

                                        <?php endif;

                                    endwhile;

                                endif;

                            endif; ?>
                            
                        </div><!-- .w-100 -->
                        
                    </li>

                </ul>

            </div><!-- .nav-group-wrap -->

        <?php endwhile;

    endif;
?>
