<?php
/**
 * Front Page Template
 *
 * Description of what this file does.
 *
 * @package    The_Fly_Shop
 * @subpackage Twenty_Twenty_Five
 * @since      1.0.0
 */

get_header();

$carousel_items = get_option( 'tfs_carousel_items', array() );
$has_mobile_carousel = false;
$has_tablet_carousel = false;
foreach ( $carousel_items as $item ) {
	if ( ! empty( $item['mobile_image'] ) ) {
		$has_mobile_carousel = true;
	}
	if ( ! empty( $item['tablet_image'] ) ) {
		$has_tablet_carousel = true;
	}
	if ( $has_mobile_carousel && $has_tablet_carousel ) {
		break;
	}
}
?>

<?php if ( ! empty( $carousel_items ) ) : ?>
 <!-- Desktop Carousel -->
 <div id="carouselExampleFade" class="carousel slide carousel-fade d-none d-lg-block" data-bs-ride="carousel" data-bs-interval="8000">
  <div class="carousel-inner">
<?php foreach ( $carousel_items as $index => $item ) : ?>
	<div class="carousel-item <?php echo ( $index === 0 ) ? 'active initial' : ''; ?>">
	 <img class="img-fluid object-fit-cover d-block w-100" src="<?php echo esc_url( $item['image'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>">

	 <div class="carousel-overlay" <?php echo ( $index === 0 ) ? '' : 'data-aos="fade-up" data-aos-delay="800"'; ?>>
	  <h1><?php echo esc_html( $item['title'] ); ?></h1>
	  <h2><?php echo esc_html( $item['subtitle'] ); ?></h2>
<?php if ( ! empty( $item['button_text'] ) && ! empty( $item['button_url'] ) ) : ?>
	   <a href="<?php echo esc_url( $item['button_url'] ); ?>" class="cta-button"><?php echo esc_html( $item['button_text'] ); ?></a>
<?php endif; ?>
	 </div>
	</div>
<?php endforeach; ?>

   <!-- Add Scrolly -->
   <div id="scrolly" class="scrolly"><i class="lni lni-arrow-downward"></i></div>
  </div>

<?php if ( count( $carousel_items ) > 1 ) : ?>
   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="visually-hidden">Previous</span>
   </button>
   <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="visually-hidden">Next</span>
   </button>
<?php endif; ?>
 </div>

 <!-- Tablet Carousel -->
 <?php if ( $has_tablet_carousel ) : ?>
 <div id="carouselExampleFadeTablet" class="carousel slide carousel-fade d-none d-md-block d-lg-none" data-bs-ride="carousel" data-bs-interval="8000">
  <div class="carousel-inner">
<?php foreach ( $carousel_items as $index => $item ) : ?>
    <?php
    $tablet_img = ! empty( $item['tablet_image'] ) ? $item['tablet_image'] : $item['image'];
    ?>
	<div class="carousel-item <?php echo ( $index === 0 ) ? 'active initial' : ''; ?>">
	 <img class="img-fluid object-fit-cover d-block w-100" src="<?php echo esc_url( $tablet_img ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>">

	 <div class="carousel-overlay" <?php echo ( $index === 0 ) ? '' : 'data-aos="fade-up" data-aos-delay="800"'; ?>>
	  <h1><?php echo esc_html( $item['title'] ); ?></h1>
	  <h2><?php echo esc_html( $item['subtitle'] ); ?></h2>
<?php if ( ! empty( $item['button_text'] ) && ! empty( $item['button_url'] ) ) : ?>
	   <a href="<?php echo esc_url( $item['button_url'] ); ?>" class="cta-button"><?php echo esc_html( $item['button_text'] ); ?></a>
<?php endif; ?>
	 </div>
	</div>
<?php endforeach; ?>

   <!-- Add Scrolly -->
   <div id="scrolly-tablet" class="scrolly"><i class="lni lni-arrow-downward"></i></div>
  </div>

<?php if ( count( $carousel_items ) > 1 ) : ?>
   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFadeTablet" data-bs-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="visually-hidden">Previous</span>
   </button>
   <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFadeTablet" data-bs-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="visually-hidden">Next</span>
   </button>
