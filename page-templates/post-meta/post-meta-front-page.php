<?php
/**
 * Template part for displaying post meta in front-page-template.php.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Fly_Shop
 */

$front_page_logo = get_post_meta( get_the_ID(), 'front-page-logo', TRUE );

$front_page_image_1_title      = get_post_meta( get_the_ID(),
	'front-page-image-1-title',
	TRUE );

$front_page_image_1_title_link = get_post_meta( get_the_ID(),
	'front-page-image-1-title-link',
	TRUE );

$front_page_image_1            = get_post_meta( get_the_ID(),
	'front-page-image-1',
	TRUE );

$front_page_image_1_sub_title  = get_post_meta( get_the_ID(),
	'front-page-image-1-sub-title',
	TRUE );

$front_page_image_1_caption    = get_post_meta( get_the_ID(),
	'front-page-image-1-caption',
	TRUE );

$front_page_image_2_title      = get_post_meta( get_the_ID(),
	'front-page-image-2-title',
	TRUE );

$front_page_image_2_title_link = get_post_meta( get_the_ID(),
	'front-page-image-2-title-link',
	TRUE );

$front_page_image_2            = get_post_meta( get_the_ID(),
	'front-page-image-2',
	TRUE );

$front_page_image_2_sub_title  = get_post_meta( get_the_ID(),
	'front-page-image-2-sub-title',
	TRUE );

$front_page_image_2_caption    = get_post_meta( get_the_ID(),
	'front-page-image-2-caption',
	TRUE );

$front_page_image_3_title      = get_post_meta( get_the_ID(),
	'front-page-image-3-title',
	TRUE );

$front_page_image_3_title_link = get_post_meta( get_the_ID(),
	'front-page-image-3-title-link',
	TRUE );

$front_page_image_3            = get_post_meta( get_the_ID(),
	'front-page-image-3',
	TRUE );

$front_page_image_3_sub_title  = get_post_meta( get_the_ID(),
	'front-page-image-3-sub-title',
	TRUE );

$front_page_image_3_caption    = get_post_meta( get_the_ID(),
	'front-page-image-3-caption',
	TRUE );

$front_page_image_4_title      = get_post_meta( get_the_ID(),
	'front-page-image-4-title',
	TRUE );

$front_page_image_4_title_link = get_post_meta( get_the_ID(),
	'front-page-image-4-title-link',
	TRUE );

$front_page_image_4            = get_post_meta( get_the_ID(),
	'front-page-image-4',
	TRUE );

$front_page_image_4_sub_title  = get_post_meta( get_the_ID(),
	'front-page-image-4-sub-title',
	TRUE );

$front_page_image_4_caption    = get_post_meta( get_the_ID(),
	'front-page-image-4-caption',
	TRUE );

$flippage1_title      = get_post_meta( get_the_ID(),
	'flippage1-title',
	TRUE );

$flippage1_title_link = get_post_meta( get_the_ID(),
	'flippage1-title-link',
	TRUE );

$flippage1_image      = get_post_meta( get_the_ID(),
	'flippage1-image',
	TRUE );

$flippage1_image_id  = attachment_url_to_postid( $flippage1_image );

$flippage1_image_alt = get_post_meta( $flippage1_image_id,
	'_wp_attachment_image_alt',
	TRUE );

$flippage1_sub_title = get_post_meta( get_the_ID(),
	'flippage1-sub-title',
	TRUE );
$flippage1_caption   = get_post_meta( get_the_ID(), 'flippage1-caption', TRUE );

$flippage2_title      = get_post_meta( get_the_ID(), 'flippage2-title', TRUE );
$flippage2_title_link = get_post_meta( get_the_ID(),
	'flippage2-title-link',
	TRUE );
$flippage2_image      = get_post_meta( get_the_ID(), 'flippage2-image', TRUE );

$flippage2_image_id  = attachment_url_to_postid( $flippage2_image );
$flippage2_image_alt = get_post_meta( $flippage2_image_id,
	'_wp_attachment_image_alt',
	TRUE );

$flippage2_sub_title = get_post_meta( get_the_ID(),
	'flippage2-sub-title',
	TRUE );
