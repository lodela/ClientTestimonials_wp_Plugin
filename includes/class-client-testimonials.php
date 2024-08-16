<?php
// Prevent direct access to the file
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Client_Testimonials_CPT {

    public function __construct() {
        add_action( 'init', array( $this, 'register_testimonials_cpt' ) );
    }

    public function register_testimonials_cpt() {
        $labels = array(
            'name'               => _x( 'Testimonials', 'post type general name', 'client-testimonials' ),
            'singular_name'      => _x( 'Testimonial', 'post type singular name', 'client-testimonials' ),
            'menu_name'          => _x( 'Testimonials', 'admin menu', 'client-testimonials' ),
            'name_admin_bar'     => _x( 'Testimonial', 'add new on admin bar', 'client-testimonials' ),
            'add_new'            => _x( 'Add New', 'testimonial', 'client-testimonials' ),
            'add_new_item'       => __( 'Add New Testimonial', 'client-testimonials' ),
            'new_item'           => __( 'New Testimonial', 'client-testimonials' ),
            'edit_item'          => __( 'Edit Testimonial', 'client-testimonials' ),
            'view_item'          => __( 'View Testimonial', 'client-testimonials' ),
            'all_items'          => __( 'All Testimonials', 'client-testimonials' ),
            'search_items'       => __( 'Search Testimonials', 'client-testimonials' ),
            'parent_item_colon'  => __( 'Parent Testimonials:', 'client-testimonials' ),
            'not_found'          => __( 'No testimonials found.', 'client-testimonials' ),
            'not_found_in_trash' => __( 'No testimonials found in Trash.', 'client-testimonials' )
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'testimonial' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'editor', 'thumbnail' ),
        );

        register_post_type( 'testimonial', $args );
    }
}

new Client_Testimonials_CPT();