<?php endif; ?>
 </div>
 <?php else : ?>
  <!-- Tablet Fallback -->
  <div id="carouselExampleFadeTabletFallback" class="carousel slide carousel-fade d-none d-md-block d-lg-none" data-bs-ride="carousel" data-bs-interval="8000">
  <div class="carousel-inner">
<?php foreach ( $carousel_items as $index => $item ) : ?>
	<div class="carousel-item <?php echo ( $index === 0 ) ? 'active initial' : ''; ?>">
	 <img class="img-fluid object-fit-cover d-block w-100" src="<?php echo esc_url( $item['image'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>">

	 <div class="carousel-overlay" <?php echo ( $index === 0 ) ? '' : 'data-aos="fade-up" data-aos-delay="800"'; ?>>
	  <h1><?php echo esc_html( $item['title'] ); ?></h1>
	  <h2><?php echo esc_html( $item['subtitle'] ); ?></h2>
<?php if ( ! empty( $item['button_text'] ) && ! empty( $item['button_url'] ) ) : ?>
	   <a href="<?php echo esc_url( $item['button_url'] ); ?>" class="cta-button"><?php echo esc_html( $item['button_text'] ); ?></a>
<?php endif; ?>
	 </div>
	</div>
<?php endforeach; ?>

   <!-- Add Scrolly -->
   <div id="scrolly-tablet-fallback" class="scrolly"><i class="lni lni-arrow-downward"></i></div>
  </div>

<?php if ( count( $carousel_items ) > 1 ) : ?>
   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFadeTabletFallback" data-bs-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="visually-hidden">Previous</span>
   </button>
   <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFadeTabletFallback" data-bs-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="visually-hidden">Next</span>
   </button>
<?php endif; ?>
 </div>
 <?php endif; ?>

 <!-- Mobile Carousel -->
 <?php if ( $has_mobile_carousel ) : ?>
 <div id="carouselExampleFadeMobile" class="carousel slide carousel-fade d-block d-md-none" data-bs-ride="carousel" data-bs-interval="8000">
  <div class="carousel-inner">
<?php foreach ( $carousel_items as $index => $item ) : ?>
    <?php
    $mobile_img = ! empty( $item['mobile_image'] ) ? $item['mobile_image'] : $item['image'];
    ?>
	<div class="carousel-item <?php echo ( $index === 0 ) ? 'active initial' : ''; ?>">
	 <img class="img-fluid object-fit-cover d-block w-100" src="<?php echo esc_url( $mobile_img ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>">

	 <div class="carousel-overlay" <?php echo ( $index === 0 ) ? '' : 'data-aos="fade-up" data-aos-delay="800"'; ?>>
	  <h1><?php echo esc_html( $item['title'] ); ?></h1>
	  <h2><?php echo esc_html( $item['subtitle'] ); ?></h2>
<?php if ( ! empty( $item['button_text'] ) && ! empty( $item['button_url'] ) ) : ?>
	   <a href="<?php echo esc_url( $item['button_url'] ); ?>" class="cta-button"><?php echo esc_html( $item['button_text'] ); ?></a>
<?php endif; ?>
	 </div>
	</div>
<?php endforeach; ?>

   <!-- Add Scrolly -->
   <div id="scrolly-mobile" class="scrolly"><i class="lni lni-arrow-downward"></i></div>
  </div>

<?php if ( count( $carousel_items ) > 1 ) : ?>
   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFadeMobile" data-bs-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="visually-hidden">Previous</span>
   </button>
   <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFadeMobile" data-bs-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="visually-hidden">Next</span>
   </button>
