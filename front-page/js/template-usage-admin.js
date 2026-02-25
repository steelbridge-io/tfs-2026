jQuery(document).ready(function($) {
    // Handle find template usage button click
    $('#find-template-usage').on('click', function() {
        var template = $('#template-select').val();

        if (!template) {
            alert('Please select a template first.');
            return;
        }

        var $button = $(this);
        var $spinner = $('#template-usage-spinner');
        var $results = $('#template-usage-results');

        // Show spinner, disable button
        $spinner.addClass('is-active');
        $button.prop('disabled', true);

        // Make AJAX request
        $.ajax({
            url: tfs_template_usage.ajax_url,
            type: 'POST',
            data: {
                action: 'tfs_find_template_usage',
                nonce: tfs_template_usage.nonce,
                template: template
            },
            success: function(response) {
                if (response.success) {
                    displayResults(response.data);
                } else {
                    alert('Error: ' + response.data.message);
                }
            },
            error: function() {
                alert('An error occurred while searching for template usage.');
            },
            complete: function() {
                $spinner.removeClass('is-active');
                $button.prop('disabled', false);
            }
        });
    });

    // Display results in the results section
    function displayResults(data) {
        var $results = $('#template-usage-results');
        var $title = $('#results-title');
        var $content = $('#results-content');

        // Set title
        $title.text('Results for: ' + data.template + ' (' + data.count + ' found)');

        // Clear previous content
        $content.empty();

        if (data.count === 0) {
            $content.html('<p style="color: #666;">No pages or posts are currently using this template.</p>');
        } else {
            // Create table
            var $table = $('<table class="wp-list-table widefat fixed striped"></table>');

            // Add table header
            var $thead = $('<thead><tr>' +
                '<th style="width: 40%;">Title</th>' +
                '<th style="width: 15%;">Post Type</th>' +
                '<th style="width: 15%;">Status</th>' +
                '<th style="width: 30%;">Actions</th>' +
                '</tr></thead>');
            $table.append($thead);

            // Add table body
            var $tbody = $('<tbody></tbody>');

            $.each(data.posts, function(index, post) {
                var statusClass = 'status-' + post.status;
                var statusLabel = post.status.charAt(0).toUpperCase() + post.status.slice(1);

                var $row = $('<tr>' +
                    '<td><strong>' + escapeHtml(post.title) + '</strong></td>' +
                    '<td>' + escapeHtml(post.post_type) + '</td>' +
                    '<td><span class="' + statusClass + '">' + statusLabel + '</span></td>' +
                    '<td>' +
                        '<a href="' + post.url + '" class="button button-small" target="_blank">View</a> ' +
                        '<a href="' + post.edit_url + '" class="button button-small button-primary">Edit</a>' +
                    '</td>' +
                    '</tr>');

                $tbody.append($row);
            });

            $table.append($tbody);
            $content.append($table);
        }

        // Show results section
        $results.slideDown();
    }

    // Helper function to escape HTML
    function escapeHtml(text) {
        var map = {
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#039;'
        };
        return text.replace(/[&<>"']/g, function(m) { return map[m]; });
    }
});
