<?php
/*
 *  Author: Antoine DEVOS
 */

// Add Menu Support
add_theme_support('menus');

// Localisation Support
load_theme_textdomain('html5blank', get_template_directory() . '/languages');


// Adds support for editor color palette.
add_theme_support( 'editor-color-palette', array(
	array(
		'name'  => __( 'Vert', 'legavres' ),
		'slug'  => 'vert',
		'color'	=> '#8CBF3A',
	),
	array(
		'name'  => __( 'Gris foncé', 'legavres' ),
		'slug'  => 'gris-fonce',
		'color' => '#282F2F',
	),
	array(
		'name'  => __( 'Gris foncé', 'legavres' ),
		'slug'  => 'gris',
		'color' => '#373F4A',
	),
	array(
		'name'  => __( 'Gris clair', 'legavres' ),
		'slug'  => 'gris-clair',
		'color' => '#7E929D',
       ),
	array(
		'name'  => __( 'Blanc', 'legavres' ),
		'slug'  => 'blanc',
		'color' => '#fefefe',
       ),
	array(
		'name'  => __( 'Noir', 'legavres' ),
		'slug'  => 'noir',
		'color' => '#050505',
       ),
) );
// Disables custom colors in block color palette.
add_theme_support( 'disable-custom-colors' );
add_theme_support( 'post-thumbnails' ); 

function my_deregister_scripts_and_styles() {
    global $wp_scripts, $wp_styles;

    foreach($wp_scripts->registered as $registered)
        if(strpos($registered->src,'/wp-admin/')===FALSE)
            wp_deregister_script($registered->handle);

    // foreach($wp_styles->registered as $registered)
    //     if(strpos($registered->src,'/wp-admin/')===FALSE)
    //         wp_deregister_style($registered->handle);
}
// add_action( 'wp_enqueue_scripts', 'my_deregister_scripts_and_styles');