<?php endif; ?>
 </div>
 <?php else : ?>
  <!-- Fallback to original carousel if no mobile images are set (though it will still be hidden on mobile due to classes if we were not careful, but here we just render the desktop one without d-none if we wanted, but let's just make the desktop one visible if no mobile one is desired, or better, just use desktop images in the mobile carousel if mobile images are missing) -->
  <div id="carouselExampleFadeFallback" class="carousel slide carousel-fade d-block d-md-none" data-bs-ride="carousel" data-bs-interval="8000">
  <div class="carousel-inner">
<?php foreach ( $carousel_items as $index => $item ) : ?>
	<div class="carousel-item <?php echo ( $index === 0 ) ? 'active initial' : ''; ?>">
	 <img class="img-fluid object-fit-cover d-block w-100" src="<?php echo esc_url( $item['image'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>">

	 <div class="carousel-overlay" <?php echo ( $index === 0 ) ? '' : 'data-aos="fade-up" data-aos-delay="800"'; ?>>
	  <h1><?php echo esc_html( $item['title'] ); ?></h1>
	  <h2><?php echo esc_html( $item['subtitle'] ); ?></h2>
<?php if ( ! empty( $item['button_text'] ) && ! empty( $item['button_url'] ) ) : ?>
	   <a href="<?php echo esc_url( $item['button_url'] ); ?>" class="cta-button"><?php echo esc_html( $item['button_text'] ); ?></a>
<?php endif; ?>
	 </div>
	</div>
<?php endforeach; ?>

   <!-- Add Scrolly -->
   <div id="scrolly-fallback" class="scrolly"><i class="lni lni-arrow-downward"></i></div>
  </div>

<?php if ( count( $carousel_items ) > 1 ) : ?>
   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFadeFallback" data-bs-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="visually-hidden">Previous</span>
   </button>
   <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFadeFallback" data-bs-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="visually-hidden">Next</span>
   </button>
<?php endif; ?>
 </div>
 <?php endif; ?>

 <!-- Wave Section -->
 <div class="wave-section">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
   <path fill="#ffffff" d="M0,64L60,80C120,96,240,128,360,170.7C480,213,600,267,720,245.3C840,224,960,128,1080,85.3C1200,43,1320,53,1380,58.7L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
  </svg>
 </div>
<?php else : ?>
 <!-- No carousel items found, don't display the carousel -->
<?php endif; ?>

<section id="front-page-into">
	<div id="fp-logo-background" class="mt-3">
		<img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2021/05/social_tfs_logo_og.png" alt="The Fly Shop">
	</div>
	<div class="container container-row front-page-into-container mb-5">
		<!-- <h1><span id="typing-area"></h1> -->
		<div class="well text-center">
		<h1>Northern California's Fly Fishing Retail, Travel, and Adventure Resource</h1>
		<h2>(800) 669-3474</h2>
		</div>
	</div>
</section>

<?php
// Get card grid settings
$card_grid_options = get_option( 'tfs_card_grid_options', array() );
$cards             = isset( $card_grid_options['cards'] ) ? $card_grid_options['cards'] : array();

// Display card grid
if ( ! empty( $cards ) ) :
	?>
 <section id="card-grid-container" class="content-section mt-4 mb-5" data-aos="fade-up" data-aos-delay="1000" data-aos-once="true">
  <div id="front-page-content" class="container-fluid container-row">
   <div class="container">
	<div class="row g-4">
<?php
			// Feature style classes to cycle through
			$style_classes = array(
				'top-card-feature-left',
				'top-card-feature-right',
				'bottom-card-feature-left',
				'bottom-card-feature-right',
			);

			foreach ( $cards as $index => $card ) :
				// Get style class based on index (cycle through the classes)
				$style_class = $style_classes[ $index % count( $style_classes ) ];
				?>
	  <!-- Card <?php echo $index + 1; ?> -->
	  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 card-feature <?php echo esc_attr( $style_class ); ?>" data-aos="" data-aos-offset="200" data-aos-duration="1000">
	   <div class="card-container">
		<img src="<?php echo esc_url( $card['image'] ); ?>" alt="<?php echo esc_attr( $card['image_alt'] ); ?>" class="card-img">
		<h3 class="card-title-overlay"><?php echo esc_html( $card['title'] ); ?></h3>
		<div class="card-hover-content">
		 <p class="lead"><?php echo wp_kses_post( $card['description'] ); ?></p>
<?php if ( ! empty( $card['button_url'] ) ) : ?>
		  <a href="<?php echo esc_url( $card['button_url'] ); ?>" class="btn btn-tfs btn-sm"><?php echo esc_html( $card['button_text'] ); ?></a>
<?php endif; ?>
		</div>
	   </div>
	  </div>
<?php endforeach; ?>
	</div>
   </div>
  </div>
 </section>
<?php endif; ?>

<!-- <section class="content-section mt-4 mb-5" data-aos="fade-up" data-aos-delay="1000" data-aos-once="true">
<div id="front-page-content" class="container-fluid container-row">
<div class="container">
	<div class="row g-4">

		<div class="col-md-4 card-feature top-card-feature-left" data-aos="" data-aos-offset="200" data-aos-duration="1000">
			<div class="card-container">
				<img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2025/02/FP_StormShadow_RollingCarryOn.webp" alt="Card 1" class="card-img">
				<h3 class="card-title-overlay">Shop Online</h3>
				<div class="card-hover-content">
					<p class="lead">This text is only for demo purposes. You will be able to update this text. We just add it so we can see how this will look with text.</p>
					<a href="#" class="btn btn-tfs btn-sm">Read More</a>
				</div>
			</div>
		</div>


		<div class="col-md-4 card-feature top-card-feature-right" data-aos="" data-aos-offset="200" data-aos-duration="1000">
			<div class="card-container">
				<img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2017/06/Bollibokka_Getting-1.jpg" alt="Card 2" class="card-img">
				<h3 class="card-title-overlay">Regional Vacations</h3>
				<div class="card-hover-content">
					<p class="lead">Although there are only 9 "Cards" in this grid, there could be many more or less. You get to choose. If you only want three? Then add only three from within the associated editor in the admin dashboard.</p>
					<a href="#" class="btn btn-tfs btn-sm">Read More</a>
				</div>
			</div>
		</div>


		<div class="col-md-4 card-feature bottom-card-feature-left" data-aos="" data-aos-offset="200" data-aos-duration="1000">
			<div class="card-container">
				<img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2017/09/LowerSac_Main3.jpg" alt="Card 3" class="card-img">
				<h3 class="card-title-overlay">Guided Fly Fishing</h3>
				<div class="card-hover-content">
					<p class="lead">This is an excerpt of the card content. It's a test. The content here is purposed for conceltual reasons only. You will replace it with content related to a service, product, destination.</p>
					<a href="#" class="btn btn-tfs btn-sm">Read More</a>
				</div>
			</div>
		</div>


		<div class="col-md-4 card-feature bottom-card-feature-right" data-aos="" data-aos-offset="200" data-aos-duration="1000">
			<div class="card-container">
				<img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2017/08/3Day_Itinerary.jpg" alt="Card 4" class="card-img">
				<h3 class="card-title-overlay">Fly Fishing Schools</h3>
				<div class="card-hover-content">
					<p class="lead">This is an excerpt of the card content. It slides up on hover to reveal additional information. This is an excerpt of the card content. It slides up on hover to reveal additional information. This is an excerpt of the card content. It slides up on hover to reveal additional information.</p>
					<a href="#" class="btn btn-tfs btn-sm">Read More</a>
				</div>
			</div>
		</div>

		<div class="col-md-4 card-feature bottom-card-feature-right" data-aos="" data-aos-offset="200" data-aos-duration="1000">
			<div class="card-container">
				<img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2017/12/Providence_Report1.jpg" alt="Card 4" class="card-img">
				<h3 class="card-title-overlay">International Travel</h3>
				<div class="card-hover-content">
					<p class="lead">This is an excerpt of the card content. It slides up on hover to reveal additional information. This is an excerpt of the card content. It slides up on hover to reveal additional information. This is an excerpt of the card content. It slides up on hover to reveal additional information.</p>
					<a href="#" class="btn btn-tfs btn-sm">Read More</a>
				</div>
			</div>
		</div>

		<div class="col-md-4 card-feature bottom-card-feature-right" data-aos="" data-aos-offset="200" data-aos-duration="1000">
			<div class="card-container">
				<img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2017/10/Species_BrownTrout_MFFL.jpg" alt="Card 4" class="card-img">
				<h3 class="card-title-overlay">Local Fishing Reports</h3>
				<div class="card-hover-content">
					<p class="lead">This is an excerpt of the card content. It slides up on hover to reveal additional information. This is an excerpt of the card content. It slides up on hover to reveal additional information. This is an excerpt of the card content. It slides up on hover to reveal additional information.</p>
					<a href="#" class="btn btn-tfs btn-sm">Read More</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</section> -->

<?php
$carousel_items = get_option( 'fppc_carousel_items' ) ?: array(); // Retrieve the carousel items
if ( ! empty( $carousel_items ) ) :
	?>
	<section id="retail-front-page-carousel" class="custom-carousel-container mt-5 mb-5">
		<div class="container no-padding-lr custom-cards-section">
		<h2 class="pb-2 border-bottom">Shop</h2>
		<div id="productCarousel" class="custom-carousel">
			<div class="carousel-inner-custom">
<?php foreach ( $carousel_items as $item ) : ?>
				 <div class="carousel-item-custom">
					 <div class="custom-card">
						 <img src="<?php echo esc_url( $item['image'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" class="custom-card-image" />
						 <div class="custom-card-body">
							 <h5 class="custom-card-title"><?php echo esc_html( $item['title'] ); ?></h5>
							 <p class="custom-card-text"><?php echo esc_html( $item['description'] ); ?></p>
							 <a href="<?php echo esc_url( $item['url'] ); ?>" class="custom-card-link">View Product</a>
						 </div>
					 </div>
				 </div>
<?php endforeach; ?>
			</div>

			<!-- Navigation buttons -->
			<button id="customPrev" class="custom-nav-btn custom-prev"><i class="bi bi-chevron-compact-left"></i>
			</button>
			<button id="customNext" class="custom-nav-btn custom-next"><i class="bi bi-chevron-compact-right"></i>
			</button>

			<!-- Swipe Prompt -->
			<div id="swipePrompt" class="swipe-prompt d-lg-none">
				<div class="d-flex flex-column align-items-center">
					<div class="swipe-hand">
                        <i class="lni lni-hand-pointed-up"></i>
					</div>
					<div class="swipe-text">Swipe to explore</div>
				</div>
			</div>

			<!-- Indicators -->
			<div class="carousel-indicators-custom">
				<?php foreach ( $carousel_items as $index => $item ) : ?>
					<span class="indicator-dot <?php echo ( $index === 0 ) ? 'active' : ''; ?>" data-index="<?php echo $index; ?>"></span>
				<?php endforeach; ?>
			</div>
		</div>
		</div>
	</section>
<?php endif; ?>

<section id="front-page-news">
<div class="container px-4 py-5 custom-cards-section">
    <h2 class="pb-2 border-bottom">News</h2>

<?php
        // WP Query to fetch the 3 most recent posts
        $recent_posts = new WP_Query(
            array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'orderby'        => 'date',
                'order'          => 'DESC',
            )
        );

        if ( $recent_posts->have_posts() ) :
            ?>
        <div class="row row-cols-1 row-cols-md-3 g-4">
