<?php

/**
 * The sidebar containing the main widget area Sidebar Lower 48.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Fly_Shop
 */

if ( ! is_active_sidebar( 'sidebar-4' ) ) {
  return;
}
?>

<aside id="lower48-sidebar" class="widget-area" role="complementary">
  <?php dynamic_sidebar( 'sidebar-4' ); ?>
</aside><!-- #secondary -->

