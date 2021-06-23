<?php

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );

// Load CSS Style
function load_head()
{
    wp_register_style('style', get_template_directory_uri() . '/statics/css/styles.css', array(), 1, 'all');
    wp_enqueue_style('style');

    wp_register_style('lightgallery', get_template_directory_uri() . '/node_modules/lightgallery/css/lightgallery.css', array(), 1, 'all');
    wp_enqueue_style('lightgallery');
}
add_action('wp_enqueue_scripts', 'load_head');

// Load Scripts

function gallery() {
    if( is_page( array( 'home') ) ){

        wp_register_script('scrollHeader', get_template_directory_uri() . '/statics/js/scrollHeader.js', '', '', 1);
        wp_enqueue_script('scrollHeader');

        wp_register_script('masonry', get_template_directory_uri() . '/node_modules/masonry-layout/dist/masonry.pkgd.min.js', '', '', 1);
        wp_enqueue_script('masonry');

        wp_register_script('imagesloaded', get_template_directory_uri() . '/node_modules/imagesloaded/imagesloaded.pkgd.min.js','', '', 1);
        wp_enqueue_script('imagesloaded');

        wp_register_script('lightgallery', get_template_directory_uri() . '/node_modules/lightgallery/lightgallery.min.js', '', '', 1);
        wp_enqueue_script('lightgallery');

        wp_register_script('gallery', get_template_directory_uri() . '/statics/js/gallery.js', '', '', 1);
        wp_enqueue_script( 'gallery');
    }
} add_action( 'wp_enqueue_scripts', 'gallery' );




function load_script() {
    wp_register_script('custom', get_template_directory_uri() . '/statics/js/custom.js', '', '', 1);
    wp_enqueue_script('custom');

    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', '','',1);
    wp_enqueue_script('jquery');

} add_action( 'wp_enqueue_scripts', 'load_script' );

// Create Menu
add_theme_support('menus');


// Register Menu
register_nav_menus(
    array(
        'header-menu' => __('Header menu', 'theme')
    )
);

