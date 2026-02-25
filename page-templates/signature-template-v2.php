<?php
/**
 * Template Name: Signature Template V2
 * Template Post Type: post, page, travel_cpt, schools_cpt, guide_service, lower48
 * Developed for The Fly Shop
 * @package The_Fly_Shop
 * Author: Chris Parsons
 * Author URL: https://steelbridge.io
 *
 * Version 2: Uses new repeater field with backward compatibility
 */

$the_post_img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
$the_post_default = get_bloginfo('template_directory') . '/images/default/default-page-header.png';
$basic_logo_upload = get_theme_mod('basic_page_logo');
$hero_video_url = get_post_meta(get_the_ID(), 'hero-video-url', true);

include_once('post-meta/post-meta-signature.php');
$default = '';
get_header('signature-v2');

// Get responsive hero images (mobile/tablet/desktop)
$hero_images = tfs_get_responsive_hero_images(get_the_ID());

if (has_post_thumbnail()) : ?>

    <div class="container-fluid travel-template-hero p-0">
        <div class="hero-image position-relative">
            <!-- Responsive Hero Image with device-specific sources -->
            <picture>
                <!-- Mobile Portrait: < 768px in portrait -->
                <source media="(max-width: 767.98px) and (orientation: portrait)"
                        srcset="<?php echo esc_url($hero_images['mobile_portrait']); ?>">

                <!-- Mobile Landscape: < 768px in landscape -->
                <source media="(max-width: 767.98px) and (orientation: landscape)"
                        srcset="<?php echo esc_url($hero_images['mobile_landscape']); ?>">

                <!-- Tablet Portrait: 768-1279px in portrait -->
                <source media="(min-width: 768px) and (max-width: 1279.98px) and (orientation: portrait)"
                        srcset="<?php echo esc_url($hero_images['tablet_portrait']); ?>">

                <!-- Tablet Landscape: 768-1279px in landscape (includes iPad @ 1024px) -->
                <source media="(min-width: 768px) and (max-width: 1279.98px) and (orientation: landscape)"
                        srcset="<?php echo esc_url($hero_images['tablet_landscape']); ?>">

                <!-- Desktop: > 1280px (default/fallback) -->
                <img src="<?php echo esc_url($hero_images['desktop']); ?>"
                     class="img-fluid w-100"
                     alt="<?php the_title_attribute(); ?>">
            </picture>

            <!-- Overlay Content -->
            <div class="hero-overlay position-absolute top-50 start-50 translate-middle text-center">
                <div id="mobile-logo-container">
                    <!--<img class="no-scroll mobile-logo" loading="eager"
                         src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2025/09/tfs-logo-600x484-1-1.png"
                         alt="The Fly Shop 2025"/>-->

                    <?php
                    $page_template = get_page_template_slug();
                    if ($page_template === 'page-templates/signature-template.php' || $page_template === 'page-templates/signature-template-v2.php') {
                    // FIXED: Use correct field name 'sig-logo' instead of 'signature-travel-logo'
                    $dest_travel_logo = get_post_meta(get_the_ID(), 'sig-logo', true);
                    } else {
                    $dest_travel_logo = get_post_meta(get_the_ID(), 'dest-travel-logo', true);
                    }

                    if ($dest_travel_logo !== '') : ?>
                        <img class="tfs-nav-logo mobile-logo no-scroll mb-5" loading="eager" src="<?php echo esc_url($dest_travel_logo); ?>" alt="The Fly Shop 2025" />
                    <?php else: ?>
                        <img class="tfs-nav-logo mobile-logo no-scroll" loading="eager" src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2025/09/tfs-logo-600x484-1-1.png" alt="The Fly Shop 2025" />
                    <?php endif; ?>
                </div>

                <!-- Page Title -->
                <h1 class="hero-title display-4 text-white"><?php echo get_the_title(); ?></h1>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="container-fluid travel-template-hero p-0">
        <div class="hero-image position-relative">
            <!-- Responsive Fallback Image -->
            <picture>
                <!-- Mobile Portrait: < 768px in portrait -->
                <source media="(max-width: 767.98px) and (orientation: portrait)"
                        srcset="<?php echo esc_url($hero_images['mobile_portrait']); ?>">

                <!-- Mobile Landscape: < 768px in landscape -->
                <source media="(max-width: 767.98px) and (orientation: landscape)"
                        srcset="<?php echo esc_url($hero_images['mobile_landscape']); ?>">

                <!-- Tablet Portrait: 768-1279px in portrait -->
                <source media="(min-width: 768px) and (max-width: 1279.98px) and (orientation: portrait)"
                        srcset="<?php echo esc_url($hero_images['tablet_portrait']); ?>">

                <!-- Tablet Landscape: 768-1279px in landscape -->
                <source media="(min-width: 768px) and (max-width: 1279.98px) and (orientation: landscape)"
                        srcset="<?php echo esc_url($hero_images['tablet_landscape']); ?>">

                <!-- Desktop fallback -->
                <img src="<?php echo esc_url($hero_images['desktop']); ?>"
                     class="img-fluid w-100" alt="<?php echo get_the_title(); ?>">
            </picture>

            <!-- Overlay Content -->
            <div class="hero-overlay position-absolute top-50 start-50 translate-middle text-center">
                <!-- Page Title -->
                <h1 class="hero-title display-4 text-white"><?php echo get_the_title(); ?></h1>
            </div>
        </div>
    </div>
