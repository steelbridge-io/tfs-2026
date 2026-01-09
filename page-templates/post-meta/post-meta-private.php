<?php
/**
 * Template part for displaying post meta in private-template.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Fly_Shop
 */

$private_temp_video                     = get_post_meta( get_the_ID(), 'private-temp-video', true );
$private_temp_video_poster              = get_post_meta( get_the_ID(), 'private-temp-video-poster', true );

$private_waters_logo					= get_post_meta(get_the_ID(), 'private-logo', true);
$private_waters_description 			= get_post_meta(get_the_ID(), 'private-description', true);

$video_pwfeature_one 					= get_post_meta(get_the_ID(), 'feature-pw1-video', true);
$feature_pw1_image						= get_post_meta(get_the_ID(), 'feature-pw1-image', true);
$feature_pw1_title						= get_post_meta(get_the_ID(), 'feature-pw1-title', true);
$feature_pw1_cost_textarea	            = get_post_meta(get_the_ID(), 'feature-pw1-cost-textarea', true);
$feature_pw1_inclusions_textarea	    = get_post_meta(get_the_ID(), 'feature-pw1-inclusions-textarea', true);
$feature_pw1_noninclusions_textarea		= get_post_meta(get_the_ID(), 'feature-pw1-noninclusions-textarea', true);
$feature_pw1_travelins_textarea			= get_post_meta(get_the_ID(), 'feature-pw1-travelins-textarea', true);
$feature_pw1_nonangler_textarea			= get_post_meta(get_the_ID(), 'feature-pw1-nonangler-textarea', true);

$video_pwfeature_two 					= get_post_meta(get_the_ID(), 'feature-pw2-video', true);
$feature_pw2_image						= get_post_meta(get_the_ID(), 'feature-pw2-image', true);
$feature_pw2_title                  	= get_post_meta(get_the_ID(), 'feature-pw2-title', true);
$feature_pw2_seasons_textarea       	= get_post_meta(get_the_ID(), 'feature-pw2-seasons-textarea', true);
$feature_pw2_autumn_textarea       		= get_post_meta(get_the_ID(), 'feature-pw2-autumn-textarea', true);
$feature_pw2_winter_textarea       		= get_post_meta(get_the_ID(), 'feature-pw2-winter-textarea', true);
$feature_pw2_spring_textarea        	= get_post_meta(get_the_ID(), 'feature-pw2-spring-textarea', true);
$feature_pw2_summer_textarea        	= get_post_meta(get_the_ID(), 'feature-pw2-summer-textarea', true);

$video_feature_three 					= get_post_meta(get_the_ID(), 'feature-pw3-video', true);
$feature_pw3_fishing_image				= get_post_meta(get_the_ID(), 'feature-pw3-image', true);
$feature_pw3_fishing_title				= get_post_meta(get_the_ID(), 'feature-pw3-fishing-title', true);
$feature_pw3_fishing_content			= get_post_meta(get_the_ID(), 'feature-pw3-fishing-textarea', true);

$fishing_beat1_label					= get_post_meta(get_the_ID(), 'fishing-beat1-label', true );
$fishing_beat2_label					= get_post_meta(get_the_ID(), 'fishing-beat2-label', true );
$fishing_beat3_label					= get_post_meta(get_the_ID(), 'fishing-beat3-label', true );
$fishing_beat4_label					= get_post_meta(get_the_ID(), 'fishing-beat4-label', true );
$fishing_beat5_label					= get_post_meta(get_the_ID(), 'fishing-beat5-label', true );
$fishing_beat6_label					= get_post_meta(get_the_ID(), 'fishing-beat6-label', true );

$feature_pw3_fishing_beat1				= get_post_meta(get_the_ID(), 'feature-pw3-fishing-beat1', true);
$feature_pw3_fishing_beat2				= get_post_meta(get_the_ID(), 'feature-pw3-fishing-beat2', true);
$feature_pw3_fishing_beat3				= get_post_meta(get_the_ID(), 'feature-pw3-fishing-beat3', true);
$feature_pw3_fishing_beat4				= get_post_meta(get_the_ID(), 'feature-pw3-fishing-beat4', true);
$feature_pw3_fishing_beat5				= get_post_meta(get_the_ID(), 'feature-pw3-fishing-beat5', true);
$feature_pw3_fishing_beat6				= get_post_meta(get_the_ID(), 'feature-pw3-fishing-beat6', true);


