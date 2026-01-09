<?php
/**
 * The sidebar containing the main widget are Sidebar Newsa.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Fly_Shop
 */

if ( ! is_active_sidebar( 'sidebar-7' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-7' ); ?>
</aside><!-- #secondary -->
