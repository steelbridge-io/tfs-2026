<?php

/**
 * The Fly Shop Widget Registration
 *
 * This file contains the widget initialization function for The Fly Shop WordPress theme.
 * It registers multiple sidebars for different sections of the website including:
 * - Main Sidebar
 * - Travel Section
 * - Outfitters Section
 * - Lower48 Section
 * - ESB Lodge Section
 * - Retail Section
 * - News Section
 * - Lavacreek Lodge Section
 * - Survey Section
 * - Blog Archive Section
 * - Rio Marie Section
 *
 * Each sidebar is configured with identical structure but different IDs to support
 * targeted widget placement throughout the theme.
 *
 * @package     The_Fly_Shop
 * @subpackage  Widgets
 * @since       1.0.0
 */

function the_fly_shop_widgets_init() {

 register_sidebar( array(
	'name'          => esc_html__( 'Sidebar', 'the-fly-shop' ),
	'id'            => 'sidebar-1',
	'description'   => esc_html__( 'Add widgets here.', 'the-fly-shop' ),
	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	'after_widget'  => '</section>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
 ) );

 register_sidebar( array(
	'name'          => esc_html__( 'Sidebar Travel', 'the-fly-shop' ),
	'id'            => 'sidebar-2',
	'description'   => esc_html__( 'Add widgets here.', 'the-fly-shop' ),
	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	'after_widget'  => '</section>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
 ) );

 register_sidebar( array(
	'name'          => esc_html__( 'Sidebar Outfitters', 'the-fly-shop' ),
	'id'            => 'sidebar-3',
	'description'   => esc_html__( 'Add widgets here.', 'the-fly-shop' ),
	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	'after_widget'  => '</section>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
 ) );

 register_sidebar( array(
	'name'          => esc_html__( 'Sidebar Lower48', 'the-fly-shop' ),
	'id'            => 'sidebar-4',
	'description'   => esc_html__( 'Add widgets here.', 'the-fly-shop' ),
	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	'after_widget'  => '</section>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
 ) );

 register_sidebar( array(
	'name'          => esc_html__( 'Sidebar ESB Lodge', 'the-fly-shop' ),
	'id'            => 'sidebar-5',
	'description'   => esc_html__( 'Add widgets here.', 'the-fly-shop' ),
	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	'after_widget'  => '</section>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
 ) );

 register_sidebar( array(
	'name'          => esc_html__( 'Sidebar Retail', 'the-fly-shop' ),
	'id'            => 'sidebar-6',
	'description'   => esc_html__( 'Add widgets here.', 'the-fly-shop' ),
	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	'after_widget'  => '</section>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
 ) );

 register_sidebar( array(
	'name'          => esc_html__( 'Sidebar News', 'the-fly-shop' ),
	'id'            => 'sidebar-7',
	'description'   => esc_html__( 'Add widgets here.', 'the-fly-shop' ),
	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	'after_widget'  => '</section>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
 ) );

 register_sidebar( array(
	'name'          => esc_html__( 'Sidebar Lavacreek Lodge', 'the-fly-shop' ),
	'id'            => 'sidebar-8',
	'description'   => esc_html__( 'Add widgets here.', 'the-fly-shop' ),
	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	'after_widget'  => '</section>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
 ) );

 register_sidebar( array(
	'name'          => esc_html__( 'Sidebar Survey', 'the-fly-shop' ),
	'id'            => 'sidebar-9',
	'description'   => esc_html__( 'Add widgets here.', 'the-fly-shop' ),
	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	'after_widget'  => '</section>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
 ) );

 register_sidebar( array(
	'name'          => esc_html__( 'Sidebar Blog Archive', 'the-fly-shop' ),
	'id'            => 'sidebar-10',
	'description'   => esc_html__( 'Add widgets here.', 'the-fly-shop' ),
	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	'after_widget'  => '</section>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
 ) );

 register_sidebar( array(
	'name'          => esc_html__( 'Sidebar Rio Marie', 'the-fly-shop' ),
	'id'            => 'sidebar-11',
	'description'   => esc_html__( 'Add widgets here.', 'the-fly-shop' ),
	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	'after_widget'  => '</section>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
 ) );

 register_sidebar( array(
	'name'          => esc_html__( 'Sidebar Post/Page', 'the-fly-shop' ),
	'id'            => 'sidebar-12',
	'description'   => esc_html__( 'Add widgets here.', 'the-fly-shop' ),
	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	'after_widget'  => '</section>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
 ) );

 register_sidebar( array(
	'name'          => esc_html__( 'Sidebar Default v2', 'the-fly-shop' ),
	'id'            => 'sidebar-13',
	'description'   => esc_html__( 'Add widgets here.', 'the-fly-shop' ),
	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	'after_widget'  => '</section>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
 ) );

 register_sidebar( array(
	'name'          => esc_html__( 'Sidebar Archive', 'the-fly-shop' ),
	'id'            => 'sidebar-14',
	'description'   => esc_html__( 'Add widgets here.', 'the-fly-shop' ),
	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	'after_widget'  => '</section>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
 ) );
}
add_action( 'widgets_init', 'the_fly_shop_widgets_init' );
