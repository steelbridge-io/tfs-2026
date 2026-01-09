<?php
/**
 * Template part for displaying post meta in guide-service-template.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Fly_Shop
 */

$guidesvc_temp_video = get_post_meta( get_the_ID(), 'guidesvc-temp-video', true );
$guidesvc_hero_opacity_range = get_post_meta( get_the_ID(), 'guidesvc-hero-opacity-range', true );
$guidesvc_temp_video_poster = get_post_meta( get_the_ID(), 'guidesvc-temp-video-poster', true );

$guide_logo	= get_post_meta(get_the_ID(), 'guideservice-logo', true); // added
$guide_hero	= get_post_meta(get_the_ID(), 'guideservice-image', true);
$guideservice_description = get_post_meta(get_the_ID(), 'guideservice-description', true); //added

$video_gsfeature_one = get_post_meta(get_the_ID(), 'guideservice-gs1-video', true);
$feature_gs1_image = get_post_meta(get_the_ID(), 'guideservice-gs1-image', true);
$feature_gs1_title	= get_post_meta(get_the_ID(), 'feature-gs1-title', true);

$feature_gs1_cost_textarea	= get_post_meta(get_the_ID(), 'feature-gs1-cost-textarea', true);
$feature_gs1_inclusions_textarea = get_post_meta(get_the_ID(), 'feature-gs1-inclusions-textarea', true);
$feature_gs1_noninclusions_textarea	= get_post_meta(get_the_ID(), 'feature-gs1-noninclusions-textarea', true);
$feature_gs1_travelins_textarea	= get_post_meta(get_the_ID(), 'feature-gs1-travelins-textarea', true);
$feature_gs1_packagedeal_textarea = get_post_meta(get_the_ID(), 'feature-gs1-packagedeal-textarea', true);

$video_gsfeature_two = get_post_meta(get_the_ID(), 'feature-gs2-video', true);
$feature_gs2_image = get_post_meta(get_the_ID(), 'feature-gs2-image', true);
$feature_gs2_title = get_post_meta(get_the_ID(), 'feature-gs2-title', true);
$feature_gs2_seasons_textarea = get_post_meta(get_the_ID(), 'feature-gs2-seasons-textarea', true);
$feature_gs2_seasons_readmore_info = get_post_meta(get_the_ID(), 'feature-gs2-seasons-readmore-info', true );
$feature_gs2_seasons_readmore = get_post_meta(get_the_ID(), 'feature-gs2-seasons-readmore', true);
$feature_gs2_autumn_textarea = get_post_meta(get_the_ID(), 'feature-gs2-autumn-textarea', true);
$feature_gs2_winter_textarea = get_post_meta(get_the_ID(), 'feature-gs2-winter-textarea', true);
$feature_gs2_spring_textarea = get_post_meta(get_the_ID(), 'feature-gs2-spring-textarea', true);
$feature_gs2_summer_textarea = get_post_meta(get_the_ID(), 'feature-gs2-summer-textarea', true);

$video_gsfeature_three = get_post_meta(get_the_ID(), 'feature-gs3-video', true);
$feature_gs3_fishing_image = get_post_meta(get_the_ID(), 'feature-gs3-image', true);
$feature_gs3_fishing_title = get_post_meta(get_the_ID(), 'feature-gs3-fishing-title', true);
$feature_gs3_fishing_content = get_post_meta(get_the_ID(), 'feature-gs3-fishing-textarea', true);
$feature_gs3_fishing_readmore_info = get_post_meta(get_the_ID(), 'feature-gs3-fishing-readmore-info', true );
$feature_gs3_fishing_readmore = get_post_meta(get_the_ID(), 'feature-gs3-fishing-readmore', true);

$guide_fishing_beat1_label = get_post_meta(get_the_ID(), 'guide-fishing-beat1-label', true );
$guide_fishing_beat2_label = get_post_meta(get_the_ID(), 'guide-fishing-beat2-label', true );
$guide_fishing_beat3_label = get_post_meta(get_the_ID(), 'guide-fishing-beat3-label', true );
$guide_fishing_beat4_label = get_post_meta(get_the_ID(), 'guide-fishing-beat4-label', true );
$guide_fishing_beat5_label = get_post_meta(get_the_ID(), 'guide-fishing-beat5-label', true );
$guide_fishing_beat6_label = get_post_meta(get_the_ID(), 'guide-fishing-beat6-label', true );

