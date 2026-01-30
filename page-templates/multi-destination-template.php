<?php
/*
	* Template Name: Multi Destination Template
	* Template Post Type: post, page, travel_cpt, schools_cpt, adventures, guide_service, fishcamp_cpt, travel-blog
	* Developed for The Fly Shop
	* Author: Chris Parsons
	* Author URL: https://steelbridge.io
*/

/**
 * Find meta data for this page in the following file:
 * /wp-content/plugins/sbm-image-field/includes/multi_destinations_field.php
 * template JS is enqueued in the /page-templates/template-functions/multi-destination-template-functions.php file
 */

include_once('post-meta/post-meta-multi-destination.php');
get_header('multi-dest-header');

if (has_post_thumbnail()) : ?>

    <div class="container-fluid travel-template-hero p-0">
        <div class="hero-image position-relative">
            <!-- Full-Width Featured Image -->
            <img src="<?php echo esc_url(
                    has_post_thumbnail() ?
                            get_the_post_thumbnail_url(get_the_ID(), 'full') :
                            get_template_directory_uri() . '/images/the-fly-shop-logo-white.png'
            ); ?>"
                 class="img-fluid w-100"
                 alt="<?php the_title_attribute(); ?>">

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
            <!-- Full-Width Featured Image -->
            <img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2025/01/Staff_Main6.webp"
                 class="img-fluid w-100" alt="<?php echo get_the_title(); ?>">
            <!-- Overlay Content -->
            <div class="hero-overlay position-absolute top-50 start-50 translate-middle text-center">
                <div id="below-nav-logo" class="below-nav-logo-container mobile-logo-container">
                    <a href="#">
                        <img class="tfs-nav-logo scroll mobile-logo" loading="eager"
                             src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2021/05/social_tfs_logo_og.png"
                             alt="The Fly Shop 2025"/>
                        <img class="tfs-nav-logo no-scroll mobile-logo" loading="eager"
                             src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2025/09/tfs-logo-600x484-1-1.png"
                             alt="The Fly Shop 2025"/>
                    </a>
                </div>
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

<section id="one" class="sections-wrap wrapper style5 special">
    <div class="inner">

        <!-- === Introduction Section === -->
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
    </div>
</section>

<div class="container-fluid container-wide">

    <!-- ==== Section #1 ==== -->
    <section class="spotlight-multi-destination mt-7 mb-7">
        <div class="row align-items-center">
            <div class="col-md-5 col-lg-5">
                <div class="image">
                    <!-- Costs Video/Text/Image Option -->
<?php
                    if (!empty($sections_1_video)) :?>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="<?php echo $sections_1_video ?>"
                                    allowfullscreen></iframe>
                        </div>
<?php elseif (!empty($sections_1_image) && empty($sections_1_video)) : ?>
                        <img src="<?php echo esc_url($sections_1_image); ?>" alt="The Fly Shop Travel Image"/>
<?php elseif (!empty($sec1_dest_img_1)) : ?>
                        <div id="carousel-wrap">
                            <div id="sec1-dest-indicator-1" class="carousel slide">
                                <div class="carousel-indicators wave-bowl-exaggerated">
                                    <button type="button" data-bs-target="#sec1-dest-indicator-1" data-bs-slide-to="0"
                                            class="active" aria-current="true" aria-label="Slide 1"><?php echo !empty($sec1_dest_btn_title_1) ? esc_html($sec1_dest_btn_title_1) : 'Reservations &amp; Rates'; ?></button>
                                    <button type="button" data-bs-target="#sec1-dest-indicator-1" data-bs-slide-to="1"
                                            aria-label="Slide 2"><?php echo !empty($sec1_dest_btn_title_2) ? esc_html($sec1_dest_btn_title_2) : 'Getting To'; ?></button>
                                    <button type="button" data-bs-target="#sec1-dest-indicator-1" data-bs-slide-to="2"
                                            aria-label="Slide 3"><?php echo !empty($sec1_dest_btn_title_3) ? esc_html($sec1_dest_btn_title_3) : 'Lodging'; ?></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo $sec1_dest_img_1 ?>" class="d-block w-100"
                                             alt="<?php echo $sec1_dest_title_1 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4><?php echo $sec1_dest_img_title_1 ?></h4>
                                            <p><?php echo $sec1_dest_img_desc_1 ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo $sec1_dest_img_2 ?>" class="d-block w-100"
                                             alt="<?php echo $sec1_dest_title_2 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4><?php echo $sec1_dest_img_title_2 ?></h4>
                                            <p><?php echo $sec1_dest_img_desc_2 ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo $sec1_dest_img_3 ?>" class="d-block w-100"
                                             alt="<?php echo $sec1_dest_title_3 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                           <h4><?php echo $sec1_dest_img_title_3 ?></h4>
                                           <p><?php echo $sec1_dest_img_desc_3 ?></p>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                        data-bs-target="#sec1-dest-indicator-1" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                        data-bs-target="#sec1-dest-indicator-1" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
<?php endif; ?>
                </div>
            </div>
            <div class="col-md-7 col-lg-7">
                <div class="content">
                    <div id="travel-style">
<?php if (empty($sections_1_image) && empty($sections_1_video)) : ?>
                            <h2 id="sec1-dynamic-title"><?php echo $sec1_dest_title_1 ?></h2>
                            <div id="sec1-dynamic-content" class="travel"><?php echo $sec1_dest_textarea_1; ?></div>
                            <div class="accordion" id="accordion1"
                                 style="<?php echo !empty($sec1_dest_readmore_1) ? '' : 'display: none;'; ?>">
                                <div class="accordion-item multi-dest-accordion">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo1"
                                                aria-expanded="false" aria-controls="collapseTwo1">
                                            Read more...&nbsp;<span class="arrow-down"></span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo1" class="accordion-collapse collapse"
                                         data-bs-parent="#accordion1">
                                        <div class="accordion-body">
                                            <div id="sec1-dynamic-readmore"
                                                 class="travel"><?php echo $sec1_dest_readmore_1; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php else : ?>
                            <h2><?php echo $sections_1_title ?></h2>
                            <div class="travel"><?php echo $sections_1_textarea; ?></div>
                            <div class="accordion" id="accordion1">
                                <div class="accordion-item multi-dest-accordion">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo1"
                                                aria-expanded="false" aria-controls="collapseTwo1">
                                            Read more...&nbsp;<span class="arrow-down"></span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo1" class="accordion-collapse collapse"
                                         data-bs-parent="#accordion1">
                                        <div class="accordion-body">
                                            <div id="dynamic-readmore"
                                                 class="travel"><?php echo $sections_1_readmore ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==== Section #2 ==== -->

    <section class="spotlight-multi-destination mt-7 mb-7">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-md-5 col-lg-5">
                <div class="image">
                    <!-- Costs Video/Text/Image Option -->
<?php
                    if (!empty($sections_2_video)) :?>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="<?php echo $sections_2_video; ?>"
                                    allowfullscreen></iframe>
                        </div>
