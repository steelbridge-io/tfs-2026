jQuery(document).ready(function($) {
    // Use a more specific container selector
    var carouselItemsContainer = $('#carousel-items-container');
    var nextItemIndex = carouselItemsContainer.children('.carousel-item-admin').length;

    // Handle case where tfs_carousel is not defined
    var ajaxUrl = typeof tfs_carousel !== 'undefined' ? tfs_carousel.ajax_url : ajaxurl;
    var nonce = typeof tfs_carousel !== 'undefined' ? tfs_carousel.nonce : '';

    // Initialize sortable
    carouselItemsContainer.sortable({
        items: '.carousel-item-admin',
        handle: '.carousel-item-header',
        placeholder: 'sortable-placeholder',
        opacity: 0.7
    });

    // Add new carousel item
    $('.add-carousel-item').on('click', function() {
        $.ajax({
            url: ajaxUrl,
            type: 'POST',
            data: {
                action: 'tfs_add_carousel_item',
                nonce: nonce,
                index: nextItemIndex
            },
            success: function(response) {
                carouselItemsContainer.append(response);
                nextItemIndex++;
                initializeNewItem(carouselItemsContainer.children('.carousel-item-admin').last());
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error);
                console.log('Response Text:', xhr.responseText);
                alert('Error adding new carousel item. Check console for details.');
            }
        });
    });

    // Initialize existing items
    carouselItemsContainer.children('.carousel-item-admin').each(function() {
        initializeNewItem($(this));
    });

    // Initialize new item functionality
    function initializeNewItem($item) {
        // Make sure we're only targeting elements within this specific carousel item
        var $content = $item.find('.carousel-item-content');
        var $toggleButton = $item.find('.toggle-carousel-item');
        var $removeButton = $item.find('.remove-carousel-item');
        var $selectImageButton = $item.find('.select-carousel-image');

        // Toggle item content
        $toggleButton.off('click').on('click', function(e) {
            $item.toggleClass('is-open');

            if ($item.hasClass('is-open')) {
                $content.slideDown(200);
            } else {
                $content.slideUp(200);
            }
        });

        // Remove item
        $removeButton.off('click').on('click', function() {
            if (confirm('Are you sure you want to remove this slide?')) {
                $item.remove();
            }
        });

        // Media uploader for carousel image
        $selectImageButton.off('click').on('click', function(e) {
            e.preventDefault();

            var $imageUrl = $item.find('.carousel-image-url');
            var $imagePreview = $item.find('.carousel-image-preview');

            var frame = wp.media({
                title: 'Select or Upload Carousel Image',
                button: {
                    text: 'Use this image'
                },
                multiple: false
            });

            frame.on('select', function() {
                var attachment = frame.state().get('selection').first().toJSON();

                // Update the hidden input
                $imageUrl.val(attachment.url);

                // Update preview
                if ($imagePreview.length) {
                    if ($imagePreview.find('img').length) {
                        $imagePreview.find('img').attr('src', attachment.url);
                    } else {
                        $imagePreview.html('<img src="' + attachment.url + '" alt="Carousel Image" style="max-width: 100%; max-height: 200px;">');
                    }
                }
            });

            frame.open();
        });

        // Initialize: Open first item, collapse others
        if ($item.is(':first-child')) {
            $item.addClass('is-open');
            $content.show();
        } else {
            $item.removeClass('is-open');
            $content.hide();
        }
    }
});