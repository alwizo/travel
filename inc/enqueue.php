<?php
/**
 * alwizo enqueue scripts
 *
 * @package alwizo
 */

function alwizo_scripts() {
    wp_enqueue_style( 'alwizo-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), '0.4.7');
    wp_enqueue_script('jquery'); 
    wp_enqueue_script( 'alwizo-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), '0.4.7', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'alwizo_scripts' );

/** 
*Loading slider script conditionally
**/

if ( is_active_sidebar( 'hero' ) ):
add_action("wp_enqueue_scripts","alwizo_slider");
  
function alwizo_slider(){
    if ( is_front_page() ) {    
    $data = array(
        "timeout"=> intval( get_theme_mod( 'alwizo_theme_slider_time_setting', 5000 )),
        "items"=> intval( get_theme_mod( 'alwizo_theme_slider_count_setting', 1 ))
    	);

    wp_enqueue_script("alwizo-slider-script", get_stylesheet_directory_uri() . '/js/slider_settings.js', array(), '0.4.7');
    wp_localize_script( "alwizo-slider-script", "alwizo_slider_variables", $data );
    }
}
endif;

