<?php
/**
 * Template part for displaying post meta in travel-announcements-template.php.
 *
 * @package The_Fly_Shop
 */

$travel_announcements_bg_image    = get_post_meta(get_the_ID(), 'travel-announcements-bg-image', true);
$travel_announcements_bg_position = get_post_meta(get_the_ID(), 'travel-announcements-bg-position', true);
if ($travel_announcements_bg_position === '' || $travel_announcements_bg_position === false) {
	$travel_announcements_bg_position = 50;
}
