jQuery(document).ready(function($) {
    // Get the card grid container
    var cardItemsContainer = $('.card-items-container');
    var nextItemIndex = $('.card-item-admin').length;

    // Initialize sortable for card items
    cardItemsContainer.sortable({
        items: '.card-item-admin',
        handle: '.card-item-header',
        placeholder: 'sortable-placeholder',
        opacity: 0.7
    });

    // Add new card item
    // Remove existing handler and attach a new one using event delegation
    $(document).off('click', '.add-card-item').on('click', '.add-card-item', function() {
        // Make sure tfs_card_grid is defined
        if (typeof tfs_card_grid === 'undefined') {
            console.error('tfs_card_grid is not defined. Please check PHP localization.');
            return;
        }

        $.ajax({
            url: tfs_card_grid.ajax_url,
            type: 'POST',
            data: {
                action: 'tfs_add_card_grid_item',
                nonce: tfs_card_grid.nonce,
                index: nextItemIndex
            },
            success: function(response) {
                cardItemsContainer.append(response);
                nextItemIndex++;
                initializeNewItem(cardItemsContainer.children().last());
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error);
                console.log('Response Text:', xhr.responseText);
                alert('Error adding new card. Please check console for details.');
            }
        });
    });
   /* $('.add-card-item').on('click', function() {
        // Make sure tfs_card_grid is defined
        if (typeof tfs_card_grid === 'undefined') {
            console.error('tfs_card_grid is not defined. Please check PHP localization.');
            return;
        }

        $.ajax({
            url: tfs_card_grid.ajax_url,
            type: 'POST',
            data: {
                action: 'tfs_add_card_grid_item',
                nonce: tfs_card_grid.nonce,
                index: nextItemIndex
            },
            success: function(response) {
                cardItemsContainer.append(response);
                nextItemIndex++;
                initializeNewItem(cardItemsContainer.children().last());
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error);
                console.log('Response Text:', xhr.responseText);
                alert('Error adding new card. Please check console for details.');
            }
        });
    }); */

    // Initialize existing items
    cardItemsContainer.children('.card-item-admin').each(function() {
        initializeNewItem($(this));
    });

    // Initialize new card item
    function initializeNewItem($item) {
        // Toggle content
        $item.find('.card-item-title').off('click').on('click', function() {
            var $content = $item.find('.card-item-content');

            if ($content.is(':visible')) {
                $content.slideUp(200);
                $(this).find('.toggle-indicator').removeClass('dashicons-arrow-up-alt2').addClass('dashicons-arrow-down-alt2');
            } else {
                $content.slideDown(200);
                $(this).find('.toggle-indicator').removeClass('dashicons-arrow-down-alt2').addClass('dashicons-arrow-up-alt2');
            }
        });

        // Remove card
        $item.find('.remove-card-item').off('click').on('click', function() {
            if (confirm('Are you sure you want to remove this card?')) {
                $item.remove();
            }
        });

        // Media uploader for card image
        $item.find('.upload-card-image').off('click').on('click', function(e) {
            e.preventDefault();

            var $button = $(this);
            var $imageUrl = $item.find('.card-image-url');
            var $imageAlt = $item.find('.card-image-alt');
            var $removeButton = $item.find('.remove-card-image');
            var $container = $item.find('.card-container-preview');

            var frame = wp.media({
                title: 'Select or Upload Card Image',
                button: {
                    text: 'Use this image'
                },
                multiple: false
            });

            frame.on('select', function() {
                var attachment = frame.state().get('selection').first().toJSON();

                $imageUrl.val(attachment.url);
                $imageAlt.val(attachment.alt || '');
                $removeButton.show();

                if ($container.find('.card-image-placeholder').length) {
                    $container.find('.card-image-placeholder').remove();
                    $container.prepend('<div class="card-image-preview"><img src="' + attachment.url + '" alt="' + (attachment.alt || '') + '" style="max-width: 100%; max-height: 200px;"></div>');
                } else if ($container.find('.card-image-preview').length) {
                    $container.find('.card-image-preview img').attr({
                        'src': attachment.url,
                        'alt': (attachment.alt || '')
                    });
                } else {
                    $container.prepend('<div class="card-image-preview"><img src="' + attachment.url + '" alt="' + (attachment.alt || '') + '" style="max-width: 100%; max-height: 200px;"></div>');
                }
            });

            frame.open();
        });

        // Remove card image
        $item.find('.remove-card-image').off('click').on('click', function() {
            $item.find('.card-image-url').val('');
            $item.find('.card-image-alt').val('');
            $(this).hide();

            var $container = $item.find('.card-container-preview');
            $container.find('.card-image-preview').remove();
            $container.prepend('<div class="card-image-placeholder"><span class="dashicons dashicons-format-image"></span><p>Select an image</p></div>');
        });

        // By default, show the first item and hide others
        if ($item.is(':first-child')) {
            $item.find('.card-item-content').show();
            $item.find('.toggle-indicator').removeClass('dashicons-arrow-down-alt2').addClass('dashicons-arrow-up-alt2');
        } else {
            $item.find('.card-item-content').hide();
        }
    }
});