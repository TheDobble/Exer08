
<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 
}

function add_google_fonts() {
    wp_enqueue_style( ' add_google_fonts ', ' https://fonts.googleapis.com/css?family=Roboto&display=swap', false );}
    add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

//<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
?>
