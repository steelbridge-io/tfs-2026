<?php
/**
 * Template part for displaying post meta in travel-template.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Fly_Shop
 */

$multi_season_calendar_title = get_post_meta( get_the_ID(), 'multi-season-calendar-title', true );

$monthly_range_checkbox = get_post_meta( get_the_ID(), 'monthly-range-checkbox', true );
$seasons = array();
for ($season = 1; $season <= 3; $season++) {
    $seasons[$season] = array(
        // Range 1
        'start_month' => get_post_meta( get_the_ID(), "season{$season}-start-month", true ),
        'end_month'   => get_post_meta( get_the_ID(), "season{$season}-end-month", true ),
        'start_part'  => get_post_meta( get_the_ID(), "season{$season}-start-part", true ),
        'end_part'    => get_post_meta( get_the_ID(), "season{$season}-end-part", true ),
        'color'       => get_post_meta( get_the_ID(), "season{$season}-color", true ),
        'name'        => get_post_meta( get_the_ID(), "season{$season}-name", true ),
        // Range 2 (optional)
        'start_month_2' => get_post_meta( get_the_ID(), "season{$season}-start-month-2", true ),
        'end_month_2'   => get_post_meta( get_the_ID(), "season{$season}-end-month-2", true ),
        'start_part_2'  => get_post_meta( get_the_ID(), "season{$season}-start-part-2", true ),
        'end_part_2'    => get_post_meta( get_the_ID(), "season{$season}-end-part-2", true ),
        'color_2'       => get_post_meta( get_the_ID(), "season{$season}-color-2", true ),
        'name_2'        => get_post_meta( get_the_ID(), "season{$season}-name-2", true ),
    );
}

$feature_2_seasons_hi_lo_content = get_post_meta( get_the_ID(), 'feature-2-seasons-hi-lo-content', true );
$feature_2_seasons_hiseason      = get_post_meta( get_the_ID(), 'feature-2-seasons-hiseason', true );
$feature_2_seasons_lowseason     = get_post_meta( get_the_ID(), 'feature-2-seasons-lowseason', true );

$monthly_range_checkbox = get_post_meta( get_the_ID(), 'monthly-range-checkbox', true );
$season_start_month     = get_post_meta( get_the_ID(), 'season-start-month', true );
$season_end_month       = get_post_meta( get_the_ID(), 'season-end-month', true );
$season_color           = get_post_meta( get_the_ID(), 'season-color', true );

$travel_logo                  = get_post_meta( get_the_ID(), 'travel-logo', true );
$travel_description           = get_post_meta( get_the_ID(), 'travel-description', true );
$signature_travel_description = get_post_meta( get_the_ID(), 'signature-travel-description', true );
$dest_travel_logo				      = get_post_meta( get_the_ID(), 'dest-travel-logo', true );

$travel_temp_video        = get_post_meta( get_the_ID(), 'travel-temp-video', true );
$travel_temp_video_poster = get_post_meta( get_the_ID(), 'travel-temp-video-poster', true );

$feature_1_title                  = get_post_meta( get_the_ID(), 'feature-1-title', true );
$feature_1_readmore               = get_post_meta( get_the_ID(), 'feature-1-readmore', true );
$feature_1_cost_textarea          = wpautop(get_post_meta( get_the_ID(), 'feature-1-cost-textarea', true ));
$feature_1_inclusions_textarea    = wpautop(get_post_meta( get_the_ID(), 'feature-1-inclusions-textarea', true ));
$feature_1_noninclusions_textarea = wpautop(get_post_meta( get_the_ID(), 'feature-1-noninclusions-textarea', true ));
$feature_1_travelins_textarea     = wpautop(get_post_meta( get_the_ID(), 'feature-1-travelins-textarea', true ));
$feature_1_image                  = get_post_meta( get_the_ID(), 'feature-1-image', true );
$travel_costs_image               = get_post_meta( get_the_ID(), 'schoolv3-costs-image', true );

