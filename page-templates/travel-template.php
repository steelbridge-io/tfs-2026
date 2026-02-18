<?php
/*
Template Name: Travel Template
Template Post Type: travel_cpt, lower48, guide_service
*/

include_once('post-meta/post-meta-travel-signature.php');
$default = '';

get_header('travel-header');

// Get responsive hero images (mobile/tablet/desktop)
$hero_images = tfs_get_responsive_hero_images(get_the_ID());

if (has_post_thumbnail()) :
    ?>
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
            <div class="hero-overlay position-absolute top-lg-60 top-lg-50-mw start-50 translate-middle text-center">
                <?php $sig_travel_logo = get_post_meta(get_the_ID(), 'signature-travel-logo', true); ?>
                <?php if ($sig_travel_logo !== '') : ?>
                    <img class="tfs-nav-logo-lg no-render-lg mb-5" loading="eager" src="<?php echo $sig_travel_logo; ?>"
                         alt="The Fly Shop 2025"/>
                <?php else: ?>
                    <img class="tfs-nav-logo-lg no-render-lg" loading="eager"
                         src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2017/06/TFSLogo.png"
                         alt="The Fly Shop 2025"/>
                <?php endif; ?>
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
                <div id="mobile-logo-container">
                    <!--<img class="scroll mobile-logo" loading="eager" src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2021/05/social_tfs_logo_og.png" alt="The Fly Shop 2025" />-->
                    <img class="no-scroll mobile-logo" loading="eager"
                         src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2025/09/tfs-logo-600x484-1-1.png"
                         alt="The Fly Shop 2025"/>
                </div>
                <h1 class="hero-title display-4 text-white"><?php echo get_the_title(); ?></h1>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if ($signature_travel_description !== '') : ?>
    <div class="container mt-4 cta-description">

        <?php echo '<h4>' . $signature_travel_description . '</h4>'; ?>

    </div>
<?php endif; ?>

    <!-- Breadcrumbs -->
    <div class="container mt-4">
        <?php the_fly_shop_breadcrumbs(); ?>
    </div>

    <div class="container mt-5">
        <!--<div id="scrollto"></div>-->
        <div id="primary" class="content-area row">
            <main id="main-main" class="site-main col-md-12" role="main">

                <?php
                // WordPress Blog Content
                while (have_posts()) : the_post();

                    get_template_part('template-parts/content', 'page');

                endwhile; // End of the loop.
                ?>

            </main>
        </div>
    </div>

    <div id="travel-template-grid" class="container container-xxl mt-5 mb-5">
