<?php
/**
 * Menu Position Handler for The Fly Shop 2025 theme
 * Uses menu item CSS classes to store position preference
 */
class TFS_Menu_Position_Handler {

 // Class to identify right-side menu items
 const RIGHT_SIDE_CLASS = 'menu-position-right';

 /**
	* Initialize the class and hook into WordPress
	*/
 public function __construct() {
	// Add our custom field to menu items in admin
	add_action('wp_nav_menu_item_custom_fields', array($this, 'add_position_field'), 10, 4);

	// Save our custom field value as a class
	add_action('wp_update_nav_menu_item', array($this, 'save_position_field'), 10, 2);

	// Filter menu items for display
	add_filter('wp_nav_menu_objects', array($this, 'split_menu_items'), 10, 2);

	// Add a direct debug output to help troubleshoot
	if (is_admin() && isset($_GET['page']) && $_GET['page'] === 'menu-positions-debug') {
	 add_action('admin_menu', array($this, 'add_debug_page'));
	}
 }

 /**
	* Add position field to menu items in admin
	*/
 public function add_position_field($id, $item, $depth, $args) {
	// Check if the menu item has our right-side class
	$is_right = in_array(self::RIGHT_SIDE_CLASS, $item->classes);
	?>
	<p class="field-menu-position description-wide" style="margin: 10px 0; padding: 5px; background: #f9f9f9; border: 1px solid #e5e5e5;">
	 <label>
		<span class="description" style="font-weight: bold; display: block; margin-bottom: 5px;"><?php _e('Menu Position', 'the-fly-shop-2025'); ?></span>
		<select name="menu-position[<?php echo $item->ID; ?>]" style="width: 100%;">
		 <option value="left" <?php selected(!$is_right); ?>><?php _e('Left Side', 'the-fly-shop-2025'); ?></option>
		 <option value="right" <?php selected($is_right); ?>><?php _e('Right Side', 'the-fly-shop-2025'); ?></option>
		</select>
	 </label>
	</p>
	<?php
 }

 /**
	* Save position field as a class on the menu item
	*/
 public function save_position_field($menu_id, $menu_item_id) {
	// Check if our field was submitted
	if (!isset($_POST['menu-position'][$menu_item_id])) {
	 return;
	}

	// Get the position value
	$position = sanitize_text_field($_POST['menu-position'][$menu_item_id]);

	// Get current classes
	$classes = get_post_meta($menu_item_id, '_menu_item_classes', true);
	if (!is_array($classes)) {
	 $classes = array();
	}

	// Remove our position class if it exists
	$classes = array_diff($classes, array(self::RIGHT_SIDE_CLASS));

	// Add our class if this is a right-side item
	if ($position === 'right') {
	 $classes[] = self::RIGHT_SIDE_CLASS;
	 error_log("Set menu item #{$menu_item_id} to RIGHT side");
	} else {
	 error_log("Set menu item #{$menu_item_id} to LEFT side");
	}

	// Update the menu item classes
	update_post_meta($menu_item_id, '_menu_item_classes', array_unique(array_filter($classes)));

	// Also log current classes for debugging
	$current_classes = get_post_meta($menu_item_id, '_menu_item_classes', true);
	error_log("Current classes for menu item #{$menu_item_id}: " . print_r($current_classes, true));
 }

 /**
	* Split menu items based on our custom class
	*/
 public function split_menu_items($sorted_menu_items, $args) {
	// Only process our specific menu
	if (!isset($args->center_logo) || $args->center_logo !== true) {
	 return $sorted_menu_items;
	}

	// If we're splitting the menu between left and right sides
	if (isset($args->menu_part)) {
	 $left_items = array();
	 $right_items = array();

	 // Separate items based on class
	 foreach ($sorted_menu_items as $item) {
		// Right side if it has our class
		if (in_array(self::RIGHT_SIDE_CLASS, $item->classes)) {
		 $right_items[] = $item;
		} else {
		 $left_items[] = $item;
		}
	 }

	 if ($args->menu_part === 'left') {
		return $left_items;
	 } else if ($args->menu_part === 'right') {
		return $right_items;
	 }
	}

	return $sorted_menu_items;
 }

 /**
	* Add a debug page to the admin menu
	*/
 public function add_debug_page() {
	add_menu_page(
	 'Menu Positions Debug',
	 'Menu Debug',
	 'manage_options',
	 'menu-positions-debug',
	 array($this, 'render_debug_page')
	);
 }

 /**
	* Render the debug page
	*/
 public function render_debug_page() {
	echo '<div class="wrap">';
	echo '<h1>Menu Positions Debug</h1>';

	$menus = wp_get_nav_menus();

	foreach ($menus as $menu) {
	 echo '<h2>' . esc_html($menu->name) . '</h2>';

	 $menu_items = wp_get_nav_menu_items($menu->term_id);

	 if (!$menu_items) {
		echo '<p>No items in this menu.</p>';
		continue;
	 }

	 echo '<table class="widefat fixed" style="margin-bottom: 20px;">';
	 echo '<thead><tr><th>ID</th><th>Title</th><th>Classes</th><th>Position</th></tr></thead>';
	 echo '<tbody>';

	 foreach ($menu_items as $item) {
		$classes = get_post_meta($item->ID, '_menu_item_classes', true);
		$position = in_array(self::RIGHT_SIDE_CLASS, $classes) ? 'RIGHT' : 'LEFT';

		echo '<tr>';
		echo '<td>' . esc_html($item->ID) . '</td>';
		echo '<td>' . esc_html($item->title) . '</td>';
		echo '<td>' . esc_html(is_array($classes) ? implode(', ', $classes) : 'None') . '</td>';
		echo '<td>' . esc_html($position) . '</td>';
		echo '</tr>';
	 }

	 echo '</tbody></table>';
	}

	echo '</div>';
 }
}

// Initialize the class
new TFS_Menu_Position_Handler();