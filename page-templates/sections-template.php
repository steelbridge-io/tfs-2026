<?php
/*
	* Template Name: Sections Template
	* Template Post Type: post, page, travel_cpt, schools_cpt, guide_service, travel-blog
	* Developed for The Fly Shop
	* Author: Chris Parsons
	* Author URL: https://steelbridge.io
*/

/**
 * The meta-fields for this template are located in the /wp-content/plugins/sbm-image-field/includes/sections_image_field.php
 */

$sections_featured_img = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
$the_sections_default = get_bloginfo('template_directory') . '/images/default/default-page-header.png';
$sections_page_logo = get_theme_mod('sections_page_logo');
$sections_hero_image = get_post_meta(get_the_ID(), 'sections-hero-image', true);
$sections_video = get_post_meta(get_the_ID(), 'sections-video', true);
$sections_video_poster = get_post_meta(get_the_ID(), 'sections-video-poster', true);

include_once('post-meta/post-meta-sections.php');
get_header();

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

    <!-- ==== CAROUSEL ==== -->
    <!-- Item slider-->
    <!-- Javascript is in main.js -->
<?php
// Carousel Images activated by check-box
if (get_post_meta(get_the_ID(), 'sections-csel-checkbox', true) == 'yes') :?>

    <div class="container-fluid">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="carousel carousel-showallmove1 slide" id="itemslider">
                    <div class="carousel-inner">

                        <div class="item active">
                            <div class="col-xs-12 col-sm-6 col-md-2">
                                <a href="<?php echo $sections_csel_1_link; ?>"><img
                                            src="<?php echo esc_url($sections_csel_1_img); ?>"
                                            class="img-responsive center-block"></a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-2">
                                <a href="<?php echo $sections_csel_2_link; ?>"><img
                                            src="<?php echo esc_url($sections_csel_2_img); ?>"
                                            class="img-responsive center-block"></a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-2">
                                <a href="<?php echo $sections_csel_3_link; ?>"><img
                                            src="<?php echo esc_url($sections_csel_3_img); ?>"
                                            class="img-responsive center-block"></a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-2">
                                <a href="<?php echo $sections_csel_4_link; ?>"><img
                                            src="<?php echo esc_url($sections_csel_4_img); ?>"
                                            class="img-responsive center-block"></a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-2">
                                <a href="<?php echo $sections_csel_5_link; ?>"><img
                                            src="<?php echo esc_url($sections_csel_5_img); ?>"
                                            class="img-responsive center-block"></a>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-2">
                                <a href="<?php echo $sections_csel_6_link; ?>"><img
                                            src="<?php echo esc_url($sections_csel_6_img); ?>"
                                            class="img-responsive center-block"></a>
                            </div>
                        </div>

                    </div>

                    <div id="slider-control">
                        <a class="left carousel-control" href="#itemslider" data-slide="prev"><i
                                    class="fa fa-chevron-left fa-4x" aria-hidden="true"></i></a>
                        <a class="right carousel-control" href="#itemslider" data-slide="next"><i
                                    class="fa fa-chevron-right fa-4x" aria-hidden="true"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </div><!-- Item slider end-->
