<?php
/**
 * Dashboard Customizer functionality
 * Allows users to customize WordPress dashboard appearance
 */

// Register dashboard customizer settings
function tfs_dashboard_customizer_init() {
 register_setting('tfs_dashboard_customizer_options_group', 'tfs_dashboard_customizer_options', [
	'type' => 'array',
	'sanitize_callback' => 'tfs_sanitize_dashboard_customizer_options',
	'default' => []
 ]);
}
add_action('admin_init', 'tfs_dashboard_customizer_init');

// Enqueue admin styles for dashboard customizer
function tfs_dashboard_customizer_admin_styles($hook) {
 if ($hook !== 'toplevel_page_tfs-front-page-settings') {
	return;
 }

 if (isset($_GET['tab']) && $_GET['tab'] === 'dashboard-customizer') {
	wp_enqueue_style(
	 'tfs-dashboard-customizer-admin',
	 get_template_directory_uri() . '/front-page/css/dashboard-customizer-admin.css',
	 array(),
	 '1.0.0'
	);
 }
}
add_action('admin_enqueue_scripts', 'tfs_dashboard_customizer_admin_styles');

// Sanitize dashboard customizer options
function tfs_sanitize_dashboard_customizer_options($input) {
 $sanitized_input = array();

 // Sanitize logo options
 if (isset($input['custom_logo'])) {
	$sanitized_input['custom_logo'] = esc_url_raw($input['custom_logo']);
 }

 if (isset($input['logo_width'])) {
	$sanitized_input['logo_width'] = absint($input['logo_width']);
 }

 if (isset($input['logo_height'])) {
	$sanitized_input['logo_height'] = absint($input['logo_height']);
 }

 // Sanitize color options
 if (isset($input['admin_bar_bg'])) {
	$sanitized_input['admin_bar_bg'] = sanitize_hex_color($input['admin_bar_bg']);
 }

 if (isset($input['admin_bar_text'])) {
	$sanitized_input['admin_bar_text'] = sanitize_hex_color($input['admin_bar_text']);
 }

 if (isset($input['menu_bg'])) {
	$sanitized_input['menu_bg'] = sanitize_hex_color($input['menu_bg']);
 }

 if (isset($input['menu_text'])) {
	$sanitized_input['menu_text'] = sanitize_hex_color($input['menu_text']);
 }

 if (isset($input['menu_hover_bg'])) {
	$sanitized_input['menu_hover_bg'] = sanitize_hex_color($input['menu_hover_bg']);
 }

 if (isset($input['menu_hover_text'])) {
	$sanitized_input['menu_hover_text'] = sanitize_hex_color($input['menu_hover_text']);
 }

 if (isset($input['accent_color'])) {
	$sanitized_input['accent_color'] = sanitize_hex_color($input['accent_color']);
 }

 // Sanitize favicon
 if (isset($input['custom_favicon'])) {
	$sanitized_input['custom_favicon'] = esc_url_raw($input['custom_favicon']);
 }

 // Sanitize footer text
 if (isset($input['footer_text'])) {
	$sanitized_input['footer_text'] = wp_kses_post($input['footer_text']);
 }

 return $sanitized_input;
}

