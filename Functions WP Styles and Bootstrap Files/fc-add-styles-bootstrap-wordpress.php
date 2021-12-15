<?<?php


//Add My Style File CSS
function my_style_template(){
    wp_enqueue_style( 'style-template', get_stylesheet_directory_uri() . '/assets/css/style-templates.css' );
}
add_action( 'wp_enqueue_scripts', 'my_style_template',5 );
//End MyStyle Function


//Add bootstrap support to the Wordpress theme

function theme_add_bootstrap() {
    wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/assets/bootstrap-css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/assets/bootstrap-js/bootstrap.min.js', array(), '3.0.0', true );
    }
    
    add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );

//End Function add bootstrap


?>