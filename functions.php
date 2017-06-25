<?php


function enqueue_bootstrap() {
  wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );

 // Ces deux lignes ne sont utiles que si vous utilisez les fonctionnalites JavaScript
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.min.js', 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap' );



function theme_js(){

wp_enqueue_script( 'javascript', get_template_directory_uri() . '/main.js', false );

}

add_action( 'wp_enqueue_scripts', 'theme_js' );
