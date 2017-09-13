<?php
@package kpm

function scripts_do_template() {
    // Bootstrap core JavaScript
    wp_register_script('bootstrapjs', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'));
    // Bootstrap core CSS
    wp_register_style('bootstrapcss', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_register_style('bootstrapgridcss', get_template_directory_uri().'/css/bootstrap-grid.min.css');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs');
    wp_enqueue_script('bootstrapcss');
    wp_enqueue_script('bootstrapgridcss');
}

add_action('wp_enqueue_scripts', 'scripts_do_template');


?>
