<?php
/**
 * Template Name: Les Artistes
 *
**/
remove_action ('genesis_loop', 'genesis_do_loop'); // Remove the standard loop
add_action( 'genesis_loop', 'custom_do_grid_loop' ); // Add custom loop

 $args = array(
	 'post_type' => 'artiste', // enter your custom post type
	 'posts_per_page'=> '-1', // overrides posts per page in theme settings
 );
 $loop = new WP_Query( $args );
	while( $loop->have_posts() ): $loop->the_post(); global $post;
		$custom_fields = get_fields(get_the_id()); ?>
		echo the_title();
 <?php endwhile; 
 endif;?>