$flippage2_caption   = get_post_meta( get_the_ID(), 'flippage2-caption', TRUE );

$flippage3_title      = get_post_meta( get_the_ID(), 'flippage3-title', TRUE );
$flippage3_title_link = get_post_meta( get_the_ID(),
	'flippage3-title-link',
	TRUE );
$flippage3_image      = get_post_meta( get_the_ID(), 'flippage3-image', TRUE );

$flippage3_image_id  = attachment_url_to_postid( $flippage3_image );
$flippage3_image_alt = get_post_meta( $flippage3_image_id,
	'_wp_attachment_image_alt',
	TRUE );

$flippage3_sub_title = get_post_meta( get_the_ID(),
	'flippage3-sub-title',
	TRUE );
$flippage3_caption   = get_post_meta( get_the_ID(), 'flippage3-caption', TRUE );

$flippage4_title      = get_post_meta( get_the_ID(), 'flippage4-title', TRUE );
$flippage4_title_link = get_post_meta( get_the_ID(),
	'flippage4-title-link',
	TRUE );
$flippage4_image      = get_post_meta( get_the_ID(), 'flippage4-image', TRUE );

$flippage4_image_id  = attachment_url_to_postid( $flippage4_image );
$flippage4_image_alt = get_post_meta( $flippage4_image_id,
	'_wp_attachment_image_alt',
	TRUE );

$flippage4_sub_title = get_post_meta( get_the_ID(),
	'flippage4-sub-title',
	TRUE );
$flippage4_caption   = get_post_meta( get_the_ID(), 'flippage4-caption', TRUE );

$front_page_image_5_title      = get_post_meta( get_the_ID(),
	'front-page-image-5-title',
	TRUE );
$front_page_image_5_title_link = get_post_meta( get_the_ID(),
	'front-page-image-5-title-link',
	TRUE );
$front_page_image_5            = get_post_meta( get_the_ID(),
	'front-page-image-5',
	TRUE );
$front_page_image_5_sub_title  = get_post_meta( get_the_ID(),
	'front-page-image-5-sub-title',
	TRUE );
$front_page_image_5_caption    = get_post_meta( get_the_ID(),
	'front-page-image-5-caption',
	TRUE );

$front_page_image_6_title      = get_post_meta( get_the_ID(),
	'front-page-image-6-title',
	TRUE );
$front_page_image_6_title_link = get_post_meta( get_the_ID(),
	'front-page-image-6-title-link',
	TRUE );
$front_page_image_6            = get_post_meta( get_the_ID(),
	'front-page-image-6',
	TRUE );
$front_page_image_6_sub_title  = get_post_meta( get_the_ID(),
	'front-page-image-6-sub-title',
	TRUE );
$front_page_image_6_caption    = get_post_meta( get_the_ID(),
	'front-page-image-6-caption',
	TRUE );

$front_page_image_7_title      = get_post_meta( get_the_ID(),
	'front-page-image-7-title',
	TRUE );
$front_page_image_7_title_link = get_post_meta( get_the_ID(),
	'front-page-image-7-title-link',
	TRUE );
$front_page_image_7            = get_post_meta( get_the_ID(),
	'front-page-image-7',
	TRUE );
$front_page_image_7_sub_title  = get_post_meta( get_the_ID(),
	'front-page-image-7-sub-title',
	TRUE );
$front_page_image_7_caption    = get_post_meta( get_the_ID(),
	'front-page-image-7-caption',
	TRUE );

$front_page_image_8_title      = get_post_meta( get_the_ID(),
	'front-page-image-8-title',
	TRUE );
$front_page_image_8_title_link = get_post_meta( get_the_ID(),
	'front-page-image-8-title-link',
	TRUE );
$front_page_image_8            = get_post_meta( get_the_ID(),
	'front-page-image-8',
	TRUE );
$front_page_image_8_sub_title  = get_post_meta( get_the_ID(),
	'front-page-image-8-sub-title',
	TRUE );
$front_page_image_8_caption    = get_post_meta( get_the_ID(),
	'front-page-image-8-caption',
	TRUE );

