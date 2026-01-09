<?php


$default_post_img           = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
$default_logo_upload        = get_theme_mod('default_page_logo');
$default_page_description		= get_post_meta(get_the_ID(), 'default-page-description', true);