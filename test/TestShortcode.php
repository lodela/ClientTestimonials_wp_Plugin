<?php
use PHPUnit\Framework\TestCase;
use WP_Mock as M;
use WP_Mock\Tools\TestCase as WPTestCase;

class TestShortcode extends WPTestCase {
    
    public function setUp(): void {
        // Set up WP Mock environment
        M::setUp();
    }

    public function tearDown(): void {
        // Tear down WP Mock environment
        M::tearDown();
    }

    public function test_shortcode_renders_correctly() {
        M::wpFunction( 'wp_query', [
            'times' => 1,
            'return' => (object) ['posts' => [
                (object) ['ID' => 1, 'post_title' => 'Testimonial One', 'post_content' => 'This is a great service!', 'meta' => ['ct_image' => 'image1.jpg']],
                (object) ['ID' => 2, 'post_title' => 'Testimonial Two', 'post_content' => 'Excellent experience!', 'meta' => ['ct_image' => 'image2.jpg']]
            ]]
        ]);

        M::wpFunction( 'get_post_meta', [
            'times' => 2,
            'args' => [M::type('int'), 'ct_image', true],
            'return_in_order' => ['image1.jpg', 'image2.jpg']
        ]);

        $output = ct_display_testimonials();
        $this->assertStringContainsString('Testimonial One', $output);
        $this->assertStringContainsString('Testimonial Two', $output);
        $this->assertStringContainsString('image1.jpg', $output);
        $this->assertStringContainsString('image2.jpg', $output);
    }
}
