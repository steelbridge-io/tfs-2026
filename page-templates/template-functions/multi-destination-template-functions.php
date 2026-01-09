<?php
	
	if (is_page_template('page-templates/multi-destination-template.php')) {
		wp_enqueue_script('tfs-multi-destination-carousel', get_template_directory_uri() . '/js/multi-destination-theme.js',
			array('jquery'), _S_VERSION, true);
	}

	// Localize data for section 1 if using the carousel (no custom image/video)
	if (empty($sections_1_image) && empty($sections_1_video)) {
		wp_add_inline_script('tfs-multi-destination-carousel',
			'window.TFS_MultiDest.initCarouselSync(' . wp_json_encode(array(
				'carouselId' => 'sec1-dest-indicator-1',
				'titleId' => 'sec1-dynamic-title',
				'contentId' => 'sec1-dynamic-content',
				'readmoreId' => 'sec1-dynamic-readmore',
				'accordionId' => 'accordion1',
				'data' => array(
					array(
						'title' => $sec1_dest_title_1 ?? '',
						'content' => $sec1_dest_textarea_1 ?? '',
						'readmore' => $sec1_dest_readmore_1 ?? '',
						'image' => $sec1_dest_img_1 ?? '',
					),
					array(
						'title' => $sec1_dest_title_2 ?? '',
						'content' => $sec1_dest_textarea_2 ?? '',
						'readmore' => $sec1_dest_readmore_2 ?? '',
						'image' => $sec1_dest_img_2 ?? '',
					),
					array(
						'title' => $sec1_dest_title_3 ?? '',
						'content' => $sec1_dest_textarea_3 ?? '',
						'readmore' => $sec1_dest_readmore_3 ?? '',
						'image' => $sec1_dest_img_3 ?? '',
					),
				),
			)) . ');');
	}

	// Section 2
	if (empty($sections_2_image) && empty($sections_2_video)) {
		wp_add_inline_script('tfs-multi-destination-carousel',
			'window.TFS_MultiDest.initCarouselSync(' . wp_json_encode(array(
				'carouselId' => 'sec2-dest-indicator-1',
				'titleId' => 'sec2-dynamic-title',
				'contentId' => 'sec2-dynamic-content',
				'readmoreId' => 'sec2-dynamic-readmore',
				'accordionId' => 'accordion2',
				'data' => array(
					array(
						'title' => $sec2_dest_title_1 ?? '',
						'content' => $sec2_dest_textarea_1 ?? '',
						'readmore' => $sec2_dest_readmore_1 ?? '',
						'image' => $sec2_dest_img_1 ?? '',
					),
					array(
						'title' => $sec2_dest_title_2 ?? '',
						'content' => $sec2_dest_textarea_2 ?? '',
						'readmore' => $sec2_dest_readmore_2 ?? '',
						'image' => $sec2_dest_img_2 ?? '',
					),
					array(
						'title' => $sec2_dest_title_3 ?? '',
						'content' => $sec2_dest_textarea_3 ?? '',
						'readmore' => $sec2_dest_readmore_3 ?? '',
						'image' => $sec2_dest_img_3 ?? '',
					),
				),
			)) . ');');
	}
 
 // Section 3
 if (empty($sections_3_image) && empty($sections_3_video)) {
	wp_add_inline_script('tfs-multi-destination-carousel',
		'window.TFS_MultiDest.initCarouselSync(' . wp_json_encode(array(
			'carouselId' => 'sec3-dest-indicator-1',
			'titleId' => 'sec3-dynamic-title',
			'contentId' => 'sec3-dynamic-content',
			'readmoreId' => 'sec3-dynamic-readmore',
			'accordionId' => 'accordion3',
			'data' => array(
				array(
					'title' => $sec3_dest_title_1 ?? '',
					'content' => $sec3_dest_textarea_1 ?? '',
					'readmore' => $sec3_dest_readmore_1 ?? '',
					'image' => $sec3_dest_img_1 ?? '',
				),
				array(
					'title' => $sec3_dest_title_2 ?? '',
					'content' => $sec3_dest_textarea_2 ?? '',
					'readmore' => $sec3_dest_readmore_2 ?? '',
					'image' => $sec3_dest_img_2 ?? '',
				),
				array(
					'title' => $sec3_dest_title_3 ?? '',
					'content' => $sec3_dest_textarea_3 ?? '',
					'readmore' => $sec3_dest_readmore_3 ?? '',
					'image' => $sec3_dest_img_3 ?? '',
				),
			),
		)) . ');');
 }

