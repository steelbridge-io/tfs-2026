<?php
/**
 *
 * Post meta for Basic Page Template
 *
 */

$basic_page_description	= get_post_meta(get_the_ID(), 'basic-page-description', true);
$basic_cta_content		= get_post_meta(get_the_ID(), 'basic-cta-content', true);
$basic_cta_title		= get_post_meta(get_the_ID(), 'basic-cta-title', true);