<?php elseif (!empty($sections_2_image) && empty($sections_2_video)) : ?>
                        <img src="<?php echo $sections_2_image; ?>" alt="The Fly Shop Travel Image"/>
<?php elseif (!empty($sec2_dest_img_1)) : ?>
                        <div id="carousel-wrap">
                            <div id="sec2-dest-indicator-1" class="carousel slide">
                                <div class="carousel-indicators wave-bowl-exaggerated">
                                    <button type="button" data-bs-target="#sec2-dest-indicator-1" data-bs-slide-to="0"
                                            class="active" aria-current="true" aria-label="Slide 1"><?php echo !empty($sec2_dest_btn_title_1) ? esc_html($sec2_dest_btn_title_1) : 'Reservations &amp; Rates'; ?></button>
                                    <button type="button" data-bs-target="#sec2-dest-indicator-1" data-bs-slide-to="1"
                                            aria-label="Slide 2"><?php echo !empty($sec2_dest_btn_title_2) ? esc_html($sec2_dest_btn_title_2) : 'Getting To'; ?></button>
                                    <button type="button" data-bs-target="#sec2-dest-indicator-1" data-bs-slide-to="2"
                                            aria-label="Slide 3"><?php echo !empty($sec2_dest_btn_title_3) ? esc_html($sec2_dest_btn_title_3) : 'Lodging'; ?></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo $sec2_dest_img_1 ?>" class="d-block w-100"
                                             alt="<?php echo $sec2_dest_title_1 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                             <h4><?php echo $sec2_dest_img_title_1 ?></h4>
                                             <p><?php echo $sec2_dest_img_desc_1 ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo $sec2_dest_img_2 ?>" class="d-block w-100"
                                             alt="<?php echo $sec2_dest_title_2 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4><?php echo $sec2_dest_img_title_2 ?></h4>
                                            <p><?php echo $sec2_dest_img_desc_2 ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo $sec2_dest_img_3 ?>" class="d-block w-200"
                                             alt="<?php echo $sec2_dest_title_3 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4><?php echo $sec2_dest_img_title_3 ?></h4>
                                            <p><?php echo $sec2_dest_img_desc_3 ?></p>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                        data-bs-target="#sec2-dest-indicator-1" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                        data-bs-target="#sec2-dest-indicator-1" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
<?php endif; ?>
                </div>
            </div>
            <div class="col-md-7 col-lg-7">
                <div class="content">
                    <div id="travel-style">
<?php if (empty($sections_2_image) && empty($sections_2_video)) : ?>
                            <h2 id="sec2-dynamic-title"><?php echo $sec2_dest_title_1; ?></h2>
                            <div id="sec2-dynamic-content" class="travel"><?php echo $sec2_dest_textarea_1; ?></div>
                            <div class="accordion" id="accordion2"
                                 style="<?php echo !empty($sec2_dest_readmore_1) ? '' : 'display: none;'; ?>">
                                <div class="accordion-item multi-dest-accordion">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo2"
                                                aria-expanded="false" aria-controls="collapseTwo2">
                                            Read more...&nbsp;<span class="arrow-down"></span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo2" class="accordion-collapse collapse"
                                         data-bs-parent="#accordion2">
                                        <div class="accordion-body">
                                            <div id="sec2-dynamic-readmore"
                                                 class="travel"><?php echo $sec2_dest_readmore_1; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php else : ?>
                            <h2><?php echo $sections_2_title; ?></h2>
                            <div class="travel"><?php echo $sections_2_textarea; ?></div>
                            <div class="accordion" id="accordion2">
                                <div class="accordion-item multi-dest-accordion">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo2"
                                                aria-expanded="false" aria-controls="collapseTwo2">
                                            Read more...&nbsp;<span class="arrow-down"></span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo2" class="accordion-collapse collapse"
                                         data-bs-parent="#accordion2">
                                        <div class="accordion-body">
                                            <div id="dynamic-readmore"
                                                 class="travel"><?php echo $sections_2_readmore; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==== Section #3 ==== -->
    <section class="spotlight-multi-destination mt-7 mb-7">
        <div class="row align-items-center">
            <div class="col-md-5 col-lg-5">
                <div class="image">
                    <!-- Costs Video/Text/Image Option -->
<?php
                    if (!empty($sections_3_video)) :?>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="<?php echo $sections_3_video; ?>"
                                    allowfullscreen></iframe>
                        </div>
<?php elseif (!empty($sections_3_image) && empty($sections_3_video)) : ?>
                        <img src="<?php echo $sections_3_image; ?>" alt="The Fly Shop Travel Image"/>
<?php else : ?>
                        <div id="carousel-wrap">
                            <div id="sec3-dest-indicator-1" class="carousel slide">
                                <div class="carousel-indicators wave-bowl-exaggerated">
                                    <button type="button" data-bs-target="#sec3-dest-indicator-1" data-bs-slide-to="0"
                                            class="active" aria-current="true" aria-label="Slide 1"><?php echo !empty($sec3_dest_btn_title_1) ? esc_html($sec3_dest_btn_title_1) : 'Reservations &amp; Rates'; ?></button>
                                    <button type="button" data-bs-target="#sec3-dest-indicator-1" data-bs-slide-to="1"
                                            aria-label="Slide 2"><?php echo !empty($sec3_dest_btn_title_2) ? esc_html($sec3_dest_btn_title_2) : 'Getting To'; ?></button>
                                    <button type="button" data-bs-target="#sec3-dest-indicator-1" data-bs-slide-to="2"
                                            aria-label="Slide 3"><?php echo !empty($sec3_dest_btn_title_3) ? esc_html($sec3_dest_btn_title_3) : 'Lodging'; ?></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo $sec3_dest_img_1 ?>" class="d-block w-100"
                                             alt="<?php echo $sec3_dest_title_1 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4><?php echo $sec3_dest_img_title_1 ?></h4>
                                            <p><?php echo $sec3_dest_img_desc_1 ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo $sec3_dest_img_2 ?>" class="d-block w-100"
                                             alt="<?php echo $sec3_dest_title_2 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4><?php echo $sec3_dest_img_title_2 ?></h4>
                                            <p><?php echo $sec3_dest_img_desc_2 ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo $sec3_dest_img_3 ?>" class="d-block w-200"
                                             alt="<?php echo $sec3_dest_title_3 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4><?php echo $sec3_dest_img_title_3 ?></h4>
                                            <p><?php echo $sec3_dest_img_desc_3 ?></p>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                        data-bs-target="#sec3-dest-indicator-1" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                        data-bs-target="#sec3-dest-indicator-1" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
<?php endif; ?>
                </div>
            </div>
            <div class="col-md-7 col-lg-7">
                <div class="content">
                    <div id="travel-style">
