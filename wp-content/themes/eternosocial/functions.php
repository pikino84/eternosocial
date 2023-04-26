<?php
function eternosocial_setup(){
    //Activa bloque para agregar imagenes destacadas en el admin de wp
    add_theme_support( 'post-thumbnails');

    //Titulos para SEO
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'eternosocial_setup');


function eternosocial_menus(){
    register_nav_menus( array(
        'menu-principal' => __('Menu Principal', 'eternosocial')
    ));
}

add_action('init', 'eternosocial_menus');

function gymfitness_scripts_styles(){
    //Archivos CSS
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.1.1' );
    // Archivos JS
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');

