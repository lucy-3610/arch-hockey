<?php
/*
Thunder Bolt 2 - Functions and Definitions.
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Custom Page Builder Search Content
@package Thunder_Bolt_2	
Updated Version: 1.0
*/	

function my_function( $post_id ) {
	
	$template_name = get_page_template_slug( $post->ID );
	
	if ( ! wp_is_post_revision( $post_id ) && $template_name == 'page-builder.php' ) {
		
		$searchable_text;
		
		if ( get_field('graphic_header') ) {
		  $intro_content = get_field('gh_intro');
		  $searchable_text = $searchable_text . $intro_content;
		}
    
		if( have_rows('pg_mdls') ):
			while ( have_rows('pg_mdls') ) : the_row();
				if( get_row_layout() == 'full' ): 
					if(get_sub_field('ct') == 'content') {
						$full_content =	get_sub_field('content');
						$searchable_text = $searchable_text . $full_content;
					};
				elseif( get_row_layout() == 'fifty_fifty' ): 
					if( have_rows('cl') ):
						while( have_rows('cl') ): the_row();
							$fifty_fifty_tx	=	get_sub_field('tx');
							$searchable_text = $searchable_text . $fifty_fifty_tx;
						endwhile;
					endif; 
				elseif( get_row_layout() == 'columns' ):		
					if( have_rows('cr') ):
						while( have_rows('cr') ): the_row();
							if(get_sub_field('noc') == "Two") { 
								if( have_rows('cl2') ):
									while( have_rows('cl2') ): the_row();
										$cl2_tx	=	get_sub_field('tx');
										$searchable_text = $searchable_text . $cl2_tx;
									endwhile;
								endif;
							}
							if(get_sub_field('noc') == "Three") { 
								if( have_rows('cl3') ):
									while( have_rows('cl3') ): the_row();
										$cl3_tx	=	get_sub_field('tx');
										$searchable_text = $searchable_text . $cl3_tx;
									endwhile;
								endif;
							}
							if(get_sub_field('noc') == "Four") { 
								if( have_rows('cl4') ):
									while( have_rows('cl4') ): the_row();
										$cl4_tx	=	get_sub_field('tx');
										$searchable_text = $searchable_text . $cl4_tx;
									endwhile;
								endif;
							}
						endwhile;
					endif;	
				endif;
			endwhile;
		endif;
		
	  $my_args = array(
		  'ID'           => $post_id,
		  'post_content' => $searchable_text,
	  );
			
		// unhook this function so it doesn't loop infinitely
		remove_action('save_post', 'my_function');
	
		// update the post, which calls save_post again
		wp_update_post( $my_args );
	
		// re-hook this function
		add_action('save_post', 'my_function');
	}
}
add_action('save_post', 'my_function');