<?php if (empty($sections_3_image) && empty($sections_3_video)) : ?>
                            <h2 id="sec3-dynamic-title"><?php echo $sec3_dest_title_1; ?></h2>
                            <div id="sec3-dynamic-content" class="travel"><?php echo $sec3_dest_textarea_1; ?></div>
                            <div class="accordion" id="accordion3"
                                 style="<?php echo !empty($sec3_dest_readmore_1) ? '' : 'display: none;'; ?>">
                                <div class="accordion-item multi-dest-accordion">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo3"
                                                aria-expanded="false" aria-controls="collapseTwo3">
                                            Read more...&nbsp;<span class="arrow-down"></span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo3" class="accordion-collapse collapse"
                                         data-bs-parent="#accordion3">
                                        <div class="accordion-body">
                                            <div id="sec3-dynamic-readmore"
                                                 class="travel"><?php echo $sec3_dest_readmore_1; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php else : ?>
                            <h2><?php echo $sections_3_title; ?></h2>
                            <div class="travel"><?php echo $sections_3_textarea; ?></div>
                            <div class="accordion" id="accordion3">
                                <div class="accordion-item multi-dest-accordion">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo3"
                                                aria-expanded="false" aria-controls="collapseTwo3">
                                            Read more...&nbsp;<span class="arrow-down"></span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo3" class="accordion-collapse collapse"
                                         data-bs-parent="#accordion3">
                                        <div class="accordion-body">
                                            <div id="sec3-dynamic-readmore"
                                                 class="travel"><?php echo $sections_3_readmore; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==== Section #4 ==== -->

    <section class="spotlight-multi-destination mt-7 mb-7">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-md-5 col-lg-5">
                <div class="image">
                    <!-- Costs Video/Text/Image Option -->
<?php
                    if (!empty($sections_4_video)) :?>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="<?php echo $sections_4_video; ?>"
                                    allowfullscreen></iframe>
                        </div>
<?php elseif (!empty($sections_4_image) && empty($sections_4_video)) : ?>
                        <img src="<?php echo $sections_4_image; ?>" alt="The Fly Shop Travel Image"/>
<?php else : ?>
                        <div id="carousel-wrap">
                            <div id="sec4-dest-indicator-1" class="carousel slide">
                                <div class="carousel-indicators wave-bowl-exaggerated">
                                    <button type="button" data-bs-target="#sec4-dest-indicator-1" data-bs-slide-to="0"
                                            class="active" aria-current="true" aria-label="Slide 1"><?php echo !empty($sec4_dest_btn_title_1) ? esc_html($sec4_dest_btn_title_1) : 'Reservations &amp; Rates'; ?></button>
                                    <button type="button" data-bs-target="#sec4-dest-indicator-1" data-bs-slide-to="1"
                                            aria-label="Slide 2"><?php echo !empty($sec4_dest_btn_title_2) ? esc_html($sec4_dest_btn_title_2) : 'Getting To'; ?></button>
                                    <button type="button" data-bs-target="#sec4-dest-indicator-1" data-bs-slide-to="2"
                                            aria-label="Slide 3"><?php echo !empty($sec4_dest_btn_title_3) ? esc_html($sec4_dest_btn_title_3) : 'Lodging'; ?></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo $sec4_dest_img_1 ?>" class="d-block w-100"
                                             alt="<?php echo $sec4_dest_title_1 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4><?php echo $sec4_dest_img_title_1 ?></h4>
                                            <p><?php echo $sec4_dest_img_desc_1 ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo $sec4_dest_img_2 ?>" class="d-block w-100"
                                             alt="<?php echo $sec4_dest_title_2 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4><?php echo $sec4_dest_img_title_2 ?></h4>
                                            <p><?php echo $sec4_dest_img_desc_2 ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo $sec4_dest_img_3 ?>" class="d-block w-200"
                                             alt="<?php echo $sec4_dest_title_3 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4><?php echo $sec4_dest_img_title_3 ?></h4>
                                            <p><?php echo $sec4_dest_img_desc_3 ?></p>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                        data-bs-target="#sec4-dest-indicator-1" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                        data-bs-target="#sec4-dest-indicator-1" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
<?php endif; ?>
                </div>
            </div>
            <div class="col-md-7 col-lg-7">
                <div class="content">
                    <div id="travel-style">
<?php if (empty($sections_4_image) && empty($sections_4_video)) : ?>
                            <h2 id="sec4-dynamic-title"><?php echo $sec4_dest_title_1; ?></h2>
                            <div id="sec4-dynamic-content" class="travel"><?php echo $sec4_dest_textarea_1; ?></div>
                            <div class="accordion" id="accordion4"
                                 style="<?php echo !empty($sec4_dest_readmore_1) ? '' : 'display: none;'; ?>">
                                <div class="accordion-item multi-dest-accordion">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo4"
                                                aria-expanded="false" aria-controls="collapseTwo4">
                                            Read more...&nbsp;<span class="arrow-down"></span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo4" class="accordion-collapse collapse"
                                         data-bs-parent="#accordion4">
                                        <div class="accordion-body">
                                            <div id="sec4-dynamic-readmore"
                                                 class="travel"><?php echo $sec4_dest_readmore_1; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php else : ?>
                            <h2><?php echo $sections_4_title; ?></h2>
                            <div class="travel"><?php echo $sections_4_textarea; ?></div>
                            <div class="accordion" id="accordion4">
                                <div class="accordion-item multi-dest-accordion">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo4"
                                                aria-expanded="false" aria-controls="collapseTwo4">
                                            Read more...&nbsp;<span class="arrow-down"></span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo4" class="accordion-collapse collapse"
                                         data-bs-parent="#accordion4">
                                        <div class="accordion-body">
                                            <div id="sec4-dynamic-readmore"
                                                 class="travel"><?php echo $sections_4_readmore; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==== Section #5 ==== -->

    <section class="spotlight-multi-destination mt-7 mb-7">
        <div class="row align-items-center">
            <div class="col-md-5 col-lg-5">
                <div class="image">
                    <!-- Costs Video/Text/Image Option -->
<?php
                    if (!empty($sections_5_video)) :?>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="<?php echo $sections_5_video; ?>"
                                    allowfullscreen></iframe>
                        </div>
<?php elseif (!empty($sections_5_image) && empty($sections_5_video)) : ?>
                        <img src="<?php echo $sections_5_image; ?>" alt="The Fly Shop Travel Image"/>
