<?php
/**
 * Enhanced breadcrumbs function for WordPress multisite
 * Handles page hierarchies, custom post types, and taxonomies properly
 */
function the_fly_shop_breadcrumbs() {
 // Start with Home link
 echo '<nav class="breadcrumb"><a href="' . home_url() . '">Home</a>';

 // Pages and hierarchical custom post types
 if ((is_page() || is_singular() && get_post_type_object(get_post_type())->hierarchical) && !is_front_page()) {
	$parent_id = wp_get_post_parent_id(get_the_ID());
	$breadcrumbs = [];

	// Loop through all parent pages
	while ($parent_id) {
	 $parent = get_post($parent_id);
	 $breadcrumbs[] = '<a href="' . get_permalink($parent->ID) . '">' . get_the_title($parent->ID) . '</a>';
	 $parent_id = wp_get_post_parent_id($parent->ID);
	}

	// Reverse and display the breadcrumbs
	$breadcrumbs = array_reverse($breadcrumbs);
	foreach ($breadcrumbs as $crumb) {
	 echo '<span class="breadcrumb-separator">/</span>' . $crumb;
	}

	// Current page/post
	echo '<span class="breadcrumb-separator">/</span>' . get_the_title();
 }
 // Categories
 elseif (is_category()) {
	$category = get_category(get_query_var('cat'));

	// Add the blog page if it exists
	$blog_page_id = get_option('page_for_posts');
	if ($blog_page_id) {
	 echo '<span class="breadcrumb-separator">/</span><a href="' . get_permalink($blog_page_id) . '">' . get_the_title($blog_page_id) . '</a>';
	}

	if ($category->parent != 0) {
	 // Get all parent categories
	 $parents = [];
	 $parent_id = $category->parent;

	 while ($parent_id) {
		$parent = get_category($parent_id);
		$parents[] = '<a href="' . get_category_link($parent->term_id) . '">' . $parent->name . '</a>';
		$parent_id = $parent->parent;
	 }

	 // Reverse and display parent categories
	 $parents = array_reverse($parents);
	 foreach ($parents as $parent) {
		echo '<span class="breadcrumb-separator">/</span>' . $parent;
	 }
	}

	// Current category
	echo '<span class="breadcrumb-separator">/</span>' . single_cat_title('', false);
 }
 // Taxonomies
 elseif (is_tax()) {
	$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
	$taxonomy = get_taxonomy(get_query_var('taxonomy'));
	$post_type = $taxonomy->object_type[0];
	$post_type_obj = get_post_type_object($post_type);

	// Add post type archive link if available
	if ($post_type_obj && $post_type_obj->has_archive) {
	 echo '<span class="breadcrumb-separator">/</span><a href="' . get_post_type_archive_link($post_type) . '">' . $post_type_obj->labels->name . '</a>';
	}

	if ($term && $term->parent != 0) {
	 // Get all parent terms
	 $parents = [];
	 $parent_id = $term->parent;

	 while ($parent_id) {
		$parent = get_term($parent_id, get_query_var('taxonomy'));
		$parents[] = '<a href="' . get_term_link($parent) . '">' . $parent->name . '</a>';
		$parent_id = $parent->parent;
	 }

	 // Reverse and display parent terms
	 $parents = array_reverse($parents);
	 foreach ($parents as $parent) {
		echo '<span class="breadcrumb-separator">/</span>' . $parent;
	 }
	}

	// Current term
	echo '<span class="breadcrumb-separator">/</span>' . single_term_title('', false);
 }
 // Single posts (including custom post types)
 elseif (is_singular() && !is_page()) {
	$post_type = get_post_type();
	$post_type_obj = get_post_type_object($post_type);

	if ($post_type != 'post') {
	 // Custom post types (non-hierarchical)
	 // Add the post type archive link if available
	 if ($post_type_obj->has_archive) {
		echo '<span class="breadcrumb-separator">/</span><a href="' . get_post_type_archive_link($post_type) . '">' . $post_type_obj->labels->name . '</a>';
	 }

	 // Get all taxonomies for this post type
	 $taxonomies = get_object_taxonomies($post_type, 'objects');
	 $primary_taxonomy = null;

	 // Find the primary taxonomy (prioritize hierarchical ones)
	 foreach ($taxonomies as $taxonomy) {
		if ($taxonomy->hierarchical) {
		 $primary_taxonomy = $taxonomy;
		 break;
		}
	 }

	 // If we found a taxonomy, add its terms to the breadcrumb
	 if ($primary_taxonomy) {
		$terms = get_the_terms(get_the_ID(), $primary_taxonomy->name);

		if ($terms && !is_wp_error($terms)) {
		 // Find the deepest term in the hierarchy
		 $term_depths = [];
		 foreach ($terms as $term) {
			$ancestors = get_ancestors($term->term_id, $primary_taxonomy->name);
			$term_depths[$term->term_id] = count($ancestors);
		 }

		 arsort($term_depths);
		 $deepest_term_id = key($term_depths);
		 $deepest_term = get_term($deepest_term_id, $primary_taxonomy->name);

		 // Get all ancestors
		 $ancestors = get_ancestors($deepest_term->term_id, $primary_taxonomy->name);
		 $ancestors = array_reverse($ancestors);

		 // Display ancestors
		 foreach ($ancestors as $ancestor_id) {
			$ancestor = get_term($ancestor_id, $primary_taxonomy->name);
			echo '<span class="breadcrumb-separator">/</span><a href="' . get_term_link($ancestor) . '">' . $ancestor->name . '</a>';
		 }

		 // Display the current term
		 echo '<span class="breadcrumb-separator">/</span><a href="' . get_term_link($deepest_term) . '">' . $deepest_term->name . '</a>';
		}
	 }
	} else {
	 // Regular blog posts
	 $blog_page_id = get_option('page_for_posts');
	 if ($blog_page_id) {
		echo '<span class="breadcrumb-separator">/</span><a href="' . get_permalink($blog_page_id) . '">' . get_the_title($blog_page_id) . '</a>';
	 }

	 // Get post categories
	 $categories = get_the_category();

	 if (!empty($categories)) {
		// Find the deepest category
		$category_depths = [];
		foreach ($categories as $category) {
		 $ancestors = get_ancestors($category->term_id, 'category');
		 $category_depths[$category->term_id] = count($ancestors);
		}

		arsort($category_depths);
		$deepest_category_id = key($category_depths);
		$deepest_category = get_category($deepest_category_id);

		// Get all ancestors
		$ancestors = get_ancestors($deepest_category->term_id, 'category');
		$ancestors = array_reverse($ancestors);

		// Display ancestors
		foreach ($ancestors as $ancestor_id) {
		 $ancestor = get_category($ancestor_id);
		 echo '<span class="breadcrumb-separator">/</span><a href="' . get_category_link($ancestor) . '">' . $ancestor->name . '</a>';
		}

		// Display the current category
		echo '<span class="breadcrumb-separator">/</span><a href="' . get_category_link($deepest_category) . '">' . $deepest_category->name . '</a>';
	 }
	}

	// Current post title
	echo '<span class="breadcrumb-separator">/</span>' . get_the_title();
 }
 // Archives
 elseif (is_archive()) {
	if (is_post_type_archive()) {
	 // Custom post type archives
	 echo '<span class="breadcrumb-separator">/</span>' . post_type_archive_title('', false);
	} elseif (is_day()) {
	 $blog_page_id = get_option('page_for_posts');
	 if ($blog_page_id) {
		echo '<span class="breadcrumb-separator">/</span><a href="' . get_permalink($blog_page_id) . '">' . get_the_title($blog_page_id) . '</a>';
	 }
	 echo '<span class="breadcrumb-separator">/</span><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>';
	 echo '<span class="breadcrumb-separator">/</span><a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a>';
	 echo '<span class="breadcrumb-separator">/</span>' . get_the_time('d');
	} elseif (is_month()) {
	 $blog_page_id = get_option('page_for_posts');
	 if ($blog_page_id) {
		echo '<span class="breadcrumb-separator">/</span><a href="' . get_permalink($blog_page_id) . '">' . get_the_title($blog_page_id) . '</a>';
	 }
	 echo '<span class="breadcrumb-separator">/</span><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>';
	 echo '<span class="breadcrumb-separator">/</span>' . get_the_time('F');
	} elseif (is_year()) {
	 $blog_page_id = get_option('page_for_posts');
	 if ($blog_page_id) {
		echo '<span class="breadcrumb-separator">/</span><a href="' . get_permalink($blog_page_id) . '">' . get_the_title($blog_page_id) . '</a>';
	 }
	 echo '<span class="breadcrumb-separator">/</span>' . get_the_time('Y');
	} elseif (is_author()) {
	 echo '<span class="breadcrumb-separator">/</span>Author: ' . get_the_author();
	}
 }
 // Search results
 elseif (is_search()) {
	echo '<span class="breadcrumb-separator">/</span>Search Results for "' . get_search_query() . '"';
 }

 echo '</nav>';
}