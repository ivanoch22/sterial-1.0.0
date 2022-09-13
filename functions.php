<?php
/**
 * WP Theme soporte
 * @package WordPress
 */

add_action('after_setup_theme','wptheme_support');

function wptheme_support(){
    /*
     *Define Constants
     */
    define('THEME_CSS', get_template_directory_uri() . '/css');
    define('THEME_JS',  get_template_directory_uri() . '/js');
    define('THEME_IMG', get_template_directory_uri() . '/images');
    define('THEME_FTS', get_template_directory_uri() . '/fonts'); 
    
	/*
	 *Enable supporte for post thumbnails
	 */
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
    	'primary' 	=> __('Primary Menu', 	'wptheme'),
    	'secondary' => __('Secondary Menu', 'wptheme'),
    	'mobile' 	=> __('Mobile Menu', 	'wptheme'),
    ));

    /*
     *Desactivar funciones extras innecesarias, emojis, svg de wordpress, etc.
     */
    add_filter( 'emoji_svg_url', '__return_false' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );

}


//longitud personalizad del excerpt
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}


add_action('widgets_init','widget_area_wptheme');

function widget_area_wptheme(){

    //Primary Right Sidebar
    register_sidebar(array(
        'name'          => __('Right Sidebar', 'wptheme'),
        'id'            => 'right_sidebar',
        'description'   => __('Widgets que se mostrarán en la barra lateral derecha'),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',        
    ));

    register_sidebar(array(
        'name'  => __('First Footer Area', 'wptheme'),
        'id'    => 'first-footer-area',
        'description' => 'TODO HERE',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',                
    ));

    register_sidebar(array(
        'name'  => __('Second Footer Area', 'wptheme'),
        'id'    => 'second-footer-area',
        'description' => 'TODO HERE',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',                
    ));    

    register_sidebar(array(
        'name'  => __('Third Footer Area', 'wptheme'),
        'id'    => 'third-footer-area',
        'description' => 'TODO HERE',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',                
    )); 
           
}