<?php else : ?>
                        <div id="carousel-wrap">
                            <div id="sec5-dest-indicator-1" class="carousel slide">
                                <div class="carousel-indicators wave-bowl-exaggerated">
                                    <button type="button" data-bs-target="#sec5-dest-indicator-1" data-bs-slide-to="0"
                                            class="active" aria-current="true" aria-label="Slide 1"><?php echo !empty($sec5_dest_btn_title_1) ? esc_html($sec5_dest_btn_title_1) : 'Reservations &amp; Rates'; ?></button>
                                    <button type="button" data-bs-target="#sec5-dest-indicator-1" data-bs-slide-to="1"
                                            aria-label="Slide 2"><?php echo !empty($sec5_dest_btn_title_2) ? esc_html($sec5_dest_btn_title_2) : 'Getting To'; ?></button>
                                    <button type="button" data-bs-target="#sec5-dest-indicator-1" data-bs-slide-to="2"
                                            aria-label="Slide 3"><?php echo !empty($sec5_dest_btn_title_3) ? esc_html($sec5_dest_btn_title_3) : 'Lodging'; ?></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo $sec5_dest_img_1 ?>" class="d-block w-100"
                                             alt="<?php echo $sec5_dest_title_1 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4><?php echo $sec5_dest_img_title_1 ?></h4>
                                            <p><?php echo $sec5_dest_img_desc_1 ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo $sec5_dest_img_2 ?>" class="d-block w-100"
                                             alt="<?php echo $sec5_dest_title_2 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4><?php echo $sec5_dest_img_title_2 ?></h4>
                                            <p><?php echo $sec5_dest_img_desc_2 ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo $sec5_dest_img_3 ?>" class="d-block w-200"
                                             alt="<?php echo $sec5_dest_title_3 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4><?php echo $sec5_dest_img_title_3 ?></h4>
                                            <p><?php echo $sec5_dest_img_desc_3 ?></p>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                        data-bs-target="#sec5-dest-indicator-1" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                        data-bs-target="#sec5-dest-indicator-1" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
<?php endif; ?>
                </div>
            </div>
            <div class="col-md-7 col-lg-7">
                <div class="content">
                    <div id="travel-style">
<?php if (empty($sections_5_image) && empty($sections_5_video)) : ?>
                            <h2 id="sec5-dynamic-title"><?php echo $sec5_dest_title_1; ?></h2>
                            <div id="sec5-dynamic-content" class="travel"><?php echo $sec5_dest_textarea_1; ?></div>
                            <div class="accordion" id="accordion5"
                                 style="<?php echo !empty($sec5_dest_readmore_1) ? '' : 'display: none;'; ?>">
                                <div class="accordion-item multi-dest-accordion">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo5"
                                                aria-expanded="false" aria-controls="collapseTwo5">
                                            Read more...&nbsp;<span class="arrow-down"></span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo5" class="accordion-collapse collapse"
                                         data-bs-parent="#accordion5">
                                        <div class="accordion-body">
                                            <div id="sec5-dynamic-readmore"
                                                 class="travel"><?php echo $sec5_dest_readmore_1; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php else : ?>
                            <h2><?php echo $sections_5_title; ?></h2>
                            <div class="travel"><?php echo $sections_5_textarea; ?></div>
                            <div class="accordion" id="accordion5">
                                <div class="accordion-item multi-dest-accordion">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo5"
                                                aria-expanded="false" aria-controls="collapseTwo5">
                                            Read more...&nbsp;<span class="arrow-down"></span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo5" class="accordion-collapse collapse"
                                         data-bs-parent="#accordion5">
                                        <div class="accordion-body">
                                            <div id="sec5-dynamic-readmore"
                                                 class="travel"><?php echo $sections_5_readmore; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==== Section #6 ==== -->

    <section class="spotlight-multi-destination mt-7 mb-7">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-md-5 col-lg-5">
                <div class="image">
                    <!-- Costs Video/Text/Image Option -->
<?php
                    if (!empty($sections_6_video)) :?>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="<?php echo $sections_6_video; ?>"
                                    allowfullscreen></iframe>
                        </div>
<?php elseif (!empty($sections_6_image) && empty($sections_6_video)) : ?>
                        <img src="<?php echo $sections_6_image; ?>" alt="The Fly Shop Travel Image"/>
<?php else : ?>
                        <div id="carousel-wrap">
                            <div id="sec6-dest-indicator-1" class="carousel slide">
                                <div class="carousel-indicators wave-bowl-exaggerated">
                                    <button type="button" data-bs-target="#sec6-dest-indicator-1" data-bs-slide-to="0"
                                            class="active" aria-current="true" aria-label="Slide 1"><?php echo !empty($sec6_dest_btn_title_1) ? esc_html($sec6_dest_btn_title_1) : 'Reservations &amp; Rates'; ?></button>
                                    <button type="button" data-bs-target="#sec6-dest-indicator-1" data-bs-slide-to="1"
                                            aria-label="Slide 2"><?php echo !empty($sec6_dest_btn_title_2) ? esc_html($sec6_dest_btn_title_2) : 'Getting To'; ?></button>
                                    <button type="button" data-bs-target="#sec6-dest-indicator-1" data-bs-slide-to="2"
                                            aria-label="Slide 3"><?php echo !empty($sec6_dest_btn_title_3) ? esc_html($sec6_dest_btn_title_3) : 'Lodging'; ?></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo $sec6_dest_img_1 ?>" class="d-block w-100"
                                             alt="<?php echo $sec6_dest_title_1 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4><?php echo $sec6_dest_img_title_1 ?></h4>
                                            <p><?php echo $sec6_dest_img_desc_1 ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo $sec6_dest_img_2 ?>" class="d-block w-100"
                                             alt="<?php echo $sec6_dest_title_2 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4><?php echo $sec6_dest_img_title_2 ?></h4>
                                            <p><?php echo $sec6_dest_img_desc_2 ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo $sec6_dest_img_3 ?>" class="d-block w-200"
                                             alt="<?php echo $sec6_dest_title_3 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4><?php echo $sec6_dest_img_title_3 ?></h4>
                                            <p><?php echo $sec6_dest_img_desc_3 ?></p>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                        data-bs-target="#sec6-dest-indicator-1" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                        data-bs-target="#sec6-dest-indicator-1" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
<?php endif; ?>
                </div>
            </div>
            <div class="col-md-7 col-lg-7">
                <div class="content">
                    <div id="travel-style">
<?php if (empty($sections_6_image) && empty($sections_6_video)) : ?>
                            <h2 id="sec6-dynamic-title"><?php echo $sec6_dest_title_1; ?></h2>
                            <div id="sec6-dynamic-content" class="travel"><?php echo $sec6_dest_textarea_1; ?></div>
                            <div class="accordion" id="accordion6"
                                 style="<?php echo !empty($sec6_dest_readmore_1) ? '' : 'display: none;'; ?>">
                                <div class="accordion-item multi-dest-accordion">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo6"
                                                aria-expanded="false" aria-controls="collapseTwo6">
                                            Read more...&nbsp;<span class="arrow-down"></span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo6" class="accordion-collapse collapse"
                                         data-bs-parent="#accordion6">
                                        <div class="accordion-body">
                                            <div id="sec6-dynamic-readmore"
                                                 class="travel"><?php echo $sec6_dest_readmore_1; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php else : ?>
                            <h2><?php echo $sections_6_title; ?></h2>
                            <div class="travel"><?php echo $sections_6_textarea; ?></div>
                            <div class="accordion" id="accordion6">
                                <div class="accordion-item multi-dest-accordion">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo6"
                                                aria-expanded="false" aria-controls="collapseTwo6">
                                            Read more...&nbsp;<span class="arrow-down"></span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo6" class="accordion-collapse collapse"
                                         data-bs-parent="#accordion6">
                                        <div class="accordion-body">
                                            <div id="sec6-dynamic-readmore"
                                                 class="travel"><?php echo $sections_6_readmore; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==== Section #7 ==== -->

    <section class="spotlight-multi-destination mt-7 mb-7">
        <div class="row align-items-center">
            <div class="col-md-5 col-lg-5">
                <div class="image">
                    <!-- Costs Video/Text/Image Option -->
