<?php
/**
 * The sidebar containing the main widget area Sidebar Lavacreek Lodge.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Fly_Shop
 */

if ( ! is_active_sidebar( 'sidebar-8' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-8' ); ?>
</aside><!-- #secondary -->
