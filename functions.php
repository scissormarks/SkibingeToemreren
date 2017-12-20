<?php

function load_css() {

	wp_enqueue_style( 'SkibingeToemreren_stylesheet', get_stylesheet_uri() );
	wp_enqueue_style( 'SkibingeToemreren_gfonts', 'https://fonts.googleapis.com/css?family=Playfair+Display|Raleway|Roboto:300,400' );
		// CDN hosted Font Awesome
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0', false );
}	
// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
    wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1', false );
    //main.js 
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array("jquery"), '1.0.0', true );



add_action( 'wp_enqueue_scripts', 'load_css' );
	


function wptutsplus_register_theme_menu() {
    register_nav_menu( 'primary', 'Main Navigation Menu' );
}
add_action( 'init', 'wptutsplus_register_theme_menu' );
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'isactive ';
    }
    return $classes;
}

?>