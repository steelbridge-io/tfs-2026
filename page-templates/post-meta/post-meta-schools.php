<?php
/**
 * Template part for displaying post meta in schools-template.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Fly_Shop
 */

$schools_waters_logo										= get_post_meta(get_the_ID(), 'schools-logo', true);
$schools_waters_description 						= get_post_meta(get_the_ID(), 'schools-description', true);

$video_schfeature_one 									= get_post_meta(get_the_ID(), 'feature-sch1-video', true);
$feature_sch1_image											= get_post_meta(get_the_ID(), 'feature-sch1-image', true);
$feature_sch1_title											=	get_post_meta(get_the_ID(), 'feature-sch1-title', true);
$feature_sch1_cost_textarea							= get_post_meta(get_the_ID(), 'feature-sch1-cost-textarea', true);
$feature_sch1_inclusions_textarea				= get_post_meta(get_the_ID(), 'feature-sch1-inclusions-textarea', true);
$feature_sch1_noninclusions_textarea		= get_post_meta(get_the_ID(), 'feature-sch1-noninclusions-textarea', true);

$video_schfeature_two 									= get_post_meta(get_the_ID(), 'feature-sch2-video', true);
$feature_sch2_image											= get_post_meta(get_the_ID(), 'feature-sch2-image', true);
$feature_sch2_title                  		= get_post_meta(get_the_ID(), 'feature-sch2-title', true);
$feature_sch2_dates_textarea       			= get_post_meta(get_the_ID(), 'feature-sch2-dates-textarea', true);
$sch_dates_readmore_textarea            = get_post_meta(get_the_ID(), 'sch-dates-readmore-textarea', true);

$video_schfeature_four 									= get_post_meta(get_the_ID(), 'feature-sch4-video', true);
$feature_4_schlodging_image             = get_post_meta(get_the_ID(), 'feature-sch5-image', true);
$feature_4_schlodging_title							= get_post_meta(get_the_ID(), 'feature-sch4-title', true);
$feature_4_schlodging_content						= get_post_meta(get_the_ID(), 'feature-sch4-gettingto-textarea', true);
$feature_4_schlodging_readmore					= get_post_meta(get_the_ID(), 'feature-sch4-readmore-textarea', true);

$video_schfeature_five									= get_post_meta(get_the_ID(), 'feature-sch5-video', true);
$feature_sch5_gettingto_image						= get_post_meta(get_the_ID(), 'feature-sch4-image', true );
$feature_sch5_get_to_title							= get_post_meta(get_the_ID(), 'feature-sch3-title', true);
$feature_sch5_get_to_content						= get_post_meta(get_the_ID(), 'feature-sch3-gettingto-textarea', true );
$feature_sch5_get_to_readmore						= get_post_meta(get_the_ID(), 'feature-sch3-readmore-textarea', true );

$video_schfeature_three 								= get_post_meta(get_the_ID(), 'feature-sch3-video', true);
$feature_sch3_itinerary_image						= get_post_meta(get_the_ID(), 'feature-sch3-itinerary-image', true);
$feature_sch3_fishing_title							= get_post_meta(get_the_ID(), 'feature-sch3-fishing-title', true);
$feature_sch3_fishing_content						= get_post_meta(get_the_ID(), 'feature-sch3-fishing-textarea', true);
$feature_sch3_fishing_readmore					= get_post_meta(get_the_ID(), 'feature-sch3-readmore-textarea-intinerary', true);

$schools_additional_info_image1					= get_post_meta(get_the_ID(), 'schools-additional-info-image1', true);
$schools_additional_info_image1_link		= get_post_meta(get_the_ID(), 'schools-additional-info-image1-link', true);
$schools_additional_info_image2					= get_post_meta(get_the_ID(), 'schools-additional-info-image2', true);
$schools_additional_info_image2_link		= get_post_meta(get_the_ID(), 'schools-additional-info-image2-link', true);
$schools_additional_info_image3					= get_post_meta(get_the_ID(), 'schools-additional-info-image3', true);
$schools_additional_info_image3_link		= get_post_meta(get_the_ID(), 'schools-additional-info-image3-link', true);
$schools_additional_info_image4					= get_post_meta(get_the_ID(), 'schools-additional-info-image4', true);
$schools_additional_info_image4_link		= get_post_meta(get_the_ID(), 'schools-additional-info-image4-link', true);
$schools_additional_info_image5					= get_post_meta(get_the_ID(), 'schools-additional-info-image5', true);
$schools_additional_info_image5_link		= get_post_meta(get_the_ID(), 'schools-additional-info-image5-link', true);
$schools_additional_info_image6					= get_post_meta(get_the_ID(), 'schools-additional-info-image6', true);
$schools_additional_info_image6_link		= get_post_meta(get_the_ID(), 'schools-additional-info-image6-link', true);
$schools_additional_info_image7					= get_post_meta(get_the_ID(), 'schools-additional-info-image7', true);
$schools_additional_info_image7_link		= get_post_meta(get_the_ID(), 'schools-additional-info-image7-link', true);
$schools_additional_info_image8					= get_post_meta(get_the_ID(), 'schools-additional-info-image8', true);
$schools_additional_info_image8_link		= get_post_meta(get_the_ID(), 'schools-additional-info-image8-link', true);
$cta_schools_strong_intro								= get_post_meta(get_the_ID(), 'cta-schools-strong-intro', true);
$cta_schools_content										= get_post_meta(get_the_ID(), 'cta-schools-content', true);
