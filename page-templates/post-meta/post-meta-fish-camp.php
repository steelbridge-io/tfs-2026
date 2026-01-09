<?php
/**
 * Template part for displaying post meta in fish-camp-template.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Fly_Shop
 */

$fish_camp_logo													= get_post_meta(get_the_ID(), 'fish-camp-logo', true);
$fish_camp_description 									= get_post_meta(get_the_ID(), 'fish-camp-description', true);

$video_fcfeature_one 										= get_post_meta(get_the_ID(), 'feature-fc1-video', true);
$feature_fc1_image											= get_post_meta(get_the_ID(), 'feature-fc1-image', true);
$feature_fc1_title											=	get_post_meta(get_the_ID(), 'feature-fc1-title', true);
$feature_fc1_cost_textarea							= get_post_meta(get_the_ID(), 'feature-fc1-cost-textarea', true);
$feature_fc1_inclusions_textarea				= get_post_meta(get_the_ID(), 'feature-fc1-inclusions-textarea', true);
$feature_fc1_noninclusions_textarea			= get_post_meta(get_the_ID(), 'feature-fc1-noninclusions-textarea', true);
$feature_fc1_travelins_textarea					= get_post_meta(get_the_ID(), 'feature-fc1-travelins-textarea', true);
$feature_fc1_nonangler_textarea					= get_post_meta(get_the_ID(), 'feature-fc1-nonangler-textarea', true);

$video_fcfeature_two 										= get_post_meta(get_the_ID(), 'feature-fc2-video', true);
$feature_fc2_image											= get_post_meta(get_the_ID(), 'feature-fc2-image', true);
$feature_fc2_title                  		= get_post_meta(get_the_ID(), 'feature-fc2-title', true);
$feature_fc2_seasons_textarea       		= get_post_meta(get_the_ID(), 'feature-fc2-seasons-textarea', true);
$feature_fc2_readmore_info              = get_post_meta(get_the_ID(), 'feature-fc2-readmore-info', true);
$feature_fc2_readmore_textarea					= get_post_meta(get_the_ID(), 'feature-fc2-readmore-textarea', true);

$video_fcfeature_three 									= get_post_meta(get_the_ID(), 'feature-fc3-video', true);
$feature_fc3_fishing_image							= get_post_meta(get_the_ID(), 'feature-fc3-image', true);

$feature_fcfive_title										= get_post_meta(get_the_ID(), 'feature-fcfive-title', true);
$feature_fcfive_textarea								= get_post_meta(get_the_ID(), 'feature-fcfive-textarea', true);
$feature_fcfive_readmore_info           = get_post_meta(get_the_ID(), 'feature-fcfive-readmore-info', true);
$feature_fcfive_readmore_textarea				= get_post_meta(get_the_ID(), 'feature-fcfive-readmore-textarea', true);

$video_fcfeature_four 									= get_post_meta(get_the_ID(), 'feature-fc4-video', true);
$feature_fc4_image											= get_post_meta(get_the_ID(), 'feature-fc4-image', true);
$feature_4_fclodging_title							= get_post_meta(get_the_ID(), 'feature-fc4-title', true);
$feature_4_fclodging_content						= get_post_meta(get_the_ID(), 'feature-fc4-gettingto-textarea', true);
$feature_fc4_readmore_info              = get_post_meta(get_the_ID(), 'feature-fc4-readmore-info', true);
$feature_4_fclodging_readmore						= get_post_meta(get_the_ID(), 'feature-fc4-readmore-textarea', true);

$video_fcfeature_five										= get_post_meta(get_the_ID(), 'feature-fc5-video', true);
$feature_fc5_image											= get_post_meta(get_the_ID(), 'feature-fc5-image', true );
$feature_fc5_get_to_title								= get_post_meta(get_the_ID(), 'feature-fc3-title', true);
$feature_fc5_get_to_content							= get_post_meta(get_the_ID(), 'feature-fc3-gettingto-textarea', true );
$feature_fc3_readmore_info              = get_post_meta(get_the_ID(), 'feature-fc3-readmore-info', true );
$feature_fc5_get_to_readmore						= get_post_meta(get_the_ID(), 'feature-fc3-readmore-textarea', true );

$fish_camp_additional_info_image1					= get_post_meta(get_the_ID(), 'fish-camp-additional-info-image1', true);
$fish_camp_additional_info_image1_link		= get_post_meta(get_the_ID(), 'fish-camp-additional-info-image1-link', true);
$fish_camp_additional_info_image2					= get_post_meta(get_the_ID(), 'fish-camp-additional-info-image2', true);
$fish_camp_additional_info_image2_link		= get_post_meta(get_the_ID(), 'fish-camp-additional-info-image2-link', true);
$fish_camp_additional_info_image3					= get_post_meta(get_the_ID(), 'fish-camp-additional-info-image3', true);
$fish_camp_additional_info_image3_link		= get_post_meta(get_the_ID(), 'fish-camp-additional-info-image3-link', true);
$fish_camp_additional_info_image4					= get_post_meta(get_the_ID(), 'fish-camp-additional-info-image4', true);
$fish_camp_additional_info_image4_link		= get_post_meta(get_the_ID(), 'fish-camp-additional-info-image4-link', true);
$fish_camp_additional_info_image5					= get_post_meta(get_the_ID(), 'fish-camp-additional-info-image5', true);
$fish_camp_additional_info_image5_link		= get_post_meta(get_the_ID(), 'fish-camp-additional-info-image5-link', true);
$fish_camp_additional_info_image6					= get_post_meta(get_the_ID(), 'fish-camp-additional-info-image6', true);
$fish_camp_additional_info_image6_link		= get_post_meta(get_the_ID(), 'fish-camp-additional-info-image6-link', true);
$fish_camp_additional_info_image7					= get_post_meta(get_the_ID(), 'fish-camp-additional-info-image7', true);
$fish_camp_additional_info_image7_link		= get_post_meta(get_the_ID(), 'fish-camp-additional-info-image7-link', true);
$fish_camp_additional_info_image8					= get_post_meta(get_the_ID(), 'fish-camp-additional-info-image8', true);
$fish_camp_additional_info_image8_link		= get_post_meta(get_the_ID(), 'fish-camp-additional-info-image8-link', true);
$cta_fish_camp_strong_intro								= get_post_meta(get_the_ID(), 'cta-fish-camp-strong-intro', true);
$cta_fish_camp_content										= get_post_meta(get_the_ID(), 'cta-fish-camp-content', true);
