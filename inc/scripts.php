<?php

if (is_archive()) {
 wp_enqueue_script('archive-script', get_template_directory_uri() . '/js/archive.js', array('jquery'), _S_VERSION, true);
}

if (is_page_template('page-templates/multi-destination-template.php')) {
 wp_enqueue_script('multi-destination-template-js', get_template_directory_uri() . '/js/multi-destination-template.js', array('jquery'), _S_VERSION, true);
}

if (is_page_template('page-templates/destination-template.php')) {
 wp_enqueue_script('destination-features', get_template_directory_uri() . '/js/destination-slider-and-features.js', array('jquery'), _S_VERSION, true);
}
if (is_page_template('page-templates/stream-report-template.php')) {
 wp_enqueue_script('stream-report-js', get_template_directory_uri() . '/js/stream-report.js', array('jquery'), _S_VERSION, true);
}

if (is_page_template('page-templates/guide-service-template.php')) {
 wp_enqueue_script('guide-service-js', get_template_directory_uri() . '/js/guide-service.js', array('jquery'), _S_VERSION, true);
}

if (is_page_template('page-templates/guide-service-destination-template.php')) {
 wp_enqueue_script('guide-service-destination-js', get_template_directory_uri() . '/js/guide-service-destination-template.js', array('jquery'), _S_VERSION, true);
}

if (is_page_template('page-templates/private-waters-template.php')) {
 wp_enqueue_script('private-waters-js', get_template_directory_uri() . '/js/private-waters.js', array('jquery'),
  _S_VERSION,
  true);
}

if (is_page_template('page-templates/fly-fishing-schools-template.php')) {
 wp_enqueue_script('fly-fishing-schools-js', get_template_directory_uri() . '/js/fly-fishing-schools.js', array('jquery'),
  _S_VERSION, true);
}

if (is_page_template('page-templates/fish-camp-template.php') || is_page_template('page-templates/fish-camp-destination-template.php')) {
 wp_enqueue_script('fish-camp-js', get_template_directory_uri() . '/js/fish-camp.js', array('jquery'),
  _S_VERSION, true);
}

if (is_page_template('page-templates/news-blog-template.php') || is_page_template('page-templates/news-blog-wide-template.php')) {
 wp_enqueue_script('fishing-news-js', get_template_directory_uri() . '/js/fishing-news.js', array('jquery'),
  _S_VERSION, true);
}

if (is_page_template('page-templates/travel-template.php')) {
 wp_enqueue_script('travel-js', get_template_directory_uri() . '/js/travel-template.js', array('jquery'),
  _S_VERSION, true);
}

if (is_page_template('page-templates/regional-waters-template.php')) {
 wp_enqueue_script('regional-waters-js', get_template_directory_uri() . '/js/regional-waters.js', array('jquery'), _S_VERSION, true);
}

if (is_page_template('page-templates/regional-waters-template-v2.php')) {
 wp_enqueue_script('regional-waters-js-v2', get_template_directory_uri() . '/js/regional-waters-v2.js', array('jquery'), _S_VERSION, true);
}

if (is_page_template('page-templates/private-template.php')) {
 wp_enqueue_script('private-template', get_template_directory_uri() . '/js/private-template.js', array('jquery'), _S_VERSION, true);
}

if (is_page_template('page-templates/sections-template.php')) {
 wp_enqueue_script('sections-template-js', get_template_directory_uri() . '/js/sections-template.js', array('jquery'),
  _S_VERSION, true);
}

if (is_page_template('page-templates/signature-template.php') || is_page_template('page-templates/signature-destinations-template.php') || is_page_template('page-templates/signature-template-v2.php')) {
 wp_enqueue_script('signature-template-js', get_template_directory_uri() . '/js/signature-template.js', array('jquery'),
  _S_VERSION, true);
}

if (is_page_template('page-templates/staff-template.php')) {
 wp_enqueue_script('signature-template-js', get_template_directory_uri() . '/js/staff-template.js', array('jquery'),
  _S_VERSION, true);
}

if (is_page_template('page-templates/destination-v2-template.php')) {
 wp_enqueue_script('destination-v2-template-js', get_template_directory_uri() . '/js/destination-v2-template.js', array('jquery'), _S_VERSION, true);
}

if (is_page_template('page-templates/destination-v3-template.php') ||
 is_page_template('page-templates/guide-destination-template.php') ||
 is_page_template('page-templates/schools-template-v3.php') ||
 is_page_template('page-templates/private-waters-template-v3.php') ||
 is_page_template('page-templates/fish-camp-template-v3.php')) {

 wp_enqueue_script('destination-v3-template-js', get_template_directory_uri() . '/js/destination-v3-template.js', array('jquery'), _S_VERSION, true);
}

if (is_page_template('page-templates/basic-page-template.php')) {
 wp_enqueue_script('basic-page-template-js', get_template_directory_uri() . '/js/basic-page-template.js', array
 ('jquery'), _S_VERSION, true);
}

if (is_page_template('page-templates/blog-template-basic.php')) {
 wp_enqueue_script('blog-template-basic-js', get_template_directory_uri() . '/js/blog-template-basic.js', array
 ('jquery'), _S_VERSION, true);
}

if (is_page_template('page-templates/blog-template-outfitters.php')) {
 wp_enqueue_script('blog-template-outfitters-js', get_template_directory_uri() . '/js/blog-template-outfitters.js', array
 ('jquery'), _S_VERSION, true);
}

if (is_page_template('page-templates/blog-template-travel.php')) {
 wp_enqueue_script('blog-template-travel-js', get_template_directory_uri() . '/js/blog-template-travel.js', array('jquery'), _S_VERSION, true);
}

if (is_page_template('page-templates/schools-template.php')) {
 wp_enqueue_script('schools-template-js', get_template_directory_uri() . '/js/schools-template.js', array('jquery'), _S_VERSION, true);
}

if (is_page_template('page-templates/fish-camp-course.php')) {
 wp_enqueue_script('fish-camp-course-js', get_template_directory_uri() . '/js/fish-camp-course.js', array('jquery'), _S_VERSION, true);
}

if (is_page_template('page-templates/lower-48-destination-template.php')) {
 wp_enqueue_script('lower-48-desunation-js', get_template_directory_uri() . '/js/lower-48-destination-template.js', array('jquery'), _S_VERSION, true);
}

if (is_front_page()) {
 wp_enqueue_script('front-page-js', get_template_directory_uri() . '/js/front-page.js', array(), '20200415', true);
}

if (!is_front_page()) {
 wp_enqueue_script('hero-dynamic-logo-position-js', get_template_directory_uri() . '/js/hero-dynamic-logo-position.js', array(), '20200415', true);
}

