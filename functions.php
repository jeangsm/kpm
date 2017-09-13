<?php
@package kpm

function scripts_do_template() {
    // Bootstrap core JavaScript
    wp_register_script('bootstrapjs', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'));
    wp_register_script('popperjs', get_template_directory_uri().'/js/popper.min.js', array('jquery'));
    // Bootstrap core CSS
    wp_register_style('bootstrapcss', get_template_directory_uri().'/css/bootstrap.min.css');
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs');
    wp_enqueue_script('popperjs');
    wp_enqueue_style('bootstrapcss');
}
add_action('wp_enqueue_scripts', 'scripts_do_template');

function menus_do_template() {
    register_nav_menus() {
        array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        ')
    }
}
add_action('init', 'menus_do_template');

?>
