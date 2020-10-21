<?php

// creates the menus

function type1theme_menus(){
    // Wordpress Function
    register_nav_menus( array(
        'main-menu'=> 'Main Menu'
    ) );
}

add_action('init', 'type1theme_menus'); 

// Adds Stylesheet and JS Files


function type1theme_scripts(){
    wp_enqueue_style('normalize', get_template_directory_uri(). '/css/normalize.css',array(),'8.0.1');
    wp_enqueue_style('normalize', get_template_directory_uri(). '/css/normalize.css',array(),'8.0.1');

}

add_action('wp_enqueue_scripts','type1theme_scripts');

?>
