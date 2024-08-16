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

// Handle form submission
function ct_handle_form_submission() {
    if ( isset($_POST['ct_save_testimonial']) ) {
        $name = sanitize_text_field( $_POST['ct_name'] );
        $testimonial = sanitize_textarea_field( $_POST['ct_testimonial'] );
        $image = esc_url_raw( $_POST['ct_image'] );

        // Save the testimonial
        $testimonial_data = array(
            'post_title'   => $name,
            'post_content' => $testimonial,
            'post_type'    => 'testimonial',
            'post_status'  => 'publish',
        );
        $testimonial_id = wp_insert_post( $testimonial_data );

        if ( $testimonial_id ) {
            update_post_meta( $testimonial_id, 'ct_image', $image );
            echo '<div class="notice notice-success is-dismissible"><p>Testimonial saved successfully!</p></div>';
        } else {
            echo '<div class="notice notice-error is-dismissible"><p>Failed to save testimonial.</p></div>';
        }
    }
}
add_action( 'admin_post_ct_save_testimonial', 'ct_handle_form_submission' );

// Admin page content
function ct_admin_page() {
    echo '<div class="wrap"><h1>Client Testimonials</h1>';
    ?>
    <form method="post" action="<?php echo admin_url( 'admin-post.php' ); ?>">
        <input type="hidden" name="action" value="ct_save_testimonial">
        <?php wp_nonce_field( 'ct_save_testimonial', 'ct_testimonial_nonce' ); ?>
        <table class="form-table">
            <tr>
                <th><label for="ct_name">Client Name</label></th>
                <td><input type="text" name="ct_name" id="ct_name" class="regular-text" required></td>
            </tr>
            <tr>
                <th><label for="ct_testimonial">Testimonial</label></th>
                <td><textarea name="ct_testimonial" id="ct_testimonial" rows="5" class="large-text" required></textarea></td>
            </tr>
            <tr>
                <th><label for="ct_image">Client Image URL</label></th>
                <td><input type="text" name="ct_image" id="ct_image" class="regular-text"></td>
            </tr>
        </table>
        <?php submit_button( 'Save Testimonial' ); ?>
    </form>
    <?php
    echo '</div>';
}
?>