<?php
                    if (!empty($sections_7_video)) :?>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="<?php echo $sections_7_video; ?>"
                                    allowfullscreen></iframe>
                        </div>
<?php elseif (!empty($sections_7_image) && empty($sections_7_video)) : ?>
                        <img src="<?php echo $sections_7_image; ?>" alt="The Fly Shop Travel Image"/>
<?php else : ?>
                        <div id="carousel-wrap">
                            <div id="sec7-dest-indicator-1" class="carousel slide">
                                <div class="carousel-indicators wave-bowl-exaggerated">
                                    <button type="button" data-bs-target="#sec7-dest-indicator-1" data-bs-slide-to="0"
                                            class="active" aria-current="true" aria-label="Slide 1"><?php echo !empty($sec7_dest_btn_title_1) ? esc_html($sec7_dest_btn_title_1) : 'Reservations &amp; Rates'; ?></button>
                                    <button type="button" data-bs-target="#sec7-dest-indicator-1" data-bs-slide-to="1"
                                            aria-label="Slide 2"><?php echo !empty($sec7_dest_btn_title_2) ? esc_html($sec7_dest_btn_title_2) : 'Getting To'; ?></button>
                                    <button type="button" data-bs-target="#sec7-dest-indicator-1" data-bs-slide-to="2"
                                            aria-label="Slide 3"><?php echo !empty($sec7_dest_btn_title_3) ? esc_html($sec7_dest_btn_title_3) : 'Lodging'; ?></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo $sec7_dest_img_1 ?>" class="d-block w-100"
                                             alt="<?php echo $sec7_dest_title_1 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4><?php echo $sec7_dest_img_title_1 ?></h4>
                                            <p><?php echo $sec7_dest_img_desc_1 ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo $sec7_dest_img_2 ?>" class="d-block w-100"
                                             alt="<?php echo $sec7_dest_title_2 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4><?php echo $sec7_dest_img_title_2 ?></h4>
                                            <p><?php echo $sec7_dest_img_desc_2 ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo $sec7_dest_img_3 ?>" class="d-block w-200"
                                             alt="<?php echo $sec7_dest_title_3 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4><?php echo $sec7_dest_img_title_3 ?></h4>
                                            <p><?php echo $sec7_dest_img_desc_3 ?></p>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                        data-bs-target="#sec7-dest-indicator-1" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                        data-bs-target="#sec7-dest-indicator-1" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
<?php endif; ?>
                </div>
            </div>
            <div class="col-md-7 col-lg-7">
                <div class="content">
                    <div id="travel-style">
<?php if (empty($sections_7_image) && empty($sections_7_video)) : ?>
                            <h2 id="sec7-dynamic-title"><?php echo $sec7_dest_title_1; ?></h2>
                            <div id="sec7-dynamic-content" class="travel"><?php echo $sec7_dest_textarea_1; ?></div>
                            <div class="accordion" id="accordion7"
                                 style="<?php echo !empty($sec7_dest_readmore_1) ? '' : 'display: none;'; ?>">
                                <div class="accordion-item multi-dest-accordion">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo7"
                                                aria-expanded="false" aria-controls="collapseTwo7">
                                            Read more...&nbsp;<span class="arrow-down"></span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo7" class="accordion-collapse collapse"
                                         data-bs-parent="#accordion7">
                                        <div class="accordion-body">
                                            <div id="sec7-dynamic-readmore"
                                                 class="travel"><?php echo $sec7_dest_readmore_1; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php else : ?>
                            <h2><?php echo $sections_7_title; ?></h2>
                            <div class="travel"><?php echo $sections_7_textarea; ?></div>
                            <div class="accordion" id="accordion7">
                                <div class="accordion-item multi-dest-accordion">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo7"
                                                aria-expanded="false" aria-controls="collapseTwo7">
                                            Read more...&nbsp;<span class="arrow-down"></span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo7" class="accordion-collapse collapse"
                                         data-bs-parent="#accordion7">
                                        <div class="accordion-body">
                                            <div id="sec7-dynamic-readmore"
                                                 class="travel"><?php echo $sections_7_readmore; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==== Section #8 ==== -->

    <section class="spotlight-multi-destination mt-7 mb-7">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-md-5 col-lg-5">
                <div class="image">
                    <!-- Costs Video/Text/Image Option -->
<?php
                    if (!empty($sections_8_video)) :?>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="<?php echo $sections_8_video; ?>"
                                    allowfullscreen></iframe>
                        </div>
<?php elseif (!empty($sections_8_image) && empty($sections_8_video)) : ?>
                        <img src="<?php echo $sections_8_image; ?>" alt="The Fly Shop Travel Image"/>
<?php else : ?>
                        <div id="carousel-wrap">
                            <div id="sec8-dest-indicator-1" class="carousel slide">
                                <div class="carousel-indicators wave-bowl-exaggerated">
                                    <button type="button" data-bs-target="#sec8-dest-indicator-1" data-bs-slide-to="0"
                                            class="active" aria-current="true" aria-label="Slide 1"><?php echo !empty($sec8_dest_btn_title_1) ? esc_html($sec8_dest_btn_title_1) : 'Reservations &amp; Rates'; ?></button>
                                    <button type="button" data-bs-target="#sec8-dest-indicator-1" data-bs-slide-to="1"
                                            aria-label="Slide 2"><?php echo !empty($sec8_dest_btn_title_2) ? esc_html($sec8_dest_btn_title_2) : 'Getting To'; ?></button>
                                    <button type="button" data-bs-target="#sec8-dest-indicator-1" data-bs-slide-to="2"
                                            aria-label="Slide 3"><?php echo !empty($sec8_dest_btn_title_3) ? esc_html($sec8_dest_btn_title_3) : 'Lodging'; ?></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo $sec8_dest_img_1 ?>" class="d-block w-100"
                                             alt="<?php echo $sec8_dest_title_1 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4><?php echo $sec8_dest_img_title_1 ?></h4>
                                            <p><?php echo $sec8_dest_img_desc_1 ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo $sec8_dest_img_2 ?>" class="d-block w-100"
                                             alt="<?php echo $sec8_dest_title_2 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4><?php echo $sec8_dest_img_title_2 ?></h4>
                                            <p><?php echo $sec8_dest_img_desc_2 ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo $sec8_dest_img_3 ?>" class="d-block w-200"
                                             alt="<?php echo $sec8_dest_title_3 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4><?php echo $sec8_dest_img_title_3 ?></h4>
                                            <p><?php echo $sec8_dest_img_desc_3 ?></p>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                        data-bs-target="#sec8-dest-indicator-1" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                        data-bs-target="#sec8-dest-indicator-1" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
