<?php

function forest_theme_support(){
    // Adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-header');
}

add_action('after_theme_setup', 'forest_theme_support');
    

function forest_menus(){
    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
        
    );

    register_nav_menus($locations);
}

add_action('init', 'forest_menus');


function forest_register_styles(){

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('forest-style', get_template_directory_uri() . "/style.css", array('forest-bootstrap'), $version, 'all');
    wp_enqueue_style('forest-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('forest-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'forest_register_styles');

function forest_register_scripts(){

 wp_enqueue_script('forest-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
 wp_enqueue_script('forest-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '3.4.1', true);
 wp_enqueue_script('forest-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '3.4.1', true);
 wp_enqueue_script('forest-main', get_template_directory_uri()."/assests/js/main.js", array(), '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'forest_register_scripts');


function create_post_type() {
    register_post_type( 'wp_FAQs',
      array(
        'labels' => array(
          'name' => __( 'FAQs' ),
          'singular_name' => __( 'FAQ' )
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'custom-fields','thumbnail' ),
      )
    );
  }
  add_action( 'init', 'create_post_type' );

function forest_widget_areas(){
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => ''

        ),
        array(
            'name' => 'Sidebar Area',
            'id' => 'Sidebar-1',
            'description' => 'Sidebar widget area'
        )
        );
}

add_action( 'widgets_init', 'forest_widget_areas');

?>