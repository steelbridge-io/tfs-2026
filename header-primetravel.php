<?php
	/**
	 * The header for our theme.
	 *
	 * This is the template that displays all of the <head> section and everything up until </header>
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package The_Fly_Shop
	 */

// Determine ID to use
$current_id = get_the_ID();

$tfs_title       = get_post_meta( $current_id, 'title-text', true );
$tfs_description = get_post_meta( $current_id, 'seotfs-description', true );
$tfs_metatags    = get_post_meta( $current_id, 'seotfs-meta-tags', true );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php echo $tfs_title; ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta property="og:image:width" content="200" />
    <meta property="og:image:height" content="200" />
    <meta property = "og:type" content = "article" />
    <meta property="og:url" content="<?php echo esc_url( get_permalink( $current_id ) ); ?>" />
    <meta property="og:title" content="<?php echo esc_attr( $tfs_title ); ?>" />
    <meta name="description" content="<?php echo $tfs_description; ?>" />
    <meta property="og:description" content="<?php echo esc_attr( $tfs_description ); ?>" />
    <meta name="Keywords" content="<?php echo $tfs_metatags; ?>" />
<?php if(get_post_meta($current_id, 'seotfs-no-index', true) == 'yes') :?>
        <meta name="robots" content="noindex">
<?php endif; ?>
    <link href="/favicon.ico" rel="icon" type="image/x-icon" />
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="prime-travel-template">