<?php endif; ?>
                </div>
            </div>
            <div class="col-md-7 col-lg-7">
                <div class="content">
                    <div id="travel-style">
<?php if (empty($sections_8_image) && empty($sections_8_video)) : ?>
                            <h2 id="sec8-dynamic-title"><?php echo $sec8_dest_title_1; ?></h2>
                            <div id="sec8-dynamic-content" class="travel"><?php echo $sec8_dest_textarea_1; ?></div>
                            <div class="accordion" id="accordion8"
                                 style="<?php echo !empty($sec8_dest_readmore_1) ? '' : 'display: none;'; ?>">
                                <div class="accordion-item multi-dest-accordion">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo8"
                                                aria-expanded="false" aria-controls="collapseTwo8">
                                            Read more...&nbsp;<span class="arrow-down"></span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo8" class="accordion-collapse collapse"
                                         data-bs-parent="#accordion8">
                                        <div class="accordion-body">
                                            <div id="sec8-dynamic-readmore"
                                                 class="travel"><?php echo $sec8_dest_readmore_1; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php else : ?>
                            <h2><?php echo $sections_8_title; ?></h2>
                            <div class="travel"><?php echo $sections_8_textarea; ?></div>
                            <div class="accordion" id="accordion8">
                                <div class="accordion-item multi-dest-accordion">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo8"
                                                aria-expanded="false" aria-controls="collapseTwo8">
                                            Read more...&nbsp;<span class="arrow-down"></span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo8" class="accordion-collapse collapse"
                                         data-bs-parent="#accordion8">
                                        <div class="accordion-body">
                                            <div id="sec8-dynamic-readmore"
                                                 class="travel"><?php echo $sections_8_readmore; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==== Section #9 ==== -->

    <section class="spotlight-multi-destination mt-7 mb-7">
        <div class="row align-items-center">
            <div class="col-md-5 col-lg-5">
                <div class="image">
                    <!-- Costs Video/Text/Image Option -->
<?php
                    if (!empty($sections_9_video)) :?>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="<?php echo $sections_9_video; ?>"
                                    allowfullscreen></iframe>
                        </div>
<?php elseif (!empty($sections_9_image) && empty($sections_9_video)) : ?>
                        <img src="<?php echo $sections_9_image; ?>" alt="The Fly Shop Travel Image"/>
<?php else : ?>
                        <div id="carousel-wrap">
                            <div id="sec9-dest-indicator-1" class="carousel slide">
                                <div class="carousel-indicators wave-bowl-exaggerated">
                                    <button type="button" data-bs-target="#sec9-dest-indicator-1" data-bs-slide-to="0"
                                            class="active" aria-current="true" aria-label="Slide 1"><?php echo !empty($sec9_dest_btn_title_1) ? esc_html($sec9_dest_btn_title_1) : 'Reservations &amp; Rates'; ?></button>
                                    <button type="button" data-bs-target="#sec9-dest-indicator-1" data-bs-slide-to="1"
                                            aria-label="Slide 2"><?php echo !empty($sec9_dest_btn_title_2) ? esc_html($sec9_dest_btn_title_2) : 'Getting To'; ?></button>
                                    <button type="button" data-bs-target="#sec9-dest-indicator-1" data-bs-slide-to="2"
                                            aria-label="Slide 3"><?php echo !empty($sec9_dest_btn_title_3) ? esc_html($sec9_dest_btn_title_3) : 'Lodging'; ?></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo $sec9_dest_img_1 ?>" class="d-block w-100"
                                             alt="<?php echo $sec9_dest_title_1 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4><?php echo $sec9_dest_img_title_1 ?></h4>
                                            <p><?php echo $sec9_dest_img_desc_1 ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo $sec9_dest_img_2 ?>" class="d-block w-100"
                                             alt="<?php echo $sec9_dest_title_2 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4><?php echo $sec9_dest_img_title_2 ?></h4>
                                            <p><?php echo $sec9_dest_img_desc_2 ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo $sec9_dest_img_3 ?>" class="d-block w-200"
                                             alt="<?php echo $sec9_dest_title_3 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4><?php echo $sec9_dest_img_title_3 ?></h4>
                                            <p><?php echo $sec9_dest_img_desc_3 ?></p>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                        data-bs-target="#sec9-dest-indicator-1" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                        data-bs-target="#sec9-dest-indicator-1" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
<?php endif; ?>
                </div>
            </div>
            <div class="col-md-7 col-lg-7">
                <div class="content">
                    <div id="travel-style">
<?php if (empty($sections_9_image) && empty($sections_9_video)) : ?>
                            <h2 id="sec9-dynamic-title"><?php echo $sec9_dest_title_1; ?></h2>
                            <div id="sec9-dynamic-content" class="travel"><?php echo $sec9_dest_textarea_1; ?></div>
                            <div class="accordion" id="accordion9"
                                 style="<?php echo !empty($sec9_dest_readmore_1) ? '' : 'display: none;'; ?>">
                                <div class="accordion-item multi-dest-accordion">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo9"
                                                aria-expanded="false" aria-controls="collapseTwo9">
                                            Read more...&nbsp;<span class="arrow-down"></span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo9" class="accordion-collapse collapse"
                                         data-bs-parent="#accordion9">
                                        <div class="accordion-body">
                                            <div id="sec9-dynamic-readmore"
                                                 class="travel"><?php echo $sec9_dest_readmore_1; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php else : ?>
                            <h2><?php echo $sections_9_title; ?></h2>
                            <div class="travel"><?php echo $sections_9_textarea; ?></div>
                            <div class="accordion" id="accordion9">
                                <div class="accordion-item multi-dest-accordion">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo9"
                                                aria-expanded="false" aria-controls="collapseTwo9">
                                            Read more...&nbsp;<span class="arrow-down"></span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo9" class="accordion-collapse collapse"
                                         data-bs-parent="#accordion9">
                                        <div class="accordion-body">
                                            <div id="sec9-dynamic-readmore"
                                                 class="travel"><?php echo $sections_9_readmore; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==== Section #10 ==== -->

    <section class="spotlight-multi-destination mt-7 mb-7">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-md-5 col-lg-5">
                <div class="image">
                    <!-- Costs Video/Text/Image Option -->
<?php
                    if (!empty($sections_10_video)) :?>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="<?php echo $sections_10_video; ?>"
                                    allowfullscreen></iframe>
                        </div>
<?php elseif (!empty($sections_10_image) && empty($sections_10_video)) : ?>
                        <img src="<?php echo $sections_10_image; ?>" alt="The Fly Shop Travel Image"/>