<?php
            while ( $recent_posts->have_posts() ) :
                $recent_posts->the_post();

                $featured_img_url = get_the_post_thumbnail_url( get_the_ID(), 'large' );

                if ( ! $featured_img_url ) {
                    $featured_img_url = 'https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2018/01/TFSLogo-red.png';
                }

                $time_diff = human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) );
                ?>
            <div class="col">
             <div class="card card-news card-cover h-100 overflow-hidden text-bg-dark shadow-lg" style="background-image: url('<?php echo esc_url( $featured_img_url ); ?>');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                 <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">
                    <a href="<?php the_permalink(); ?>" class="text-white text-decoration-none">
<?php the_title(); ?>
                    </a>
                 </h3>
                 <!-- <ul class="d-flex list-unstyled mt-auto recent-posts-features">

        <li class="me-auto">
<?php
                        /*
                        $categories = get_the_category();
                        if (!empty($categories)) {
                        $category_image_id = get_term_meta($categories[0]->term_id, 'category-image-id', true);
                        $category_link = get_category_link($categories[0]->term_id);

                        if ($category_image_id) {
                         $category_image_url = wp_get_attachment_image_url($category_image_id, 'thumbnail');
                         echo '<a href="' . esc_url($category_link) . '">';
                         echo '<img src="' . esc_url($category_image_url) . '" alt="' . esc_attr($categories[0]->name) . '" width="50" style="height: auto;" class="border border-white" decoding="async">';
                         echo '</a>';
                        } else {
                         echo '<img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2018/01/TFSLogo-red.png" alt="' . esc_attr(get_bloginfo('name')) . '" width="52" height="52" class="border border-white">';
                        }
                        } else {
                        echo '<img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2018/01/TFSLogo-red.png" alt="' . esc_attr(get_bloginfo('name')) . '" width="52" height="52" class="border border-white">';
                        } */
                        ?>
        </li>


        <li class="d-flex align-items-center me-3">
         <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
         <small class="recent-posts-cat">