// Section 4
if (empty($sections_4_image) && empty($sections_4_video)) {
    wp_add_inline_script('tfs-multi-destination-carousel',
        'window.TFS_MultiDest.initCarouselSync(' . wp_json_encode(array(
            'carouselId' => 'sec4-dest-indicator-1',
            'titleId' => 'sec4-dynamic-title',
            'contentId' => 'sec4-dynamic-content',
            'readmoreId' => 'sec4-dynamic-readmore',
            'accordionId' => 'accordion4',
            'data' => array(
                array(
                    'title' => $sec4_dest_title_1 ?? '',
                    'content' => $sec4_dest_textarea_1 ?? '',
                    'readmore' => $sec4_dest_readmore_1 ?? '',
                    'image' => $sec4_dest_img_1 ?? '',
                ),
                array(
                    'title' => $sec4_dest_title_2 ?? '',
                    'content' => $sec4_dest_textarea_2 ?? '',
                    'readmore' => $sec4_dest_readmore_2 ?? '',
                    'image' => $sec4_dest_img_2 ?? '',
                ),
                array(
                    'title' => $sec4_dest_title_3 ?? '',
                    'content' => $sec4_dest_textarea_3 ?? '',
                    'readmore' => $sec4_dest_readmore_3 ?? '',
                    'image' => $sec4_dest_img_3 ?? '',
                ),
            ),
        )) . ');');
}

// Section 5
if (empty($sections_5_image) && empty($sections_5_video)) {
    wp_add_inline_script('tfs-multi-destination-carousel',
        'window.TFS_MultiDest.initCarouselSync(' . wp_json_encode(array(
            'carouselId' => 'sec5-dest-indicator-1',
            'titleId' => 'sec5-dynamic-title',
            'contentId' => 'sec5-dynamic-content',
            'readmoreId' => 'sec5-dynamic-readmore',
            'accordionId' => 'accordion5',
            'data' => array(
                array(
                    'title' => $sec5_dest_title_1 ?? '',
                    'content' => $sec5_dest_textarea_1 ?? '',
                    'readmore' => $sec5_dest_readmore_1 ?? '',
                    'image' => $sec5_dest_img_1 ?? '',
                ),
                array(
                    'title' => $sec5_dest_title_2 ?? '',
                    'content' => $sec5_dest_textarea_2 ?? '',
                    'readmore' => $sec5_dest_readmore_2 ?? '',
                    'image' => $sec5_dest_img_2 ?? '',
                ),
                array(
                    'title' => $sec5_dest_title_3 ?? '',
                    'content' => $sec5_dest_textarea_3 ?? '',
                    'readmore' => $sec5_dest_readmore_3 ?? '',
                    'image' => $sec5_dest_img_3 ?? '',
                ),
            ),
        )) . ');');
}

// Section 6
if (empty($sections_6_image) && empty($sections_6_video)) {
    wp_add_inline_script('tfs-multi-destination-carousel',
        'window.TFS_MultiDest.initCarouselSync(' . wp_json_encode(array(
            'carouselId' => 'sec6-dest-indicator-1',
            'titleId' => 'sec6-dynamic-title',
            'contentId' => 'sec6-dynamic-content',
            'readmoreId' => 'sec6-dynamic-readmore',
            'accordionId' => 'accordion6',
            'data' => array(
                array(
                    'title' => $sec6_dest_title_1 ?? '',
                    'content' => $sec6_dest_textarea_1 ?? '',
                    'readmore' => $sec6_dest_readmore_1 ?? '',
                    'image' => $sec6_dest_img_1 ?? '',
                ),
                array(
                    'title' => $sec6_dest_title_2 ?? '',
                    'content' => $sec6_dest_textarea_2 ?? '',
                    'readmore' => $sec6_dest_readmore_2 ?? '',
                    'image' => $sec6_dest_img_2 ?? '',
                ),
                array(
                    'title' => $sec6_dest_title_3 ?? '',
                    'content' => $sec6_dest_textarea_3 ?? '',
                    'readmore' => $sec6_dest_readmore_3 ?? '',
                    'image' => $sec6_dest_img_3 ?? '',
                ),
            ),
        )) . ');');
}

// Section 7
if (empty($sections_7_image) && empty($sections_7_video)) {
    wp_add_inline_script('tfs-multi-destination-carousel',
        'window.TFS_MultiDest.initCarouselSync(' . wp_json_encode(array(
            'carouselId' => 'sec7-dest-indicator-1',
            'titleId' => 'sec7-dynamic-title',
            'contentId' => 'sec7-dynamic-content',
            'readmoreId' => 'sec7-dynamic-readmore',
            'accordionId' => 'accordion7',
            'data' => array(
                array(
                    'title' => $sec7_dest_title_1 ?? '',
                    'content' => $sec7_dest_textarea_1 ?? '',
                    'readmore' => $sec7_dest_readmore_1 ?? '',
                    'image' => $sec7_dest_img_1 ?? '',
                ),
                array(
                    'title' => $sec7_dest_title_2 ?? '',
                    'content' => $sec7_dest_textarea_2 ?? '',
                    'readmore' => $sec7_dest_readmore_2 ?? '',
                    'image' => $sec7_dest_img_2 ?? '',
                ),
                array(
                    'title' => $sec7_dest_title_3 ?? '',
                    'content' => $sec7_dest_textarea_3 ?? '',
                    'readmore' => $sec7_dest_readmore_3 ?? '',
                    'image' => $sec7_dest_img_3 ?? '',
                ),
            ),
        )) . ');');
}

