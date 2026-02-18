<?php
/**
 * Template Name: Blog Template Basic
 * Template Post Type: post, page, travel_blog, lower48blog, fish_report, travel-blog, esb_lodge
 * Developed for The Fly Shop
 * @package The_Fly_Shop_2025
 * Author: Chris Parsons
 * Author URL: https://steelbridge.io
 */

get_header();

// Get responsive hero images (mobile/tablet/desktop)
$hero_images = tfs_get_responsive_hero_images(get_the_ID());

if (has_post_thumbnail()) :
 ?>
 <div class="container-fluid p-0">
	<div class="hero-image position-relative">
	 <!-- Responsive Hero Image -->
	 <picture>
		<!-- Mobile Portrait: < 768px in portrait -->
		<source media="(max-width: 767.98px) and (orientation: portrait)" 
				srcset="<?php echo esc_url($hero_images['mobile_portrait']); ?>">
		
		<!-- Mobile Landscape: < 768px in landscape -->
		<source media="(max-width: 767.98px) and (orientation: landscape)" 
				srcset="<?php echo esc_url($hero_images['mobile_landscape']); ?>">
		
		<!-- Tablet Portrait: 768-1279px in portrait -->
		<source media="(min-width: 768px) and (max-width: 1279.98px) and (orientation: portrait)" 
				srcset="<?php echo esc_url($hero_images['tablet_portrait']); ?>">
		
		<!-- Tablet Landscape: 768-1279px in landscape -->
		<source media="(min-width: 768px) and (max-width: 1279.98px) and (orientation: landscape)" 
				srcset="<?php echo esc_url($hero_images['tablet_landscape']); ?>">
		
		<!-- Desktop: > 1280px -->
		<img src="<?php echo esc_url($hero_images['desktop']); ?>"
			 class="img-fluid w-100"
			 alt="<?php the_title_attribute(); ?>">
	 </picture>

	 <!-- Overlay Content -->
	 <div class="hero-overlay position-absolute top-50 start-50 translate-middle text-center">
        <div id="mobile-logo-container">
         <!--<img class="scroll mobile-logo" loading="eager" src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2021/05/social_tfs_logo_og.png" alt="The Fly Shop 2025" />-->
         <img class="no-scroll mobile-logo" loading="eager" src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2025/09/tfs-logo-600x484-1-1.png" alt="The Fly Shop 2025" />
        </div>
        <!-- Page Title -->
        <h1 class="hero-title display-4 text-white"><?php echo get_the_title(); ?></h1>
	 </div>
	</div>
 </div>
<?php else:  ?>
 <div class="container-fluid p-0">
	<div class="hero-image position-relative">
	 <!-- Responsive Fallback Image -->
	 <picture>
		<!-- Mobile Portrait: < 768px in portrait -->
		<source media="(max-width: 767.98px) and (orientation: portrait)" 
				srcset="<?php echo esc_url($hero_images['mobile_portrait']); ?>">
		
		<!-- Mobile Landscape: < 768px in landscape -->
		<source media="(max-width: 767.98px) and (orientation: landscape)" 
				srcset="<?php echo esc_url($hero_images['mobile_landscape']); ?>">
		
		<!-- Tablet Portrait: 768-1279px in portrait -->
		<source media="(min-width: 768px) and (max-width: 1279.98px) and (orientation: portrait)" 
				srcset="<?php echo esc_url($hero_images['tablet_portrait']); ?>">
		
		<!-- Tablet Landscape: 768-1279px in landscape -->
		<source media="(min-width: 768px) and (max-width: 1279.98px) and (orientation: landscape)" 
				srcset="<?php echo esc_url($hero_images['tablet_landscape']); ?>">
		
		<!-- Desktop fallback -->
		<img src="<?php echo esc_url($hero_images['desktop']); ?>"
			 class="img-fluid w-100" alt="<?php echo get_the_title(); ?>">
	 </picture>
	 
	 <!-- Overlay Content -->
	 <div class="hero-overlay position-absolute top-50 start-50 translate-middle text-center">
        <div id="mobile-logo-container">
         <!--<img class="scroll mobile-logo" loading="eager" src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2021/05/social_tfs_logo_og.png" alt="The Fly Shop 2025" />-->
         <img class="no-scroll mobile-logo" loading="eager" src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2025/09/tfs-logo-600x484-1-1.png" alt="The Fly Shop 2025" />
        </div>
        <!-- Page Title -->
        <h1 class="hero-title display-4 text-white"><?php echo get_the_title(); ?></h1>
	 </div>
	</div>
 </div>
<?php endif; ?>

 <div class="container-fluid top-fade p-0"></div>

 <div class="container mt-6 mb-7">

  <!-- Breadcrumbs -->
  <div class="container mt-4">
<?php the_fly_shop_breadcrumbs(); ?>
  </div>

	<div class="row">
	 <div class="col-md-8">
		<main id="primary" class="site-main">

<?php
		 while (have_posts()) :
			the_post();

			//get_template_part( 'template-parts/content', get_post_type() );
			get_template_part( 'template-parts/content', 'basic' );

			the_post_navigation(
			 array(
				'prev_text' => '<i class="lni lni-chevron-left me-2"></i><span class="nav-content"><span class="nav-subtitle">' . esc_html__( 'Previous:', 'the-fly-shop-2026' ) . '</span> <span class="nav-title">%title</span></span>',
				'next_text' => '<span class="nav-content"><span class="nav-subtitle">' . esc_html__( 'Next:', 'the-fly-shop-2026' ) . '</span> <span class="nav-title">%title</span></span><i class="lni lni-chevron-right ms-2"></i>',
			 )
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) :
			 comments_template();
			endif;

		 endwhile; // End of the loop.
		 ?>

		</main><!-- #main -->
	 </div>
   <div class="col-md-4 page-sidebar">
<?php
		$selectsidebar = get_post_meta(get_the_ID(), 'btb-select-sidebar', true);
		get_sidebar($selectsidebar);
		?>
   </div>
	</div>
 </div>

<?php include_once get_template_directory() . '/page-templates/cta-sections/footer-cta.php'; ?>

<?php
get_footer();