$beat_1																	= ( '' == get_theme_mod( 'beat-1') ) ? 'hide-beat1' : '1';
$beat_2																	= ( '' == get_theme_mod( 'beat-2') ) ? 'hide-beat2' : '1';
$beat_3																	= ( '' == get_theme_mod( 'beat-3') ) ? 'hide-beat3' : '1';
$beat_4																	= ( '' == get_theme_mod( 'beat-4') ) ? 'hide-beat4' : '1';
$beat_5																	= ( '' == get_theme_mod( 'beat-5') ) ? 'hide-beat5' : '1';
$beat_6																	= ( '' == get_theme_mod( 'beat-6') ) ? 'hide-beat6' : '1';

$video_pwfeature_four 									= get_post_meta(get_the_ID(), 'feature-pw4-video', true);
$feature_4_pwlodging_image							= get_post_meta(get_the_ID(), 'feature-pw4-image', true);
$feature_4_pwlodging_title							= get_post_meta(get_the_ID(), 'feature-pw4-title', true);
$feature_4_pwlodging_content						= get_post_meta(get_the_ID(), 'feature-pw4-gettingto-textarea', true);
$feature_4_pwlodging_readmore_info      = get_post_meta(get_the_ID(), 'feature-4-pwlodging-readmore-info', true);
$feature_4_pwlodging_readmore						= get_post_meta(get_the_ID(), 'feature-pw4-readmore-textarea', true);

$video_feature_five											= get_post_meta(get_the_ID(), 'feature-pw5-video', true);
$feature_pw5_gettingto_image						= get_post_meta(get_the_ID(), 'feature-pw5-image', true );
$feature_pw5_get_to_title								= get_post_meta(get_the_ID(), 'feature-pw3-title', true);
$feature_pw5_get_to_content							= get_post_meta(get_the_ID(), 'feature-pw3-gettingto-textarea', true );
$feature_pw5_get_to_readmore_info       = get_post_meta(get_the_ID(), 'feature-pw5-get-to-readmore-info', true );
$feature_pw5_get_to_readmore						= get_post_meta(get_the_ID(), 'feature-pw3-readmore-textarea', true );

$private_additional_info_image1					= get_post_meta(get_the_ID(), 'private-additional-info-image1', true);
$private_additional_info_image1_link		= get_post_meta(get_the_ID(), 'private-additional-info-image1-link', true);
$private_additional_info_image2					= get_post_meta(get_the_ID(), 'private-additional-info-image2', true);
$private_additional_info_image2_link		= get_post_meta(get_the_ID(), 'private-additional-info-image2-link', true);
$private_additional_info_image3					= get_post_meta(get_the_ID(), 'private-additional-info-image3', true);
$private_additional_info_image3_link		= get_post_meta(get_the_ID(), 'private-additional-info-image3-link', true);
$private_additional_info_image4					= get_post_meta(get_the_ID(), 'private-additional-info-image4', true);
$private_additional_info_image4_link		= get_post_meta(get_the_ID(), 'private-additional-info-image4-link', true);
$private_additional_info_image5					= get_post_meta(get_the_ID(), 'private-additional-info-image5', true);
$private_additional_info_image5_link		= get_post_meta(get_the_ID(), 'private-additional-info-image5-link', true);
$private_additional_info_image6					= get_post_meta(get_the_ID(), 'private-additional-info-image6', true);
$private_additional_info_image6_link		= get_post_meta(get_the_ID(), 'private-additional-info-image6-link', true);
$private_additional_info_image7					= get_post_meta(get_the_ID(), 'private-additional-info-image7', true);
$private_additional_info_image7_link		= get_post_meta(get_the_ID(), 'private-additional-info-image7-link', true);
$private_additional_info_image8					= get_post_meta(get_the_ID(), 'private-additional-info-image8', true);
$private_additional_info_image8_link		= get_post_meta(get_the_ID(), 'private-additional-info-image8-link', true);
$cta_private_strong_intro								= get_post_meta(get_the_ID(), 'cta-private-strong-intro', true);
$cta_private_content										= get_post_meta(get_the_ID(), 'cta-private-content', true);
