<?php
/**
 * Footer Settings Administration
 */

// Register the settings for footer
function tfs_footer_settings_init() {
 register_setting('tfs_footer_options_group', 'tfs_footer_options', [
	'type' => 'array',
	'sanitize_callback' => 'tfs_sanitize_footer_options',
	'default' => []
 ]);
}
add_action('admin_init', 'tfs_footer_settings_init');

// Add submenu for Footer Settings
function tfs_add_footer_settings_submenu() {
 add_submenu_page(
	'tfs-front-page-settings',  // Parent slug
	'Footer Settings',          // Page title
	'Footer',                   // Menu title
	'manage_options',           // Capability
	'tfs-footer-settings',      // Menu slug
	'tfs_footer_settings_page'  // Callback function
 );
}
//add_action('admin_menu', 'tfs_add_footer_settings_submenu');

// Sanitize and validate the footer options data
function tfs_sanitize_footer_options($input) {
 $sanitized_options = [];

 if (is_array($input)) {
	// Sanitize section 1
	if (isset($input['section1'])) {
	 $sanitized_options['section1'] = [
		'title' => sanitize_text_field($input['section1']['title'] ?? ''),
		'content' => tfs_expanded_kses_post($input['section1']['content'] ?? '')
	 ];
	}

	// Sanitize section 2
	if (isset($input['section2'])) {
	 $sanitized_options['section2'] = [
		'title' => sanitize_text_field($input['section2']['title'] ?? ''),
		'content' => tfs_expanded_kses_post($input['section2']['content'] ?? '')
	 ];
	}

	// Sanitize section 3
	if (isset($input['section3'])) {
	 $sanitized_options['section3'] = [
		'title' => sanitize_text_field($input['section3']['title'] ?? ''),
		'content' => tfs_expanded_kses_post($input['section3']['content'] ?? '')
	 ];
	}

	// Sanitize copyright text
	if (isset($input['copyright'])) {
	 $sanitized_options['copyright'] = wp_kses_post($input['copyright']);
	}
 }

 return $sanitized_options;
}