<?php else : ?>
                        <div id="carousel-wrap">
                            <div id="sec10-dest-indicator-1" class="carousel slide">
                                <div class="carousel-indicators wave-bowl-exaggerated">
                                    <button type="button" data-bs-target="#sec10-dest-indicator-1" data-bs-slide-to="0"
                                            class="active" aria-current="true" aria-label="Slide 1"><?php echo !empty($sec10_dest_btn_title_1) ? esc_html($sec10_dest_btn_title_1) : 'Reservations &amp; Rates'; ?></button>
                                    <button type="button" data-bs-target="#sec10-dest-indicator-1" data-bs-slide-to="1"
                                            aria-label="Slide 2"><?php echo !empty($sec10_dest_btn_title_2) ? esc_html($sec10_dest_btn_title_2) : 'Getting To'; ?></button>
                                    <button type="button" data-bs-target="#sec10-dest-indicator-1" data-bs-slide-to="2"
                                            aria-label="Slide 3"><?php echo !empty($sec10_dest_btn_title_3) ? esc_html($sec10_dest_btn_title_3) : 'Lodging'; ?></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo $sec10_dest_img_1 ?>" class="d-block w-100"
                                             alt="<?php echo $sec10_dest_title_1 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4><?php echo $sec10_dest_img_title_1 ?></h4>
                                            <p><?php echo $sec10_dest_img_desc_1 ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo $sec10_dest_img_2 ?>" class="d-block w-100"
                                             alt="<?php echo $sec10_dest_title_2 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4><?php echo $sec10_dest_img_title_2 ?></h4>
                                            <p><?php echo $sec10_dest_img_desc_2 ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo $sec10_dest_img_3 ?>" class="d-block w-200"
                                             alt="<?php echo $sec10_dest_title_3 ?>">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h4><?php echo $sec10_dest_img_title_3 ?></h4>
                                            <p><?php echo $sec10_dest_img_desc_3 ?></p>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                        data-bs-target="#sec10-dest-indicator-1" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                        data-bs-target="#sec10-dest-indicator-1" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
<?php endif; ?>
                </div>
            </div>
            <div class="col-md-7 col-lg-7">
                <div class="content">
                    <div id="travel-style">
<?php if (empty($sections_10_image) && empty($sections_10_video)) : ?>
                            <h2 id="sec10-dynamic-title"><?php echo $sec10_dest_title_1; ?></h2>
                            <div id="sec10-dynamic-content" class="travel"><?php echo $sec10_dest_textarea_1; ?></div>
                            <div class="accordion" id="accordion10"
                                 style="<?php echo !empty($sec10_dest_readmore_1) ? '' : 'display: none;'; ?>">
                                <div class="accordion-item multi-dest-accordion">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo10"
                                                aria-expanded="false" aria-controls="collapseTwo10">
                                            Read more...&nbsp;<span class="arrow-down"></span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo10" class="accordion-collapse collapse"
                                         data-bs-parent="#accordion10">
                                        <div class="accordion-body">
                                            <div id="sec10-dynamic-readmore"
                                                 class="travel"><?php echo $sec10_dest_readmore_1; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php else : ?>
                            <h2><?php echo $sections_10_title; ?></h2>
                            <div class="travel"><?php echo $sections_10_textarea; ?></div>
                            <div class="accordion" id="accordion10">
                                <div class="accordion-item multi-dest-accordion">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo10"
                                                aria-expanded="false" aria-controls="collapseTwo10">
                                            Read more...&nbsp;<span class="arrow-down"></span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo10" class="accordion-collapse collapse"
                                         data-bs-parent="#accordion10">
                                        <div class="accordion-body">
                                            <div id="sec10-dynamic-readmore"
                                                 class="travel"><?php echo $sections_10_readmore; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php if (!empty($galleryphoto_1_image)) { ?>
    <section id="three" class="wrapper style7 special">
        <div class="inner container">
            <div class="row g-4 additional-listing regional-waters">

<?php if (get_post_meta(get_the_ID(), 'galleryphoto-1-image', TRUE)) {
                    echo '<div class="col-6 col-md-3">
			 <div class="thumbnail">
				 <img src="' . $galleryphoto_1_image . '" 
							class="img-fluid gallery-trigger" 
							data-bs-toggle="modal" 
							data-bs-target=".guide-modal" 
							data-bs-slide-to="0" 
							alt="The Fly Shop Images">
			 </div>
		 	</div>';
                } ?>

<?php if (get_post_meta(get_the_ID(), 'galleryphoto-2-image', TRUE)) {
                    echo '<div class="col-6 col-md-3">
				<div class="thumbnail">
					<img src="' . $galleryphoto_2_image . '" 
							 class="img-fluid gallery-trigger" 
							 data-bs-toggle="modal" 
							 data-bs-target=".guide-modal" 
							 data-bs-slide-to="1" 
							 alt="The Fly Shop Images">
				</div>
			</div>';
                } ?>

<?php if (get_post_meta(get_the_ID(), 'galleryphoto-3-image', TRUE)) {
                    echo '<div class="col-6 col-md-3">
				<div class="thumbnail">
					<img src="' . $galleryphoto_3_image . '" 
							 class="img-fluid gallery-trigger" 
							 data-bs-toggle="modal" 
							 data-bs-target=".guide-modal" 
							 data-bs-slide-to="2" 
							 alt="The Fly Shop Images">
				</div>
			</div>';
                } ?>

<?php if (get_post_meta(get_the_ID(), 'galleryphoto-4-image', TRUE)) {
                    echo '<div class="col-6 col-md-3">
				<div class="thumbnail">
					<img src="' . $galleryphoto_4_image . '" 
							 class="img-fluid gallery-trigger" 
							 data-bs-toggle="modal" 
							 data-bs-target=".guide-modal" 
							 data-bs-slide-to="3" 
							 alt="The Fly Shop Images">
				</div>
			</div>';
                } ?>

                <!-- Second Row Travel Images -->

<?php if (get_post_meta(get_the_ID(), 'galleryphoto-5-image', TRUE)) {
                    echo '<div class="col-6 col-md-3">
				<div class="thumbnail">
					<img src="' . $galleryphoto_5_image . '" 
							 class="img-fluid gallery-trigger" 
							 data-bs-toggle="modal" 
							 data-bs-target=".guide-modal" 
							 data-bs-slide-to="4" 
							 alt="The Fly Shop Images">
				</div>
			</div>';
                } ?>

<?php if (get_post_meta(get_the_ID(), 'galleryphoto-6-image', TRUE)) {
                    echo '<div class="col-6 col-md-3">
				 <div class="thumbnail">
					 <img src="' . $galleryphoto_6_image . '" 
								class="img-fluid gallery-trigger" 
								data-bs-toggle="modal" 
								data-bs-target=".guide-modal" 
								data-bs-slide-to="5" 
								alt="The Fly Shop Images">
				 </div>
			 </div>';
                } ?>

<?php if (get_post_meta(get_the_ID(), 'galleryphoto-7-image', TRUE)) {
                    echo '<div class="col-6 col-md-3">
				<div class="thumbnail">
					<img src="' . $galleryphoto_7_image . '" 
							 class="img-fluid gallery-trigger" 
							 data-bs-toggle="modal" 
							 data-bs-target=".guide-modal" 
							 data-bs-slide-to="6" 
							 alt="The Fly Shop Images">
				</div>
			</div>';
                } ?>

<?php if (get_post_meta(get_the_ID(), 'galleryphoto-8-image', TRUE)) {
                    echo '<div class="col-6 col-md-3">
				<div class="thumbnail">
					<img src="' . $galleryphoto_8_image . '" 
							 class="img-fluid gallery-trigger" 
							 data-bs-toggle="modal" 
							 data-bs-target=".guide-modal" 
							 data-bs-slide-to="7" 
							 alt="The Fly Shop Images">
				</div>
			</div>';
                } ?>

            </div>
        </div>
    </section>
<?php } ?>

