<?php
// AJAX handler for getting a new carousel item template
function tfs_ajax_get_carousel_item_template() {
 check_ajax_referer('tfs_carousel_nonce', '_wpnonce');

 if (!current_user_can('manage_options')) {
	wp_die('Permission denied');
 }

 $index = isset($_POST['index']) ? intval($_POST['index']) : 0;
 echo tfs_carousel_item_template($index);
 wp_die();
}
add_action('wp_ajax_tfs_get_carousel_item_template', 'tfs_ajax_get_carousel_item_template');

// Card Grid AJAX Handler
function tfs_add_card_grid_item() {
 // Check nonce with correct nonce name
 if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'tfs_card_grid_nonce')) {
	wp_send_json_error('Invalid security token sent.', 403);
	wp_die();
 }

 if (!current_user_can('manage_options')) {
	wp_send_json_error('You do not have permission to do this.', 403);
	wp_die();
 }

 $index = isset($_POST['index']) ? intval($_POST['index']) : 0;

 // Make sure the template function exists
 if (function_exists('tfs_card_grid_template')) {
	echo tfs_card_grid_template($index);
 } else {
	wp_send_json_error('Card grid template function not found.', 500);
 }

 wp_die();
}
add_action('wp_ajax_tfs_add_card_grid_item', 'tfs_add_card_grid_item');

// Add carousel item AJAX handler
function tfs_add_carousel_item() {
 // Check nonce
 if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'tfs_carousel_nonce')) {
	wp_send_json_error('Invalid security token sent.', 403);
	wp_die();
 }

 if (!current_user_can('manage_options')) {
	wp_send_json_error('You do not have permission to do this.', 403);
	wp_die();
 }

 $index = isset($_POST['index']) ? intval($_POST['index']) : 0;

 // Make sure the template function exists
 if (function_exists('tfs_carousel_item_template')) {
	echo tfs_carousel_item_template($index);
 } else {
	wp_send_json_error('Carousel template function not found.', 500);
 }

 wp_die();
}
add_action('wp_ajax_tfs_add_carousel_item', 'tfs_add_carousel_item');