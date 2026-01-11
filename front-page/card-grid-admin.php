<?php
/**
 * Card Grid Admin Interface
 */

// Add submenu for Card Grid
function tfs_add_card_grid_submenu() {
 add_submenu_page(
	'tfs-front-page-settings',  // Parent slug (your existing page)
	'Card Grid Settings',       // Page title
	'Card Grid',                // Menu title
	'manage_options',           // Capability
	'tfs-card-grid-settings',   // Menu slug
	'tfs_card_grid_settings_page' // Callback function
 );
}
add_action('admin_menu', 'tfs_add_card_grid_submenu');

// Register settings for Card Grid
function tfs_register_card_grid_settings() {
 register_setting('tfs_card_grid_options_group', 'tfs_card_grid_options', 'tfs_sanitize_card_grid');
}
add_action('admin_init', 'tfs_register_card_grid_settings');

// Sanitize card grid data
function tfs_sanitize_card_grid($input) {
 $sanitized_input = array();

 if (isset($input['cards']) && is_array($input['cards'])) {
	foreach ($input['cards'] as $index => $card) {
	 $sanitized_input['cards'][$index] = array(
		'title'       => sanitize_text_field($card['title']),
		'description' => wp_kses_post($card['description']),
		'image'       => esc_url_raw($card['image']),
		'image_alt'   => sanitize_text_field($card['image_alt']),
		'button_text' => sanitize_text_field($card['button_text']),
		'button_url'  => esc_url_raw($card['button_url']),
	 );
	}
 }

 return $sanitized_input;
}

// Card Grid admin page
function tfs_card_grid_settings_page() {
 $options = get_option('tfs_card_grid_options', array());
 $cards = isset($options['cards']) ? $options['cards'] : array();
 ?>
 <div class="wrap tfs-card-grid-admin">
	<h1>Card Grid Settings</h1>
	<p>Add, remove, and reorder cards for the home page grid. These cards will appear below the carousel.</p>

	<form method="post" action="options.php">
<?php settings_fields('tfs_card_grid_options_group'); ?>

	 <div class="card-items-container">
<?php
		if (!empty($cards)) {
		 foreach ($cards as $index => $card) {
			echo tfs_card_grid_template($index, $card);
		 }
		}
		?>
	 </div>

	 <div class="card-items-actions">
		<button type="button" class="button button-primary add-card-item">Add Card</button>
		<p class="description">Drag and drop to reorder cards.</p>
	 </div>

<?php submit_button('Save Card Grid'); ?>
	</form>
 </div>
<?php
}

// Card Grid template function
function tfs_card_grid_template($index, $card = array()) {
 $card = wp_parse_args($card, array(
	'title'       => '',
	'description' => '',
	'image'       => '',
	'image_alt'   => '',
	'button_text' => 'Read More',
	'button_url'  => '',
 ));

 $title = !empty($card['title']) ? esc_html($card['title']) : 'New Card';

 ob_start();
 ?>
 <div class="card-item-admin" data-index="<?php echo esc_attr($index); ?>">
	<div class="card-item-header">
	 <h3 class="card-item-title">
<?php echo $title; ?>
		<span class="toggle-indicator dashicons dashicons-arrow-down-alt2"></span>
	 </h3>
	 <button type="button" class="button button-link remove-card-item">&times;</button>
	</div>

	<div class="card-item-content">
	 <div class="card-item-preview">
		<div class="card-container-preview">
<?php if (!empty($card['image'])): ?>
			<div class="card-image-preview">
			 <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['image_alt']); ?>">
			</div>
<?php else: ?>
			<div class="card-image-placeholder">
			 <span class="dashicons dashicons-format-image"></span>
			 <p>Select an image</p>
			</div>
<?php endif; ?>

		 <h3 class="card-title-preview"><?php echo $title; ?></h3>
		 <div class="card-hover-content-preview">
			<p class="card-description-preview"><?php echo wp_kses_post($card['description']); ?></p>
			<span class="card-button-preview"><?php echo esc_html($card['button_text']); ?></span>
		 </div>
		</div>
	 </div>

	 <div class="card-item-fields">
		<div class="card-field">
		 <label for="cards[<?php echo esc_attr($index); ?>][title]">Title</label>
		 <input type="text" id="cards[<?php echo esc_attr($index); ?>][title]"
						name="tfs_card_grid_options[cards][<?php echo esc_attr($index); ?>][title]"
						value="<?php echo esc_attr($card['title']); ?>"
						class="regular-text card-title-input">
		</div>

		<div class="card-field">
		 <label for="cards[<?php echo esc_attr($index); ?>][description]">Description</label>
		 <textarea id="cards[<?php echo esc_attr($index); ?>][description]"
							 name="tfs_card_grid_options[cards][<?php echo esc_attr($index); ?>][description]"
							 rows="3" class="large-text"><?php echo esc_textarea($card['description']); ?></textarea>
		</div>

		<div class="card-field">
		 <label>Card Image</label>
		 <div class="card-image-container">
			<input type="hidden" name="tfs_card_grid_options[cards][<?php echo esc_attr($index); ?>][image]"
						 value="<?php echo esc_attr($card['image']); ?>" class="card-image-url">
			<input type="hidden" name="tfs_card_grid_options[cards][<?php echo esc_attr($index); ?>][image_alt]"
						 value="<?php echo esc_attr($card['image_alt']); ?>" class="card-image-alt">
			<button type="button" class="button upload-card-image">Select Image</button>
			<button type="button" class="button remove-card-image" <?php echo empty($card['image']) ? 'style="display:none;"' : ''; ?>>Remove Image</button>
		 </div>
		</div>

		<div class="card-field">
		 <label for="cards[<?php echo esc_attr($index); ?>][button_text]">Button Text</label>
		 <input type="text" id="cards[<?php echo esc_attr($index); ?>][button_text]"
						name="tfs_card_grid_options[cards][<?php echo esc_attr($index); ?>][button_text]"
						value="<?php echo esc_attr($card['button_text']); ?>" class="regular-text">
		</div>

		<div class="card-field">
		 <label for="cards[<?php echo esc_attr($index); ?>][button_url]">Button URL</label>
		 <input type="url" id="cards[<?php echo esc_attr($index); ?>][button_url]"
						name="tfs_card_grid_options[cards][<?php echo esc_attr($index); ?>][button_url]"
						value="<?php echo esc_url($card['button_url']); ?>" class="regular-text">
		</div>
	 </div>
	</div>
 </div>
<?php
 return ob_get_clean();
}