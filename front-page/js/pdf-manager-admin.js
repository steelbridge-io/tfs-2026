jQuery(document).ready(function($) {
    // Handle PDF Upload
    $('#pdf-upload-form').on('submit', function(e) {
        e.preventDefault();
        
        var formData = new FormData(this);
        formData.append('action', 'tfs_pdf_manager_upload');
        formData.append('nonce', tfs_pdf_manager.nonce);
        
        var $btn = $('#upload-pdf-btn');
        var $spinner = $('#pdf-upload-spinner');
        var $message = $('#pdf-upload-message');
        
        $btn.prop('disabled', true);
        $spinner.addClass('is-active');
        $message.html('');
        
        $.ajax({
            url: tfs_pdf_manager.ajax_url,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                $spinner.removeClass('is-active');
                $btn.prop('disabled', false);
                
                if (response.success) {
                    $message.html('<div class="updated notice is-dismissible"><p>' + response.data + '</p></div>');
                    // Reload page to show new file (simplest way to update list)
                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                } else {
                    $message.html('<div class="error notice is-dismissible"><p>' + response.data + '</p></div>');
                }
            },
            error: function() {
                $spinner.removeClass('is-active');
                $btn.prop('disabled', false);
                $message.html('<div class="error notice is-dismissible"><p>An error occurred during upload.</p></div>');
            }
        });
    });
    
    // Handle PDF Delete
    $('.delete-pdf-btn').on('click', function() {
        var filename = $(this).data('filename');
        if (!confirm('Are you sure you want to delete "' + filename + '"? This action cannot be undone.')) {
            return;
        }
        
        var $row = $(this).closest('tr');
        var $btn = $(this);
        
        $btn.prop('disabled', true);
        
        $.ajax({
            url: tfs_pdf_manager.ajax_url,
            type: 'POST',
            data: {
                action: 'tfs_pdf_manager_delete',
                nonce: tfs_pdf_manager.nonce,
                filename: filename
            },
            success: function(response) {
                if (response.success) {
                    $row.fadeOut(function() {
                        $(this).remove();
                    });
                } else {
                    alert('Error: ' + response.data);
                    $btn.prop('disabled', false);
                }
            },
            error: function() {
                alert('An error occurred during deletion.');
                $btn.prop('disabled', false);
            }
        });
    });
});
