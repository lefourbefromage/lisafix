<?php


function load_stylesheets()
{
    wp_register_style('style', get_template_directory_uri() . '/statics/css/styles.css', array(), 1, 'all');
    wp_enqueue_style('style');

    wp_register_style('lightgallery', get_template_directory_uri() . '/node_modules/lightgallery/css/lightgallery.css', array(), 1, 'all');
    wp_enqueue_style('lightgallery');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

// Load Scripts

function load__scripts()
{
    wp_register_scripts('masonry', get_template_directory_uri() . '/node_modules/masonry-layout/dist/masonry.pkgd.min.js', array(), 1, 1);
    wp_enqueue_scripts('masonry');

    wp_register_scripts('imagesloaded', get_template_directory_uri() . '/node_modules/imagesloaded/imagesloaded.pkgd.min.js', array(), 1, 1);
    wp_enqueue_scripts('imagesloaded');

    wp_register_scripts('lightgallery', get_template_directory_uri() . '/node_modules/lightgallery/lightgallery.min.js', array(), 1, 1);
    wp_enqueue_scripts('lightgallery');
}