$(document).ready(function() {
    // Set first button as active initially
    $('.content-button:first').addClass('active');

    $('.content-button').click(function() {
        var contentId = $(this).data('content');
        
        // Remove active class from all buttons
        $('.content-button').removeClass('active');
        
        // Hide all content sections
        $('.content-section').addClass('hidden');
        
        // Show the clicked content section
        $('#' + contentId).removeClass('hidden');
        
        // Add active class to the clicked button
        $(this).addClass('active');
    });
});