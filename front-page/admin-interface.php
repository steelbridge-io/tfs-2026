<?php
/**
 * Admin Interface Styles for Carousel Editor
 */

// Add admin styles for the carousel settings
function tfs_features_admin_styles() {
 $screen = get_current_screen();

 if ($screen && strpos($screen->id, 'tfs-carousel-settings') !== false) {
	?>
  <style>
      .carousel-item-admin {
          background: #fff;
          border: 1px solid #ccd0d4;
          box-shadow: 0 1px 1px rgba(0,0,0,.04);
          margin-bottom: 15px;
      }

      .carousel-item-header {
          background: #f5f5f5;
          border-bottom: 1px solid #ccd0d4;
          padding: 10px;
          display: flex;
          justify-content: flex-end;
      }

      .carousel-item-header button {
          margin-left: 5px;
      }

      .carousel-item-content {
          padding: 15px;
      }

      .carousel-image-preview {
          margin-bottom: 10px;
          background: #f1f1f1;
          padding: 10px;
          text-align: center;
          min-height: 100px;
          display: flex;
          align-items: center;
          justify-content: center;
      }
  </style>
	<?php
 }
}
add_action('admin_head', 'tfs_features_admin_styles');


// Add to your existing admin_enqueue_scripts function:

function tfs_enqueue_admin_scripts($hook) {
	wp_enqueue_media();
	wp_enqueue_script('jquery-ui-sortable');

	wp_enqueue_style('tfs-card-grid-admin-css', get_template_directory_uri() . '/front-page/css/card-grid-admin.css', array(), '1.0.0');
	wp_enqueue_script('tfs-card-grid-admin-js', get_template_directory_uri() . '/front-page/js/card-grid-admin.js', array('jquery', 'jquery-ui-sortable'), '1.0.0', true);

	wp_localize_script('tfs-card-grid-admin-js', 'tfs_card_grid', array(
	 'ajax_url' => admin_url('admin-ajax.php'),
	 'nonce'    => wp_create_nonce('tfs_card_grid_nonce'),
	));

  wp_enqueue_style('tfs-carousel-admin-css', get_template_directory_uri() . '/front-page/css/carousel-admin.css', array(), '1.0.0');
}
add_action('admin_enqueue_scripts', 'tfs_enqueue_admin_scripts');