<?php
if ($signature_travel_1_image !== '') : ?>
    <div class="row travel-template-row justify-content-center pt-4 pb-5 pr-2 pl-2 g-5">
    <div class="col-md-6 col-lg-6 one">
        <div class="thumbnail signature-text-color">
            <a class="thumbnail-link" href="<?php echo $signature_travel_section_1_title_link; ?>" target="_self"
               title="Signature Destination"><img src="<?php echo $signature_travel_1_image; ?>"></a>
            <section id="" class="widget-section">
                <div class="caption sig-caption">
                    <h3 class="widget-title"><a class="thumbnail-h3"
                                                href="<?php echo $signature_travel_section_1_title_link; ?>"
                                                target="_self"
                                                title="Signature Destination"><?php echo $signature_travel_section_1_title ?></a>
                    </h3>
                    <p class="text-justify"><?php echo $signature_travel_1_caption; ?></p>
                </div>
            </section>
        </div>
    </div>
    <?php if ($signature_travel_2_image !== '') : ?>
        <div class="col-md-6 col-lg-6 two">
            <div class="thumbnail signature-text-color">
                <a class="thumbnail-link" href="<?php echo $signature_travel_section_2_title_link; ?>" target="_self"
                   title="Signature Destination"><img src="<?php echo $signature_travel_2_image; ?>"></a>
                <section id="" class="widget-section">
                    <div class="caption sig-caption">
                        <h3 class="widget-title"><a class="thumbnail-h3"
                                                    href="<?php echo $signature_travel_section_2_title_link; ?>"
                                                    target="_self"
                                                    title="Signature Destination"><?php echo $signature_travel_section_2_title; ?></a>
                        </h3>
                        <p class="text-justify"><?php echo $signature_travel_2_caption; ?></p>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;
    if ($signature_travel_3_image !== '') : ?>
        <div class="col-md-6 col-lg-6 three">
            <div class="thumbnail signature-text-color">
                <a class="thumbnail-link" href="<?php echo $signature_travel_section_3_title_link; ?>" target="_self"
                   title="Signature Destination"><img src="<?php echo $signature_travel_3_image; ?>"></a>
                <section id="" class="widget-section">
                    <div class="caption sig-caption">
                        <h3 class="widget-title"><a class="thumbnail-h3"
                                                    href="<?php echo $signature_travel_section_3_title_link; ?>"
                                                    target="_self"
                                                    title="Signature Destination"><?php echo $signature_travel_section_3_title ?></a>
                        </h3>
                        <p class="text-justify"><?php echo $signature_travel_3_caption; ?></p>
                    </div>
                </section>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($signature_travel_4_image !== '') : ?>
        <div class="col-md-6 col-lg-6 four">
            <div class="thumbnail signature-text-color">
                <a class="thumbnail-link" href="<?php echo $signature_travel_section_4_title_link; ?>" target="_self"
                   title="Signature Destination"><img src="<?php echo $signature_travel_4_image; ?>"></a>
                <section id="" class="widget-section">
                    <div class="caption sig-caption">
                        <h3 class="widget-title"><a class="thumbnail-h3"
                                                    href="<?php echo $signature_travel_section_4_title_link; ?>"
                                                    target="_self"
                                                    title="Signature Destination"><?php echo $signature_travel_section_4_title; ?></a>
                        </h3>
                        <p class="text-justify"><?php echo $signature_travel_4_caption; ?></p>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;
    if ($signature_travel_5_image !== '') : ?>
        <div class="col-md-6 col-lg-6 five">
            <div class="thumbnail signature-text-color">
                <a class="thumbnail-link" href="<?php echo $signature_travel_section_5_title_link; ?>" target="_self"
                   title="Signature Destination"><img src="<?php echo $signature_travel_5_image; ?>"></a>
                <section id="" class="widget-section">
                    <div class="caption sig-caption">
                        <h3 class="widget-title"><a class="thumbnail-h3"
                                                    href="<?php echo $signature_travel_section_5_title_link; ?>"
                                                    target="_self"
                                                    title="Signature Destination"><?php echo $signature_travel_section_5_title; ?></a>
                        </h3>
                        <p class="text-justify"><?php echo $signature_travel_5_caption; ?></p>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;
    if ($signature_travel_6_image !== '') : ?>
        <div class="col-md-6 col-lg-6 six">
            <div class="thumbnail signature-text-color">
                <a class="thumbnail-link" href="<?php echo $signature_travel_section_6_title_link; ?>" target="_self"
                   title="Signature Destination"><img src="<?php echo $signature_travel_6_image; ?>"></a>
                <section id="" class="widget-section">
                    <div class="caption sig-caption">
                        <h3 class="widget-title"><a class="thumbnail-h3"
                                                    href="<?php echo $signature_travel_section_6_title_link; ?>"
                                                    target="_self"
                                                    title="Signature Destination"><?php echo $signature_travel_section_6_title; ?></a>
                        </h3>
                        <p class="text-justify"><?php echo $signature_travel_6_caption; ?></p>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;
    if ($signature_travel_7_image !== '') : ?>
        <div class="col-md-6 col-lg-6 seven">
            <div class="thumbnail signature-text-color">
                <a class="thumbnail-link" href="<?php echo $signature_travel_section_7_title_link; ?>" target="_self"
                   title="Signature Destination"><img src="<?php echo $signature_travel_7_image; ?>"></a>
                <section id="" class="widget-section">
                    <div class="caption sig-caption">
                        <h3 class="widget-title"><a class="thumbnail-h3"
                                                    href="<?php echo $signature_travel_section_7_title_link; ?>"
                                                    target="_self"
                                                    title="Signature Destination"><?php echo $signature_travel_section_7_title; ?></a>
                        </h3>
                        <p class="text-justify"><?php echo $signature_travel_7_caption; ?></p>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;
    if ($signature_travel_8_image !== '') : ?>
        <div class="col-md-6 col-lg-6 eight">
            <div class="thumbnail signature-text-color">
                <a class="thumbnail-link" href="<?php echo $signature_travel_section_8_title_link; ?>" target="_self"
                   title="Signature Destination"><img src="<?php echo $signature_travel_8_image; ?>"></a>
                <section id="" class="widget-section">
                    <div class="caption sig-caption">
                        <h3 class="widget-title"><a class="thumbnail-h3"
                                                    href="<?php echo $signature_travel_section_8_title_link; ?>"
                                                    target="_self"
                                                    title="Signature Destination"><?php echo $signature_travel_section_8_title; ?></a>
                        </h3>
                        <p class="text-justify"><?php echo $signature_travel_8_caption; ?></p>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;
    if ($signature_travel_9_image !== '') : ?>
        <div class="col-md-6 col-lg-6 nine">
            <div class="thumbnail signature-text-color">
                <a class="thumbnail-link" href="<?php echo $signature_travel_section_9_title_link; ?>" target="_self"
                   title="Signature Destination"><img src="<?php echo $signature_travel_9_image; ?>"></a>
                <section id="" class="widget-section">
                    <div class="caption sig-caption">
                        <h3 class="widget-title"><a class="thumbnail-h3"
                                                    href="<?php echo $signature_travel_section_9_title_link; ?>"
                                                    target="_self"
                                                    title="Signature Destination"><?php echo $signature_travel_section_9_title; ?></a>
                        </h3>
                        <p class="text-justify"><?php echo $signature_travel_9_caption; ?></p>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;
    if ($signature_travel_10_image !== '') : ?>
        <div class="col-md-6 col-lg-6 ten">
            <div class="thumbnail signature-text-color">
                <a class="thumbnail-link" href="<?php echo $signature_travel_section_10_title_link; ?>" target="_self"
                   title="Signature Destination"><img src="<?php echo $signature_travel_10_image; ?>"></a>
                <section id="" class="widget-section">
                    <div class="caption sig-caption">
                        <h3 class="widget-title"><a class="thumbnail-h3"
                                                    href="<?php echo $signature_travel_section_10_title_link; ?>"
                                                    target="_self"
                                                    title="Signature Destination"><?php echo $signature_travel_section_10_title; ?></a>
                        </h3>
                        <p class="text-justify"><?php echo $signature_travel_10_caption; ?></p>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;
    if ($signature_travel_11_image !== '') : ?>
        <div class="col-md-6 col-lg-6 eleven">
            <div class="thumbnail signature-text-color">
                <a class="thumbnail-link" href="<?php echo $signature_travel_section_11_title_link; ?>" target="_self"
                   title="Signature Destination"><img src="<?php echo $signature_travel_11_image; ?>"></a>
                <section id="" class="widget-section">
                    <div class="caption sig-caption">
                        <h3 class="widget-title"><a class="thumbnail-h3"
                                                    href="<?php echo $signature_travel_section_11_title_link; ?>"
                                                    target="_self"
                                                    title="Signature Destination"><?php echo $signature_travel_section_11_title; ?></a>
                        </h3>
                        <p class="text-justify"><?php echo $signature_travel_11_caption; ?></p>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;
    if ($signature_travel_12_image !== '') : ?>
        <div class="col-md-6 col-lg-6 tweleve">
            <div class="thumbnail signature-text-color">
                <a class="thumbnail-link" href="<?php echo $signature_travel_section_12_title_link; ?>" target="_self"
                   title="Signature Destination"><img src="<?php echo $signature_travel_12_image; ?>"></a>
                <section id="" class="widget-section">
                    <div class="caption sig-caption">
                        <h3 class="widget-title"><a class="thumbnail-h3"
                                                    href="<?php echo $signature_travel_section_12_title_link; ?>"
                                                    target="_self"
                                                    title="Signature Destination"><?php echo $signature_travel_section_12_title; ?></a>
                        </h3>
                        <p class="text-justify"><?php echo $signature_travel_12_caption; ?></p>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;
    if ($signature_travel_13_image !== '') : ?>
        <div class="col-md-6 col-lg-6 thirteen">
            <div class="thumbnail signature-text-color">
                <a class="thumbnail-link" href="<?php echo $signature_travel_section_13_title_link; ?>" target="_self"
                   title="Signature Destination"><img src="<?php echo $signature_travel_13_image; ?>"></a>
                <section id="" class="widget-section">
                    <div class="caption sig-caption">
                        <h3 class="widget-title"><a class="thumbnail-h3"
                                                    href="<?php echo $signature_travel_section_13_title_link; ?>"
                                                    target="_self"
                                                    title="Signature Destination"><?php echo $signature_travel_section_13_title; ?></a>
                        </h3>
                        <p class="text-justify"><?php echo $signature_travel_13_caption; ?></p>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;
    if ($signature_travel_14_image !== '') : ?>
        <div class="col-md-6 col-lg-6 fouteen">
            <div class="thumbnail signature-text-color">
                <a class="thumbnail-link" href="<?php echo $signature_travel_section_14_title_link; ?>" target="_self"
                   title="Signature Destination"><img src="<?php echo $signature_travel_14_image; ?>"></a>
                <section id="" class="widget-section">
                    <div class="caption sig-caption">
                        <h3 class="widget-title"><a class="thumbnail-h3"
                                                    href="<?php echo $signature_travel_section_14_title_link; ?>"
                                                    target="_self"
                                                    title="Signature Destination"><?php echo $signature_travel_section_14_title; ?></a>
                        </h3>
                        <p class="text-justify"><?php echo $signature_travel_14_caption; ?></p>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;
    if ($signature_travel_15_image !== '') : ?>
        <div class="col-md-6 col-lg-6 fifteen">
            <div class="thumbnail signature-text-color">
                <a class="thumbnail-link" href="<?php echo $signature_travel_section_15_title_link; ?>" target="_self"
                   title="Signature Destination"><img src="<?php echo $signature_travel_15_image; ?>"></a>
                <section id="" class="widget-section">
                    <div class="caption sig-caption">
                        <h3 class="widget-title"><a class="thumbnail-h3"
                                                    href="<?php echo $signature_travel_section_15_title_link; ?>"
                                                    target="_self"
                                                    title="Signature Destination"><?php echo $signature_travel_section_15_title; ?></a>
                        </h3>
                        <p class="text-justify"><?php echo $signature_travel_15_caption; ?></p>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;
    if ($signature_travel_16_image !== '') : ?>
        <div class="col-md-6 col-lg-6 sixteen">
            <div class="thumbnail signature-text-color">
                <a class="thumbnail-link" href="<?php echo $signature_travel_section_16_title_link; ?>" target="_self"
                   title="Signature Destination"><img src="<?php echo $signature_travel_16_image; ?>"></a>
                <section id="" class="widget-section">
                    <div class="caption sig-caption">
                        <h3 class="widget-title"><a class="thumbnail-h3"
                                                    href="<?php echo $signature_travel_section_16_title_link; ?>"
                                                    target="_self"
                                                    title="Signature Destination"><?php echo $signature_travel_section_16_title; ?></a>
                        </h3>
                        <p class="text-justify"><?php echo $signature_travel_16_caption; ?></p>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;
    if ($signature_travel_17_image !== '') : ?>
        <div class="col-md-6 col-lg-6 seventeen">
            <div class="thumbnail signature-text-color">
                <a class="thumbnail-link" href="<?php echo $signature_travel_section_17_title_link; ?>" target="_self"
                   title="Signature Destination"><img src="<?php echo $signature_travel_17_image; ?>"></a>
                <section id="" class="widget-section">
                    <div class="caption sig-caption">
                        <h3 class="widget-title"><a class="thumbnail-h3"
                                                    href="<?php echo $signature_travel_section_17_title_link; ?>"
                                                    target="_self"
                                                    title="Signature Destination"><?php echo $signature_travel_section_17_title; ?></a>
                        </h3>
                        <p class="text-justify"><?php echo $signature_travel_17_caption; ?></p>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;
    if ($signature_travel_18_image !== '') : ?>
        <div class="col-md-6 col-lg-6 eighteen">
            <div class="thumbnail signature-text-color">
                <a class="thumbnail-link" href="<?php echo $signature_travel_section_18_title_link; ?>" target="_self"
                   title="Signature Destination"><img src="<?php echo $signature_travel_18_image; ?>"></a>
                <section id="" class="widget-section">
                    <div class="caption sig-caption">
                        <h3 class="widget-title"><a class="thumbnail-h3"
                                                    href="<?php echo $signature_travel_section_18_title_link; ?>"
                                                    target="_self"
                                                    title="Signature Destination"><?php echo $signature_travel_section_18_title; ?></a>
                        </h3>
                        <p class="text-justify"><?php echo $signature_travel_18_caption; ?></p>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;
    if ($signature_travel_19_image !== '') : ?>
        <div class="col-md-6 col-lg-6 nineteen">
            <div class="thumbnail signature-text-color">
                <a class="thumbnail-link" href="<?php echo $signature_travel_section_19_title_link; ?>" target="_self"
                   title="Signature Destination"><img src="<?php echo $signature_travel_19_image; ?>"></a>
                <section id="" class="widget-section">
                    <div class="caption sig-caption">
                        <h3 class="widget-title"><a class="thumbnail-h3"
                                                    href="<?php echo $signature_travel_section_19_title_link; ?>"
                                                    target="_self"
                                                    title="Signature Destination"><?php echo $signature_travel_section_19_title; ?></a>
                        </h3>
                        <p class="text-justify"><?php echo $signature_travel_19_caption; ?></p>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;
    if ($signature_travel_20_image !== '') : ?>
        <div class="col-md-6 col-lg-6 twenty">
            <div class="thumbnail signature-text-color">
                <a class="thumbnail-link" href="<?php echo $signature_travel_section_20_title_link; ?>" target="_self"
                   title="Signature Destination"><img src="<?php echo $signature_travel_20_image; ?>"></a>
                <section id="" class="widget-section">
                    <div class="caption sig-caption">
                        <h3 class="widget-title"><a class="thumbnail-h3"
                                                    href="<?php echo $signature_travel_section_20_title_link; ?>"
                                                    target="_self"
                                                    title="Signature Destination"><?php echo $signature_travel_section_20_title; ?></a>
                        </h3>
                        <p class="text-justify"><?php echo $signature_travel_20_caption; ?></p>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;
    if ($signature_travel_21_image !== '') : ?>
        <div class="col-md-6 col-lg-6 twentyone">
            <div class="thumbnail signature-text-color">
                <a class="thumbnail-link" href="<?php echo $signature_travel_section_21_title_link; ?>" target="_self"
                   title="Signature Destination"><img src="<?php echo $signature_travel_21_image; ?>"></a>
                <section id="" class="widget-section">
                    <div class="caption sig-caption">
                        <h3 class="widget-title"><a class="thumbnail-h3"
                                                    href="<?php echo $signature_travel_section_21_title_link; ?>"
                                                    target="_self"
                                                    title="Signature Destination"><?php echo $signature_travel_section_21_title; ?></a>
                        </h3>
                        <p class="text-justify"><?php echo $signature_travel_21_caption; ?></p>
                    </div>
                </section>
            </div>
        </div>
    <?php endif;
    if ($signature_travel_22_image !== '') : ?>
    <div class="row">
        <div class="col-md-6 col-lg-6 twentytwo">
            <div class="thumbnail signature-text-color">
                <a class="thumbnail-link" href="<?php echo $signature_travel_section_22_title_link; ?>" target="_self"
                   title="Signature Destination"><img src="<?php echo $signature_travel_22_image; ?>"></a>
                <section id="" class="widget-section">
                    <div class="caption sig-caption">
                        <h3 class="widget-title"><a class="thumbnail-h3"
                                                    href="<?php echo $signature_travel_section_22_title_link; ?>"
                                                    target="_self"
                                                    title="Signature Destination"><?php echo $signature_travel_section_22_title; ?></a>
                        </h3>
                        <p class="text-justify"><?php echo $signature_travel_22_caption; ?></p>
                    </div>
                </section>
            </div>
        </div>
        <?php endif;
        if ($signature_travel_23_image !== '') : ?>
            <div class="col-md-6 col-lg-6 twentythree">
                <div class="thumbnail signature-text-color">
                    <a class="thumbnail-link" href="<?php echo $signature_travel_section_23_title_link; ?>"
                       target="_self" title="Signature Destination"><img
                                src="<?php echo $signature_travel_23_image; ?>"></a>
                    <section id="" class="widget-section">
                        <div class="caption sig-caption">
                            <h3 class="widget-title"><a class="thumbnail-h3"
                                                        href="<?php echo $signature_travel_section_23_title_link; ?>"
                                                        target="_self"
                                                        title="Signature Destination"><?php echo $signature_travel_section_23_title; ?></a>
                            </h3>
                            <p class="text-justify"><?php echo $signature_travel_23_caption; ?></p>
                        </div>
                    </section>
                </div>
            </div>
        <?php endif;
        if ($signature_travel_24_image !== '') : ?>
            <div class="col-md-6 col-lg-6 twentyfour">
                <div class="thumbnail signature-text-color">
                    <a class="thumbnail-link" href="<?php echo $signature_travel_section_24_title_link; ?>"
                       target="_self" title="Signature Destination"><img
                                src="<?php echo $signature_travel_24_image; ?>"></a>
                    <section id="" class="widget-section">
                        <div class="caption sig-caption">
                            <h3 class="widget-title"><a class="thumbnail-h3"
                                                        href="<?php echo $signature_travel_section_24_title_link; ?>"
                                                        target="_self"
                                                        title="Signature Destination"><?php echo $signature_travel_section_24_title; ?></a>
                            </h3>
                            <p class="text-justify"><?php echo $signature_travel_24_caption; ?></p>
                        </div>
                    </section>
                </div>
            </div>
        <?php endif;
        if ($signature_travel_25_image !== '') : ?>
            <div class="col-md-6 col-lg-6 twentyfive">
                <div class="thumbnail signature-text-color">
                    <a class="thumbnail-link" href="<?php echo $signature_travel_section_25_title_link; ?>"
                       target="_self" title="Signature Destination"><img
                                src="<?php echo $signature_travel_25_image; ?>"></a>
                    <section id="" class="widget-section">
                        <div class="caption sig-caption">
                            <h3 class="widget-title"><a class="thumbnail-h3"
                                                        href="<?php echo $signature_travel_section_25_title_link; ?>"
                                                        target="_self"
                                                        title="Signature Destination"><?php echo $signature_travel_section_25_title; ?></a>
                            </h3>
                            <p class="text-justify"><?php echo $signature_travel_25_caption; ?></p>
                        </div>
                    </section>
                </div>
            </div>
        <?php endif;
        if ($signature_travel_26_image !== '') : ?>
            <div class="col-md-6 col-lg-6 twentysix">
                <div class="thumbnail signature-text-color">
                    <a class="thumbnail-link" href="<?php echo $signature_travel_section_26_title_link; ?>"
                       target="_self" title="Signature Destination"><img
                                src="<?php echo $signature_travel_26_image; ?>"></a>
                    <section id="" class="widget-section">
                        <div class="caption sig-caption">
                            <h3 class="widget-title"><a class="thumbnail-h3"
                                                        href="<?php echo $signature_travel_section_26_title_link; ?>"
                                                        target="_self"
                                                        title="Signature Destination"><?php echo $signature_travel_section_26_title; ?></a>
                            </h3>
                            <p class="text-justify"><?php echo $signature_travel_26_caption; ?></p>
                        </div>
                    </section>
                </div>
            </div>
        <?php endif;
        if ($signature_travel_27_image !== '') : ?>
            <div class="col-md-6 col-lg-6 twentyseven">
                <div class="thumbnail signature-text-color">
                    <a class="thumbnail-link" href="<?php echo $signature_travel_section_27_title_link; ?>"
                       target="_self" title="Signature Destination"><img
                                src="<?php echo $signature_travel_27_image; ?>"></a>
                    <section id="" class="widget-section">
                        <div class="caption sig-caption">
                            <h3 class="widget-title"><a class="thumbnail-h3"
                                                        href="<?php echo $signature_travel_section_27_title_link; ?>"
                                                        target="_self"
                                                        title="Signature Destination"><?php echo $signature_travel_section_27_title; ?></a>
                            </h3>
                            <p class="text-justify"><?php echo $signature_travel_27_caption; ?></p>
                        </div>
                    </section>
                </div>
            </div>
        <?php endif;
        if ($signature_travel_28_image !== '') : ?>
            <div class="col-md-6 col-lg-6 twentyeight">
                <div class="thumbnail signature-text-color">
                    <a class="thumbnail-link" href="<?php echo $signature_travel_section_28_title_link; ?>"
                       target="_self" title="Signature Destination"><img
                                src="<?php echo $signature_travel_28_image; ?>"></a>
                    <section id="" class="widget-section">
                        <div class="caption sig-caption">
                            <h3 class="widget-title"><a class="thumbnail-h3"
                                                        href="<?php echo $signature_travel_section_28_title_link; ?>"
                                                        target="_self"
                                                        title="Signature Destination"><?php echo $signature_travel_section_28_title; ?></a>
                            </h3>
                            <p class="text-justify"><?php echo $signature_travel_28_caption; ?></p>
                        </div>
                    </section>
                </div>
            </div>
        <?php endif;
        if ($signature_travel_29_image !== '') : ?>
            <div class="col-md-6 col-lg-6 twentynine">
                <div class="thumbnail signature-text-color">
                    <a class="thumbnail-link" href="<?php echo $signature_travel_section_29_title_link; ?>"
                       target="_self" title="Signature Destination"><img
                                src="<?php echo $signature_travel_29_image; ?>"></a>
                    <section id="" class="widget-section">
                        <div class="caption sig-caption">
                            <h3 class="widget-title"><a class="thumbnail-h3"
                                                        href="<?php echo $signature_travel_section_29_title_link; ?>"
                                                        target="_self"
                                                        title="Signature Destination"><?php echo $signature_travel_section_29_title; ?></a>
                            </h3>
                            <p class="text-justify"><?php echo $signature_travel_29_caption; ?></p>
                        </div>
                    </section>
                </div>
            </div>
        <?php endif;
        if ($signature_travel_30_image !== '') : ?>
            <div class="col-md-6 col-lg-6 thirty">
                <div class="thumbnail signature-text-color">
                    <a class="thumbnail-link" href="<?php echo $signature_travel_section_30_title_link; ?>"
                       target="_self" title="Signature Destination"><img
                                src="<?php echo $signature_travel_30_image; ?>"></a>
                    <section id="" class="widget-section">
                        <div class="caption sig-caption">
                            <h3 class="widget-title"><a class="thumbnail-h3"
                                                        href="<?php echo $signature_travel_section_30_title_link; ?>"
                                                        target="_self"
                                                        title="Signature Destination"><?php echo $signature_travel_section_30_title; ?></a>
                            </h3>
                            <p class="text-justify"><?php echo $signature_travel_30_caption; ?></p>
                        </div>
                    </section>
                </div>
            </div>
        <?php endif;
        if ($signature_travel_31_image !== '') : ?>
            <div class="col-md-6 col-lg-6 thirtyone">
                <div class="thumbnail signature-text-color">
                    <a class="thumbnail-link" href="<?php echo $signature_travel_section_31_title_link; ?>"
                       target="_self" title="Signature Destination"><img
                                src="<?php echo $signature_travel_31_image; ?>"></a>
                    <section id="" class="widget-section">
                        <div class="caption sig-caption">
                            <h3 class="widget-title"><a class="thumbnail-h3"
                                                        href="<?php echo $signature_travel_section_31_title_link; ?>"
                                                        target="_self"
                                                        title="Signature Destination"><?php echo $signature_travel_section_31_title; ?></a>
                            </h3>
                            <p class="text-justify"><?php echo $signature_travel_31_caption; ?></p>
                        </div>
                    </section>
                </div>
            </div>
        <?php endif;
        if ($signature_travel_32_image !== '') : ?>
            <div class="col-md-6 col-lg-6 thirtytwo">
                <div class="thumbnail signature-text-color">
                    <a class="thumbnail-link" href="<?php echo $signature_travel_section_32_title_link; ?>"
                       target="_self" title="Signature Destination"><img
                                src="<?php echo $signature_travel_32_image; ?>"></a>
                    <section id="" class="widget-section">
                        <div class="caption sig-caption">
                            <h3 class="widget-title"><a class="thumbnail-h3"
                                                        href="<?php echo $signature_travel_section_32_title_link; ?>"
                                                        target="_self"
                                                        title="Signature Destination"><?php echo $signature_travel_section_32_title; ?></a>
                            </h3>
                            <p class="text-justify"><?php echo $signature_travel_32_caption; ?></p>
                        </div>
                    </section>
                </div>
            </div>
        <?php endif;
        if ($signature_travel_33_image !== '') : ?>
            <div class="col-md-6 col-lg-6 thirtythree">
                <div class="thumbnail signature-text-color">
                    <a class="thumbnail-link" href="<?php echo $signature_travel_section_33_title_link; ?>"
                       target="_self" title="Signature Destination"><img
                                src="<?php echo $signature_travel_33_image; ?>"></a>
                    <section id="" class="widget-section">
                        <div class="caption sig-caption">
                            <h3 class="widget-title"><a class="thumbnail-h3"
                                                        href="<?php echo $signature_travel_section_33_title_link; ?>"
                                                        target="_self"
                                                        title="Signature Destination"><?php echo $signature_travel_section_33_title; ?></a>
                            </h3>
                            <p class="text-justify"><?php echo $signature_travel_33_caption; ?></p>
                        </div>
                    </section>
                </div>
            </div>
        <?php endif;
        if ($signature_travel_34_image !== '') : ?>
            <div class="col-md-6 col-lg-6 thirtyfour">
                <div class="thumbnail signature-text-color">
                    <a class="thumbnail-link" href="<?php echo $signature_travel_section_34_title_link; ?>"
                       target="_self" title="Signature Destination"><img
                                src="<?php echo $signature_travel_34_image; ?>"></a>
                    <section id="" class="widget-section">
                        <div class="caption sig-caption">
                            <h3 class="widget-title"><a class="thumbnail-h3"
                                                        href="<?php echo $signature_travel_section_34_title_link; ?>"
                                                        target="_self"
                                                        title="Signature Destination"><?php echo $signature_travel_section_34_title; ?></a>
                            </h3>
                            <p class="text-justify"><?php echo $signature_travel_34_caption; ?></p>
                        </div>
                    </section>
                </div>
            </div>
        <?php endif;
        if ($signature_travel_35_image !== '') : ?>
            <div class="col-md-6 col-lg-6 thirtyfive">
                <div class="thumbnail signature-text-color">
                    <a class="thumbnail-link" href="<?php echo $signature_travel_section_35_title_link; ?>"
                       target="_self" title="Signature Destination"><img
                                src="<?php echo $signature_travel_35_image; ?>"></a>
                    <section id="" class="widget-section">
                        <div class="caption sig-caption">
                            <h3 class="widget-title"><a class="thumbnail-h3"
                                                        href="<?php echo $signature_travel_section_35_title_link; ?>"
                                                        target="_self"
                                                        title="Signature Destination"><?php echo $signature_travel_section_35_title; ?></a>
                            </h3>
                            <p class="text-justify"><?php echo $signature_travel_35_caption; ?></p>
                        </div>
                    </section>
                </div>
            </div>
        <?php endif;
        if ($signature_travel_36_image !== '') : ?>
            <div class="col-md-6 col-lg-6 thirtysix">
                <div class="thumbnail signature-text-color">
                    <a class="thumbnail-link" href="<?php echo $signature_travel_section_36_title_link; ?>"
                       target="_self" title="Signature Destination"><img
                                src="<?php echo $signature_travel_36_image; ?>"></a>
                    <section id="" class="widget-section">
                        <div class="caption sig-caption">
                            <h3 class="widget-title"><a class="thumbnail-h3"
                                                        href="<?php echo $signature_travel_section_36_title_link; ?>"
                                                        target="_self"
                                                        title="Signature Destination"><?php echo $signature_travel_section_36_title; ?></a>
                            </h3>
                            <p class="text-justify"><?php echo $signature_travel_36_caption; ?></p>
                        </div>
                    </section>
                </div>
            </div>
        <?php endif;
        if ($signature_travel_37_image !== '') : ?>
            <div class="col-md-6 col-lg-6 thirtyseven">
                <div class="thumbnail signature-text-color">
                    <a class="thumbnail-link" href="<?php echo $signature_travel_section_37_title_link; ?>"
                       target="_self" title="Signature Destination"><img
                                src="<?php echo $signature_travel_37_image; ?>"></a>
                    <section id="" class="widget-section">
                        <div class="caption sig-caption">
                            <h3 class="widget-title"><a class="thumbnail-h3"
                                                        href="<?php echo $signature_travel_section_37_title_link; ?>"
                                                        target="_self"
                                                        title="Signature Destination"><?php echo $signature_travel_section_37_title; ?></a>
                            </h3>
                            <p class="text-justify"><?php echo $signature_travel_37_caption; ?></p>
                        </div>
                    </section>
                </div>
            </div>
        <?php endif;
        if ($signature_travel_38_image !== '') : ?>
            <div class="col-md-6 col-lg-6 thirtyeight">
                <div class="thumbnail signature-text-color">
                    <a class="thumbnail-link" href="<?php echo $signature_travel_section_38_title_link; ?>"
                       target="_self" title="Signature Destination"><img
                                src="<?php echo $signature_travel_38_image; ?>"></a>
                    <section id="" class="widget-section">
                        <div class="caption sig-caption">
                            <h3 class="widget-title"><a class="thumbnail-h3"
                                                        href="<?php echo $signature_travel_section_38_title_link; ?>"
                                                        target="_self"
                                                        title="Signature Destination"><?php echo $signature_travel_section_38_title; ?></a>
                            </h3>
                            <p class="text-justify"><?php echo $signature_travel_38_caption; ?></p>
                        </div>
                    </section>
                </div>
            </div>
        <?php endif;
        if ($signature_travel_39_image !== '') : ?>
            <div class="col-md-6 col-lg-6 thirtynine">
                <div class="thumbnail signature-text-color">
                    <a class="thumbnail-link" href="<?php echo $signature_travel_section_39_title_link; ?>"
                       target="_self" title="Signature Destination"><img
                                src="<?php echo $signature_travel_39_image; ?>"></a>
                    <section id="" class="widget-section">
                        <div class="caption sig-caption">
                            <h3 class="widget-title"><a class="thumbnail-h3"
                                                        href="<?php echo $signature_travel_section_39_title_link; ?>"
                                                        target="_self"
                                                        title="Signature Destination"><?php echo $signature_travel_section_39_title; ?></a>
                            </h3>
                            <p class="text-justify"><?php echo $signature_travel_39_caption; ?></p>
                        </div>
                    </section>
                </div>
            </div>
        <?php endif;
        if ($signature_travel_40_image !== '') : ?>
            <div class="col-md-6 col-lg-6 fourty">
                <div class="thumbnail signature-text-color">
                    <a class="thumbnail-link" href="<?php echo $signature_travel_section_40_title_link; ?>"
                       target="_self" title="Signature Destination"><img
                                src="<?php echo $signature_travel_40_image; ?>"></a>
                    <section id="" class="widget-section">
                        <div class="caption sig-caption">
                            <h3 class="widget-title"><a class="thumbnail-h3"
                                                        href="<?php echo $signature_travel_section_40_title_link; ?>"
                                                        target="_self"
                                                        title="Signature Destination"><?php echo $signature_travel_section_40_title; ?></a>
                            </h3>
                            <p class="text-justify"><?php echo $signature_travel_40_caption; ?></p>
                        </div>
                    </section>
                </div>
            </div>
        <?php endif;
        if ($signature_travel_41_image !== '') : ?>
            <div class="col-md-6 col-lg-6 fourtyone">
                <div class="thumbnail signature-text-color">
                    <a class="thumbnail-link" href="<?php echo $signature_travel_section_41_title_link; ?>"
                       target="_self" title="Signature Destination"><img
                                src="<?php echo $signature_travel_41_image; ?>"></a>
                    <section id="" class="widget-section">
                        <div class="caption sig-caption">
                            <h3 class="widget-title"><a class="thumbnail-h3"
                                                        href="<?php echo $signature_travel_section_41_title_link; ?>"
                                                        target="_self"
                                                        title="Signature Destination"><?php echo $signature_travel_section_41_title; ?></a>
                            </h3>
                            <p class="text-justify"><?php echo $signature_travel_41_caption; ?></p>
                        </div>
                    </section>
                </div>
            </div>
        <?php endif;
        if ($signature_travel_42_image !== '') : ?>
            <div class="col-md-6 col-lg-6 fourtytwo">
                <div class="thumbnail signature-text-color">
                    <a class="thumbnail-link" href="<?php echo $signature_travel_section_42_title_link; ?>"
                       target="_self" title="Signature Destination"><img
                                src="<?php echo $signature_travel_42_image; ?>"></a>
                    <section id="" class="widget-section">
                        <div class="caption sig-caption">
                            <h3 class="widget-title"><a class="thumbnail-h3"
                                                        href="<?php echo $signature_travel_section_42_title_link; ?>"
                                                        target="_self"
                                                        title="Signature Destination"><?php echo $signature_travel_section_42_title; ?></a>
                            </h3>
                            <p class="text-justify"><?php echo $signature_travel_42_caption; ?></p>
                        </div>
                    </section>
                </div>
            </div>
        <?php endif; ?>
    </div><!-- /.row -->