$front_page_image_9_title      = get_post_meta( get_the_ID(),
	'front-page-image-9-title',
	TRUE );
$front_page_image_9_title_link = get_post_meta( get_the_ID(),
	'front-page-image-9-title-link',
	TRUE );
$front_page_image_9            = get_post_meta( get_the_ID(),
	'front-page-image-9',
	TRUE );
$front_page_image_9_sub_title  = get_post_meta( get_the_ID(),
	'front-page-image-9-sub-title',
	TRUE );
$front_page_image_9_caption    = get_post_meta( get_the_ID(),
	'front-page-image-9-caption',
	TRUE );

$front_page_image_10_title     = get_post_meta( get_the_ID(),
	'front-page-image-10-title',
	TRUE );
$front_page_image_10           = get_post_meta( get_the_ID(),
	'front-page-image-10',
	TRUE );
$front_page_image_10_sub_title = get_post_meta( get_the_ID(),
	'front-page-image-10-sub-title',
	TRUE );
$front_page_image_10_caption   = get_post_meta( get_the_ID(),
	'front-page-image-10-caption',
	TRUE );

$front_page_image_11_title     = get_post_meta( get_the_ID(),
	'front-page-image-11-title',
	TRUE );
$front_page_image_11           = get_post_meta( get_the_ID(),
	'front-page-image-11',
	TRUE );
$front_page_image_11_sub_title = get_post_meta( get_the_ID(),
	'front-page-image-11-sub-title',
	TRUE );
$front_page_image_11_caption   = get_post_meta( get_the_ID(),
	'front-page-image-11-caption',
	TRUE );

$front_page_image_12_title     = get_post_meta( get_the_ID(),
	'front-page-image-12-title',
	TRUE );
$front_page_image_12           = get_post_meta( get_the_ID(),
	'front-page-image-12',
	TRUE );
$front_page_image_12_sub_title = get_post_meta( get_the_ID(),
	'front-page-image-12-sub-title',
	TRUE );
$front_page_image_12_caption   = get_post_meta( get_the_ID(),
	'front-page-image-12-caption',
	TRUE );

$front_page_image_13_title     = get_post_meta( get_the_ID(),
	'front-page-image-13-title',
	TRUE );
$front_page_image_13           = get_post_meta( get_the_ID(),
	'front-page-image-13',
	TRUE );
$front_page_image_13_sub_title = get_post_meta( get_the_ID(),
	'front-page-image-13-sub-title',
	TRUE );
$front_page_image_13_caption   = get_post_meta( get_the_ID(),
	'front-page-image-13-caption',
	TRUE );

$front_page_image_14_title     = get_post_meta( get_the_ID(),
	'front-page-image-14-title',
	TRUE );
$front_page_image_14           = get_post_meta( get_the_ID(),
	'front-page-image-14',
	TRUE );
$front_page_image_14_sub_title = get_post_meta( get_the_ID(),
	'front-page-image-14-sub-title',
	TRUE );
$front_page_image_14_caption   = get_post_meta( get_the_ID(),
	'front-page-image-14-caption',
	TRUE );

$front_page_image_15_title     = get_post_meta( get_the_ID(),
	'front-page-image-15-title',
	TRUE );
$front_page_image_15           = get_post_meta( get_the_ID(),
	'front-page-image-15',
	TRUE );
$front_page_image_15_sub_title = get_post_meta( get_the_ID(),
	'front-page-image-15-sub-title',
	TRUE );
$front_page_image_15_caption   = get_post_meta( get_the_ID(),
	'front-page-image-15-caption',
	TRUE );

$front_page_image_16_title     = get_post_meta( get_the_ID(),
	'front-page-image-16-title',
	TRUE );
$front_page_image_16           = get_post_meta( get_the_ID(),
	'front-page-image-16',
	TRUE );
$front_page_image_16_sub_title = get_post_meta( get_the_ID(),
	'front-page-image-16-sub-title',
	TRUE );
$front_page_image_16_caption   = get_post_meta( get_the_ID(),
	'front-page-image-16-caption',
	TRUE );

