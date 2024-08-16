<?php
/*
Plugin Name: Client Testimonials
Description: A simple plugin to add and display client testimonials on your site.
Version: 1.0
Author: [Your Name]
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Include admin and frontend files
include_once plugin_dir_path( __FILE__ ) . 'includes/admin/testimonials-admin.php';
include_once plugin_dir_path( __FILE__ ) . 'includes/frontend/testimonials-frontend.php';

// Enqueue CSS and JS files
function ct_enqueue_assets() {
    wp_enqueue_style( 'ct-style', plugins_url( '/assets/css/style.css', __FILE__ ) );
    wp_enqueue_script( 'ct-script', plugins_url( '/assets/js/script.js', __FILE__ ), array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'ct_enqueue_assets' );