// Dashboard customizer settings page content
function tfs_dashboard_customizer_settings_page() {
 $options = get_option('tfs_dashboard_customizer_options', array());

 // Default values
 $defaults = array(
	'custom_logo' => '',
	'logo_width' => 20,
	'logo_height' => 20,
	'admin_bar_bg' => '#23282d',
	'admin_bar_text' => '#ffffff',
	'menu_bg' => '#23282d',
	'menu_text' => '#ffffff',
	'menu_hover_bg' => '#0073aa',
	'menu_hover_text' => '#ffffff',
	'accent_color' => '#0073aa',
	'custom_favicon' => '',
	'footer_text' => ''
 );

 $options = wp_parse_args($options, $defaults);

 wp_enqueue_script('wp-color-picker');
 wp_enqueue_style('wp-color-picker');
 wp_enqueue_media();

 ?>
 <form method="post" action="options.php" id="dashboard-customizer-form">
<?php settings_fields('tfs_dashboard_customizer_options_group'); ?>

  <div class="dashboard-customizer-description">
   <p>Customize the WordPress dashboard appearance to match your brand. Changes will apply to all admin users.</p>
  </div>

  <!-- Logo Section -->
  <div class="dashboard-section">
   <h3>WordPress Logo Replacement</h3>
   <table class="form-table">
    <tr>
     <th scope="row">Custom Admin Logo</th>
     <td>
      <div class="logo-upload-container">
       <input type="hidden" name="tfs_dashboard_customizer_options[custom_logo]"
              value="<?php echo esc_attr($options['custom_logo']); ?>"
              class="logo-url-input">
       <div class="logo-preview">
<?php if (!empty($options['custom_logo'])): ?>
         <img src="<?php echo esc_url($options['custom_logo']); ?>"
              alt="Custom Logo Preview"
              style="max-width: 100px; max-height: 50px;">
<?php else: ?>
         <p class="description">No logo selected</p>
<?php endif; ?>
       </div>
       <button type="button" class="button upload-logo-btn">Select Logo</button>
       <button type="button" class="button remove-logo-btn"
<?php echo empty($options['custom_logo']) ? 'style="display:none;"' : ''; ?>>
        Remove Logo
       </button>
       <p class="description">Upload a logo to replace the WordPress logo in the admin bar. Recommended size: 20x20px to 40x40px.</p>
      </div>
     </td>
    </tr>
    <tr>
     <th scope="row">Logo Dimensions</th>
     <td>
      <label>Width:
       <input type="number" name="tfs_dashboard_customizer_options[logo_width]"
              value="<?php echo esc_attr($options['logo_width']); ?>"
              min="10" max="100" class="small-text"> px
      </label>
      <br><br>
      <label>Height:
       <input type="number" name="tfs_dashboard_customizer_options[logo_height]"
              value="<?php echo esc_attr($options['logo_height']); ?>"
              min="10" max="100" class="small-text"> px
      </label>
     </td>
    </tr>
   </table>
  </div>

  <!-- Color Customization Section -->
  <div class="dashboard-section">
   <h3>Dashboard Colors</h3>
   <table class="form-table">
    <tr>
     <th scope="row">Admin Bar Background</th>
     <td>
      <input type="text" name="tfs_dashboard_customizer_options[admin_bar_bg]"
             value="<?php echo esc_attr($options['admin_bar_bg']); ?>"
             class="color-picker" data-default-color="#23282d">
      <p class="description">Background color of the top admin bar (#wpadminbar)</p>
     </td>
    </tr>
    <tr>
     <th scope="row">Admin Bar Text</th>
     <td>
      <input type="text" name="tfs_dashboard_customizer_options[admin_bar_text]"
             value="<?php echo esc_attr($options['admin_bar_text']); ?>"
             class="color-picker" data-default-color="#ffffff">
      <p class="description">Text color in the admin bar</p>
     </td>
    </tr>
    <tr>
     <th scope="row">Menu Background</th>
     <td>
      <input type="text" name="tfs_dashboard_customizer_options[menu_bg]"
             value="<?php echo esc_attr($options['menu_bg']); ?>"
             class="color-picker" data-default-color="#23282d">
      <p class="description">Background color of the admin menu</p>
     </td>
    </tr>
    <tr>
     <th scope="row">Menu Text</th>
     <td>
      <input type="text" name="tfs_dashboard_customizer_options[menu_text]"
             value="<?php echo esc_attr($options['menu_text']); ?>"
             class="color-picker" data-default-color="#ffffff">
      <p class="description">Text color in the admin menu</p>
     </td>
    </tr>
    <tr>
     <th scope="row">Menu Hover Background</th>
     <td>
      <input type="text" name="tfs_dashboard_customizer_options[menu_hover_bg]"
             value="<?php echo esc_attr($options['menu_hover_bg']); ?>"
             class="color-picker" data-default-color="#0073aa">
      <p class="description">Background color when hovering over menu items</p>
     </td>
    </tr>
    <tr>
     <th scope="row">Menu Hover Text</th>
     <td>
      <input type="text" name="tfs_dashboard_customizer_options[menu_hover_text]"
             value="<?php echo esc_attr($options['menu_hover_text']); ?>"
             class="color-picker" data-default-color="#ffffff">
      <p class="description">Text color when hovering over menu items</p>
     </td>
    </tr>
    <tr>
     <th scope="row">Accent Color</th>
     <td>
      <input type="text" name="tfs_dashboard_customizer_options[accent_color]"
             value="<?php echo esc_attr($options['accent_color']); ?>"
             class="color-picker" data-default-color="#0073aa">
      <p class="description">Primary accent color for buttons and links</p>
     </td>
    </tr>
   </table>
  </div>

  <!-- Additional Customizations -->
  <div class="dashboard-section">
   <h3>Additional Customizations</h3>
   <table class="form-table">
    <tr>
     <th scope="row">Custom Favicon</th>
     <td>
      <div class="favicon-upload-container">
       <input type="hidden" name="tfs_dashboard_customizer_options[custom_favicon]"
              value="<?php echo esc_attr($options['custom_favicon']); ?>"
              class="favicon-url-input">
       <div class="favicon-preview">
<?php if (!empty($options['custom_favicon'])): ?>
         <img src="<?php echo esc_url($options['custom_favicon']); ?>"
              alt="Favicon Preview"
              style="width: 16px; height: 16px;">
<?php else: ?>
         <span class="description">No favicon selected</span>
<?php endif; ?>
       </div>
       <button type="button" class="button upload-favicon-btn">Select Favicon</button>
       <button type="button" class="button remove-favicon-btn"
<?php echo empty($options['custom_favicon']) ? 'style="display:none;"' : ''; ?>>
        Remove
       </button>
       <p class="description">Upload a favicon (.ico, .png) to replace the default WordPress favicon. Recommended size: 16x16px or 32x32px.</p>
      </div>
     </td>
    </tr>
    <tr>
     <th scope="row">Admin Footer Text</th>
     <td>
      <input type="text" name="tfs_dashboard_customizer_options[footer_text]"
             value="<?php echo esc_attr($options['footer_text']); ?>"
             class="regular-text" placeholder="Custom footer text">
      <p class="description">Replace the default "Thank you for creating with WordPress" text</p>
     </td>
    </tr>
   </table>
  </div>

<?php submit_button('Save Dashboard Customizations'); ?>
 </form>

 <script>
     jQuery(document).ready(function($) {
         // Initialize color pickers
         $('.color-picker').wpColorPicker();

         // Logo upload functionality
         $('.upload-logo-btn').click(function(e) {
             e.preventDefault();
             var button = $(this);
             var custom_uploader = wp.media({
                 title: 'Select Logo',
                 library: { type: 'image' },
                 button: { text: 'Use this logo' },
                 multiple: false
             });

             custom_uploader.on('select', function() {
                 var attachment = custom_uploader.state().get('selection').first().toJSON();
                 $('.logo-url-input').val(attachment.url);
                 $('.logo-preview').html('<img src="' + attachment.url + '" alt="Logo Preview" style="max-width: 100px; max-height: 50px;">');
                 $('.remove-logo-btn').show();
             });

             custom_uploader.open();
         });

         // Remove logo
         $('.remove-logo-btn').click(function(e) {
             e.preventDefault();
             $('.logo-url-input').val('');
             $('.logo-preview').html('<p class="description">No logo selected</p>');
             $(this).hide();
         });

         // Favicon upload functionality
         $('.upload-favicon-btn').click(function(e) {
             e.preventDefault();
             var custom_uploader = wp.media({
                 title: 'Select Favicon',
                 library: { type: 'image' },
                 button: { text: 'Use this favicon' },
                 multiple: false
             });

             custom_uploader.on('select', function() {
                 var attachment = custom_uploader.state().get('selection').first().toJSON();
                 $('.favicon-url-input').val(attachment.url);
                 $('.favicon-preview').html('<img src="' + attachment.url + '" alt="Favicon Preview" style="width: 16px; height: 16px;">');
                 $('.remove-favicon-btn').show();
             });

             custom_uploader.open();
         });

         // Remove favicon
         $('.remove-favicon-btn').click(function(e) {
             e.preventDefault();
             $('.favicon-url-input').val('');
             $('.favicon-preview').html('<span class="description">No favicon selected</span>');
             $(this).hide();
         });
     });
 </script>
<?php
}

// Apply the dashboard customizations
function tfs_apply_dashboard_customizations() {
 $options = get_option('tfs_dashboard_customizer_options', array());

 if (empty($options)) {
	return;
 }

 // Generate and output custom CSS
 $custom_css = tfs_generate_dashboard_css($options);
 if (!empty($custom_css)) {
	echo '<style type="text/css">' . $custom_css . '</style>';
 }
}
add_action('admin_head', 'tfs_apply_dashboard_customizations');

// Generate custom CSS based on options
function tfs_generate_dashboard_css($options) {
 $css = '';

 // Admin bar styles
 if (!empty($options['admin_bar_bg'])) {
	$css .= '#wpadminbar { background-color: ' . $options['admin_bar_bg'] . ' !important; }';
 }

 if (!empty($options['admin_bar_text'])) {
	$css .= '#wpadminbar .ab-item, #wpadminbar a.ab-item, #wpadminbar > #wp-toolbar span.ab-label, #wpadminbar > #wp-toolbar span.noticon { color: ' . $options['admin_bar_text'] . ' !important; }';
 }

 // Menu styles
 if (!empty($options['menu_bg'])) {
	$css .= '#adminmenu, #adminmenu .wp-submenu, #adminmenuback, #adminmenuwrap { background-color: ' . $options['menu_bg'] . ' !important; }';
 }

 if (!empty($options['menu_text'])) {
	$css .= '#adminmenu a, #adminmenu div.wp-menu-name { color: ' . $options['menu_text'] . ' !important; }';
 }

 if (!empty($options['menu_hover_bg']) && !empty($options['menu_hover_text'])) {
	$css .= '#adminmenu li.menu-top:hover, #adminmenu li.opensub > a.menu-top, #adminmenu li > a.menu-top:focus { background-color: ' . $options['menu_hover_bg'] . ' !important; color: ' . $options['menu_hover_text'] . ' !important; }';
	$css .= '#adminmenu li.menu-top:hover div.wp-menu-name, #adminmenu li.opensub > a.menu-top div.wp-menu-name, #adminmenu li > a.menu-top:focus div.wp-menu-name { color: ' . $options['menu_hover_text'] . ' !important; }';
 }

 // Accent color
 if (!empty($options['accent_color'])) {
	$css .= '.wp-core-ui .button-primary { background: ' . $options['accent_color'] . ' !important; border-color: ' . $options['accent_color'] . ' !important; }';
	$css .= '.wp-core-ui .button-primary:hover { background: ' . tfs_darken_color($options['accent_color'], 0.1) . ' !important; }';
	$css .= 'a:focus, a:active, .row-actions a:focus { color: ' . $options['accent_color'] . ' !important; }';
 }

 // Custom logo - FIXED to target only WordPress logo, not other dashicons
 if (!empty($options['custom_logo'])) {
	$width = !empty($options['logo_width']) ? $options['logo_width'] : 20;
	$height = !empty($options['logo_height']) ? $options['logo_height'] : 20;

	$css .= '#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before { 
            content: "" !important; 
            background-image: url("' . $options['custom_logo'] . '") !important; 
            background-size: ' . $width . 'px ' . $height . 'px !important; 
            background-repeat: no-repeat !important;
            background-position: center !important;
            width: ' . $width . 'px !important;
            height: ' . $height . 'px !important;
            display: block !important;
        }';
 }

 return $css;
}