$feature_2_image                 = get_post_meta( get_the_ID(), 'feature-2-image', true );
$travel_seasons_image            = get_post_meta( get_the_ID(), 'schoolv3-seasons-image', true );
$feature_2_seasons_title         = get_post_meta( get_the_ID(), 'feature-2-seasons-title', true );
$feature_2_seasons_content       = wpautop(get_post_meta( get_the_ID(), 'feature-2-seasons-content', true ));
$feature_2_seasons_readmore      = wpautop(get_post_meta( get_the_ID(), 'feature-2-seasons-readmore', true ));
$feature_2_read_more_info        = wpautop(get_post_meta( get_the_ID(), 'feature-2-read-more-info', true ));
$feature_2_seasons_hi_lo_content = wpautop(get_post_meta( get_the_ID(), 'feature-2-seasons-hi-lo-content', true ));
$feature_2_seasons_hiseason      = wpautop(get_post_meta( get_the_ID(), 'feature-2-seasons-hiseason', true ));
$feature_2_seasons_lowseason     = wpautop(get_post_meta( get_the_ID(), 'feature-2-seasons-lowseason', true ));

$feature_3_gettingto_image  = get_post_meta( get_the_ID(), 'feature-3-gettingto-image', true );
$feature_3_getting_to_image = get_post_meta( get_the_ID(), 'feature-3-getting-to-image', true );
$feature_3_get_to_title     = get_post_meta( get_the_ID(), 'feature-3-get-to-title', true );
$feature_3_get_to_content   = wpautop(get_post_meta( get_the_ID(), 'feature-3-get-to-content', true ));
$feature_3_read_more_info   = wpautop(get_post_meta( get_the_ID(), 'feature-3-read-more-info', true ));
$feature_3_get_to_readmore  = wpautop(get_post_meta( get_the_ID(), 'feature-3-get-to-readmore', true ));

$feature_4_lodging_image    = get_post_meta( get_the_ID(), 'feature-4-lodging-image', true );
$feature_4_lodging_img      = get_post_meta( get_the_ID(), 'feature-4-lodging-img', true );
$feature_4_lodging_title    = get_post_meta( get_the_ID(), 'feature-4-lodging-title', true );
$feature_4_lodging_content  = wpautop(get_post_meta( get_the_ID(), 'feature-4-lodging-content', true ));
$feature_4_read_more_info   = wpautop(get_post_meta( get_the_ID(), 'feature-4-read-more-info', true ));
$feature_4_lodging_readmore = wpautop(get_post_meta( get_the_ID(), 'feature-4-lodging-readmore', true ));

$feature_5_angling_image    = get_post_meta( get_the_ID(), 'feature-5-angling-image', true );
$feature_5_angling_img      = get_post_meta( get_the_ID(), 'feature-5-angling-img', true );
$feature_5_angling_title    = get_post_meta( get_the_ID(), 'feature-5-angling-title', true );
$feature_5_angling_content  = wpautop(get_post_meta( get_the_ID(), 'feature-5-angling-content', true ));
$feature_5_read_more_info   = wpautop(get_post_meta( get_the_ID(), 'feature-5-read-more-info', true ));
$feature_5_angling_readmore = wpautop(get_post_meta( get_the_ID(), 'feature-5-angling-readmore', true ));


$feature_5_itinerary_image            = get_post_meta( get_the_ID(), 'feature-5-itinerary-image', true );
$feature_5_itinerary_img              = get_post_meta( get_the_ID(), 'feature-5-itinerary-img', true );
$feature_5_itinerary_title            = get_post_meta( get_the_ID(), 'feature-5-itinerary-title', true );
$feature_5_itinerary_content          = wpautop(get_post_meta( get_the_ID(), 'feature-5-itinerary-content', true ));
$feature_5_itinerary_read_more_info   = wpautop(get_post_meta( get_the_ID(), 'feature-5-itinerary-read-more-info', true ));
$feature_5_itinerary_readmore         = wpautop(get_post_meta( get_the_ID(), 'feature-5-itinerary-readmore', true ));


$feature_6_supplemental_image    = get_post_meta( get_the_ID(), 'feature-6-supplemental-image', true );
$feature_6_supplemental_img      = get_post_meta( get_the_ID(), 'feature-6-supplemental-img', true );
$feature_6_supplemental_title    = get_post_meta( get_the_ID(), 'feature-6-supplemental-title', true );
$feature_6_supplemental_content  = wpautop(get_post_meta( get_the_ID(), 'feature-6-supplemental-content', true ));
$feature_6_read_more_info        = wpautop(get_post_meta( get_the_ID(), 'feature-6-read-more-info', true ));
$feature_6_supplemental_readmore = wpautop(get_post_meta( get_the_ID(), 'feature-6-supplemental-readmore', true ));