<?php
                    /*
                      $categories = get_the_category();
                        if (!empty($categories)) {
                         echo '<a href="' . esc_url(get_category_link($categories[0]->term_id)) . '" class="text-decoration-none">' . esc_html($categories[0]->name) . '</a>';
                        } else {
                         echo 'Uncategorized';
                        } */
                ?>
                        </small>
        </li>
                    <li class="d-flex align-items-center">
                     <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
         <small class="recent-posts-cat"><?php /* echo '<a href="' . esc_url(get_category_link($categories[0]->term_id)) . '" class="text-decoration-none">' . get_the_date('F j, Y') . '</a>' */ ?></small>
                    </li>
                 </ul> -->
                </div>
             </div>
            </div>
<?php endwhile; ?>
        </div>
<?php
            wp_reset_postdata();
     endif;
        ?>

    <!--<div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <div class="col">
            <div class="card card-news card-cover h-100 overflow-hidden text-bg-dark shadow-lg" style="background-image: url('https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2025/02/NFR_Extra3.webp');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Destination News, And Info</h3>
                    <ul class="d-flex list-unstyled mt-auto">
                        <li class="me-auto">
                            <img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2018/01/TFSLogo-red.png" alt="Bootstrap" width="52" height="52" class="border border-white">
                        </li>
                        <li class="d-flex align-items-center me-3">
                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                            <small>Destination Title</small>
                        </li>
                        <li class="d-flex align-items-center">
                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                            <small>3d</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-news card-cover h-100 overflow-hidden text-bg-dark shadow-lg" style="background-image: url('https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2025/02/NFR_Extra5.webp');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">How To Make The Most Of Your Day</h3>
                    <ul class="d-flex list-unstyled mt-auto">
                        <li class="me-auto">
                            <img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2018/01/TFSLogo-red.png" alt="Bootstrap" width="52" height="52" class="border border-white">
                        </li>
                        <li class="d-flex align-items-center me-3">
                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                            <small>Destination Name</small>
                        </li>
                        <li class="d-flex align-items-center">
                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                            <small>4d</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-news card-cover h-100 overflow-hidden text-bg-dark shadow-lg" style="background-image: url('https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2025/02/ESB020225_11-scaled.jpg');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">This Destination Is: A Path To Peace</h3>
                    <ul class="d-flex list-unstyled mt-auto">
                        <li class="me-auto">
                            <img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2018/01/TFSLogo-red.png" alt="Bootstrap" width="52" height="52" class="border border-white">
                        </li>
                        <li class="d-flex align-items-center me-3">
                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                            <small>Destination Name</small>
                        </li>
                        <li class="d-flex align-items-center">
                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                            <small>5d</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>-->
