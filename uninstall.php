<?php
// If uninstall not called from WordPress, exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit;
}

// Delete custom post type data
$testimonials = get_posts( array(
    'post_type' => 'testimonial',
    'numberposts' => -1,
    'post_status' => 'any',
) );

foreach ( $testimonials as $testimonial ) {
    wp_delete_post( $testimonial->ID, true );
}

// Optionally, delete any options or custom tables created by the plugin
// delete_option( 'client_testimonials_options' );

// If you created custom tables, you would drop them here
// global $wpdb;
// $table_name = $wpdb->prefix . 'client_testimonials';
// $wpdb->query( "DROP TABLE IF EXISTS $table_name" );

