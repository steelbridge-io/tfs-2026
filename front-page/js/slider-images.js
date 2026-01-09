jQuery(document).ready(function($) {
    var $container = $('#carousel-items');

    // Toggle slide content visibility
    $(document).on('click', '.toggle-carousel-item', function() {
        $(this).closest('.carousel-item-admin').find('.carousel-item-content').slideToggle();
    });

    // Remove a slide
    $(document).on('click', '.remove-carousel-item', function() {
        if (confirm('Are you sure you want to remove this slide?')) {
            $(this).closest('.carousel-item-admin').remove();
            updateIndexes();
        }
    });

    // Add a new slide
    $('.add-carousel-item').on('click', function() {
        var newIndex = $('.carousel-item-admin').length;

        // AJAX call to get the new item template
        $.post(ajaxurl, {
            action: 'tfs_get_carousel_item_template',
            index: newIndex,
            _wpnonce: tfsCarouselSettings.nonce
        }, function(response) {
            $container.append(response);
        });
    });

    // Select image using the media uploader
    $(document).on('click', '.select-carousel-image', function() {
        var $button = $(this);
        var $imageUrl = $button.closest('p').find('.carousel-image-url');
        var $imagePreview = $button.closest('.carousel-item-content').find('.carousel-image-preview');

        // Create a media frame
        var frame = wp.media({
            title: 'Select or Upload Carousel Image',
            button: {
                text: 'Use this image'
            },
            multiple: false
        });

        // When an image is selected in the media frame...
        frame.on('select', function() {
            // Get media attachment details
            var attachment = frame.state().get('selection').first().toJSON();
            $imageUrl.val(attachment.url);

            // Update the preview
            if (attachment.type === 'image') {
                $imagePreview.html('<img src="' + attachment.url + '" alt="Carousel Image" style="max-width: 100%; max-height: 200px;">');
            }
        });

        // Open the modal
        frame.open();
    });

    // Update the indexes when items are added/removed
    function updateIndexes() {
        $('.carousel-item-admin').each(function(idx) {
            var $item = $(this);
            $item.attr('data-index', idx);
            $item.find('h3').text('Slide ' + (idx + 1));

            // Update input names
            $item.find('input').each(function() {
                var name = $(this).attr('name');
                if (name) {
                    name = name.replace(/\[\d+\]/, '[' + idx + ']');
                    $(this).attr('name', name);
                }
            });
        });
    }
});