$feature_gs3_fishing_beat1 = get_post_meta(get_the_ID(), 'feature-gs3-fishing-beat1', true);
$feature_gs3_fishing_beat2 = get_post_meta(get_the_ID(), 'feature-gs3-fishing-beat2', true);
$feature_gs3_fishing_beat3 = get_post_meta(get_the_ID(), 'feature-gs3-fishing-beat3', true);
$feature_gs3_fishing_beat4 = get_post_meta(get_the_ID(), 'feature-gs3-fishing-beat4', true);
$feature_gs3_fishing_beat5 = get_post_meta(get_the_ID(), 'feature-gs3-fishing-beat5', true);
$feature_gs3_fishing_beat6 = get_post_meta(get_the_ID(), 'feature-gs3-fishing-beat6', true);

$guide_beat_1 = ( '' == get_theme_mod( 'guide-beat-1') ) ? 'hide-guidebeat1' : '1';
$guide_beat_2 = ( '' == get_theme_mod( 'guide-beat-2') ) ? 'hide-guidebeat2' : '1';
$guide_beat_3 = ( '' == get_theme_mod( 'guide-beat-3') ) ? 'hide-guidebeat3' : '1';
$guide_beat_4 = ( '' == get_theme_mod( 'guide-beat-4') ) ? 'hide-guidebeat4' : '1';
$guide_beat_5 = ( '' == get_theme_mod( 'guide-beat-5') ) ? 'hide-guidebeat5' : '1';
$guide_beat_6 = ( '' == get_theme_mod( 'guide-beat-6') ) ? 'hide-guidebeat6' : '1';

$video_gsfeature_four = get_post_meta(get_the_ID(), 'feature-gs4-video', true);
$feature_4_gslodging_image = get_post_meta(get_the_ID(), 'feature-gs4-image', true);
$feature_4_gslodging_title = get_post_meta(get_the_ID(), 'feature-gs4-title', true);
$feature_4_gslodging_content = get_post_meta(get_the_ID(), 'feature-gs4-gettingto-textarea', true);
$feature_4_gslodging_readmore = get_post_meta(get_the_ID(), 'feature-gs4-readmore-textarea', true);

$video_gsfeature_five = get_post_meta(get_the_ID(), 'feature-gs5-video', true);
$feature_gs5_gettingto_image = get_post_meta(get_the_ID(), 'feature-gs5-image', true );
$feature_gs5_get_to_title = get_post_meta(get_the_ID(), 'feature-gs3-title', true);
$feature_gs5_get_to_content = get_post_meta(get_the_ID(), 'feature-gs3-gettingto-textarea', true );
$feature_gs5_readmore_info = get_post_meta(get_the_ID(), 'feature-gs3-readmore-info', true );
$feature_gs5_get_to_readmore = get_post_meta(get_the_ID(), 'feature-gs3-readmore-textarea', true );

$guideservice_additional_info_image1		= get_post_meta(get_the_ID(), 'guideservice-additional-info-image1', true);
$guideservice_additional_info_image1_link	= get_post_meta(get_the_ID(), 'guideservice-additional-info-image1-link', true);
$guideservice_additional_info_image2		= get_post_meta(get_the_ID(), 'guideservice-additional-info-image2', true);
$guideservice_additional_info_image2_link	= get_post_meta(get_the_ID(), 'guideservice-additional-info-image2-link', true);
$guideservice_additional_info_image3		= get_post_meta(get_the_ID(), 'guideservice-additional-info-image3', true);
$guideservice_additional_info_image3_link	= get_post_meta(get_the_ID(), 'guideservice-additional-info-image3-link', true);
$guideservice_additional_info_image4		= get_post_meta(get_the_ID(), 'guideservice-additional-info-image4', true);
$guideservice_additional_info_image4_link	= get_post_meta(get_the_ID(), 'guideservice-additional-info-image4-link', true);
$guideservice_additional_info_image5		= get_post_meta(get_the_ID(), 'guideservice-additional-info-image5', true);
$guideservice_additional_info_image5_link	= get_post_meta(get_the_ID(), 'guideservice-additional-info-image5-link', true);
$guideservice_additional_info_image6		= get_post_meta(get_the_ID(), 'guideservice-additional-info-image6', true);
$guideservice_additional_info_image6_link	= get_post_meta(get_the_ID(), 'guideservice-additional-info-image6-link', true);
$guideservice_additional_info_image7		= get_post_meta(get_the_ID(), 'guideservice-additional-info-image7', true);
$guideservice_additional_info_image7_link	= get_post_meta(get_the_ID(), 'guideservice-additional-info-image7-link', true);
$guideservice_additional_info_image8		= get_post_meta(get_the_ID(), 'guideservice-additional-info-image8', true);
$guideservice_additional_info_image8_link	= get_post_meta(get_the_ID(), 'guideservice-additional-info-image8-link', true);
$cta_guideservice_strong_intro				= get_post_meta(get_the_ID(), 'cta-guideservice-strong-intro', true);
$cta_guideservice_content					= get_post_meta(get_the_ID(), 'cta-guideservice-content', true);