// Helper function to darken colors
function tfs_darken_color($hex, $amount) {
 $hex = str_replace( '#', '', $hex );
 $rgb = array_map( 'hexdec', str_split( $hex, 2 ) );

 foreach ( $rgb as &$color ) {
	$color = max( 0, min( 255, $color - ( $color * $amount ) ) );
 }

 return '#' . implode( '', array_map( function ( $color ) {
	 return str_pad( dechex( (int) round( $color ) ), 2, '0', STR_PAD_LEFT );
	}, $rgb ) );
}

// Replace WordPress logo link
function tfs_replace_wp_logo_url() {
 return home_url();
}

function tfs_replace_wp_logo_title() {
 return get_bloginfo('name') . ' - Dashboard';
}

// Apply logo URL changes if custom logo is set
function tfs_init_logo_changes() {
 $options = get_option('tfs_dashboard_customizer_options', array());
 if (!empty($options['custom_logo'])) {
	add_filter('admin_bar_menu', 'tfs_replace_wp_logo_url', 10);
	add_filter('admin_bar_menu', 'tfs_replace_wp_logo_title', 10);
 }
}
add_action('init', 'tfs_init_logo_changes');

// Custom favicon
function tfs_custom_admin_favicon() {
 $options = get_option('tfs_dashboard_customizer_options', array());
 if (!empty($options['custom_favicon'])) {
	echo '<link rel="icon" type="image/x-icon" href="' . esc_url($options['custom_favicon']) . '" />';
 }
}
add_action('admin_head', 'tfs_custom_admin_favicon');

// Custom footer text
function tfs_custom_admin_footer() {
 $options = get_option('tfs_dashboard_customizer_options', array());
 if (!empty($options['footer_text'])) {
	return $options['footer_text'];
 }
 return null;
}
add_filter('admin_footer_text', 'tfs_custom_admin_footer');
?>