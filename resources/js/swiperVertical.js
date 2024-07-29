$(document).ready(function() {
    function setupCarousel(containerSelector, paginationSelector) {
        var currentIndex = 0;
        var slides = $(containerSelector).find('.carousel-slide');
        var pagination = $(paginationSelector).find('.pagination-object');
        var totalSlides = slides.length;

        function updateCarousel() {
            slides.fadeOut(400).removeClass('active');
            slides.eq(currentIndex).fadeIn(400).addClass('active');
            pagination.removeClass('active');
            pagination.eq(currentIndex).addClass('active');
        }

        pagination.on('click', function() {
            currentIndex = $(this).data('index');
            updateCarousel();
        });

        // Initial display
        updateCarousel(); // This will show the first slide initially
    }

    // Initialize carousel for desktop
    if ($('.lg\\:flex').is(':visible')) {
        setupCarousel('.lg\\:flex .carousel-container', '.lg\\:flex .flex-col');
    }

    // Initialize carousel for mobile
    if ($('.lg\\:hidden').is(':visible')) {
        setupCarousel('.lg\\:hidden .carousel-container', '.lg\\:hidden .flex-row');
    }
});