$front_page_image_17_title     = get_post_meta( get_the_ID(),
	'front-page-image-17-title',
	TRUE );
$front_page_image_17           = get_post_meta( get_the_ID(),
	'front-page-image-17',
	TRUE );
$front_page_image_17_sub_title = get_post_meta( get_the_ID(),
	'front-page-image-17-sub-title',
	TRUE );
$front_page_image_17_caption   = get_post_meta( get_the_ID(),
	'front-page-image-17-caption',
	TRUE );

$front_page_image_18_title     = get_post_meta( get_the_ID(),
	'front-page-image-18-title',
	TRUE );
$front_page_image_18           = get_post_meta( get_the_ID(),
	'front-page-image-18',
	TRUE );
$front_page_image_18_sub_title = get_post_meta( get_the_ID(),
	'front-page-image-18-sub-title',
	TRUE );
$front_page_image_18_caption   = get_post_meta( get_the_ID(),
	'front-page-image-18-caption',
	TRUE );

$front_page_image_19_title     = get_post_meta( get_the_ID(),
	'front-page-image-19-title',
	TRUE );
$front_page_image_19           = get_post_meta( get_the_ID(),
	'front-page-image-19',
	TRUE );
$front_page_image_19_sub_title = get_post_meta( get_the_ID(),
	'front-page-image-19-sub-title',
	TRUE );
$front_page_image_19_caption   = get_post_meta( get_the_ID(),
	'front-page-image-19-caption',
	TRUE );

$front_page_image_20_title     = get_post_meta( get_the_ID(),
	'front-page-image-20-title',
	TRUE );
$front_page_image_20           = get_post_meta( get_the_ID(),
	'front-page-image-20',
	TRUE );
$front_page_image_20_sub_title = get_post_meta( get_the_ID(),
	'front-page-image-20-sub-title',
	TRUE );
$front_page_image_20_caption   = get_post_meta( get_the_ID(),
	'front-page-image-20-caption',
	TRUE );

$front_page_image_21_title     = get_post_meta( get_the_ID(),
	'front-page-image-21-title',
	TRUE );
$front_page_image_21           = get_post_meta( get_the_ID(),
	'front-page-image-21',
	TRUE );
$front_page_image_21_sub_title = get_post_meta( get_the_ID(),
	'front-page-image-21-sub-title',
	TRUE );
$front_page_image_21_caption   = get_post_meta( get_the_ID(),
	'front-page-image-21-caption',
	TRUE );

$front_page_image_22_title     = get_post_meta( get_the_ID(),
	'front-page-image-22-title',
	TRUE );
$front_page_image_22           = get_post_meta( get_the_ID(),
	'front-page-image-22',
	TRUE );
$front_page_image_22_sub_title = get_post_meta( get_the_ID(),
	'front-page-image-22-sub-title',
	TRUE );
$front_page_image_22_caption   = get_post_meta( get_the_ID(),
	'front-page-image-22-caption',
	TRUE );

$front_page_image_23_title     = get_post_meta( get_the_ID(),
	'front-page-image-23-title',
	TRUE );
$front_page_image_23           = get_post_meta( get_the_ID(),
	'front-page-image-23',
	TRUE );
$front_page_image_23_sub_title = get_post_meta( get_the_ID(),
	'front-page-image-23-sub-title',
	TRUE );
$front_page_image_23_caption   = get_post_meta( get_the_ID(),
	'front-page-image-23-caption',
	TRUE );

$front_page_image_24_title     = get_post_meta( get_the_ID(),
	'front-page-image-24-title',
	TRUE );
$front_page_image_24           = get_post_meta( get_the_ID(),
	'front-page-image-24',
	TRUE );
$front_page_image_24_sub_title = get_post_meta( get_the_ID(),
	'front-page-image-24-sub-title',
	TRUE );
$front_page_image_24_caption   = get_post_meta( get_the_ID(),
	'front-page-image-24-caption',
	TRUE );

$front_page_cta_title   = get_post_meta( get_the_ID(),
	'front-page-cta-title',
	TRUE );
$front_page_cta_content = get_post_meta( get_the_ID(),
	'front-page-cta-content',
	TRUE );