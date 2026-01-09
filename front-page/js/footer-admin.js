// front-page/js/footer-admin.js
jQuery(document).ready(function($) {
    // Toggle sections visibility
    $('.tfs-footer-admin .footer-section h2').on('click', function() {
        var $section = $(this).parent('.footer-section');
        $section.toggleClass('closed');

        if ($section.hasClass('closed')) {
            $section.find('.footer-section-content').slideUp(200);
        } else {
            $section.find('.footer-section-content').slideDown(200);
        }
    });

    // Expand the first section by default, collapse others
    $('.tfs-footer-admin .footer-section').each(function(index) {
        if (index === 0) {
            $(this).removeClass('closed');
            $(this).find('.footer-section-content').show();
        } else {
            $(this).addClass('closed');
            $(this).find('.footer-section-content').hide();
        }
    });

    // Update the copyright text preview with the current year
    $('#footer-copyright').on('keyup', function() {
        var copyrightText = $(this).val();
        copyrightText = copyrightText.replace('[year]', new Date().getFullYear());
        $('#copyright-preview').text(copyrightText);
    });
});