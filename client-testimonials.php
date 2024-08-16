<?php
/*
Plugin Name: Client Testimonials
Plugin URI: https://github.com/lodela/ClientTestimonials_wp_Plugin
Description: A plugin to manage and display client testimonials.
Version: 1.0
Author: Norberto Lodela
License: GPL2
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Include the custom post type class
require_once plugin_dir_path( __FILE__ ) . 'includes/class-client-testimonials-cpt.php';

// Include admin and frontend files
include_once plugin_dir_path( __FILE__ ) . 'includes/admin/testimonials-admin.php';
include_once plugin_dir_path( __FILE__ ) . 'includes/frontend/testimonials-frontend.php';

// Enqueue CSS and JS files
function ct_enqueue_assets() {
    wp_enqueue_style( 'ct-style', plugins_url( '/assets/css/style.css', __FILE__ ) );
    wp_enqueue_script( 'ct-script', plugins_url( '/assets/js/script.js', __FILE__ ), array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'ct_enqueue_assets' );
