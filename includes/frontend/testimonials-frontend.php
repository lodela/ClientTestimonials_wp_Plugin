<?php
function ct_display_testimonials() {
    $args = array(
        'post_type'      => 'testimonial',
        'posts_per_page' => -1,
    );
    $testimonials_query = new WP_Query( $args );

    if ( $testimonials_query->have_posts() ) {
        $output = '<div class="ct-testimonials-carousel">';
        while ( $testimonials_query->have_posts() ) {
            $testimonials_query->the_post();
            $client_name = get_the_title();
            $testimonial = get_the_content();
            $image_url = get_post_meta( get_the_ID(), 'ct_image', true );

            $output .= '<div class="ct-testimonial">';
            if ( $image_url ) {
                $output .= '<img src="' . esc_url( $image_url ) . '" alt="' . esc_attr( $client_name ) . '">';
            }
            $output .= '<h3>' . esc_html( $client_name ) . '</h3>';
            $output .= '<p>' . esc_html( $testimonial ) . '</p>';
            $output .= '</div>';
        }
        $output .= '</div>';
    } else {
        $output = '<p>No testimonials found.</p>';
    }
    wp_reset_postdata();
    return $output;
}
add_shortcode( 'client_testimonials', 'ct_display_testimonials' );
?>
