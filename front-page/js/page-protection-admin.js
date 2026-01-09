jQuery(document).ready(function($) {
    let itemIndex = $('.protected-page-item').length;

    // Add new protected page item
    $(document).on('click', '.add-protected-page', function(e) {
        e.preventDefault();

        const template = `
            <div class="protected-page-item" data-index="${itemIndex}">
                <div class="protected-page-header">
                    <h3>Protected Item #${itemIndex + 1}</h3>
                    <button type="button" class="button button-link-delete remove-protected-page">Remove</button>
                </div>
                
                <div class="protected-page-fields">
                    <p>
                        <label><strong>Page/Post ID:</strong></label><br>
                        <input type="number" 
                               name="tfs_protected_pages[${itemIndex}][page_id]" 
                               value="" 
                               class="regular-text page-id-input" 
                               placeholder="Enter Page ID (e.g., 123)"
                               min="1"
                               required>
                        <button type="button" class="button verify-page-id">Verify ID</button>
                    </p>
                    
                    <p>
                        <label><strong>Note (Optional):</strong></label><br>
                        <input type="text" 
                               name="tfs_protected_pages[${itemIndex}][note]" 
                               value="" 
                               class="regular-text" 
                               placeholder="e.g., Main travel page - DO NOT DELETE">
                    </p>
                </div>
            </div>
        `;

        $('#protected-pages-container').append(template);
        itemIndex++;
        updateItemNumbers();
    });

    // Remove protected page item
    $(document).on('click', '.remove-protected-page', function(e) {
        e.preventDefault();

        if (confirm('Are you sure you want to remove this protected page from the list?')) {
            $(this).closest('.protected-page-item').fadeOut(300, function() {
                $(this).remove();
                updateItemNumbers();
            });
        }
    });

    // Verify page ID
    $(document).on('click', '.verify-page-id', function(e) {
        e.preventDefault();

        const $button = $(this);
        const $input = $button.siblings('.page-id-input');
        const pageId = $input.val();
        const $item = $button.closest('.protected-page-item');

        if (!pageId || pageId <= 0) {
            alert('Please enter a valid Page ID');
            return;
        }

        $button.prop('disabled', true).text('Verifying...');

        // Remove any existing info
        $item.find('.protected-page-info').remove();

        $.ajax({
            url: tfsPageProtection.ajax_url,
            type: 'POST',
            data: {
                action: 'tfs_verify_page_id',
                nonce: tfsPageProtection.nonce,
                page_id: pageId
            },
            success: function(response) {
                if (response.success) {
                    const info = `
                        <div class="protected-page-info">
                            <p><strong>Title:</strong> ${response.data.title}</p>
                            <p><strong>Type:</strong> ${response.data.type}</p>
                            <p><strong>URL:</strong> <a href="${response.data.url}" target="_blank">${response.data.url}</a></p>
                        </div>
                    `;
                    $button.closest('p').after(info);
                } else {
                    alert('Error: ' + response.data.message);
                }
            },
            error: function() {
                alert('An error occurred while verifying the page ID');
            },
            complete: function() {
                $button.prop('disabled', false).text('Verify ID');
            }
        });
    });

    // Update item numbers after removal
    function updateItemNumbers() {
        $('.protected-page-item').each(function(index) {
            $(this).attr('data-index', index);
            $(this).find('h3').text('Protected Item #' + (index + 1));

            // Update field names
            $(this).find('[name^="tfs_protected_pages"]').each(function() {
                const name = $(this).attr('name');
                const newName = name.replace(/\[\d+\]/, '[' + index + ']');
                $(this).attr('name', newName);
            });
        });

        itemIndex = $('.protected-page-item').length;
    }
});