<?php
/**
 * Template Name: Signature Template
 * Template Post Type: post, page, travel_cpt, schools_cpt, guide_service, lower48
 * Developed for The Fly Shop
 * @package The_Fly_Shop
 * Author: Chris Parsons
 * Author URL: https://steelbridge.io
 */

$the_post_img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
$the_post_default = get_bloginfo('template_directory') . '/images/default/default-page-header.png';
$basic_logo_upload = get_theme_mod('basic_page_logo');
$hero_video_url = get_post_meta(get_the_ID(), 'hero-video-url', true);

include_once('post-meta/post-meta-signature.php');
$default = '';
//get_header('signature-template-menu');
get_header('signature');

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
                    <!--<img class="scroll mobile-logo" loading="eager" src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2021/05/social_tfs_logo_og.png" alt="The Fly Shop 2025" />-->
                    <img class="no-scroll mobile-logo" loading="eager"
                         src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2025/09/tfs-logo-600x484-1-1.png"
                         alt="The Fly Shop 2025"/>
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
        if ($signature_image_1 !== '') :?>
            <div class="row travel-template-row justify-content-center pt-4 pb-5 pr-2 pl-2">
                <div class="col-md-6 col-lg-6 one">
                    <div class="thumbnail signature-text-color">
                        <a class="thumbnail-link" href="<?php echo $signature_image_1_title_link; ?>" target="_self"
                           title="Signature Destination"><img src="<?php echo $signature_image_1; ?>"></a>
                        <section id="" class="widget-section">
                            <div class="caption sig-caption">
                                <h3 class="widget-title"><a class="thumbnail-h3"
                                                            href="<?php echo $signature_image_1_title_link; ?>"
                                                            target="_self"
                                                            title="Signature Destination"><?php echo $signature_image_1_title; ?></a>
                                </h3>
                                <p class="text-justify"><?php echo $signature_image_1_caption; ?></p>
                            </div>
                        </section>
                    </div>
                </div>
                <?php if ($signature_image_2 !== '') : ?>
                    <div class="col-md-6 col-lg-6 two">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_2_title_link; ?>" target="_self"
                               title="Signature Destination"><img src="<?php echo $signature_image_2; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_2_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_2_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_2_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_3 !== '') : ?>
                    <div class="col-md-6 col-lg-6 three">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_3_title_link; ?>" target="_self"
                               title="Signature Destination"><img src="<?php echo $signature_image_3; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_3_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_3_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_3_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($signature_image_4 !== '') : ?>
                    <div class="col-md-6 col-lg-6 four">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_4_title_link; ?>" target="_self"
                               title="Signature Destination"><img src="<?php echo $signature_image_4; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_4_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_4_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_4_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_5 !== '') : ?>
                    <div class="col-md-6 col-lg-6 five">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_5_title_link; ?>" target="_self"
                               title="Signature Destination"><img src="<?php echo $signature_image_5; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_5_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_5_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_5_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_6 !== '') : ?>
                    <div class="col-md-6 col-lg-6 six">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_6_title_link; ?>" target="_self"
                               title="Signature Destination"><img src="<?php echo $signature_image_6; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_6_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_6_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_6_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_7 !== '') : ?>
                    <div class="col-md-6 col-lg-6 seven">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_7_title_link; ?>" target="_self"
                               title="Signature Destination"><img src="<?php echo $signature_image_7; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_7_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_7_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_7_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_8 !== '') : ?>
                    <div class="col-md-6 col-lg-6 eight">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_8_title_link; ?>" target="_self"
                               title="Signature Destination"><img src="<?php echo $signature_image_8; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_8_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_8_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_8_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_9 !== '') : ?>
                    <div class="col-md-6 col-lg-6 nine">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_9_title_link; ?>" target="_self"
                               title="Signature Destination"><img src="<?php echo $signature_image_9; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_9_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_9_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_9_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_10 !== '') : ?>
                    <div class="col-md-6 col-lg-6 ten">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_10_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_10; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_10_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_10_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_10_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_11 !== '') : ?>
                    <div class="col-md-6 col-lg-6 eleven">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_11_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_11; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_11_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_11_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_11_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_12 !== '') : ?>
                    <div class="col-md-6 col-lg-6 tweleve">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_12_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_12; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_12_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_12_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_12_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_13 !== '') : ?>
                    <div class="col-md-6 col-lg-6 thirteen">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_13_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_13; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_13_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_13_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_13_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_14 !== '') : ?>
                    <div class="col-md-6 col-lg-6 fouteen">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_14_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_14; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_14_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_14_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_14_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_15 !== '') : ?>
                    <div class="col-md-6 col-lg-6 fifteen">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_15_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_15; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_15_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_15_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_15_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_16 !== '') : ?>
                    <div class="col-md-6 col-lg-6 sixteen">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_16_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_16; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_16_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_16_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_16_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_17 !== '') : ?>
                    <div class="col-md-6 col-lg-6 seventeen">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_17_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_17; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_17_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_17_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_17_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_18 !== '') : ?>
                    <div class="col-md-6 col-lg-6 eighteen">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_18_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_18; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_18_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_18_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_18_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_19 !== '') : ?>
                    <div class="col-md-6 col-lg-6 nineteen">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_19_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_19; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_19_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_19_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_19_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_20 !== '') : ?>
                    <div class="col-md-6 col-lg-6 twenty">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_20_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_20; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_20_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_20_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_20_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_21 !== '') : ?>
                    <div class="col-md-6 col-lg-6 twentyone">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_21_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_21; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_21_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_21_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_21_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_22 !== '') : ?>
                    <div class="col-md-6 col-lg-6 twentytwo">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_22_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_22; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_22_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_22_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_22_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_23 !== '') : ?>
                    <div class="col-md-6 col-lg-6 twentythree">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_23_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_23; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_23_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_23_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_23_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_24 !== '') : ?>
                    <div class="col-md-6 col-lg-6 twentyfour">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_24_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_24; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_24_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_24_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_24_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_25 !== '') : ?>
                    <div class="col-md-6 col-lg-6 twentyfive">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_25_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_25; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_25_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_25_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_25_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_26 !== '') : ?>
                    <div class="col-md-6 col-lg-6 twentysix">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_26_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_26; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_26_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_26_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_26_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_27 !== '') : ?>
                    <div class="col-md-6 col-lg-6 twentyseven">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_27_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_27; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_27_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_27_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_27_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_28 !== '') : ?>
                    <div class="col-md-6 col-lg-6 twentyeight">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_28_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_28; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_28_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_28_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_28_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_29 !== '') : ?>
                    <div class="col-md-6 col-lg-6 twentynine">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_29_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_29; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_29_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_29_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_29_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_30 !== '') : ?>
                    <div class="col-md-6 col-lg-6 thirty">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_30_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_30; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_30_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_30_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_30_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_31 !== '') : ?>
                    <div class="col-md-6 col-lg-6 thirtyone">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_31_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_31; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_31_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_31_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_31_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_32 !== '') : ?>
                    <div class="col-md-6 col-lg-6 thirtytwo">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_32_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_32; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_32_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_32_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_32_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_33 !== '') : ?>
                    <div class="col-md-6 col-lg-6 thirtythree">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_33_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_33; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_33_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_33_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_33_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_34 !== '') : ?>
                    <div class="col-md-6 col-lg-6 thirtyfour">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_34_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_34; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_34_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_34_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_34_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_35 !== '') : ?>
                    <div class="col-md-6 col-lg-6 thirtyfive">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_35_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_35; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_35_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_35_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_35_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_36 !== '') : ?>
                    <div class="col-md-6 col-lg-6 thirtysix">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_36_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_36; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_36_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_36_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_36_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_37 !== '') : ?>
                    <div class="col-md-6 col-lg-6 thirtyseven">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_37_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_37; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_37_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_37_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_37_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_38 !== '') : ?>
                    <div class="col-md-6 col-lg-6 thirtyeight">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_38_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_38; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_38_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_38_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_38_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_39 !== '') : ?>
                    <div class="col-md-6 col-lg-6 thirtynine">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_39_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_39; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_39_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_39_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_39_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_40 !== '') : ?>
                    <div class="col-md-6 col-lg-6 fourty">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_40_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_40; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_40_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_40_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_40_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_41 !== '') : ?>
                    <div class="col-md-6 col-lg-6 fourtyone">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_41_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_41; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_41_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_41_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_41_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif;
                if ($signature_image_42 !== '') : ?>
                    <div class="col-md-6 col-lg-6 fourtytwo">
                        <div class="thumbnail signature-text-color">
                            <a class="thumbnail-link" href="<?php echo $signature_image_42_title_link; ?>"
                               target="_self" title="Signature Destination"><img
                                        src="<?php echo $signature_image_42; ?>"></a>
                            <section id="" class="widget-section">
                                <div class="caption sig-caption">
                                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                                href="<?php echo $signature_image_42_title_link; ?>"
                                                                target="_self"
                                                                title="Signature Destination"><?php echo $signature_image_42_title; ?></a>
                                    </h3>
                                    <p class="text-justify"><?php echo $signature_image_42_caption; ?></p>
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif; ?>
            </div><!-- /.row -->
        <?php endif; ?>
    </div>

<?php
include_once get_template_directory() . '/page-templates/cta-sections/footer-cta.php';
get_footer();
