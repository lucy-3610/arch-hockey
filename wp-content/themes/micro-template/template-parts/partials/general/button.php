<?php
	
/**
 * Template part for displaying the button partial
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

//Advanced Custom Fields

//THIS WAS THE OLD FIELD VALUE: button_button_select_link
//MIGHT NOT NEED BOTH button_button_


// Button
$add_button 		= get_sub_field('add_button');
$button_style 		= get_sub_field('button_style');
$button_text 		= get_sub_field('button_text');
$button_link_type 	= get_sub_field('button_link_type');
$button_select_link = get_sub_field('button_select_link');
$button_custom_link = get_sub_field('button_custom_link');
$new_window 		= get_sub_field('new_window');
$popup_class 		= get_sub_field('popup_class');

//Buttons
if($button_style == 'default'):
    $btn_style = 'btn-theme color-theme';
elseif($button_style == 'red border'):
    $btn_style = 'btn-red-bd';
elseif($button_style == 'red'):
    $btn_style = 'btn-red';
endif;
?>

<?php if($add_button): ?>
    <!-- BUTTON
    ========================= -->
    <p class="theme-button my-5">
        <a href="<?php if ($button_link_type == 'Select Link'): echo $button_select_link; else: echo $button_custom_link; endif;?>" <?php if($new_window): ?>target="_blank"<?php endif; ?> class="btn <?php echo $btn_style; ?><?php if( !empty($popup_class) ) : ?> popmake-<?php echo $popup_class; ?><?php endif; ?>"><?php echo $button_text; ?>
        </a>
    </p><!-- .theme-button -->
<?php endif; ?>