<?php endif; ?>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="primeTravelTempmodal" tabindex="-1" aria-labelledby="primeTravelTempmodalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title" id="primeTravelTempmodalLabel">
                        <?php if (get_theme_mod('pt_mdl_logo')) : ?>
                            <img src="<?php echo get_theme_mod('pt_mdl_logo'); ?>" alt="The Fly Shop">
                        <?php endif; ?>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <!--<i class="lni lni-close"></i>--></button>
                </div>
                <div class="modal-body">
                    <?php echo do_shortcode('[gravityform id="6" title="true" description="true"]'); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Carousel -->

    <!-- Alternative: Horizontal Scrolling Gallery -->
<?php
$carousel_display = get_post_meta(get_the_ID(), 'signature-travel-csel-checkbox', true);
if ($carousel_display === 'yes'):
    ?>
    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-12">
                <div class="horizontal-scroll-gallery">
                    <div class="d-flex gap-3 overflow-auto pb-3" style="scroll-behavior: smooth;">
                        <?php
                        for ($i = 1; $i <= 6; $i++) {
                            $image = get_post_meta(get_the_ID(), "signature-travel-csel-{$i}-img", true);
                            $link = get_post_meta(get_the_ID(), "signature-travel-csel-{$i}-link", true);

                            if (!empty($image)):
                                ?>
                                <div class="flex-shrink-0" style="min-width: 300px;">
                                    <div class="card h-100">
                                        <img src="<?php echo esc_url($image); ?>"
                                             class="card-img-top gallery-image"
                                             alt="Gallery Image <?php echo $i; ?>"
                                             data-bs-toggle="modal"
                                             data-bs-target="#imageModal"
                                             data-image="<?php echo esc_url($image); ?>"
                                             data-link="<?php echo esc_url($link); ?>"
                                             style="height: 250px; object-fit: cover; cursor: pointer;">
                                    </div>
                                </div>
                            <?php
                            endif;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal (same as above) -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Gallery Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImage" src="" class="img-fluid" alt="Gallery Image">
                    <div id="modalLink" class="mt-3" style="display: none;">
                        <a id="modalLinkAnchor" href="" class="btn btn-primary" target="_blank">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

    <!-- /Bootstrap Carousel -->

<?php
include_once get_template_directory() . '/page-templates/cta-sections/footer-cta.php';
get_footer();