<?php endif; ?>

    <!-- Breadcrumbs -->
    <div class="container mt-4">
        <?php the_fly_shop_breadcrumbs(); ?>
    </div>

    <div class="container">
        <div id="primary" class="content-area row">
            <main id="main" class="site-main col-md-12" role="main">

                <?php
                // WordPress Blog Content
                while (have_posts()) : the_post();

                    get_template_part('template-parts/content', 'page-basic');

                endwhile; // End of the loop.
                ?>

            </main>
        </div>
    </div>

    <div id="travel-template-grid" class="container mt-5 mb-5">
        <?php
        // Get signature destinations - NEW REPEATER FORMAT with backward compatibility

        // DEBUG: Check if function exists
        if (!function_exists('get_signature_destinations')) {
            echo '<!-- ERROR: get_signature_destinations function not found! -->';
            // Fallback: get data directly
            $destinations = get_post_meta(get_the_ID(), 'signature_destinations_repeater', true);
        } else {
            $destinations = get_signature_destinations(get_the_ID());
        }

        // DEBUG: Output what we got
        if (current_user_can('manage_options')) {
            echo '<!-- DEBUG: Found ' . (is_array($destinations) ? count($destinations) : 0) . ' destinations -->';
            echo '<!-- DEBUG DATA: ' . print_r($destinations, true) . ' -->';
        }

        if (!empty($destinations)) : ?>
            <div class="row travel-template-row justify-content-center pt-4 pb-5 pr-2 pl-2">
                <?php foreach ($destinations as $index => $destination) :
                    // Skip empty destinations
                    if (empty($destination['image']) && empty($destination['title'])) {
                        continue;
                    }

                    // CSS class based on index (for potential styling)
                    $position_classes = array('one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten');
                    $position_class = isset($position_classes[$index]) ? $position_classes[$index] : '';
                    ?>

                    <div class="col-md-6 col-lg-6 <?php echo esc_attr($position_class); ?>">
                        <div class="thumbnail signature-text-color">
                            <?php if (!empty($destination['link']) && !empty($destination['image'])) : ?>
                                <a class="thumbnail-link"
                                   href="<?php echo esc_url($destination['link']); ?>"
                                   target="_self"
                                   title="<?php echo esc_attr($destination['title']); ?>">
                                    <img src="<?php echo esc_url($destination['image']); ?>"
                                         alt="<?php echo esc_attr($destination['title']); ?>">
                                </a>
                            <?php elseif (!empty($destination['image'])) : ?>
                                <img src="<?php echo esc_url($destination['image']); ?>"
                                     alt="<?php echo esc_attr($destination['title']); ?>">
                            <?php endif; ?>

                            <section class="widget-section">
                                <div class="caption sig-caption">
                                    <?php if (!empty($destination['title'])) : ?>
                                        <h3 class="widget-title">
                                            <?php if (!empty($destination['link'])) : ?>
                                                <a class="thumbnail-h3"
                                                   href="<?php echo esc_url($destination['link']); ?>"
                                                   target="_self"
                                                   title="<?php echo esc_attr($destination['title']); ?>">
                                                    <?php echo esc_html($destination['title']); ?>
                                                </a>
                                            <?php else : ?>
                                                <?php echo esc_html($destination['title']); ?>
                                            <?php endif; ?>
                                        </h3>
                                    <?php endif; ?>

                                    <?php if (!empty($destination['caption'])) : ?>
                                        <p class="text-justify">
                                            <?php echo esc_html($destination['caption']); ?>
                                            <?php if (!empty($destination['link'])) : ?>
                                                <br><a href="<?php echo esc_url($destination['link']); ?>" class="read-more-link" title="Read more about <?php echo esc_attr($destination['title']); ?>">Read More &raquo;</a>
                                            <?php endif; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </section>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div><!-- /.row -->
        <?php endif; ?>
    </div>

<?php
include_once get_template_directory() . '/page-templates/cta-sections/footer-cta.php';
get_footer();
