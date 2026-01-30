<?php
/**
 * Template Name: Schools Template depreciated
 * Template Post Type: schools_cpt
 * Developed for The Fly Shop
 * @package tfsSchools
 * @since        2.0.0
 * Author: Chris Parsons
 * Author URL: https://steelbridgemedia.com
 */
include_once('post-meta/post-meta-schools.php');

get_header('schools-header'); ?>
<?php if (has_post_thumbnail()) : ?>
    <div id="banner" class="container-fluid travel-template-hero p-0">
        <div class="hero-image position-relative guidesvc-temp-hero-overlay">
            <div class="overlay"></div>
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
<?php else : ?>
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

    <!-- One -->
    <section id="one" class="mt-5 mb-5">
        <div class="container">
            <div id="primary" class="content-area row mt-5">
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
    </section>

    <section id="schools-two" class="mt-5 mb-5">
        <div class="container pt-5 pb-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="image">
                        <!-- Video/Text/Image Option -->
                        <?php
                        if (!empty($video_schfeature_one)) :?>
                            <div class="ratio ratio-16x9">
                                <iframe class="w-100" src="<?php echo $video_schfeature_one; ?>"
                                        allowfullscreen></iframe>
                            </div>
                        <?php else: ?>
                            <img src="<?php echo $feature_sch1_image; ?>" alt="The Fly Shop Schools Image"
                                 class="img-fluid"/>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="content">
                        <div id="travel-style" class="schools1">

                            <h2><?php echo $feature_sch1_title; ?></h2>

                            <div class="travel"><?php echo $feature_sch1_cost_textarea; ?></div>
                            <?php if (!empty($feature_sch1_inclusions_textarea)) : ?>
                                <div class="accordion mt-5" id="accordion1">
                                    <div class="accordion-item schools1">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo1"
                                                    aria-expanded="false" aria-controls="collapseTwo1">
                                                Inclusions&nbsp;<span class="arrow-down"></span>
                                            </button>
                                        </h2>

                                        <div id="collapseTwo1" class="accordion-collapse collapse"
                                             data-bs-parent="#accordion1">
                                            <div class="accordion-body">
                                                <div class="travel"><?php echo $feature_sch1_inclusions_textarea; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if (!empty($feature_sch1_noninclusions_textarea)) : ?>
                                        <div class="accordion-item schools1">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree1"
                                                        aria-expanded="false" aria-controls="collapseThree1">
                                                    Non-Inclusions&nbsp;<span class="arrow-down"></span>
                                                </button>
                                            </h2>
                                            <div id="collapseThree1" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordion1">
                                                <div class="accordion-body">
                                                    <div class="travel"><?php echo $feature_sch1_noninclusions_textarea; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- === SCHOOLS DATES === -->
    <section class="mt mb-5">
        <div class="container pt-5 pb-5">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-md-6">
                    <div class="image">
                        <!-- Schools Dates Video/Text/Image Option -->
                        <?php
                        if (!empty($video_schfeature_two)) :?>
                            <div class="ratio ratio-16x9">
                                <iframe class="w-100" src="<?php echo $video_schfeature_two; ?>"
                                        allowfullscreen></iframe>
                            </div>
                        <?php else: ?>
                            <img src="<?php echo $feature_sch2_image; ?>" alt="The Fly Shop Schools Image"
                                 class="img-fluid"/>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="content">
                        <div id="travel-style" class="schools2">

                            <!-- Dates title -->
                            <h2><?php echo $feature_sch2_title; ?></h2>

                            <div class="travel"><?php echo $feature_sch2_dates_textarea; ?></div>
                            <?php if (!empty($feature_dates_readmore_textarea)) : ?>
                                <div class="accordion mt-5" id="accordion2">
                                    <div class="accordion" id="accordionDates">
                                        <div class="accordion-item schools2">

                                            <?php
                                            // Read more option
                                            //if(get_post_meta(get_the_ID(), 'sch-dates-readmore-checkbox', true) == 'yes') :?>

                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOneDates"
                                                        aria-expanded="false" aria-controls="collapseOneDates">
                                                    Read More&nbsp;<span class="arrow-down"></span>
                                                </button>
                                            </h2>

                                            <div id="collapseOneDates" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordionDates">
                                                <div class="accordion-body">
                                                    <div class="travel"><?php echo $sch_dates_readmore_textarea; ?></div>
                                                </div>
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
    <!-- === SCHOOLS LODGING === -->
    <section class="mt-5 mb-5">
        <div class="container pt-5 pb-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="image">
                        <!-- Schools Video/Text/Image Option -->
                        <?php
                        if (!empty($video_schfeature_four)) :?>
                            <div class="ratio ratio-16x9">
                                <iframe class="w-100" src="<?php echo $video_schfeature_four; ?>"
                                        allowfullscreen></iframe>
                            </div>
                        <?php else: ?>
                            <img src="<?php echo $feature_4_schlodging_image; ?>" alt="The Fly Shop Schools Image"
                                 class="img-fluid"/>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="content">
                        <div id="travel-style" class="schools3">

                            <h2><?php echo $feature_4_schlodging_title; ?></h2>

                            <div class="travel"><?php echo $feature_4_schlodging_content; ?></div>
                            <?php if (!empty($feature_4_schlodging_readmore)) : ?>
                                <div class="accordion mt-5" id="accordion3">
                                    <div class="accordion-item schools3">

                                        <?php
                                        // Readmore option
                                        //if(get_post_meta(get_the_ID(), 'sch-lodging-readmore-checkbox', true) == 'yes') :?>

                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne3"
                                                    aria-expanded="false" aria-controls="collapseOne3">
                                                Read More&nbsp;<span class="arrow-down"></span>
                                            </button>
                                        </h2>

                                        <div id="collapseOne3" class="accordion-collapse collapse"
                                             data-bs-parent="#accordion3">
                                            <div class="accordion-body">
                                                <div class="travel"><?php echo $feature_4_schlodging_readmore; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- === GETTING THERE === -->
    <section class="mt-5 mb-5">
        <div class="container pt-5 pb-5">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-md-6">
                    <div class="image">
                        <!-- Itinerary/Text/Image Option -->
                        <?php
                        if (!empty($video_schfeature_five)) :?>
                            <div class="ratio ratio-16x9">
                                <!-- Itinerary map -->
                                <iframe class="w-100" src="<?php echo $video_schfeature_five; ?>"
                                        allowfullscreen></iframe>
                            </div>
                        <?php else: ?>
                            <!-- Itinerary image -->
                            <img src="<?php echo $feature_sch5_gettingto_image; ?>" alt="The Fly Shop Travel Image"
                                 class="img-fluid"/>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="content">
                        <div id="travel-style" class="schools4">
                            <!-- Itineray title -->
                            <h2><?php echo $feature_sch5_get_to_title; ?></h2>
                            <!-- Itineray content -->
                            <div class="travel"><?php echo $feature_sch5_get_to_content; ?></div>
                            <?php if (!empty($feature_sch5_get_to_readmore)) : ?>
                                <div class="accordion mt-5" id="accordion4">
                                    <div class="accordion-item schools4">

                                        <?php
                                        // Readmore option
                                        //if(get_post_meta(get_the_ID(), 'sch-gettingthere-readmore-checkbox', true) == 'yes') :?>

                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne4"
                                                    aria-expanded="false" aria-controls="collapseOne4">
                                                Read More&nbsp;<span class="arrow-down"></span>
                                            </button>
                                        </h2>
                                        <div id="collapseOne4" class="accordion-collapse collapse"
                                             data-bs-parent="#accordion4">
                                            <div class="accordion-body">
                                                <div class="travel"><?php echo $feature_sch5_get_to_readmore; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- === ITINERARY === -->
    <section class="mt-5 mb-5">
        <div class="container pt-5 pb-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="image">
                        <!-- Itinerary Video/Text/Image Option -->
                        <?php
                        if (!empty($video_schfeature_three)) :?>
                            <div class="ratio ratio-16x9">
                                <iframe class="w-100" src="<?php echo $video_schfeature_three; ?>"
                                        allowfullscreen></iframe>
                            </div>
                        <?php else: ?>
                            <img src="<?php echo $feature_sch3_itinerary_image; ?>" alt="The Fly Shop Travel Image"
                                 class="img-fluid"/>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- === ITINERARY === -->
                <div class="col-md-6">
                    <div class="content">
                        <div id="travel-style" class="schools5">
                            <h2><?php echo $feature_sch3_fishing_title; ?></h2>
                            <div class="travel"><?php echo $feature_sch3_fishing_content; ?></div>

                            <?php if (!empty($feature_sch3_fishing_readmore)) : ?>
                                <div class="accordion mt-5" id="accordion5">
                                    <div class="accordion-item schools5">

                                        <?php
                                        // Readmore option
                                        // if(get_post_meta(get_the_ID(), 'sch-itinerary-readmore-checkbox', true) == 'yes') :?>

                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne5"
                                                    aria-expanded="false" aria-controls="collapseOne5">
                                                Read More&nbsp;<span class="arrow-down"></span>
                                            </button>
                                        </h2>
                                        <div id="collapseOne5" class="accordion-collapse collapse"
                                             data-bs-parent="#accordion5">
                                            <div class="accordion-body">
                                                <div class="travel"><?php echo $feature_sch3_fishing_readmore; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== MODAL SLIDER ====== -->

    <section id="destination-template-carousel" class="wrapper mt-5 mb-5">
        <div class="inner container">
            <header class="major">
                <!--<h2>Additional Information</h2>-->
                <!-- First row additional info -->
                <div class="row">
                    <div class="additional-listing">

                        <?php if (get_post_meta(get_the_ID(), 'schools-additional-info-image1', true)) {

                            echo '<div class="col-xs-6 col-md-3">',

                            '<div class="thumbnail">',

                                    '<a href="#schools-carousel" data-bs-slide-to="0"><img src="' . $schools_additional_info_image1 . '" class="img-fluid destination-img" data-bs-toggle="modal" data-bs-target="#schoolsTableModal" alt="The Fly Shop Images"></a>',

                            '</div>',

                            '</div>';

                        } ?>

                        <?php if (get_post_meta(get_the_ID(), 'schools-additional-info-image2', true)) {

                            echo '<div class="col-xs-6 col-md-3">',

                            '<div class="thumbnail">',

                                    '<a href="#schools-carousel" data-bs-slide-to="1"><img src="' . $schools_additional_info_image2 . '" class="img-fluid destination-img" data-bs-toggle="modal" data-bs-target="#schoolsTableModal" alt="The Fly Shop Images"></a>',

                            '</div>',

                            '</div>';

                        } ?>

                        <?php if (get_post_meta(get_the_ID(), 'schools-additional-info-image3', true)) {

                            echo '<div class="col-xs-6 col-md-3">',

                            '<div class="thumbnail">',

                                    '<a href="#schools-carousel" data-bs-slide-to="2"><img src="' . $schools_additional_info_image3 . '" class="img-fluid destination-img" data-bs-toggle="modal" data-bs-target="#schoolsTableModal" alt="The Fly Shop Images"></a>',

                            '</div>',

                            '</div>';

                        } ?>

                        <?php if (get_post_meta(get_the_ID(), 'schools-additional-info-image4', true)) {

                            echo '<div class="col-xs-6 col-md-3">',

                            '<div class="thumbnail">',

                                    '<a href="#schools-carousel" data-bs-slide-to="3"><img src="' . $schools_additional_info_image4 . '" class="img-fluid destination-img" data-bs-toggle="modal" data-bs-target="#schoolsTableModal" alt="The Fly Shop Images"></a>',

                            '</div>',

                            '</div>';

                        } ?>

                    </div>
                </div>
                <!-- Second Row Schools Images -->
                <div class="row">
                    <div class="additional-listing">

                        <?php if (get_post_meta(get_the_ID(), 'schools-additional-info-image5', true)) {
                            echo '<div class="col-xs-6 col-md-3">',

                            '<div class="thumbnail">',

                                    '<a href="#schools-carousel" data-bs-slide-to="4"><img src="' . $schools_additional_info_image5 . '" class="img-fluid destination-img" data-bs-toggle="modal" data-bs-target="#schoolsTableModal" alt="The Fly Shop Images"></a>',

                            '</div>',

                            '</div>';

                        } ?>

                        <?php if (get_post_meta(get_the_ID(), 'schools-additional-info-image6', true)) {

                            echo '<div class="col-xs-6 col-md-3">',

                            '<div class="thumbnail">',

                                    '<a href="#schools-carousel" data-bs-slide-to="5"><img src="' . $schools_additional_info_image6 . '" class="img-fluid destination-img" data-bs-toggle="modal" data-bs-target="#schoolsTableModal" alt="The Fly Shop Images"></a>',

                            '</div>',

                            '</div>';

                        } ?>

                        <?php if (get_post_meta(get_the_ID(), 'schools-additional-info-image7', true)) {

                            echo '<div class="col-xs-6 col-md-3">',

                            '<div class="thumbnail">',

                                    '<a href="#schools-carousel" data-bs-slide-to="6"><img src="' . $schools_additional_info_image7 . '" class="img-fluid destination-img" data-bs-toggle="modal" data-bs-target="#schoolsTableModal" alt="The Fly Shop Images"></a>',

                            '</div>',

                            '</div>';

                        } ?>

                        <?php if (get_post_meta(get_the_ID(), 'schools-additional-info-image8', true)) {

                            echo '<div class="col-xs-6 col-md-3">',

                            '<div class="thumbnail">',

                                    '<a href="#schools-carousel" data-bs-slide-to="7"><img src="' . $schools_additional_info_image8 . '" class="img-fluid destination-img" data-bs-toggle="modal" data-bs-target="#schoolsTableModal" alt="The Fly Shop Images"></a>',

                            '</div>',

                            '</div>';

                        } ?>

                    </div>
                </div>
            </header>
    </section>

    <div class="modal fade schools-modal additional-img" tabindex="-1" id="schoolsTableModal"
         aria-labelledby="schoolsTableModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Carousel -->
                <div id="schools-carousel" class="carousel slide" data-bs-ride="carousel">
                    <!-- Indicators -->
                    <div class="carousel-indicators">

                        <?php if (get_post_meta(get_the_ID(), 'schools-additional-info-image1', true)) {

                            echo '<button type="button" data-bs-target="#schools-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>';

                        } ?>

                        <?php if (get_post_meta(get_the_ID(), 'schools-additional-info-image2', true)) {

                            echo '<button type="button" data-bs-target="#schools-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>';

                        } ?>

                        <?php if (get_post_meta(get_the_ID(), 'schools-additional-info-image3', true)) {

                            echo '<button type="button" data-bs-target="#schools-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>';

                        } ?>

                        <?php if (get_post_meta(get_the_ID(), 'schools-additional-info-image4', true)) {

                            echo '<button type="button" data-bs-target="#schools-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>';

                        } ?>

                        <?php if (get_post_meta(get_the_ID(), 'schools-additional-info-image5', true)) {

                            echo '<button type="button" data-bs-target="#schools-carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>';

                        } ?>

                        <?php if (get_post_meta(get_the_ID(), 'schools-additional-info-image6', true)) {

                            echo '<button type="button" data-bs-target="#schools-carousel" data-bs-slide-to="5" aria-label="Slide 6"></button>';

                        } ?>

                        <?php if (get_post_meta(get_the_ID(), 'schools-additional-info-image7', true)) {

                            echo '<button type="button" data-bs-target="#schools-carousel" data-bs-slide-to="6" aria-label="Slide 7"></button>';

                        } ?>

                        <?php if (get_post_meta(get_the_ID(), 'schools-additional-info-image8', true)) {

                            echo '<button type="button" data-bs-target="#schools-carousel" data-bs-slide-to="7" aria-label="Slide 8"></button>';

                        } ?>

                    </div>

                    <!-- Carousel items -->
                    <div class="carousel-inner">

                        <?php if (get_post_meta(get_the_ID(), 'schools-additional-info-image1', true)) {

                            echo '<div class="carousel-item active">',

                                    '<img class="d-block w-100 destination-img" src="' . $schools_additional_info_image1 . '" alt="The Fly Shop World Fly Fishing Travel">',

                            '</div>';

                        } ?>

                        <?php if (get_post_meta(get_the_ID(), 'schools-additional-info-image2', true)) {

                            echo '<div class="carousel-item">',

                                    '<img class="d-block w-100 destination-img" src="' . $schools_additional_info_image2 . '" alt="The Fly Shop World Fly Fishing Travel">',

                            '</div>';

                        } ?>

                        <?php if (get_post_meta(get_the_ID(), 'schools-additional-info-image3', true)) {

                            echo '<div class="carousel-item">',

                                    '<img class="d-block w-100 destination-img" src="' . $schools_additional_info_image3 . '" alt="The Fly Shop World Fly Fishing Travel">',

                            '</div>';

                        } ?>

                        <?php if (get_post_meta(get_the_ID(), 'schools-additional-info-image4', true)) {

                            echo '<div class="carousel-item">',

                                    '<img class="d-block w-100 destination-img" src="' . $schools_additional_info_image4 . '" alt="The Fly Shop World Fly Fishing Travel">',

                            '</div>';

                        } ?>

                        <?php if (get_post_meta(get_the_ID(), 'schools-additional-info-image5', true)) {

                            echo '<div class="carousel-item">',

                                    '<img class="d-block w-100 destination-img" src="' . $schools_additional_info_image5 . '" alt="The Fly Shop World Fly Fishing Travel">',

                            '</div>';

                        } ?>

                        <?php if (get_post_meta(get_the_ID(), 'schools-additional-info-image6', true)) {

                            echo '<div class="carousel-item">',

                                    '<img class="d-block w-100 destination-img" src="' . $schools_additional_info_image6 . '" alt="The Fly Shop World Fly Fishing Travel">',

                            '</div>';

                        } ?>

                        <?php if (get_post_meta(get_the_ID(), 'schools-additional-info-image7', true)) {

                            echo '<div class="carousel-item">',

                                    '<img class="d-block w-100 destination-img" src="' . $schools_additional_info_image7 . '" alt="The Fly Shop World Fly Fishing Travel">',

                            '</div>';

                        } ?>

                        <?php if (get_post_meta(get_the_ID(), 'schools-additional-info-image8', true)) {

                            echo '<div class="carousel-item">',

                                    '<img class="d-block w-100 destination-img" src="' . $schools_additional_info_image8 . '" alt="The Fly Shop World Fly Fishing Travel">',

                            '</div>';

                        } ?>

                    </div>

                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#schools-carousel"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#schools-carousel"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- CALL TO ACTION ROW -->
    <section id="cta" class="wrapper mt-5 mb-5">
        <div class="inner container">
            <div id="cta-trigger" class="cta-trigger-area">
                <header class="text-center">
                    <h2 class="cta-trigger-title"><?php echo $cta_schools_strong_intro; ?></h2>
                    <p class="cta-trigger-subtitle"><?php echo $cta_schools_content; ?></p>
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
                            <p>Call us directly at <strong>(800) 669-3474</strong> or use the form above to get started.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
include_once get_template_directory() . '/page-templates/cta-sections/footer-cta.php';
get_footer();