$sth_title_1 = get_post_meta( get_the_ID(), 'sth-title-1', true );
$sth_content_1 = wpautop(get_post_meta( get_the_ID(), 'sth-textarea-1', true ));

$whywe_title_2 = get_post_meta( get_the_ID(), 'whywe-title-2', true );
$whywe_content_2 = wpautop(get_post_meta( get_the_ID(), 'whywe-textarea-2', true ));

$additional_info_image1      = get_post_meta( get_the_ID(), 'additional-info-image1', true );
$additional_info_image1_link = get_post_meta( get_the_ID(), 'additional-info-image1-link', true );
$additional_info_image2      = get_post_meta( get_the_ID(), 'additional-info-image2', true );
$additional_info_image2_link = get_post_meta( get_the_ID(), 'additional-info-image2-link', true );
$additional_info_image3      = get_post_meta( get_the_ID(), 'additional-info-image3', true );
$additional_info_image3_link = get_post_meta( get_the_ID(), 'additional-info-image3-link', true );
$additional_info_image4      = get_post_meta( get_the_ID(), 'additional-info-image4', true );
$additional_info_image4_link = get_post_meta( get_the_ID(), 'additional-info-image4-link', true );
$additional_info_image5      = get_post_meta( get_the_ID(), 'additional-info-image5', true );
$additional_info_image5_link = get_post_meta( get_the_ID(), 'additional-info-image5-link', true );
$additional_info_image6      = get_post_meta( get_the_ID(), 'additional-info-image6', true );
$additional_info_image6_link = get_post_meta( get_the_ID(), 'additional-info-image6-link', true );
$additional_info_image7      = get_post_meta( get_the_ID(), 'additional-info-image7', true );
$additional_info_image7_link = get_post_meta( get_the_ID(), 'additional-info-image7-link', true );
$additional_info_image8      = get_post_meta( get_the_ID(), 'additional-info-image8', true );
$additional_info_image8_link = get_post_meta( get_the_ID(), 'additional-info-image8-link', true );



$additional_schoolv3_image1      = get_post_meta( get_the_ID(), 'additional-schoolv3-image1', true );
$additional_schoolv3_image1_link = get_post_meta( get_the_ID(), 'additional-schoolv3-image1-link', true );
$additional_schoolv3_image2      = get_post_meta( get_the_ID(), 'additional-schoolv3-image2', true );
$additional_schoolv3_image2_link = get_post_meta( get_the_ID(), 'additional-schoolv3-image2-link', true );
$additional_schoolv3_image3      = get_post_meta( get_the_ID(), 'additional-schoolv3-image3', true );
$additional_schoolv3_image3_link = get_post_meta( get_the_ID(), 'additional-schoolv3-image3-link', true );
$additional_schoolv3_image4      = get_post_meta( get_the_ID(), 'additional-schoolv3-image4', true );
$additional_schoolv3_image4_link = get_post_meta( get_the_ID(), 'additional-schoolv3-image4-link', true );
$additional_schoolv3_image5      = get_post_meta( get_the_ID(), 'additional-schoolv3-image5', true );
$additional_schoolv3_image5_link = get_post_meta( get_the_ID(), 'additional-schoolv3-image5-link', true );
$additional_schoolv3_image6      = get_post_meta( get_the_ID(), 'additional-schoolv3-image6', true );
$additional_schoolv3_image6_link = get_post_meta( get_the_ID(), 'additional-schoolv3-image6-link', true );
$additional_schoolv3_image7      = get_post_meta( get_the_ID(), 'additional-schoolv3-image7', true );
$additional_schoolv3_image7_link = get_post_meta( get_the_ID(), 'additional-schoolv3-image7-link', true );
$additional_schoolv3_image8      = get_post_meta( get_the_ID(), 'additional-schoolv3-image8', true );
$additional_schoolv3_image8_link = get_post_meta( get_the_ID(), 'additional-schoolv3-image8-link', true );

$cta_strong_intro = get_post_meta( get_the_ID(), 'cta-strong-intro', true );
$cta_content      = wpautop(get_post_meta( get_the_ID(), 'cta-content', true ));

// Table Modal
$rr_table_title    = get_post_meta( get_the_ID(), 'rr-table-title', true );
$rr_table_textarea = wpautop(get_post_meta( get_the_ID(), 'rr-table-textarea', true ));
