<?php
/**
 * Template Usage Finder - AJAX Handler
 */

// AJAX handler for finding template usage
function tfs_find_template_usage() {
	// Check nonce
	check_ajax_referer('tfs_template_usage_nonce', 'nonce');

	// Check user capabilities
	if (!current_user_can('manage_options')) {
		wp_send_json_error(array('message' => 'Insufficient permissions.'));
		return;
	}

	// Get template name from request
	$template_name = isset($_POST['template']) ? sanitize_text_field($_POST['template']) : '';

	if (empty($template_name)) {
		wp_send_json_error(array('message' => 'No template specified.'));
		return;
	}

	// Full template path for matching
	$template_path = 'page-templates/' . $template_name;

	// Query all post types
	$post_types = get_post_types(array('public' => true), 'names');

	// Arguments for WP_Query
	$args = array(
		'post_type'      => $post_types,
		'post_status'    => array('publish', 'draft', 'pending', 'private'),
		'posts_per_page' => -1,
		'meta_query'     => array(
			array(
				'key'     => '_wp_page_template',
				'value'   => $template_path,
				'compare' => '='
			)
		)
	);

	$query = new WP_Query($args);
	$results = array();

	if ($query->have_posts()) {
		while ($query->have_posts()) {
			$query->the_post();
			$post_id = get_the_ID();
			$post_type_obj = get_post_type_object(get_post_type());

			$results[] = array(
				'id'         => $post_id,
				'title'      => get_the_title(),
				'post_type'  => $post_type_obj->labels->singular_name,
				'status'     => get_post_status(),
				'url'        => get_permalink(),
				'edit_url'   => get_edit_post_link($post_id),
			);
		}
		wp_reset_postdata();
	}

	// Send success response with results
	wp_send_json_success(array(
		'template'    => $template_name,
		'count'       => count($results),
		'posts'       => $results
	));
}
add_action('wp_ajax_tfs_find_template_usage', 'tfs_find_template_usage');
