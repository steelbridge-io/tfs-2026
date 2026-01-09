<?php
/**
 * The sidebar containing the main widget area Sidebar Survey.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Fly_Shop
 */

if ( ! is_active_sidebar( 'sidebar-9' ) ) {
	return;
}
?>

<aside id="survey-secondary" class="survey-widget-area widget-area col-md-4" role="complementary">
    <div class="survey-sidebar">
	<?php dynamic_sidebar( 'sidebar-9' ); ?>
    </div>
</aside><!-- #secondary -->
