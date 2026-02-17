<?php
/**
 * The Fly Shop 2025 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package The_Fly_Shop_2025
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

include_once get_template_directory() . '/inc/bootstrap-nav-walker.php';
include_once get_template_directory() . '/inc/breadcrumbs.php';
include_once get_template_directory() . '/inc/login-page.php';
require_once get_template_directory() . '/front-page-loader.php';
require_once get_template_directory() . '/front-page/footer-admin.php';
require_once get_template_directory() . '/front-page/page-protection-admin.php';
require_once get_template_directory() . '/class-tfs-menu-position-handler.php';
require_once get_template_directory() . '/inc/register-sidebars.php';
require_once get_template_directory() . '/inc/searchform.php';
require_once get_template_directory() . '/inc/bootstrap-pagination.php';
require_once get_template_directory() . '/inc/post-category-image.php';
require_once get_template_directory() . '/inc/shortcodes.php';

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function the_fly_shop_2025_setup() {
 load_theme_textdomain( 'the-fly-shop-2026', get_template_directory() . '/languages' );

 // Other support functions.
 add_theme_support( 'automatic-feed-links' );
 add_theme_support( 'title-tag' );
 add_theme_support( 'post-thumbnails' );

 // Register navigation menus.
 register_nav_menus(
	array(
		 'home-page' => esc_html__( 'Home Page', 'the-fly-shop-2026' ),
		 'travel-menu' => esc_html__( 'Travel', 'the-fly-shop-2026' ),
		 'destination-menu' => esc_html__( 'Destination', 'the-fly-shop-2026' ),
		 'lower-48' => esc_html__( 'Lower 48', 'the-fly-shop-2026' ),
		 'lower-48blog'     => esc_html__( 'Lower 48 Blog', 'the-fly-shop-2026' ),
		 'guided-fishing' => esc_html__( 'Guided Fishing', 'the-fly-shop-2026' ),
     'guide-destination' => esc_html__( 'Guide Destination Template', 'the-fly-shop-2026' ),
		 'private-waters' => esc_html__( 'Private Waters', 'the-fly-shop-2026' ),
		 'fly-fishing-schools' => esc_html__( 'Fly Fishing Schools', 'the-fly-shop-2026' ),
		 'fish-camp' => esc_html__( 'Fish Camp', 'the-fly-shop-2026' ),
		 '404-menu' => esc_html__( '404', 'the-fly-shop-2026' ),
		 'regional-waters-menu' => esc_html__( 'Regional Waters', 'the-fly-shop-2026' ),
		 'outfitters-blog-menu' => esc_html__( 'Outfitters Blog', 'the-fly-shop-2026' ),
		 'schools-menu' => esc_html__( 'Schools', 'the-fly-shop-2026' ),
     'signature-waters-menu' => esc_html__( 'Signature Waters', 'the-fly-shop-2026' ),
		 'signature-template-menu' => esc_html__( 'Signature Template', 'the-fly-shop-2026' ),
		 'news-blog' => esc_html__( 'News Blog', 'the-fly-shop-2026' )
	)
 );

 load_theme_textdomain( 'the-fly-shop-2026', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'the_fly_shop_2025_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'the_fly_shop_2025_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function the_fly_shop_2025_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'the_fly_shop_2025_content_width', 640 );
}
add_action( 'after_setup_theme', 'the_fly_shop_2025_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function the_fly_shop_2025_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'the-fly-shop-2026' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'the-fly-shop-2026' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'the_fly_shop_2025_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function the_fly_shop_2025_scripts() {
 /* Critical CSS First */
 wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3', 'all');
 wp_enqueue_style('the-fly-shop-2026-style', get_stylesheet_uri(), array('bootstrap-css'), _S_VERSION);

 /* Non-critical CSS with lower priority */
 wp_enqueue_style('lineicons', 'https://pro-cdn.lineicons.com/5.0/regular/lineicons.css', array(), '5.0', 'all');
 wp_enqueue_style('aos-js', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css', array(), '2.3.4', 'all');

 wp_style_add_data('the-fly-shop-2026-style', 'rtl', 'replace');

 /* Scripts */
 wp_enqueue_script('bootstarp-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true);
 wp_enqueue_script('the-fly-shop-2026-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
 wp_enqueue_script('aos-js', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js', array(), '2.3.4', true);
 wp_script_add_data('constant-contact-form', 'async', true);
 wp_script_add_data('constant-contact-form', 'defer', true);

 wp_enqueue_style('tfs-search-bar', get_template_directory_uri() . '/search/search-bar.css', array(), _S_VERSION);
 wp_enqueue_script('tfs-search-bar', get_template_directory_uri() . '/search/search-bar.js', array(), _S_VERSION, true);

if (is_singular() && comments_open() && get_option('thread_comments')) {
wp_enqueue_script('comment-reply');
}

// Scripts for templates, pages, and posts.
require_once get_template_directory() . '/inc/scripts.php';

require_once get_template_directory() . '/inc/inline-styles.php';

}
add_action( 'wp_enqueue_scripts', 'the_fly_shop_2025_scripts' );

/**
 * Loads admin css
 */
function enqueue_admin_bar_styles() {
 // Only load on admin pages
 if ( is_admin() ) {
	wp_enqueue_style(
	 'custom-admin-bar-styles',
	 get_template_directory_uri() . '/css/admin.css',
	 array(),
	 '1.0.0'
	);
 }
}
add_action( 'admin_enqueue_scripts', 'enqueue_admin_bar_styles' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

// Add link to excerpt
function custom_excerpt_more($more) {
 global $post;
 return ' <a href="' . get_permalink($post->ID) . '">' . __('(more…)') . '</a>';
}
add_filter('excerpt_more', 'custom_excerpt_more');

/**
 * Add Constant Contact Active Forms script to footer
 */
function add_constant_contact_script() {
	?>
	<!-- Begin Constant Contact Active Forms -->
	<script> var _ctct_m = "0a0f5b541f83f517b80813b9cfbdb8d9"; </script>
	<script id="signupScript" src="https://static.ctctcdn.com/js/signup-form-widget/current/signup-form-widget.min.js" async defer></script>
	<!-- End Constant Contact Active Forms -->
	<?php
}
add_action('wp_footer', 'add_constant_contact_script');

/**
 * Add Content Security Policy headers for Constant Contact and reCAPTCHA
 */
function add_csp_headers() {
	header("Content-Security-Policy: script-src 'self' 'unsafe-inline' 'unsafe-eval' https://static.ctctcdn.com https://www.google.com https://www.gstatic.com https://cdn.jsdelivr.net https://pro-cdn.lineicons.com https: blob: data:; frame-src 'self' https://www.google.com https://www.gstatic.com https://home.brindlechute.com https://home.brindlechute.dev https://js.stripe.com https://hooks.stripe.com;");
}
add_action('send_headers', 'add_csp_headers');

/**
 * Get responsive hero images for mobile/tablet/desktop
 * Falls back to Featured Image if device-specific images not set
 * 
 * @param int $post_id The post ID
 * @return array Associative array with 'mobile', 'tablet', 'desktop' keys
 * @since 1.1.0
 */
function tfs_get_responsive_hero_images($post_id = null) {
	if (!$post_id) {
		$post_id = get_the_ID();
	}
	
	// Get device-specific images (or empty string if not set)
	$mobile = get_post_meta($post_id, 'hero-image-mobile', true);
	$tablet = get_post_meta($post_id, 'hero-image-tablet', true);
	
	// Featured image as fallback
	$desktop = get_the_post_thumbnail_url($post_id, 'full');
	
	// If no Featured Image, use site default
	if (!$desktop) {
		$desktop = 'https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2025/01/Staff_Main6.webp';
	}
	
	return array(
		'mobile' => $mobile ?: $desktop,  // Fall back to desktop if empty
		'tablet' => $tablet ?: $desktop,  // Fall back to desktop if empty
		'desktop' => $desktop
	);
}
