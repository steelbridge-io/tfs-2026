<?php
/*
	* Template Name: Regional Waters Template
	* Template Post Type: guide_service
	* Developed for The Fly Shop
	* Author: Chris Parsons
	* Author URL: https://steelbridgemedia.com
*/

include_once('post-meta/post-meta-guide.php'); // Includes all the custom meta-data
$default = '';

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

    <div class="container">
        <!-- GUIDE SERVICE TEMPLATE CONTENT -->
        <!-- One -->
        <span id="main"></span>
        <section id="one" class="section-wp-content">
            <div class="inner">

                <?php
                // Page content from editor
                while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php
                endwhile;
                wp_reset_query(); ?>

            </div>
        </section>
        <!-- Two -->
        <section class="spotlight d-flex">
            <!-- First spotlight - Image on RIGHT (default) -->
            <div class="row d-flex regional-waters">
                <div class="col-md-6 col-lg-6 regional-waters-container">
                    <div class="image">
                        <!-- Feature #1 Video/Text/Image Option -->
                        <?php
                        if (!empty($video_gsfeature_one)) { ?>
                            <!-- start with above get the check box -->
                            <div class="ratio ratio-16x9 video-poster">
                                <video id="videoPlayer"
                                       src="<?php echo $video_gsfeature_one; ?>"
                                       poster="<?php echo $feature_gs1_image; ?>"
                                       controls allowfullscreen>
                                </video>
                            </div>
                        <?php } else {
                            if (!empty($feature_gs1_image)) { ?>
                                <img src="<?php echo $feature_gs1_image; ?>"
                                     alt="The Fly Shop Guide Service Image"/>
                            <?php }
                        } ?>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="content">
                        <div id="travel-style" class="privatewaters1">
                            <h2><?php echo $feature_gs1_title; ?></h2>
                            <p class="travel"><?php echo $feature_gs1_cost_textarea; ?></p>
                            <div class="accordion" id="accordion1">
                                <?php if (!empty($feature_gs1_inclusions_textarea)) : ?>
                                    <div class="accordion-item privatewaters1">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo1"
                                                    aria-expanded="false"
                                                    aria-controls="collapseTwo1">
                                                Inclusions&nbsp;<span class="arrow-down"></span>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo1"
                                             class="accordion-collapse collapse"
                                             data-bs-parent="#accordion1">
                                            <div class="accordion-body">
                                                <p class="travel"><?php echo $feature_gs1_inclusions_textarea; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($feature_gs1_noninclusions_textarea)) : ?>
                                    <div class="accordion-item privatewaters1">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree1"
                                                    aria-expanded="false"
                                                    aria-controls="collapseThree1">
                                                Non-Inclusions&nbsp;<span class="arrow-down"></span>
                                            </button>
                                        </h2>
                                        <div id="collapseThree1"
                                             class="accordion-collapse collapse"
                                             data-bs-parent="#accordion1">
                                            <div class="accordion-body">
                                                <p class="travel"><?php echo $feature_gs1_noninclusions_textarea; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($feature_gs1_packagedeal_textarea)) : ?>
                                    <div class="accordion-item privatewaters1">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFive1"
                                                    aria-expanded="false"
                                                    aria-controls="collapseFive1">
                                                Package Deal&nbsp;<span class="arrow-down"></span>
                                            </button>
                                        </h2>
                                        <div id="collapseFive1"
                                             class="accordion-collapse collapse"
                                             data-bs-parent="#accordion1">
                                            <div class="accordion-body">
                                                <p class="travel"><?php echo $feature_gs1_packagedeal_textarea; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <!-- Second spotlight - Image on LEFT (flipped order) -->
        <section class="spotlight d-flex flex-row-reverse">  <!-- Added flex-row-reverse class -->
            <div class="row flex-row-reverse regional-waters">
                <div class="col-md-6 col-lg-6 regional-waters-container">
                    <div class="image">
                        <!-- Seasons Video/Text/Image Option -->
                        <?php
                        if (!empty($video_gsfeature_two)) : ?>
                            <div class="ratio ratio-16x9 video-poster">
                                <video id="videoPlayer"
                                       src="<?php echo $video_gsfeature_two; ?>"
                                       poster="<?php echo $feature_gs2_image; ?>"
                                       controls allowfullscreen>
                                </video>
                            </div>
                        <?php else: ?>
                            <img src="<?php echo $feature_gs2_image; ?>"
                                 alt="The Fly Shop Guide Service Image"/>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="content">
                        <div id="travel-style" class="privatewaters2">
                            <!-- Feature #2 Seasons -->
                            <h2><?php echo $feature_gs2_title; ?></h2>
                            <p class="travel"><?php echo $feature_gs2_seasons_textarea; ?></p>
                            <div class="accordion" id="accordion-seasons-readmore">
                                <div class="accordion-item guidewaters_fishing4">
                                    <?php
                                    // Read more
                                    if (!empty($feature_gs2_seasons_readmore)) :?>
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseSeasonsmore"
                                                    aria-expanded="false"
                                                    aria-controls="collapseSeasonsmore">
                                                Read More&nbsp;<span class="arrow-down"></span>
                                                <?php if (!empty($feature_gs2_seasons_readmore_info)) {
                                                    echo '<span class="readmore-info">'
                                                            . $feature_gs2_seasons_readmore_info
                                                            . '</span>';
                                                } ?>
                                            </button>
                                        </h2>
                                        <div id="collapseSeasonsmore"
                                             class="accordion-collapse collapse"
                                             data-bs-parent="#accordion-seasons-readmore">
                                            <div class="accordion-body">
                                                <p class="travel"><?php echo $feature_gs2_seasons_readmore; ?></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="accordion" id="accordion-seasons">
                                <?php
                                // Spring Option
                                if (!empty($feature_gs2_spring_textarea)) :?>
                                    <div class="accordion-item privatewaters2">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseEight1"
                                                    aria-expanded="false"
                                                    aria-controls="collapseEight1">
                                                Spring&nbsp;<span class="arrow-down"></span>
                                            </button>
                                        </h2>
                                        <div id="collapseEight1"
                                             class="accordion-collapse collapse"
                                             data-bs-parent="#accordion-seasons">
                                            <div class="accordion-body">
                                                <p class="travel"><?php echo $feature_gs2_spring_textarea; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php
                                // Summer Option
                                if (!empty($feature_gs2_summer_textarea)) :?>
                                    <div class="accordion-item privatewaters2">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseNine1"
                                                    aria-expanded="false"
                                                    aria-controls="collapseNine1">
                                                Summer&nbsp;<span class="arrow-down"></span>
                                            </button>
                                        </h2>
                                        <div id="collapseNine1"
                                             class="accordion-collapse collapse"
                                             data-bs-parent="#accordion-seasons">
                                            <div class="accordion-body">
                                                <p class="travel"><?php echo $feature_gs2_summer_textarea; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php
                                // Autumn option
                                if (!empty($feature_gs2_autumn_textarea)) :?>
                                    <div class="accordion-item privatewaters2">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseSix1"
                                                    aria-expanded="false"
                                                    aria-controls="collapseSix1">
                                                Fall&nbsp;<span class="arrow-down"></span>
                                            </button>
                                        </h2>
                                        <div id="collapseSix1"
                                             class="accordion-collapse collapse"
                                             data-bs-parent="#accordion-seasons">
                                            <div class="accordion-body">
                                                <p class="travel"><?php echo $feature_gs2_autumn_textarea; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php
                                // WinterOption
                                if (!empty($feature_gs2_winter_textarea)) :?>
                                    <div class="accordion-item privatewaters2">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseSeven1"
                                                    aria-expanded="false"
                                                    aria-controls="collapseSeven1">
                                                Winter&nbsp;<span class="arrow-down"></span>
                                            </button>
                                        </h2>
                                        <div id="collapseSeven1"
                                             class="accordion-collapse collapse"
                                             data-bs-parent="#accordion-seasons">
                                            <div class="accordion-body">
                                                <p class="travel"><?php echo $feature_gs2_winter_textarea; ?></p>
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

        <!-- Third spotlight - Image on RIGHT (default) -->
        <section class="spotlight d-flex">
            <div class="row regional-waters">
                <div class="col-md-6 col-lg-6 regional-waters-container">
                    <div class="image">
                        <!-- Feature #3 Video/Text/Image Option -->
                        <?php
                        if (!empty($video_gsfeature_three)) :?>
                            <div class="ratio ratio-16x9 video-poster">
                                <video id="videoPlayer"
                                       src="<?php echo $video_gsfeature_three; ?>"
                                       poster="<?php echo $feature_gs3_fishing_image; ?>"
                                       controls allowfullscreen>
                                </video>
                            </div>
                        <?php else: ?>
                            <img src="<?php echo $feature_gs3_fishing_image; ?>"
                                 alt="The Fly Shop Guide Service Image"/>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <!-- Feature #3 Seasons. Includes two options that are selectable within the Customizer. -->
                    <div class="content">
                        <div id="travel-style" class="privatewaters3">
                            <h2><?php echo $feature_gs3_fishing_title; ?></h2>
                            <p class="travel"><?php echo $feature_gs3_fishing_content; ?></p>
                            <div class="accordion" id="accordion-fishing-guide-readmore">
                                <div class="accordion-item guidewaters_fishing4">
                                    <?php
                                    // Read more
                                    if (!empty($feature_gs3_fishing_readmore)) :?>
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFishing4"
                                                    aria-expanded="false"
                                                    aria-controls="collapseFishing4">
                                                Read More&nbsp;<span class="arrow-down"></span>
                                                <?php if (!empty($feature_gs3_fishing_readmore_info)) {
                                                    echo '<span class="readmore-info">'
                                                            . $feature_gs3_fishing_readmore_info
                                                            . '</span>';
                                                } ?>
                                            </button>
                                        </h2>
                                        <div id="collapseFishing4"
                                             class="accordion-collapse collapse"
                                             data-bs-parent="#accordion-fishing-guide-readmore">
                                            <div class="accordion-body">
                                                <p class="travel"><?php echo $feature_gs3_fishing_readmore; ?></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Fourth spotlight - Image on LEFT (flipped order) -->
        <section class="spotlight">  <!-- Added flex-row-reverse class -->
            <div class="row flex-row-reverse regional-waters">
                <div class="col-md-6 col-lg-6 regional-waters-container">
                    <div class="image">
                        <!-- Guide Service Video/Text/Image Option -->
                        <?php
                        if (!empty($video_gsfeature_four)) : ?>
                            <div class="ratio ratio-16x9 video-poster">
                                <video id="videoPlayer"
                                       src="<?php echo $video_gsfeature_four; ?>"
                                       poster="<?php echo $feature_4_gslodging_image; ?>"
                                       controls allowfullscreen>
                                </video>
                            </div>
                        <?php else: ?>
                            <img src="<?php echo $feature_4_gslodging_image; ?>"
                                 alt="The Fly Shop Guide Service Waters Image"/>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="content">
                        <div id="travel-style" class="privatewaters4">
                            <h2><?php echo $feature_4_gslodging_title; ?></h2>
                            <p class="travel"><?php echo $feature_4_gslodging_content; ?></p>
                            <div class="accordion" id="accordion4">
                                <div class="accordion-item privatewaters4">
                                    <?php
                                    // Readmore
                                    if (!empty($feature_4_gslodging_readmore)) : ?>
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseLodging4"
                                                    aria-expanded="false"
                                                    aria-controls="collapseLodging4">
                                                Read More&nbsp;<span class="arrow-down"></span>
                                            </button>
                                        </h2>
                                        <div id="collapseLodging4"
                                             class="accordion-collapse collapse"
                                             data-bs-parent="#accordion4">
                                            <div class="accordion-body">
                                                <p class="travel"><?php echo $feature_4_gslodging_readmore; ?></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div><!-- /#accordion4 -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Fifth spotlight - Image on RIGHT (default) -->
        <section class="spotlight d-flex">
            <div class="row regional-waters">
                <div class="col-md-6 col-lg-6 regional-waters-container">
                    <div class="image">
                        <!-- Video/Text/Image Option -->
                        <?php
                        if (!empty($video_gsfeature_five)) : ?>
                            <div class="ratio ratio-16x9 video-poster">
                                <video id="videoPlayer"
                                       src="<?php echo $video_gsfeature_five; ?>"
                                       poster="<?php echo $feature_gs5_gettingto_image; ?>"
                                       controls allowfullscreen>
                                </video>
                            </div>
                        <?php else: ?>
                            <img src="<?php echo $feature_gs5_gettingto_image; ?>"
                                 alt="The Fly Shop Travel Image"/>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="content">
                        <div id="travel-style" class="privatewaters5">
                            <h2><?php echo $feature_gs5_get_to_title; ?></h2>
                            <p class="travel"><?php echo $feature_gs5_get_to_content; ?></p>
                            <div class="accordion" id="accordion5">
                                <div class="accordion-item privatewaters5">
                                    <?php
                                    // Readmore
                                    if (!empty($feature_gs5_get_to_readmore)) : ?>
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne5"
                                                    aria-expanded="false"
                                                    aria-controls="collapseOne5">
                                                Read More&nbsp;<span class="arrow-down"></span>
                                                <?php if (!empty($feature_gs5_readmore_info)) {
                                                    echo '<span class="readmore-info">'
                                                            . $feature_gs5_readmore_info
                                                            . '</span>';
                                                } ?>
                                            </button>
                                        </h2>
                                        <div id="collapseOne5"
                                             class="accordion-collapse collapse"
                                             data-bs-parent="#accordion5">
                                            <div class="accordion-body">
                                                <p class="travel"><?php echo $feature_gs5_get_to_readmore; ?></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