// Section 8
if (empty($sections_8_image) && empty($sections_8_video)) {
    wp_add_inline_script('tfs-multi-destination-carousel',
        'window.TFS_MultiDest.initCarouselSync(' . wp_json_encode(array(
            'carouselId' => 'sec8-dest-indicator-1',
            'titleId' => 'sec8-dynamic-title',
            'contentId' => 'sec8-dynamic-content',
            'readmoreId' => 'sec8-dynamic-readmore',
            'accordionId' => 'accordion8',
            'data' => array(
                array(
                    'title' => $sec8_dest_title_1 ?? '',
                    'content' => $sec8_dest_textarea_1 ?? '',
                    'readmore' => $sec8_dest_readmore_1 ?? '',
                    'image' => $sec8_dest_img_1 ?? '',
                ),
                array(
                    'title' => $sec8_dest_title_2 ?? '',
                    'content' => $sec8_dest_textarea_2 ?? '',
                    'readmore' => $sec8_dest_readmore_2 ?? '',
                    'image' => $sec8_dest_img_2 ?? '',
                ),
                array(
                    'title' => $sec8_dest_title_3 ?? '',
                    'content' => $sec8_dest_textarea_3 ?? '',
                    'readmore' => $sec8_dest_readmore_3 ?? '',
                    'image' => $sec8_dest_img_3 ?? '',
                ),
            ),
        )) . ');');
}

// Section 9
if (empty($sections_9_image) && empty($sections_9_video)) {
    wp_add_inline_script('tfs-multi-destination-carousel',
        'window.TFS_MultiDest.initCarouselSync(' . wp_json_encode(array(
            'carouselId' => 'sec9-dest-indicator-1',
            'titleId' => 'sec9-dynamic-title',
            'contentId' => 'sec9-dynamic-content',
            'readmoreId' => 'sec9-dynamic-readmore',
            'accordionId' => 'accordion9',
            'data' => array(
                array(
                    'title' => $sec9_dest_title_1 ?? '',
                    'content' => $sec9_dest_textarea_1 ?? '',
                    'readmore' => $sec9_dest_readmore_1 ?? '',
                    'image' => $sec9_dest_img_1 ?? '',
                ),
                array(
                    'title' => $sec9_dest_title_2 ?? '',
                    'content' => $sec9_dest_textarea_2 ?? '',
                    'readmore' => $sec9_dest_readmore_2 ?? '',
                    'image' => $sec9_dest_img_2 ?? '',
                ),
                array(
                    'title' => $sec9_dest_title_3 ?? '',
                    'content' => $sec9_dest_textarea_3 ?? '',
                    'readmore' => $sec9_dest_readmore_3 ?? '',
                    'image' => $sec9_dest_img_3 ?? '',
                ),
            ),
        )) . ');');
}

// Section 10
if (empty($sections_10_image) && empty($sections_10_video)) {
    wp_add_inline_script('tfs-multi-destination-carousel',
        'window.TFS_MultiDest.initCarouselSync(' . wp_json_encode(array(
            'carouselId' => 'sec10-dest-indicator-1',
            'titleId' => 'sec10-dynamic-title',
            'contentId' => 'sec10-dynamic-content',
            'readmoreId' => 'sec10-dynamic-readmore',
            'accordionId' => 'accordion10',
            'data' => array(
                array(
                    'title' => $sec10_dest_title_1 ?? '',
                    'content' => $sec10_dest_textarea_1 ?? '',
                    'readmore' => $sec10_dest_readmore_1 ?? '',
                    'image' => $sec10_dest_img_1 ?? '',
                ),
                array(
                    'title' => $sec10_dest_title_2 ?? '',
                    'content' => $sec10_dest_textarea_2 ?? '',
                    'readmore' => $sec10_dest_readmore_2 ?? '',
                    'image' => $sec10_dest_img_2 ?? '',
                ),
                array(
                    'title' => $sec10_dest_title_3 ?? '',
                    'content' => $sec10_dest_textarea_3 ?? '',
                    'readmore' => $sec10_dest_readmore_3 ?? '',
                    'image' => $sec10_dest_img_3 ?? '',
                ),
            ),
        )) . ');');
}