<?php endif; ?>

    <div id="two" class="container mt-5">
        <?php
        // Running index of actually rendered spotlight sections to ensure alternating layout
        $spotlight_index = 0;
        ?>

        <!-- ==== Section #1 ==== -->

        <?php
        if (get_post_meta(get_the_ID(), 'sections-1-option-checkbox', true) == 'yes') :
            $spotlight_index++;
            $row_dir_class = ($spotlight_index % 2 === 0) ? ' flex-row-reverse' : '';
            ?>
            <section class="spotlight">
                <div class="row align-items-center<?php echo $row_dir_class; ?>">
                    <div class="col-md-6 col-lg-6">
                        <div class="image">
                            <!-- Costs Video/Text/Image Option -->
                            <?php
                            if (get_post_meta(get_the_ID(), 'sections-1-video-image-checkbox', true) == 'yes') :?>

                                <div class="embed-responsive embed-responsive-16by9">

                                    <iframe class="embed-responsive-item" src="<?php echo $sections_1_video; ?>"
                                            allowfullscreen></iframe>

                                </div>

                            <?php else: ?>

                                <img src="<?php echo $sections_1_image; ?>" alt="The Fly Shop Travel Image"/>

                            <?php endif; ?>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 content-side">
                        <div class="content">
                            <div id="travel-style">
                                <h2><?php echo $sections_1_title; ?></h2>
                                <p class="travel"><?php echo $sections_1_textarea; ?></p>

                                <?php // Displays read more section if needed
                                if (get_post_meta(get_the_ID(), 'sections-1-readmore-checkbox', true) == 'yes') :?>

                                    <div class="accordion readmore" id="accordion1">
                                        <div class="accordion-item">
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
                                                    <p class="travel"><?php echo $sections_1_readmore; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.panel-group -->

                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?> <!-- sections-1-option-checkbox -->

        <!-- ==== Section #2 ==== -->

        <?php
        if (get_post_meta(get_the_ID(), 'sections-2-option-checkbox', true) == 'yes') :
            $spotlight_index++;
            $row_dir_class = ($spotlight_index % 2 === 0) ? ' flex-row-reverse' : '';
            ?>
            <section class="spotlight">
                <div class="row align-items-center<?php echo $row_dir_class; ?>">
                    <div class="col-md-6 col-lg-6">
                        <div class="image">
                            <!-- Costs Video/Text/Image Option -->
                            <?php
                            if (get_post_meta(get_the_ID(), 'sections-2-video-image-checkbox', true) == 'yes') :?>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?php echo $sections_2_video; ?>"
                                            allowfullscreen></iframe>
                                </div>
                            <?php else: ?>
                                <img src="<?php echo $sections_2_image; ?>" alt="The Fly Shop Travel Image"/>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 content-side">
                        <div class="content">
                            <div id="travel-style">
                                <h2><?php echo $sections_2_title; ?></h2>
                                <p class="travel"><?php echo $sections_2_textarea; ?></p>
                                <?php // Displays read more section if needed
                                if (get_post_meta(get_the_ID(), 'sections-2-readmore-checkbox', true) == 'yes') :?>
                                    <div class="accordion readmore" id="accordion2">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseTwo2" aria-expanded="false"
                                                        aria-controls="collapseTwo2">
                                                    Read more...&nbsp;<span class="arrow-down"></span>
                                                </button>
                                            </h2>
                                            <div id="collapseTwo2" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordion2">
                                                <div class="accordion-body">
                                                    <p class="travel"><?php echo $sections_2_readmore; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?> <!-- sections-2-readmore-checkbox -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?> <!-- sections-2-option-checkbox -->

        <!-- ==== Section #3 ==== -->

        <?php
        if (get_post_meta(get_the_ID(), 'sections-3-option-checkbox', true) == 'yes') :
            $spotlight_index++;
            $row_dir_class = ($spotlight_index % 2 === 0) ? ' flex-row-reverse' : '';
            ?>
            <section class="spotlight">
                <div class="row align-items-center<?php echo $row_dir_class; ?>">
                    <div class="col-md-6 col-lg-6">
                        <div class="image">
                            <!-- Costs Video/Text/Image Option -->
                            <?php
                            if (get_post_meta(get_the_ID(), 'sections-3-video-image-checkbox', true) == 'yes') :?>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?php echo $sections_3_video; ?>"
                                            allowfullscreen></iframe>
                                </div>
                            <?php else: ?>
                                <img src="<?php echo $sections_3_image; ?>" alt="The Fly Shop Travel Image"/>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 content-side">
                        <div class="content">
                            <div id="travel-style">
                                <h2><?php echo $sections_3_title; ?></h2>
                                <p class="travel"><?php echo $sections_3_textarea; ?></p>
                                <?php // Displays read more section if needed
                                if (get_post_meta(get_the_ID(), 'sections-3-readmore-checkbox', true) == 'yes') :?>
                                    <div class="accordion readmore" id="accordion3">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseTwo3" aria-expanded="false"
                                                        aria-controls="collapseTwo3">
                                                    Read more...&nbsp;<span class="arrow-down"></span>
                                                </button>
                                            </h2>
                                            <div id="collapseTwo3" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordion3">
                                                <div class="accordion-body">
                                                    <p class="travel"><?php echo $sections_3_readmore; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.panel-group -->
                                <?php endif; ?> <!-- sections-3-readmore-checkbox -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?> <!-- sections-3-option-checkbox -->

        <!-- ==== Section #4 ==== -->

        <?php
        if (get_post_meta(get_the_ID(), 'sections-4-option-checkbox', true) == 'yes') :
            $spotlight_index++;
            $row_dir_class = ($spotlight_index % 2 === 0) ? ' flex-row-reverse' : '';
            ?>
            <section class="spotlight">
                <div class="row align-items-center<?php echo $row_dir_class; ?>">
                    <div class="col-md-6 col-lg-6">
                        <div class="image">
                            <!-- Costs Video/Text/Image Option -->
                            <?php
                            if (get_post_meta(get_the_ID(), 'sections-4-video-image-checkbox', true) == 'yes') :?>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?php echo $sections_4_video; ?>"
                                            allowfullscreen></iframe>
                                </div>
                            <?php else: ?>
                                <img src="<?php echo $sections_4_image; ?>" alt="The Fly Shop Travel Image"/>
                            <?php endif; ?>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 content-side">
                        <div class="content">
                            <div id="travel-style">
                                <h2><?php echo $sections_4_title; ?></h2>
                                <p class="travel"><?php echo $sections_4_textarea; ?></p>

                                <?php // Displays read more section if needed
                                if (get_post_meta(get_the_ID(), 'sections-4-readmore-checkbox', true) == 'yes') :?>
                                    <div class="accordion readmore" id="accordion4">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseTwo4" aria-expanded="false"
                                                        aria-controls="collapseTwo4">
                                                    Read more...&nbsp;<span class="arrow-down"></span>
                                                </button>
                                            </h2>
                                            <div id="collapseTwo4" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordion4">
                                                <div class="accordion-body">
                                                    <p class="travel"><?php echo $sections_4_readmore; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.panel-group -->
                                <?php endif; ?> <!-- sections-4-readmore-checkbox -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?> <!-- sections-4-option-checkbox -->

        <!-- ==== Section #5 ==== -->

        <?php
        if (get_post_meta(get_the_ID(), 'sections-5-option-checkbox', true) == 'yes') :
            $spotlight_index++;
            $row_dir_class = ($spotlight_index % 2 === 0) ? ' flex-row-reverse' : '';
            ?>
            <section class="spotlight">
                <div class="row align-items-center<?php echo $row_dir_class; ?>">
                    <div class="col-md-6 col-lg-6">
                        <div class="image">
                            <!-- Costs Video/Text/Image Option -->
                            <?php
                            if (get_post_meta(get_the_ID(), 'sections-5-video-image-checkbox', true) == 'yes') :?>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?php echo $sections_5_video; ?>"
                                            allowfullscreen></iframe>
                                </div>
                            <?php else: ?>
                                <img src="<?php echo $sections_5_image; ?>" alt="The Fly Shop Travel Image"/>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 content-side">
                        <div class="content">
                            <div id="travel-style">
                                <h2><?php echo $sections_5_title; ?></h2>
                                <p class="travel"><?php echo $sections_5_textarea; ?></p>
                                <?php // Displays read more section if needed
                                if (get_post_meta(get_the_ID(), 'sections-5-readmore-checkbox', true) == 'yes') :?>
                                    <div class="accordion readmore" id="accordion5">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseTwo5" aria-expanded="false"
                                                        aria-controls="collapseTwo5">
                                                    Read more...&nbsp;<span class="arrow-down"></span>
                                                </button>
                                            </h2>
                                            <div id="collapseTwo5" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordion5">
                                                <div class="accordion-body">
                                                    <p class="travel"><?php echo $sections_5_readmore; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.panel-group -->
                                <?php endif; ?> <!-- sections-5-readmore-checkbox -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?> <!-- sections-5-option-checkbox -->

        <!-- ==== Section #6 ==== -->

        <?php
        if (get_post_meta(get_the_ID(), 'sections-6-option-checkbox', true) == 'yes') :
            $spotlight_index++;
            $row_dir_class = ($spotlight_index % 2 === 0) ? ' flex-row-reverse' : '';
            ?>
            <section class="spotlight">
                <div class="row align-items-center<?php echo $row_dir_class; ?>">
                    <div class="col-md-6 col-lg-6">
                        <div class="image">
                            <!-- Costs Video/Text/Image Option -->
                            <?php
                            if (get_post_meta(get_the_ID(), 'sections-6-video-image-checkbox', true) == 'yes') :?>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?php echo $sections_6_video; ?>"
                                            allowfullscreen></iframe>
                                </div>
                            <?php else: ?>
                                <img src="<?php echo $sections_6_image; ?>" alt="The Fly Shop Travel Image"/>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 content-side">
                        <div class="content">
                            <div id="travel-style">
                                <h2><?php echo $sections_6_title; ?></h2>
                                <p class="travel"><?php echo $sections_6_textarea; ?></p>
                                <?php // Displays read more section if needed
                                if (get_post_meta(get_the_ID(), 'sections-6-readmore-checkbox', true) == 'yes') :?>
                                    <div class="accordion readmore" id="accordion6">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseTwo6" aria-expanded="false"
                                                        aria-controls="collapseTwo6">
                                                    Read more...&nbsp;<span class="arrow-down"></span>
                                                </button>
                                            </h2>
                                            <div id="collapseTwo6" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordion6">
                                                <div class="accordion-body">
                                                    <p class="travel"><?php echo $sections_6_readmore; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.panel-group -->
                                <?php endif; ?> <!-- sections-6-readmore-checkbox -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?> <!-- sections-6-option-checkbox -->

        <!-- ==== Section #7 ==== -->

        <?php
        if (get_post_meta(get_the_ID(), 'sections-7-option-checkbox', true) == 'yes') :
            $spotlight_index++;
            $row_dir_class = ($spotlight_index % 2 === 0) ? ' flex-row-reverse' : '';
            ?>
            <section class="spotlight">
                <div class="row align-items-center<?php echo $row_dir_class; ?>">
                    <div class="col-md-6 col-lg-6">
                        <div class="image">
                            <!-- Costs Video/Text/Image Option -->
                            <?php
                            if (get_post_meta(get_the_ID(), 'sections-7-video-image-checkbox', true) == 'yes') :?>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?php echo $sections_7_video; ?>"
                                            allowfullscreen></iframe>
                                </div>
                            <?php else: ?>
                                <img src="<?php echo $sections_7_image; ?>" alt="The Fly Shop Travel Image"/>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 content-side">
                        <div class="content">
                            <div id="travel-style">
                                <h2><?php echo $sections_7_title; ?></h2>
                                <p class="travel"><?php echo $sections_7_textarea; ?></p>
                                <?php // Displays read more section if needed
                                if (get_post_meta(get_the_ID(), 'sections-7-readmore-checkbox', true) == 'yes') :?>
                                    <div class="accordion readmore" id="accordion7">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseTwo7" aria-expanded="false"
                                                        aria-controls="collapseTwo7">
                                                    Read more...&nbsp;<span class="arrow-down"></span>
                                                </button>
                                            </h2>
                                            <div id="collapseTwo7" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordion7">
                                                <div class="accordion-body">
                                                    <p class="travel"><?php echo $sections_7_readmore; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.panel-group -->
                                <?php endif; ?> <!-- sections-7-readmore-checkbox -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?> <!-- sections-7-option-checkbox -->

        <!-- ==== Section #8 ==== -->

        <?php
        if (get_post_meta(get_the_ID(), 'sections-8-option-checkbox', true) == 'yes') :
            $spotlight_index++;
            $row_dir_class = ($spotlight_index % 2 === 0) ? ' flex-row-reverse' : '';
            ?>
            <section class="spotlight">
                <div class="row align-items-center<?php echo $row_dir_class; ?>">
                    <div class="col-md-6 col-lg-6">
                        <div class="image">
                            <!-- Costs Video/Text/Image Option -->
                            <?php
                            if (get_post_meta(get_the_ID(), 'sections-8-video-image-checkbox', true) == 'yes') :?>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?php echo $sections_8_video; ?>"
                                            allowfullscreen></iframe>
                                </div>
                            <?php else: ?>
                                <img src="<?php echo $sections_8_image; ?>" alt="The Fly Shop Travel Image"/>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 content-side">
                        <div class="content">
                            <div id="travel-style">
                                <h2><?php echo $sections_8_title; ?></h2>
                                <p class="travel"><?php echo $sections_8_textarea; ?></p>
                                <?php // Displays read more section if needed
                                if (get_post_meta(get_the_ID(), 'sections-8-readmore-checkbox', true) == 'yes') :?>
                                    <div class="accordion readmore" id="accordion8">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseTwo8" aria-expanded="false"
                                                        aria-controls="collapseTwo8">
                                                    Read more...&nbsp;<span class="arrow-down"></span>
                                                </button>
                                            </h2>
                                            <div id="collapseTwo8" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordion8">
                                                <div class="accordion-body">
                                                    <p class="travel"><?php echo $sections_8_readmore; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.panel-group -->
                                <?php endif; ?> <!-- sections-8-readmore-checkbox -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?> <!-- sections-8-option-checkbox -->

        <!-- ==== Section #9 ==== -->

        <?php
        if (get_post_meta(get_the_ID(), 'sections-9-option-checkbox', true) == 'yes') :
            $spotlight_index++;
            $row_dir_class = ($spotlight_index % 2 === 0) ? ' flex-row-reverse' : '';
            ?>
            <section class="spotlight">
                <div class="row align-items-center<?php echo $row_dir_class; ?>">
                    <div class="col-md-6 col-lg-6">
                        <div class="image">
                            <!-- Costs Video/Text/Image Option -->
                            <?php
                            if (get_post_meta(get_the_ID(), 'sections-9-video-image-checkbox', true) == 'yes') :?>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?php echo $sections_9_video; ?>"
                                            allowfullscreen></iframe>
                                </div>
                            <?php else: ?>
                                <img src="<?php echo $sections_9_image; ?>" alt="The Fly Shop Travel Image"/>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 content-side">
                        <div class="content">
                            <div id="travel-style">
                                <h2><?php echo $sections_9_title; ?></h2>
                                <p class="travel"><?php echo $sections_9_textarea; ?></p>
                                <?php // Displays read more section if needed
                                if (get_post_meta(get_the_ID(), 'sections-9-readmore-checkbox', true) == 'yes') :?>
                                    <div class="accordion readmore" id="accordion9">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseTwo9" aria-expanded="false"
                                                        aria-controls="collapseTwo9">
                                                    Read more...&nbsp;<span class="arrow-down"></span>
                                                </button>
                                            </h2>
                                            <div id="collapseTwo9" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordion9">
                                                <div class="accordion-body">
                                                    <p class="travel"><?php echo $sections_9_readmore; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.panel-group -->
                                <?php endif; ?> <!-- sections-9-readmore-checkbox -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?> <!-- sections-9-option-checkbox -->

        <!-- ==== Section #10 ==== -->

        <?php
        if (get_post_meta(get_the_ID(), 'sections-10-option-checkbox', true) == 'yes') :
            $spotlight_index++;
            $row_dir_class = ($spotlight_index % 2 === 0) ? ' flex-row-reverse' : '';
            ?>
            <section class="spotlight">
                <div class="row align-items-center<?php echo $row_dir_class; ?>">
                    <div class="col-md-6 col-lg-6">
                        <div class="image">
                            <!-- Costs Video/Text/Image Option -->
                            <?php
                            if (get_post_meta(get_the_ID(), 'sections-10-video-image-checkbox', true) == 'yes') :?>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?php echo $sections_10_video; ?>"
                                            allowfullscreen></iframe>
                                </div>
                            <?php else: ?>
                                <img src="<?php echo $sections_10_image; ?>" alt="The Fly Shop Travel Image"/>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 content-side">
                        <div class="content">
                            <div id="travel-style">
                                <h2><?php echo $sections_10_title; ?></h2>
                                <p class="travel"><?php echo $sections_10_textarea; ?></p>
                                <?php // Displays read more section if needed
                                if (get_post_meta(get_the_ID(), 'sections-10-readmore-checkbox', true) == 'yes') :?>
                                    <div class="accordion readmore" id="accordion10">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseTwo10" aria-expanded="false"
                                                        aria-controls="collapseTwo10">
                                                    Read more...&nbsp;<span class="arrow-down"></span>
                                                </button>
                                            </h2>
                                            <div id="collapseTwo10" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordion10">
                                                <div class="accordion-body">
                                                    <p class="travel"><?php echo $sections_10_readmore; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.panel-group -->
                                <?php endif; ?> <!-- sections-10-readmore-checkbox -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?> <!-- sections-10-option-checkbox -->
    </div>

<?php if (!empty($galleryphoto_1_image)) { ?>
    <section id="three" class="wrapper style7 special">
        <div class="inner container">

            <h2>Additional Information</h2>
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
    </div><!-- /Modal .container -->
    <!-- Modal -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="primeTravelTempmodalLabel">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title" id="primeTravelTempmodalLabel"><img
                                src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2021/05/social_tfs_logo_og.png"
                                alt="The Fly Shop"></div>
                </div>
                <div class="modal-body">
                    <?php echo do_shortcode('[gravityform id="6" title="true" description="true"]'); ?>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


<?php
include_once get_template_directory() . '/page-templates/cta-sections/footer-cta.php';
get_footer();

