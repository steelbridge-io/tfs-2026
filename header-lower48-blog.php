<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Fly_Shop_2025
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
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'the-fly-shop-2026' ); ?></a>

    <header id="masthead" class="site-header">
<?php include(get_template_directory() . '/search/search-bar.php'); ?>
        <!-- .site-branding -->
        <nav id="site-navigation" class="navbar fixed-top navbar-expand-lg navbar-light<?php echo is_archive() ? ' scrolled archive-static-logo' : ''; ?>">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#homepage" aria-controls="primary-menu" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'the-fly-shop-2026'); ?>">
                    <span class="navbar-toggler-icon"></span>
                    <i class="lni lni-xmark"></i>
                </button>

                <!-- Brand/Logo (Centered) -->
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img class="tfs-nav-logo scroll" loading="eager" src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2021/05/social_tfs_logo_og.png" alt="The Fly Shop 2025" />
                    <img class="tfs-nav-logo no-scroll" loading="eager" src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2017/06/TFSLogo.png" alt="The Fly Shop 2025" />
                </a>

                <span class="tel-number"><a class="tel-number-dial" href="tel:1-800-669-3474">1-800-669-3474</a></span>

                <div class="collapse navbar-collapse" id="homepage">
<?php
                    // Mobile Search
                    tfs_professional_search_form(array(
                            'container_class' => 'd-lg-none mt-3 mb-3 px-3',
                            'placeholder' => 'Search...',
                            'button_text' => 'Go'
                    ));
                    ?>
<?php
                    // Left side menu
                    wp_nav_menu(array(
                        'theme_location' => 'lower-48-blog',
                        'menu_id'        => 'left-menu',
                        'depth'          => 3,
                        'container'      => false,
                        'menu_class'     => 'navbar-nav left-menu',
                        'fallback_cb'    => '__return_false',
                        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'walker'         => new bootstrap_5_wp_nav_menu_walker(),
                        'center_logo'    => true,
                        'menu_part'      => 'left'
                    ));
                    ?>


<?php
                    // Right side menu
                    wp_nav_menu(array(
                        'theme_location' => 'lower-48-blog',
                        'menu_id'        => 'right-menu',
                        'depth'          => 3,
                        'container'      => false,
                        'menu_class'     => 'navbar-nav right-menu',
                        'fallback_cb'    => '__return_false',
                        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'walker'         => new bootstrap_5_wp_nav_menu_walker(),
                        'center_logo'    => true,
                        'menu_part'      => 'right'
                    ));
                    ?>
                </div>
            </div>
        </nav>

        <!-- Below navigation logo container - Shows initially, hides on scroll -->
        <div id="below-nav-logo" class="below-nav-logo-container">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img class="tfs-nav-logo scroll" loading="eager" src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2021/05/social_tfs_logo_og.png" alt="The Fly Shop 2025" />
                <img class="tfs-nav-logo no-scroll" loading="eager" src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2017/06/TFSLogo.png" alt="The Fly Shop 2025" />
            </a>
        </div>

<?php $dest_travel_logo = get_post_meta(get_the_ID(), 'dest-travel-logo', true); ?>

        <!-- Below navigation logo container - Shows initially, hides on scroll -->
        <div id="below-nav-logo" class="below-nav-logo-container">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img class="tfs-nav-logo scroll" loading="eager" src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2021/05/social_tfs_logo_og.png" alt="The Fly Shop 2025" />
<?php if ($dest_travel_logo !== '') : ?>
                    <img class="tfs-nav-logo no-scroll mb-5" loading="eager" src="<?php echo $dest_travel_logo; ?>" alt="The Fly Shop 2025" />
<?php else: ?>
                <img class="tfs-nav-logo no-scroll" loading="eager" src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2025/09/tfs-logo-600x484-1-1.png" alt="The Fly Shop 2025" />
            </a>
<?php endif; ?>
        </div>
    </header><!-- #masthead -->