$(document).ready(function() {
    function setupCarousel(containerSelector, paginationSelector) {
        var currentIndex = 0;
        var slides = $(containerSelector).find('.carousel-slide');
        var pagination = $(paginationSelector).find('.pagination-object');
        var totalSlides = slides.length;
        var intervalTime = 3000; // Čas v ms medzi prechodmi, napr. 3000 ms = 3 sekundy
        var carouselInterval;

        function updateCarousel() {
            slides.fadeOut(400).removeClass('active');
            slides.eq(currentIndex).fadeIn(400).addClass('active');
            pagination.removeClass('active');
            pagination.eq(currentIndex).addClass('active');
        }

        function startCarouselLoop() {
            carouselInterval = setInterval(function() {
                currentIndex = (currentIndex + 1) % totalSlides;
                updateCarousel();
            }, intervalTime);
        }

        function stopCarouselLoop() {
            clearInterval(carouselInterval);
        }

        pagination.on('click', function() {
            currentIndex = $(this).data('index');
            updateCarousel();
            stopCarouselLoop(); // Zastavi loop pri ručnom kliknutí
        });

        // Initial display
        updateCarousel(); // This will show the first slide initially
        startCarouselLoop(); // Spustí automatický prechod snímkami
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
