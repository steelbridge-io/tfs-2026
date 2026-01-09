<?php
/**
 * Add functionality for home page features management in dashboard
 */

// Register the admin page and settings
function tfs_front_page_settings_init() {
 // Register settings for carousel
 register_setting('tfs_carousel_options_group', 'tfs_carousel_items', [
	'type' => 'array',
	'sanitize_callback' => 'tfs_sanitize_carousel_items',
	'default' => []
 ]);

 // Register settings for Card Grid
 register_setting('tfs_card_grid_options_group', 'tfs_card_grid_options', 'tfs_sanitize_card_grid');
 register_setting('tfs_front_page_seo_options_group', 'tfs_front_page_seo_options');
}
add_action('admin_init', 'tfs_front_page_settings_init');

// Add menu item to WordPress dashboard
function tfs_front_page_settings_menu() {
 add_menu_page(
	'Theme Features',
	'Theme Features',
	'manage_options',
	'tfs-front-page-settings',
	'tfs_front_page_settings_page',
	'dashicons-slides',
	30
 );
}
add_action('admin_menu', 'tfs_front_page_settings_menu');

// Sanitize and validate the carousel items data
function tfs_sanitize_carousel_items($input) {
 $sanitized_items = [];

 if (is_array($input)) {
	foreach ($input as $item) {
	 $sanitized_item = [
		'image' => esc_url_raw($item['image'] ?? ''),
		'title' => sanitize_text_field($item['title'] ?? ''),
		'subtitle' => sanitize_text_field($item['subtitle'] ?? ''),
		'button_text' => sanitize_text_field($item['button_text'] ?? ''),
		'button_url' => esc_url_raw($item['button_url'] ?? '')
	 ];

	 // Only add item if it has an image
	 if (!empty($sanitized_item['image'])) {
		$sanitized_items[] = $sanitized_item;
	 }
	}
 }

 return $sanitized_items;
}

// Sanitize and save the card grid items
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

