<?php
/**
* Bootstrap 5 Pagination
*/
function the_fly_shop_bootstrap_pagination() {
global $wp_query;

$big = 999999999; // Need an unlikely integer

$paginate_links = paginate_links(array(
'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
'format' => '?paged=%#%',
'current' => max(1, get_query_var('paged')),
'total' => $wp_query->max_num_pages,
'mid_size' => 3,
'end_size' => 1,
'prev_text' => '<i class="lni lni-chevron-left" style="vertical-align: middle;"></i>',
'next_text' => '<i class="lni lni-chevron-right" style="vertical-align: middle;"></i>',
'type' => 'array'
));

if ($paginate_links) {
echo '<nav class="mt-4 pagination-fluid" aria-label="Archive pagination">';
 echo '<ul class="pagination archive-pagination justify-content-center">';

	foreach ($paginate_links as $link) {
	// Handle current page
	if (strpos($link, 'current') !== false) {
	echo '<li class="page-item active">';
	 echo str_replace('page-numbers current', 'page-link', $link);
	 echo '</li>';
	}
	// Handle dots/ellipsis
	elseif (strpos($link, 'dots') !== false) {
	echo '<li class="page-item disabled">';
	 echo '<span class="page-link">…</span>';
	 echo '</li>';
	}
	// Handle all other links (prev, next, numbers)
	else {
	echo '<li class="page-item">';
	 echo str_replace('page-numbers', 'page-link', $link);
	 echo '</li>';
	}
	}

	echo '</ul>';
 echo '</nav>';
}
}