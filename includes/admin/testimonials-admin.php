<?php
// Add menu page
function ct_add_admin_menu() {
    add_menu_page(
        'Client Testimonials', 
        'Testimonials', 
        'manage_options', 
        'ct-testimonials', 
        'ct_admin_page', 
        'dashicons-testimonial', 
        6
    );
}
add_action( 'admin_menu', 'ct_add_admin_menu' );

// Admin page content
function ct_admin_page() {
    echo '<div class="wrap"><h1>Client Testimonials</h1>';
    // Here will go the form to add/edit testimonials
    echo '</div>';
}
