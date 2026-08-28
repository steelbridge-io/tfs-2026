<?php
/**
 * Template Name: Travel Announcements
 * Template Post Type: post, page, travel_cpt
 */
get_header('primetravel');

include_once('post-meta/post-meta-travel-announcements.php');

$travel_announcements_default_bg = 'https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2017/10/Species_BrownTrout_Main.jpg';
$travel_announcements_left_bg    = !empty($travel_announcements_bg_image) ? $travel_announcements_bg_image : $travel_announcements_default_bg;
$travel_announcements_bg_position = max(0, min(100, (float) $travel_announcements_bg_position));

echo '<div class="container-fluid px-0 travel-announcements-template">' .
 '<div class="container prime-travel-container">' .

 '<a href="https://www.theflyshop.com" title="The Fly Shop Link"><div id="prime-travel-tfs-logo" class="">
				<!-- <img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2021/05/social_tfs_logo_og.png" alt="The Fly Shop" > -->
			 </div></a>' .

 '<div class="row d-flex">' .
 '<div class="col-lg-4 prime-travel-left-col" style="--ta-bg-position: ' . esc_attr($travel_announcements_bg_position) . '%;">' .
 '<img class="travel-announcements-bg" src="' . esc_url($travel_announcements_left_bg) . '" alt="" decoding="async">';

$prime_travel_logo = get_theme_mod('prime_travel_logo');
if (!empty($prime_travel_logo)) {
 echo '<img class="prime-travel-logo img-responsive" src="' . esc_url($prime_travel_logo) . '" alt="Prime Travel Logo">';
}

echo '</div>' .
 '<div class="col-lg-8 travel-announcements-template-center">';

if (have_posts()) :
 while (have_posts()) : the_post();
  get_template_part('/template-parts/content', 'primetravel');
 endwhile;
endif;

echo '</div>' .
 '</div>' .
 '</div>' .
 '</div>' .
 '</div>';

get_footer('primetravel');