// Template for each carousel item in the admin
function tfs_carousel_item_template($index, $item = []) {
 $image = $item['image'] ?? '';
 $title = $item['title'] ?? '';
 $subtitle = $item['subtitle'] ?? '';
 $button_text = $item['button_text'] ?? '';
 $button_url = $item['button_url'] ?? '';

 ob_start();
 ?>
 <div class="carousel-item-admin" data-index="<?php echo esc_attr($index); ?>">
  <h3>Slide <?php echo esc_html($index + 1); ?></h3>
  <div class="carousel-item-header">
   <button type="button" class="button toggle-carousel-item">Toggle</button>
   <button type="button" class="button remove-carousel-item">Remove</button>
  </div>

  <div class="carousel-item-content">
   <div class="carousel-image-preview">
		<?php if (!empty($image)) : ?>
     <img src="<?php echo esc_url($image); ?>" alt="Carousel Image" style="max-width: 100%; max-height: 200px;">
		<?php else : ?>
     <p>No image selected</p>
		<?php endif; ?>
   </div>

   <p>
    <input type="hidden" name="tfs_carousel_items[<?php echo esc_attr($index); ?>][image]"
           value="<?php echo esc_attr($image); ?>" class="carousel-image-url">
    <button type="button" class="button select-carousel-image">Select Image</button>
   </p>

   <p>
    <label>Heading:
     <input type="text" name="tfs_carousel_items[<?php echo esc_attr($index); ?>][title]"
            value="<?php echo esc_attr($title); ?>" class="regular-text" placeholder="Main heading">
    </label>
   </p>

   <p>
    <label>Subheading:
     <input type="text" name="tfs_carousel_items[<?php echo esc_attr($index); ?>][subtitle]"
            value="<?php echo esc_attr($subtitle); ?>" class="regular-text" placeholder="Subheading">
    </label>
   </p>

   <p>
    <label>Button Text:
     <input type="text" name="tfs_carousel_items[<?php echo esc_attr($index); ?>][button_text]"
            value="<?php echo esc_attr($button_text); ?>" class="regular-text" placeholder="Find Out More">
    </label>
   </p>

   <p>
    <label>Button URL:
     <input type="url" name="tfs_carousel_items[<?php echo esc_attr($index); ?>][button_url]"
            value="<?php echo esc_attr($button_url); ?>" class="regular-text" placeholder="https://example.com/page">
    </label>
   </p>
  </div>
 </div>
 <?php
 return ob_get_clean();
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

// The main settings page content with tabs
function tfs_front_page_settings_page() {
 if (!current_user_can('manage_options')) {
	return;
 }

 // Get the active tab, default to carousel
 $active_tab = isset($_GET['tab']) ? sanitize_text_field($_GET['tab']) : 'carousel';

 // Get saved carousel items
 $carousel_items = get_option('tfs_carousel_items', []);

 // Get card grid options
 $card_grid_options = get_option('tfs_card_grid_options', array());
 $cards = isset($card_grid_options['cards']) ? $card_grid_options['cards'] : array();

 // Get SEO options
 $seo_options = get_option('tfs_front_page_seo_options', array());
 $seo_title = isset($seo_options['title']) ? $seo_options['title'] : '';
 $seo_desc = isset($seo_options['description']) ? $seo_options['description'] : '';
 $seo_tags = isset($seo_options['meta_tags']) ? $seo_options['meta_tags'] : '';

 // Get card grid options
 $card_grid_options = get_option('tfs_card_grid_options', array());
 $cards = isset($card_grid_options['cards']) ? $card_grid_options['cards'] : array();

 // Enqueue required scripts
 wp_enqueue_media();
 wp_enqueue_script('jquery-ui-sortable');

 // Enqueue tab-specific scripts
 if ($active_tab == 'carousel') {
	wp_enqueue_script('tfs-carousel-admin', get_template_directory_uri() . '/front-page/js/carousel-admin.js', ['jquery'], '1.0.0', true);
	wp_localize_script('tfs-carousel-admin', 'tfs_carousel', array(
	 'ajax_url' => admin_url('admin-ajax.php'),
	 'nonce'    => wp_create_nonce('tfs_carousel_nonce')
	));
 } else if ($active_tab == 'card-grid') {
	wp_enqueue_script('tfs-card-grid-admin', get_template_directory_uri() . '/front-page/js/card-grid-admin.js', ['jquery', 'jquery-ui-sortable'], '1.0.0', true);
	wp_localize_script('tfs-card-grid-admin', 'tfs_card_grid', array(
	 'ajax_url' => admin_url('admin-ajax.php'),
	 'nonce'    => wp_create_nonce('tfs_card_grid_nonce')
	));
 }

 ?>
 <div class="wrap tfs-front-page-admin">
  <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
	<?php settings_errors('tfs_front_page_messages'); ?>

     <h2 class="nav-tab-wrapper">
         <a href="?page=tfs-front-page-settings&tab=carousel" class="nav-tab <?php echo $active_tab == 'carousel' ? 'nav-tab-active' : ''; ?>">Homepage Slider</a>
         <a href="?page=tfs-front-page-settings&tab=card-grid" class="nav-tab <?php echo $active_tab == 'card-grid' ? 'nav-tab-active' : ''; ?>">Homepage Grid</a>
         <a href="?page=tfs-front-page-settings&tab=seo" class="nav-tab <?php echo $active_tab == 'seo' ? 'nav-tab-active' : ''; ?>">SEO</a>
         <a href="?page=tfs-front-page-settings&tab=footer" class="nav-tab <?php echo $active_tab == 'footer' ? 'nav-tab-active' : ''; ?>">Theme Footer</a>
         <a href="?page=tfs-front-page-settings&tab=dashboard-customizer" class="nav-tab <?php echo $active_tab == 'dashboard-customizer' ? 'nav-tab-active' : ''; ?>">Dashboard Customizer</a>
         <a href="?page=tfs-front-page-settings&tab=page-protection" class="nav-tab <?php echo $active_tab == 'page-protection' ? 'nav-tab-active' : ''; ?>">Page Protection</a>
     </h2>

	<?php if ($active_tab == 'carousel'): ?>
   <!-- Carousel Interface -->
   <form action="options.php" method="post" id="carousel-form">
		<?php
		// Use the correct option group that matches your register_setting() call
		settings_fields('tfs_carousel_options_group');
		?>

    <div class="carousel-description">
     <p>Add slides to your homepage carousel. If no slides are added, the carousel will not be displayed.</p>
    </div>

    <div id="carousel-items-container" class="carousel-items-container">
		 <?php
		 if (empty($carousel_items)) {
			// Add empty first item if no items exist
			echo tfs_carousel_item_template(0);
		 } else {
			foreach ($carousel_items as $index => $item) {
			 echo tfs_carousel_item_template($index, $item);
			}
		 }
		 ?>
    </div>

    <div class="carousel-actions">
     <button type="button" class="button button-secondary add-carousel-item">Add New Slide</button>
    </div>

		<?php submit_button('Save Carousel Settings'); ?>
   </form>

	<?php elseif ($active_tab == 'card-grid'): ?>
   <!-- Card Grid Interface -->
   <form method="post" action="options.php">
		<?php
		// Use the correct option group that matches your register_setting() call
		settings_fields('tfs_card_grid_options_group');
		?>

    <div class="card-grid-description">
     <p>Add, remove, and reorder cards for the home page grid. These cards will appear below the carousel.</p>
    </div>

    <div id="card-grid-items-container" class="card-items-container">
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

    <?php elseif ($active_tab == 'seo'): ?>
        <!-- SEO Interface -->
        <form method="post" action="options.php">
            <?php
            // Ensure you register this setting group in your admin init: register_setting('tfs_front_page_seo_options_group', 'tfs_front_page_seo_options');
            settings_fields('tfs_front_page_seo_options_group');
            ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Front Page Title Tag</th>
                    <td>
                        <input type="text" name="tfs_front_page_seo_options[title]" value="<?php echo esc_attr($seo_title); ?>" class="regular-text" />
                        <p class="description">Max 56 characters recommended.</p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">SEO Description</th>
                    <td>
                        <textarea name="tfs_front_page_seo_options[description]" rows="3" cols="50" class="large-text"><?php echo esc_textarea($seo_desc); ?></textarea>
                        <p class="description">Max 156 characters recommended.</p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">SEO Meta Tags (Keywords)</th>
                    <td>
                        <textarea name="tfs_front_page_seo_options[meta_tags]" rows="3" cols="50" class="large-text"><?php echo esc_textarea($seo_tags); ?></textarea>
                    </td>
                </tr>
            </table>
            <?php submit_button('Save SEO Settings'); ?>
        </form>

	<?php elseif ($active_tab == 'footer') : ?>

	 <?php tfs_footer_settings_page(); ?>

	<?php elseif ($active_tab == 'dashboard-customizer') : ?>

	 <?php tfs_dashboard_customizer_settings_page(); ?>

    <?php elseif ($active_tab == 'page-protection') : ?>

        <?php tfs_page_protection_settings_page(); ?>

	<?php endif; ?>
 </div>
 <?php
}