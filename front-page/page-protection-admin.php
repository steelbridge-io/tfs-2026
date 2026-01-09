
<?php
/**
 * Page Protection Admin Interface
 * Prevents selected pages/posts from being deleted
 */

// Register settings
function tfs_page_protection_init() {
 register_setting('tfs_page_protection_options_group', 'tfs_protected_pages', [
  'type' => 'array',
  'sanitize_callback' => 'tfs_sanitize_protected_pages',
  'default' => []
 ]);
}
add_action('admin_init', 'tfs_page_protection_init');

// Sanitize protected pages data
function tfs_sanitize_protected_pages($input) {
 $sanitized_items = [];

 if (is_array($input)) {
  foreach ($input as $item) {
   $page_id = absint($item['page_id'] ?? 0);

   if ($page_id > 0) {
    $sanitized_items[] = [
     'page_id' => $page_id,
     'note' => sanitize_text_field($item['note'] ?? '')
    ];
   }
  }
 }

 return $sanitized_items;
}

// Render the page protection settings page
function tfs_page_protection_settings_page() {
 $protected_pages = get_option('tfs_protected_pages', []);

 // Enqueue scripts
 wp_enqueue_script('tfs-page-protection-admin', get_template_directory_uri() . '/front-page/js/page-protection-admin.js', ['jquery'], '1.0.0', true);
 wp_localize_script('tfs-page-protection-admin', 'tfsPageProtection', [
  'ajax_url' => admin_url('admin-ajax.php'),
  'nonce' => wp_create_nonce('tfs_page_protection_nonce')
 ]);

 ?>
 <form method="post" action="options.php" id="page-protection-form">
  <?php settings_fields('tfs_page_protection_options_group'); ?>

  <div class="page-protection-description">
   <p><strong>Protect pages, posts, and custom post types from deletion.</strong></p>
   <p>Enter the Page ID (found in the page editor URL) and optionally add a note to remember why it's protected.</p>
  </div>

  <div id="protected-pages-container" class="protected-pages-container">
   <?php
   if (empty($protected_pages)) {
    echo tfs_protected_page_template(0);
   } else {
    foreach ($protected_pages as $index => $item) {
     echo tfs_protected_page_template($index, $item);
    }
   }
   ?>
  </div>

  <div class="page-protection-actions">
   <button type="button" class="button button-primary add-protected-page">Add Page</button>
   <p class="description">You can add multiple pages to protect them from deletion.</p>
  </div>

  <?php submit_button('Save Protected Pages'); ?>
 </form>

 <style>
     .protected-pages-container {
         margin: 20px 0;
     }
     .protected-page-item {
         background: #fff;
         border: 1px solid #ccd0d4;
         border-radius: 4px;
         padding: 15px;
         margin-bottom: 15px;
         position: relative;
     }
     .protected-page-item h3 {
         margin-top: 0;
         padding-right: 100px;
     }
     .protected-page-header {
         display: flex;
         justify-content: space-between;
         align-items: center;
         margin-bottom: 15px;
     }
     .protected-page-header h3 {
         margin: 0;
         padding: 0;
     }
     .protected-page-info {
         background: #f0f0f1;
         padding: 10px;
         margin: 10px 0;
         border-radius: 4px;
     }
     .protected-page-info p {
         margin: 5px 0;
     }
     .protected-page-info strong {
         display: inline-block;
         width: 100px;
     }
     .remove-protected-page {
         color: #b32d2e;
     }
     .page-protection-actions {
         margin: 20px 0;
     }
     .page-protection-description {
         background: #fff;
         border-left: 4px solid #72aee6;
         padding: 12px;
         margin: 20px 0;
     }
     .page-protection-description p {
         margin: 5px 0;
     }
 </style>
 <?php
}