// Footer settings page content
function tfs_footer_settings_page() {
 if (!current_user_can('manage_options')) {
	return;
 }

 // Get saved footer options
 $footer_options = get_option('tfs_footer_options', [
	'section1' => ['title' => '', 'content' => ''],
	'section2' => ['title' => '', 'content' => ''],
	'section3' => ['title' => '', 'content' => ''],
	'copyright' => '&copy; ' . date('Y') . ' ' . get_bloginfo('name') . '. All rights reserved.'
 ]);

 // Enqueue required scripts
 wp_enqueue_script('jquery');
 wp_enqueue_editor();

 // Enqueue footer admin script
 wp_enqueue_script('tfs-footer-admin', get_template_directory_uri() . '/front-page/js/footer-admin.js', ['jquery'], '1.0.0', true);
 wp_enqueue_style('tfs-footer-admin-css', get_template_directory_uri() . '/front-page/css/footer-admin.css', [], '1.0.0');

 $editor_settings = [
	'textarea_rows' => 7,
	'media_buttons' => false,
	'teeny' => false,
	'wpautop' => true,
	'quicktags' => true,
	'tinymce' => [
	 'toolbar1' => 'formatselect,bold,italic,bullist,numlist,blockquote,alignleft,aligncenter,alignright,link,unlink,undo,redo',
	 'toolbar2' => '',
	],
 ];


 ?>
 <div class="wrap tfs-footer-admin">
	<h1><?php echo esc_html(get_admin_page_title()); ?></h1>
	<?php settings_errors('tfs_footer_messages'); ?>

	<form method="post" action="options.php">
	 <?php settings_fields('tfs_footer_options_group'); ?>

	 <div class="footer-sections">
		<!-- Section 1 -->
		<div class="footer-section">
		 <h2>Footer Section 1</h2>
		 <div class="footer-section-content">
			<p>
			 <label for="footer-section1-title">Section Title:</label>
			 <input type="text" id="footer-section1-title"
							name="tfs_footer_options[section1][title]"
							value="<?php echo esc_attr($footer_options['section1']['title'] ?? ''); ?>"
							class="regular-text">
			</p>
			<div class="footer-section-editor">
			 <label for="footer-section1-content">Section Content:</label>
			 <?php
			 $content = $footer_options['section1']['content'] ?? '';
			 $editor_id = 'footer-section1-content';
       $settings = $editor_settings;
			 $settings['textarea_name'] = 'tfs_footer_options[section1][content]';
			 wp_editor($content, $editor_id, $settings);
			 ?>
			</div>
		 </div>
		</div>

		<!-- Section 2 -->
		<div class="footer-section">
		 <h2>Footer Section 2</h2>
		 <div class="footer-section-content">
			<p>
			 <label for="footer-section2-title">Section Title:</label>
			 <input type="text" id="footer-section2-title"
							name="tfs_footer_options[section2][title]"
							value="<?php echo esc_attr($footer_options['section2']['title'] ?? ''); ?>"
							class="regular-text">
			</p>
			<div class="footer-section-editor">
			 <label for="footer-section2-content">Section Content:</label>
			 <?php
			 $content = $footer_options['section2']['content'] ?? '';
			 $editor_id = 'footer-section2-content';
       $settings = $editor_settings;
			 $settings[ 'textarea_name'] = 'tfs_footer_options[section2][content]';
			 wp_editor($content, $editor_id, $settings);
			 ?>
			</div>
		 </div>
		</div>

		<!-- Section 3 -->
		<div class="footer-section">
		 <h2>Footer Section 3</h2>
		 <div class="footer-section-content">
			<p>
			 <label for="footer-section3-title">Section Title:</label>
			 <input type="text" id="footer-section3-title"
							name="tfs_footer_options[section3][title]"
							value="<?php echo esc_attr($footer_options['section3']['title'] ?? ''); ?>"
							class="regular-text">
			</p>
			<div class="footer-section-editor">
			 <label for="footer-section3-content">Section Content:</label>
			 <?php
			 $content = $footer_options['section3']['content'] ?? '';
			 $editor_id = 'footer-section3-content';
       $settings = $editor_settings;
			 $settings['textarea_name'] = 'tfs_footer_options[section3][content]';
			 wp_editor($content, $editor_id, $settings);
			 ?>
			</div>
		 </div>
		</div>

		<!-- Copyright Section -->
		<div class="footer-copyright-section">
		 <h2>Copyright Text</h2>
		 <div class="footer-copyright-content">
			<p>
			 <label for="footer-copyright">Copyright Text:</label>
			 <input type="text" id="footer-copyright"
							name="tfs_footer_options[copyright]"
							value="<?php echo esc_attr($footer_options['copyright'] ?? ''); ?>"
							class="large-text">
			</p>
			<p class="description">
			 Use <code>&amp;copy;</code> for the copyright symbol. Current year is automatically inserted with <code>[year]</code>.
			</p>
		 </div>
		</div>
	 </div>

	 <?php submit_button('Save Footer Settings'); ?>
	</form>
 </div>
 <?php
}

// Function to render the theme footer based on settings
function tfs_get_footer_content() {
 $footer_options = get_option('tfs_footer_options', []);

 // Replace [year] with current year in copyright text
 if (isset($footer_options['copyright'])) {
	$footer_options['copyright'] = str_replace('[year]', date('Y'), $footer_options['copyright']);
 }

 return $footer_options;
}

function tfs_expanded_kses_post($content) {
 $allowed_html = wp_kses_allowed_html('post');

 // Add any additional HTML elements you need
 $allowed_html['div'] = [
	'class' => true,
	'id' => true,
	'style' => true
 ];
 $allowed_html['span'] = [
	'class' => true,
	'id' => true,
	'style' => true
 ];
 // Add more elements as needed

 return wp_kses($content, $allowed_html);
}