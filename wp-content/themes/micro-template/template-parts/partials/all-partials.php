<?php
	
/**
 * Template part for pulling all partials
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<?php // Flexible Content Blocks

// Gravity Forms
if( get_row_layout() == 'form' ):
    get_template_part( 'template-parts/partials/content-blocks/form' );

// Home Page Hero
//elseif( get_row_layout() == 'home_page_hero' ):
    //get_template_part( 'template-parts/partials/content-blocks/home', 'hero' );

endif; ?>