// Template for each protected page item
function tfs_protected_page_template($index, $item = []) {
 $page_id = $item['page_id'] ?? '';
 $note = $item['note'] ?? '';

 // Get page info if ID exists
 $page_info = '';
 $page_title = '';
 $page_type = '';
 $page_url = '';

 if (!empty($page_id) && is_numeric($page_id)) {
  $post = get_post($page_id);
  if ($post) {
   $page_title = $post->post_title;
   $page_type = get_post_type_object($post->post_type)->labels->singular_name;
   $page_url = get_permalink($page_id);
  }
 }

 ob_start();
 ?>
 <div class="protected-page-item" data-index="<?php echo esc_attr($index); ?>">
  <div class="protected-page-header">
   <h3>Protected Item #<?php echo esc_html($index + 1); ?></h3>
   <button type="button" class="button button-link-delete remove-protected-page">Remove</button>
  </div>

  <div class="protected-page-fields">
   <p>
    <label><strong>Page/Post ID:</strong></label><br>
    <input type="number"
           name="tfs_protected_pages[<?php echo esc_attr($index); ?>][page_id]"
           value="<?php echo esc_attr($page_id); ?>"
           class="regular-text page-id-input"
           placeholder="Enter Page ID (e.g., 123)"
           min="1"
           required>
    <button type="button" class="button verify-page-id">Verify ID</button>
   </p>

   <?php if (!empty($page_title)) : ?>
    <div class="protected-page-info">
     <p><strong>Title:</strong> <?php echo esc_html($page_title); ?></p>
     <p><strong>Type:</strong> <?php echo esc_html($page_type); ?></p>
     <p><strong>URL:</strong> <a href="<?php echo esc_url($page_url); ?>" target="_blank"><?php echo esc_url($page_url); ?></a></p>
    </div>
   <?php endif; ?>

   <p>
    <label><strong>Note (Optional):</strong></label><br>
    <input type="text"
           name="tfs_protected_pages[<?php echo esc_attr($index); ?>][note]"
           value="<?php echo esc_attr($note); ?>"
           class="regular-text"
           placeholder="e.g., Main travel page - DO NOT DELETE">
   </p>
  </div>
 </div>
 <?php
 return ob_get_clean();
}

// AJAX handler to verify page ID
function tfs_verify_page_id_ajax() {
 check_ajax_referer('tfs_page_protection_nonce', 'nonce');

 $page_id = absint($_POST['page_id'] ?? 0);

 if ($page_id <= 0) {
  wp_send_json_error(['message' => 'Invalid Page ID']);
 }

 $post = get_post($page_id);

 if (!$post) {
  wp_send_json_error(['message' => 'Page not found']);
 }

 $page_type = get_post_type_object($post->post_type);

 wp_send_json_success([
  'title' => $post->post_title,
  'type' => $page_type->labels->singular_name,
  'url' => get_permalink($page_id),
  'status' => $post->post_status
 ]);
}
add_action('wp_ajax_tfs_verify_page_id', 'tfs_verify_page_id_ajax');

// Prevent deletion of protected pages
function tfs_prevent_page_deletion($post_id) {
 $protected_pages = get_option('tfs_protected_pages', []);

 foreach ($protected_pages as $item) {
  if (isset($item['page_id']) && $item['page_id'] == $post_id) {
   $post = get_post($post_id);
   $post_title = $post ? $post->post_title : 'this item';
   $note = !empty($item['note']) ? '<br><br><strong>Note:</strong> ' . esc_html($item['note']) : '';

   wp_die(
    '<h1>Cannot Delete Protected Page</h1>' .
    '<p><strong>"' . esc_html($post_title) . '"</strong> is protected from deletion.</p>' .
    $note .
    '<p>To delete this page, first remove it from the protected pages list in <strong>Theme Features > Page Protection</strong>.</p>',
    'Protected Page',
    ['back_link' => true]
   );
  }
 }
}
add_action('wp_trash_post', 'tfs_prevent_page_deletion');
add_action('before_delete_post', 'tfs_prevent_page_deletion');

// Remove delete/trash actions from protected pages in admin
function tfs_remove_protected_page_actions($actions, $post) {
 $protected_pages = get_option('tfs_protected_pages', []);

 foreach ($protected_pages as $item) {
  if (isset($item['page_id']) && $item['page_id'] == $post->ID) {
   unset($actions['trash']);
   unset($actions['delete']);

   // Add a visual indicator
   $actions['protected'] = '<span style="color: #2271b1; font-weight: bold;">🔒 Protected</span>';
   break;
  }
 }

 return $actions;
}
add_filter('page_row_actions', 'tfs_remove_protected_page_actions', 10, 2);
add_filter('post_row_actions', 'tfs_remove_protected_page_actions', 10, 2);