<section id="cta" class="wrapper mt-5 mb-5">
    <div class="inner container">
        <div id="cta-trigger" class="cta-trigger-area">
            <header class="text-center">
                <h2 class="cta-trigger-title"><?php echo $multi_dest_cta_title ?></h2>
                <div class="cta-trigger-subtitle"><?php echo $multi_dest_cta_text ?></div>
                <button class="btn btn-primary cta-expand-btn" id="expandCTA">
                    Get Started <i class="fas fa-chevron-up"></i>
                </button>
            </header>
        </div>

        <div id="cta-form-container" class="cta-form-container">
            <div class="form-wrapper">
                <div class="form-header">
                    <h3>Contact Our Travel Specialists</h3>
                    <button class="close-form" id="closeCTA">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="form-content">
                    <div class="form-content">
<?php
                        $page_title = get_the_title();
                        $form_url_params = '?page_title=' . urlencode($page_title);
                        echo do_shortcode('[gravityform id="17" title="false" description="false" field_values="page_title=' . urlencode($page_title) . '"]');
                        ?>
                    </div>
                    <!-- Fallback content if no form is available -->
                    <div class="contact-fallback">
                        <p>Call us directly at <strong>(800) 669-3474</strong> or use the form above to get started.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once get_template_directory() . '/page-templates/template-functions/multi-destination-template-functions.php';
include_once get_template_directory() . '/page-templates/cta-sections/footer-cta.php';

get_footer(); ?>

<!-- MODAL -->
<div class="container">
    <div class="modal fade guide-modal" tabindex="-1" aria-labelledby="guideModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <!-- Carousel -->
                    <div id="guide-carousel" class="carousel slide">
                        <!-- Carousel indicators -->
                        <div class="carousel-indicators">
<?php if (get_post_meta(get_the_ID(), 'galleryphoto-1-image', TRUE)) {
                                echo '<button type="button" data-bs-target="#guide-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>';
                            } ?>

<?php if (get_post_meta(get_the_ID(), 'galleryphoto-2-image', TRUE)) {
                                echo '<button type="button" data-bs-target="#guide-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>';
                            } ?>

<?php if (get_post_meta(get_the_ID(), 'galleryphoto-3-image', TRUE)) {
                                echo '<button type="button" data-bs-target="#guide-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>';
                            } ?>

<?php if (get_post_meta(get_the_ID(), 'galleryphoto-4-image', TRUE)) {
                                echo '<button type="button" data-bs-target="#guide-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>';
                            } ?>

<?php if (get_post_meta(get_the_ID(), 'galleryphoto-5-image', TRUE)) {
                                echo '<button type="button" data-bs-target="#guide-carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>';
                            } ?>

<?php if (get_post_meta(get_the_ID(), 'galleryphoto-6-image', TRUE)) {
                                echo '<button type="button" data-bs-target="#guide-carousel" data-bs-slide-to="5" aria-label="Slide 6"></button>';
                            } ?>

<?php if (get_post_meta(get_the_ID(), 'galleryphoto-7-image', TRUE)) {
                                echo '<button type="button" data-bs-target="#guide-carousel" data-bs-slide-to="6" aria-label="Slide 7"></button>';
                            } ?>

<?php if (get_post_meta(get_the_ID(), 'galleryphoto-8-image', TRUE)) {
                                echo '<button type="button" data-bs-target="#guide-carousel" data-bs-slide-to="7" aria-label="Slide 8"></button>';
                            } ?>
                        </div>

                        <!-- Carousel items -->
                        <div class="carousel-inner">
<?php if (get_post_meta(get_the_ID(), 'galleryphoto-1-image', TRUE)) {
                                echo '<div class="carousel-item active">
                <img src="' . $galleryphoto_1_image . '" class="d-block w-100" alt="The Fly Shop Guided Fly Fishing">
              </div>';
                            } ?>

<?php if (get_post_meta(get_the_ID(), 'galleryphoto-2-image', TRUE)) {
                                echo '<div class="carousel-item">
                <img src="' . $galleryphoto_2_image . '" class="d-block w-100" alt="The Fly Shop Guided Fly Fishing">
              </div>';
                            } ?>

<?php if (get_post_meta(get_the_ID(), 'galleryphoto-3-image', TRUE)) {
                                echo '<div class="carousel-item">
                <img src="' . $galleryphoto_3_image . '" class="d-block w-100" alt="The Fly Shop Guided Fly Fishing">
              </div>';
                            } ?>

<?php if (get_post_meta(get_the_ID(), 'galleryphoto-4-image', TRUE)) {
                                echo '<div class="carousel-item">
                <img src="' . $galleryphoto_4_image . '" class="d-block w-100" alt="The Fly Shop Guided Fly Fishing">
              </div>';
                            } ?>

<?php if (get_post_meta(get_the_ID(), 'galleryphoto-5-image', TRUE)) {
                                echo '<div class="carousel-item">
                <img src="' . $galleryphoto_5_image . '" class="d-block w-100" alt="The Fly Shop Guided Fly Fishing">
              </div>';
                            } ?>

<?php if (get_post_meta(get_the_ID(), 'galleryphoto-6-image', TRUE)) {
                                echo '<div class="carousel-item">
                <img src="' . $galleryphoto_6_image . '" class="d-block w-100" alt="The Fly Shop Guided Fly Fishing">
              </div>';
                            } ?>

<?php if (get_post_meta(get_the_ID(), 'galleryphoto-7-image', TRUE)) {
                                echo '<div class="carousel-item">
                <img src="' . $galleryphoto_7_image . '" class="d-block w-100" alt="The Fly Shop Guided Fly Fishing">
              </div>';
                            } ?>

<?php if (get_post_meta(get_the_ID(), 'galleryphoto-8-image', TRUE)) {
                                echo '<div class="carousel-item">
                <img src="' . $galleryphoto_8_image . '" class="d-block w-100" alt="The Fly Shop Guided Fly Fishing">
              </div>';
                            } ?>
                        </div>

                        <!-- Carousel controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#guide-carousel"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#guide-carousel"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Modal .container -->