<?php if (!empty($guideservice_additional_info_image1)) { ?>
    <section id="three" class="wrapper style7 special">
        <div class="inner container">

            <h2>Additional Information</h2>
            <div class="row g-4 additional-listing regional-waters">

                <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image1', TRUE)) {
                    echo '<div class="col-6 col-md-3 regional-waters-container">
			 <div class="thumbnail">
				 <img src="' . $guideservice_additional_info_image1 . '" 
							class="img-fluid gallery-trigger" 
							data-bs-toggle="modal" 
							data-bs-target=".guide-modal" 
							data-bs-slide-to="0" 
							alt="The Fly Shop Images">
			 </div>
		 	</div>';
                } ?>

                <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image2', TRUE)) {
                    echo '<div class="col-6 col-md-3 regional-waters-container">
				<div class="thumbnail">
					<img src="' . $guideservice_additional_info_image2 . '" 
							 class="img-fluid gallery-trigger" 
							 data-bs-toggle="modal" 
							 data-bs-target=".guide-modal" 
							 data-bs-slide-to="1" 
							 alt="The Fly Shop Images">
				</div>
			</div>';
                } ?>

                <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image3', TRUE)) {
                    echo '<div class="col-6 col-md-3 regional-waters-container">
				<div class="thumbnail">
					<img src="' . $guideservice_additional_info_image3 . '" 
							 class="img-fluid gallery-trigger" 
							 data-bs-toggle="modal" 
							 data-bs-target=".guide-modal" 
							 data-bs-slide-to="2" 
							 alt="The Fly Shop Images">
				</div>
			</div>';
                } ?>

                <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image4', TRUE)) {
                    echo '<div class="col-6 col-md-3 regional-waters-container">
				<div class="thumbnail">
					<img src="' . $guideservice_additional_info_image4 . '" 
							 class="img-fluid gallery-trigger" 
							 data-bs-toggle="modal" 
							 data-bs-target=".guide-modal" 
							 data-bs-slide-to="3" 
							 alt="The Fly Shop Images">
				</div>
			</div>';
                } ?>

                <!-- Second Row Travel Images -->

                <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image5', TRUE)) {
                    echo '<div class="col-6 col-md-3 regional-waters-container">
				<div class="thumbnail">
					<img src="' . $guideservice_additional_info_image5 . '" 
							 class="img-fluid gallery-trigger" 
							 data-bs-toggle="modal" 
							 data-bs-target=".guide-modal" 
							 data-bs-slide-to="4" 
							 alt="The Fly Shop Images">
				</div>
			</div>';
                } ?>

                <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image6', TRUE)) {
                    echo '<div class="col-6 col-md-3 regional-waters-container">
				 <div class="thumbnail">
					 <img src="' . $guideservice_additional_info_image6 . '" 
								class="img-fluid gallery-trigger" 
								data-bs-toggle="modal" 
								data-bs-target=".guide-modal" 
								data-bs-slide-to="5" 
								alt="The Fly Shop Images">
				 </div>
			 </div>';
                } ?>

                <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image7', TRUE)) {
                    echo '<div class="col-6 col-md-3 regional-waters-container">
				<div class="thumbnail">
					<img src="' . $guideservice_additional_info_image7 . '" 
							 class="img-fluid gallery-trigger" 
							 data-bs-toggle="modal" 
							 data-bs-target=".guide-modal" 
							 data-bs-slide-to="6" 
							 alt="The Fly Shop Images">
				</div>
			</div>';
                } ?>

                <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image8', TRUE)) {
                    echo '<div class="col-6 col-md-3 regional-waters-container">
				<div class="thumbnail">
					<img src="' . $guideservice_additional_info_image8 . '" 
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


    <!-- CALL TO ACTION ROW -->
    <section id="cta" class="mt-5 mb-5">
        <div class="container">
            <div class="text-center">
                <h2><?php echo $cta_guideservice_strong_intro; ?></h2>
                <p><?php echo $cta_guideservice_content; ?></p>
            </div>
        </div>
    </section>


    <!-- ====== MODAL SLIDER  ====== -->
    <div class="modal fade guide-modal" tabindex="-1" aria-labelledby="guideModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <!-- Carousel -->
                    <div id="guide-carousel" class="carousel slide">
                        <!-- Carousel indicators -->
                        <div class="carousel-indicators">
                            <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image1', TRUE)) {
                                echo '<button type="button" data-bs-target="#guide-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>';
                            } ?>

                            <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image2', TRUE)) {
                                echo '<button type="button" data-bs-target="#guide-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>';
                            } ?>

                            <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image3', TRUE)) {
                                echo '<button type="button" data-bs-target="#guide-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>';
                            } ?>

                            <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image4', TRUE)) {
                                echo '<button type="button" data-bs-target="#guide-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>';
                            } ?>

                            <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image5', TRUE)) {
                                echo '<button type="button" data-bs-target="#guide-carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>';
                            } ?>

                            <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image6', TRUE)) {
                                echo '<button type="button" data-bs-target="#guide-carousel" data-bs-slide-to="5" aria-label="Slide 6"></button>';
                            } ?>

                            <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image7', TRUE)) {
                                echo '<button type="button" data-bs-target="#guide-carousel" data-bs-slide-to="6" aria-label="Slide 7"></button>';
                            } ?>

                            <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image8', TRUE)) {
                                echo '<button type="button" data-bs-target="#guide-carousel" data-bs-slide-to="7" aria-label="Slide 8"></button>';
                            } ?>
                        </div>

                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image1', TRUE)) {
                                echo '<div class="carousel-item active">
                <img src="' . $guideservice_additional_info_image1 . '" class="d-block w-100" alt="The Fly Shop Guided Fly Fishing">
              </div>';
                            } ?>

                            <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image2', TRUE)) {
                                echo '<div class="carousel-item">
                <img src="' . $guideservice_additional_info_image2 . '" class="d-block w-100" alt="The Fly Shop Guided Fly Fishing">
              </div>';
                            } ?>

                            <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image3', TRUE)) {
                                echo '<div class="carousel-item">
                <img src="' . $guideservice_additional_info_image3 . '" class="d-block w-100" alt="The Fly Shop Guided Fly Fishing">
              </div>';
                            } ?>

                            <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image4', TRUE)) {
                                echo '<div class="carousel-item">
                <img src="' . $guideservice_additional_info_image4 . '" class="d-block w-100" alt="The Fly Shop Guided Fly Fishing">
              </div>';
                            } ?>

                            <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image5', TRUE)) {
                                echo '<div class="carousel-item">
                <img src="' . $guideservice_additional_info_image5 . '" class="d-block w-100" alt="The Fly Shop Guided Fly Fishing">
              </div>';
                            } ?>

                            <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image6', TRUE)) {
                                echo '<div class="carousel-item">
                <img src="' . $guideservice_additional_info_image6 . '" class="d-block w-100" alt="The Fly Shop Guided Fly Fishing">
              </div>';
                            } ?>

                            <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image7', TRUE)) {
                                echo '<div class="carousel-item">
                <img src="' . $guideservice_additional_info_image7 . '" class="d-block w-100" alt="The Fly Shop Guided Fly Fishing">
              </div>';
                            } ?>

                            <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image8', TRUE)) {
                                echo '<div class="carousel-item">
                <img src="' . $guideservice_additional_info_image8 . '" class="d-block w-100" alt="The Fly Shop Guided Fly Fishing">
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

<?php
include_once get_template_directory() . '/page-templates/cta-sections/footer-cta.php';
get_footer();