</div>
</section>

<section id="front-page-cta">
	<div class="container-fluid container-row background-image-cta d-flex align-items-center mt-5" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="500" data-aos-once="true">
		<div class="container text-center text-md-end">
			<div class="row justify-content-end">
				<div class="col-md-6 col-lg-5 form-container shadow-lg p-5">
					<div class="row">
						<div class="col-6">
							<img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2021/05/social_tfs_logo_og.png" alt="The Fly Shop Logo" />
						</div>
						<div class="col-6">
							<h5 class="mb-4 fw-bold">Stay Updated</h5>
							<p class="lead text-muted mb-4">Subscribe to our newsletter and never miss an update!</p>
						</div>
					</div>
					<form id="subscribe-form">
						<div class="form-floating mb-3">
							<input
									type="email"
									class="form-control shadow-sm"
									id="subscriberEmail"
									placeholder="name@example.com"
									required
							/>
							<label for="subscriberEmail" class="text-muted">Enter your email</label>
						</div>
						<button type="submit" class="btn btn-tfs btn-lg px-4 shadow-sm">
							Subscribe
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const track = document.querySelector('#productCarousel .carousel-inner-custom');
        const prev = document.getElementById('customPrev');
        const next = document.getElementById('customNext');
        const swipePrompt = document.getElementById('swipePrompt');
        const indicators = document.querySelectorAll('.indicator-dot');

        if (!track || !prev || !next || indicators.length === 0) return;

        const isSmall = () => window.matchMedia('(max-width: 991.98px)').matches;
        let currentPage = 0;
        const totalItems = indicators.length;

        // Calculate the width to scroll per item
        const getStepWidth = () => {
            if (isSmall()) {
                // Mobile: full width per item
                const container = document.querySelector('#productCarousel');
                return container ? container.clientWidth : track.clientWidth;
            } else {
                // Desktop: width of one item + gap
                const item = track.querySelector('.carousel-item-custom');
                if (!item) return track.clientWidth;
                const gap = parseFloat(getComputedStyle(track).gap || 0);
                return item.getBoundingClientRect().width + gap;
            }
        };

        // Update active indicator dot
        const updateIndicators = (index) => {
            indicators.forEach((dot, i) => {
                dot.classList.toggle('active', i === index);
            });
        };

        // Clamp scroll position
        const clamp = (value) => {
            const maxScroll = track.scrollWidth - track.clientWidth;
            return Math.max(0, Math.min(value, maxScroll));
        };

        // Navigate carousel
        const navigateCarousel = (direction) => {
            currentPage = Math.max(0, Math.min(totalItems - 1, currentPage + direction));
            const scrollAmount = currentPage * getStepWidth();
            track.scrollTo({ left: clamp(scrollAmount), behavior: 'smooth' });
            updateIndicators(currentPage);
        };

        // Arrow button click handlers
        prev.addEventListener('click', () => navigateCarousel(-1));
        next.addEventListener('click', () => navigateCarousel(1));

        // Mobile: Update indicators on scroll
        let scrollTimeout;
        track.addEventListener('scroll', () => {
            if (isSmall()) {
                clearTimeout(scrollTimeout);
                scrollTimeout = setTimeout(() => {
                    const stepWidth = getStepWidth();
                    if (stepWidth > 0) {
                        currentPage = Math.round(track.scrollLeft / stepWidth);
                        updateIndicators(currentPage);
                    }
                }, 100);
            }
        }, { passive: true });

        // Indicator dot click handlers
        indicators.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentPage = index;
                const scrollAmount = currentPage * getStepWidth();
                track.scrollTo({ left: clamp(scrollAmount), behavior: 'smooth' });
                updateIndicators(currentPage);
            });
        });

        // Hide swipe prompt on interaction
        const hideSwipePrompt = () => {
            if (swipePrompt) {
                swipePrompt.style.opacity = '0';
                setTimeout(() => swipePrompt.style.display = 'none', 500);
                track.removeEventListener('scroll', hideSwipePrompt);
                track.removeEventListener('touchstart', hideSwipePrompt);
            }
        };

        if (swipePrompt) {
            track.addEventListener('scroll', hideSwipePrompt, { passive: true, once: true });
            track.addEventListener('touchstart', hideSwipePrompt, { passive: true, once: true });
        }

        // Handle window resize
        window.addEventListener('resize', () => {
            const stepWidth = getStepWidth();
            if (stepWidth > 0) {
                const scrollAmount = currentPage * stepWidth;
                track.scrollTo({ left: clamp(scrollAmount), behavior: 'auto' });
            }
        });

        // Initialize first indicator
        updateIndicators(0);
    });
</script>

<?php
get_footer();
