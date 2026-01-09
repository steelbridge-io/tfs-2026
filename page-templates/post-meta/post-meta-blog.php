<?php
/**
 * Template part for displaying post meta in blog-template.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Fly_Shop
 */

$blog_description		= get_post_meta(get_the_ID(), 'blog-description', true);
$blog_page_description	= get_post_meta(get_the_ID(), 'blog-page-description', true);
$blog_cta_content	    = get_post_meta(get_the_ID(), 'blog-cta-content', true);
$blog_cta_title			= get_post_meta(get_the_ID(), 'blog-cta-title', true);

$basic_page_description_new = get_post_meta(get_the_ID(), 'blog-description-new', true);
$blog_cta_title_new         = get_post_meta(get_the_ID(), 'blog-cta-title-new', true);
$blog_cta_content_new       = get_post_meta(get_the_ID(), 'blog-cta-content-new', true);

