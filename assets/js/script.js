jQuery(document).ready(function($) {
    var $carousel = $('.ct-testimonials-carousel');
    var interval = 5000; // Change slide every 5 seconds
    var index = 0;
    var slides = $carousel.find('.ct-testimonial');
    var totalSlides = slides.length;

    function showSlide(i) {
        slides.hide().eq(i).fadeIn();
    }

    setInterval(function() {
        index = (index + 1) % totalSlides;
        showSlide(index);
    }, interval);

    showSlide(index);
});
