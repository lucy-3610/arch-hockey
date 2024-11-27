<?php

/**
 * The template for displaying the main sub-menu navigation
 */

$sub_menu_title     = get_sub_field('sub_menu_title');
$show_in_sub_menu   = get_sub_field('show_in_sub_menu');
?>

<?php if (have_rows('sub_menu_item')) : // Repeater 
?>

    <ul class="sub-menu border-primary shadow">

        <?php if ($sub_menu_title) : ?>
            <li class="sub-menu-title">
                <span><?php echo $sub_menu_title; ?></span>
                <hr class="title-border">
            </li><!-- /.sub-menu-title -->
        <?php endif; ?>

        <?php if ($show_in_sub_menu) : ?>
            <li class="sub-menu-item">
                <a href="<?php if ($link_type == 'Select Link') : echo $select_link;
                            else : echo $custom_link;
                            endif; ?>" class="border-bottom">
                    <?php echo $menu_title; ?>
                </a>
            </li><!-- /.sub-menu-item -->
        <?php endif; ?>

        <?php while (have_rows('sub_menu_item')) : the_row();

            // vars
            $sub_menu_title         = get_sub_field('sub_menu_title');
            $sub_menu_link_type     = get_sub_field('sub_menu_link_type');
            $sub_menu_select_link   = get_sub_field('sub_menu_select_link');
            $sub_menu_custom_link   = get_sub_field('sub_menu_custom_link');
            $new_window             = get_sub_field('new_window');
        ?>

            <li class="sub-menu-item">
                <a href="<?php if ($sub_menu_link_type == 'Select Link') : echo $sub_menu_select_link;
                            else : echo $sub_menu_custom_link;
                            endif; ?>" <?php if ($new_window) : ?>target="_blank" <?php endif; ?> class="anchor-secondary anchor-primary-hover border-bottom">
                    <?php echo $sub_menu_title; ?>
                </a>
            </li><!-- /.sub-menu-item -->

        <?php endwhile; ?>

    </ul><!-- /.sub-menu -->

<?php endif; ?>