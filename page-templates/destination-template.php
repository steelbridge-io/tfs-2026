<?php
declare(strict_types=1);
/*
Template Name: Destination Template
Template Post Type: post, page, travel_cpt, lower48, guide_service
*/

//get_header('destination-header');

if (get_post_type() === 'travel_cpt') {
    get_header('travel-header');
} elseif (get_post_type() === 'lower48') {
    get_header('travel-header');
} elseif (get_post_type() === 'lower48blog') {
    get_header('lower48-blog');
} else {
    get_header('destination-header');
}

include_once( 'post-meta/post-meta-travel.php' );
 ?>

<?php
/**
	*  The below includes are for conditionally loaded sections associated with post or page IDs
	*/
/*include_once( 'cta-sections/news-signup-blog-esb-lodge.php' );
include_once( 'cta-sections/news-signup-blog-lava-creek.php' );
include_once( 'cta-sections/news-signup-blog-estancia-maria-behety-lodge.php' );
include_once( 'cta-sections/news-signup-blog-la-villa-de-maria-behety.php' );
include_once('cta-sections/news-signup-blog-rio-marie.php' );*/

if (has_post_thumbnail()) : ?>

	<div class="container-fluid travel-template-hero p-0">
		<div class="hero-image position-relative">
			<!-- Full-Width Featured Image -->
			<img src="<?php echo esc_url(
				has_post_thumbnail() ?
					get_the_post_thumbnail_url(get_the_ID(), 'full') :
					get_template_directory_uri() . '/images/the-fly-shop-logo-white.png'
			); ?>"
			     class="img-fluid w-100"
			     alt="<?php the_title_attribute(); ?>">

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
<div class="container-fluid travel-template-hero p-0">
	<div class="hero-image position-relative">
		<!-- Full-Width Featured Image -->
		<img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2025/01/Staff_Main6.webp" class="img-fluid w-100" alt="<?php echo get_the_title(); ?>">
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

 <!-- Breadcrumbs -->
 <div class="container mt-4">
<?php the_fly_shop_breadcrumbs(); ?>
 </div>

<section class="content-destination-template content">
    <div class="container">
        <!--<div id="scrollto"></div>-->
        <div id="primary" class="content-area row">
            <main id="main-main" class="site-main col-md-12" role="main">

<?php
                // WordPress Blog Content
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content', 'page' );

                endwhile; // End of the loop.
                ?>

            </main>
        </div>
    </div>
</section>

<section id="feature-grid-destination-template">
    <div class="container my-5">
        <div class="row equal-height-row">
            <!-- Left Column -->
            <div class="col-md-8">
                <div id="scrollable-content" class="pink-background scrollable-content">
                    <div class="card">
                    <img id="display-image" src="" alt="Item Image" class="card-img-top">
                    <div class="card-body">
                    <p id="display-content"></p>
                    </div>
                    </div>
                </div>
            </div>
            <!-- Right Column -->
            <div id="col4" class="col-md-4">
                <div class="row">
                    <!-- ITEM ONE -->
                    <div class="item"
                         data-image="<?php echo esc_url($feature_1_image); ?>"
                         data-content="<?php
                        $content  = '<h3>' .  $feature_1_title . '</h3>';
                        $content .= '<b>Inclusions:</b>&nbsp;' . $feature_1_inclusions_textarea . '<br><br>';
                        $content .= '<b>Seasons:</b>&nbsp;' . $feature_1_noninclusions_textarea . '<br><br>';
                        $content .= '<b>Travel Insurance:</b>&nbsp;' . $feature_1_travelins_textarea;

                        echo htmlspecialchars($content, ENT_QUOTES, 'UTF-8'); ?>">

                        <!--<div class="icon rounded-circle bg-light d-flex justify-content-center align-items-center mb-2">
                            <i class="bi bi-code"></i>
                        </div>-->
                        <h3 class="label"><?php echo $feature_1_title; ?></h3>
                        <div class="feature-textarea"><?php echo $feature_1_cost_textarea; ?></div>
                    </div>
                    <!-- ITEM TWO -->
                    <div class="item" data-image="<?php echo $feature_2_image; ?>"
                         data-content="<?php
                         $content = '<h3>' . $feature_2_seasons_title . '</h3>';
                         $content .= $feature_2_seasons_readmore;
                         echo htmlspecialchars($content, ENT_QUOTES, 'UTF-8'); ?>">
                         <!-- <div class="icon rounded-circle bg-light d-flex justify-content-center align-items-center mb-2">
                            <i class="bi bi-gear"></i>
                        </div> -->
                        <h3 class="label"><?php echo $feature_2_seasons_title; ?></h3>
                        <div class="feature-textarea"><?php echo $feature_2_seasons_content; ?></div>
                    </div>
                    <!-- ITEM THREE -->
                    <div class="item"
                         data-image="<?php echo $feature_3_gettingto_image; ?>"
                         data-content="<?php
                         $content = '<h3>' . $feature_3_get_to_title . '</h3>';
                         $content .= $feature_3_get_to_readmore;
                         echo htmlspecialchars($content, ENT_QUOTES, 'UTF-8'); ?>">
                         <!-- <div class="icon rounded-circle bg-light d-flex justify-content-center align-items-center mb-2">
                            <i class="bi bi-file-earmark-text"></i>
                        </div> -->
                        <h3 class="label"><?php echo $feature_3_get_to_title; ?></h3>
                        <div class="feature-textarea"><?php echo $feature_3_get_to_content; ?></div>
                    </div>
                    <!-- ITEM FOUR -->
                    <div class="item"
                         data-image="<?php echo $feature_4_lodging_image; ?>"
                         data-content="<?php
                         $content = '<h3>' . $feature_4_lodging_title . '</h3>';
                         $content .= $feature_4_lodging_readmore;
                         echo htmlspecialchars($content, ENT_QUOTES, 'UTF-8'); ?>">
                         <!-- <div class="icon rounded-circle bg-light d-flex justify-content-center align-items-center mb-2">
                            <i class="bi bi-book"></i>
                        </div> -->
                        <h3 class="label"><?php echo $feature_4_lodging_title; ?></h3>
                        <div class="feature-textarea"><?php echo $feature_4_lodging_content; ?></div>
                    </div>
                    <!-- ITEM FIVE -->
                    <div class="item"
                         data-image="<?php echo $feature_5_angling_image; ?>"
                         data-content="<?php
                         $content = '<h3>' . $feature_5_angling_title . '</h3>';
                         $content .= $feature_5_angling_readmore;
                         echo htmlspecialchars($content, ENT_QUOTES, 'UTF-8'); ?>">
                         <!-- <div class="icon rounded-circle bg-light d-flex justify-content-center align-items-center mb-2">
                            <i class="bi bi-book"></i>
                        </div> -->
                        <h3 class="label"><?php echo $feature_5_angling_title; ?></h3>
                        <div class="feature-textarea"><?php echo esc_attr($feature_5_angling_content); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="featurette-section-detination-template">
<div class="container">
	<!-- Featurette One -->
	<div class="row featurette">
		<div class="col-md-7">
			<h2 class="featurette-heading"><?php echo $feature_1_title; ?></h2>
			<p class="lead"><?php echo $feature_1_cost_textarea; ?></p>
						<div id="inclusions">
						<div class="destination-modal-btn">
						 <button type="button" class="btn destination btn-tfs" data-bs-toggle="modal"
										 data-bs-target="#inclusionsModal">
							Inclusions<span class="arrow-down"></span>
						 </button>
						</div>
					 <div class="destination-modal-btn">
						<button type="button" class="btn destination btn-tfs" data-bs-toggle="modal" data-bs-target="#noninclusionsModal">
						 Non-Inclusions<span class="arrow-down"></span>
						</button>
					 </div>
					 <div class="destination-modal-btn">
						<button type="button" class="btn destination btn-tfs" data-bs-toggle="modal" data-bs-target="#travelinsuranceModal">
						 Travel Insurance<span class="arrow-down"></span>
						</button>
					 </div>
						</div>
					 </div>


		<div class="col-md-5">
				<!-- Costs Video/Text/Image Option -->
<?php
				$video_feat_one = get_post_meta( get_the_ID(),
					'feature-1-video',
					TRUE );
				if ( ! empty( $video_feat_one ) ) :?>
					<div class="embed-responsive embed-responsive-16by9 video-poster">
						<video id="vid" playsInline muted controls
						       preload="auto"
						       poster="<?php echo $feature_1_image ?>">
							<source src="<?php echo $video_feat_one; ?>"
							        type="video/mp4">
						</video>
					</div>
<?php else: ?>
					<img class="destination-img" src="<?php echo $feature_1_image; ?>"
					     alt="The Fly Shop Travel Image"/>
<?php endif; ?>
		</div>
	</div>
	<!-- /Featurette One -->
    <hr class="featurette-divider">
	<!-- Featurette Two -->
	<div class="row featurette">
		<div class="col-md-7 order-md-2">
			<h2 class="featurette-heading"><?php echo $feature_2_seasons_title; ?></h2>
			<p class="lead"><?php echo $feature_2_seasons_content; ?></p>
			<div class="destination-modal-btn">
       <button type="button" class="btn destination btn-tfs" data-bs-toggle="modal" data-bs-target="#seasonsModal">
        Read more...<span class="arrow-down"></span>
       </button>
			</div>
    </div>

		<div class="col-md-5 order-md-1 mt-5">
			<!-- Seasons Video/Text/Image Option -->
<?php
			$video_feat_two = get_post_meta( get_the_ID(),
				'feature-2-video',
				TRUE );
			if ( ! empty( $video_feat_two ) ) :?>
				<div class="embed-responsive embed-responsive-16by9 video-poster">
					<video id="vid" playsInline muted controls
					       preload="auto"
					       poster="<?php echo $feature_2_image ?>">
						<source src="<?php echo $video_feat_two; ?>"
						        type="video/mp4">
					</video>
				</div>
<?php else: ?>
				<img class="destination-img" src="<?php echo $feature_2_image; ?>"
				     alt="The Fly Shop Travel Image"/>
<?php endif; ?>
		</div>
	</div>
	<!-- /Featurette Two -->

     <hr class="featurette-divider">

	<!-- Featurette Three -->
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading"><?php echo $feature_3_get_to_title; ?></h2>
            <p class="lead"><?php echo $feature_3_get_to_content; ?></p>

            <div class="destination-modal-btn">
             <button type="button" class="btn destination btn-tfs" data-bs-toggle="modal" data-bs-target="#gettingtoModal">
              Read more...<span class="arrow-down"></span>
             </button>
            </div>
        </div>
        <div class="col-md-5 mt-5">
            <!-- Getting To Video/Text/Image Option -->
<?php
	        $video_feat_three = get_post_meta( get_the_ID(),
		        'feature-3-video',
		        TRUE );

	        if ( ! empty( $video_feat_three ) ) :?>
             <div class="embed-responsive embed-responsive-16by9 video-poster">
                 <video id="vid" playsInline muted controls
                        preload="auto"
                        poster="<?php echo $feature_3_gettingto_image; ?>">
                     <source src="<?php echo $video_feat_three; ?>"
                             type="video/mp4">
                 </video>
             </div>
<?php else: ?>
             <img class="destination-img" src="<?php echo $feature_3_gettingto_image; ?>"
                  alt="The Fly Shop Travel Image"/>
<?php endif; ?>

        </div>
    </div>

	<!-- /Featurette Three -->

    <hr class="featurette-divider">

	<!-- Featurette Four -->
    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading"><?php echo $feature_4_lodging_title; ?></h2>
            <p class="lead"><?php echo $feature_4_lodging_content; ?></p>
            <div class="destination-modal-btn">
             <button type="button" class="btn destination btn-tfs" data-bs-toggle="modal" data-bs-target="#lodgingModal">
              Read more...<span class="arrow-down"></span>
             </button>
            </div>
        </div>
        <div class="col-md-5 order-md-1 mt-5">
            <!-- Lodging Video/Text/Image Option -->
<?php
	        $video_feat_four = get_post_meta( get_the_ID(),
		        'feature-4-video',
		        TRUE );
	        if ( ! empty( $video_feat_four ) ) :?>
             <div class="embed-responsive embed-responsive-16by9 video-poster">
                 <video id="vid" playsInline muted controls
                        preload="auto"
                        poster="<?php echo $feature_4_lodging_image; ?>">
                     <source src="<?php echo $video_feat_four; ?>"
                             type="video/mp4">
                 </video>
             </div>
<?php else: ?>
             <img class="destination-img" src="<?php echo $feature_4_lodging_image; ?>"
                  alt="The Fly Shop Travel Image"/>
<?php endif; ?>
        </div>
    </div>

	<!-- /Featurette Four -->

    <hr class="featurette-divider">

    <!-- Featurette Five -->
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading"><?php echo $feature_5_angling_title; ?></h2>
            <p class="lead"><?php echo $feature_5_angling_content; ?></p>

            <div class="destination-collapse-btn">
             <button type="button" class="btn destination btn-tfs" data-bs-toggle="modal" data-bs-target="#fishingModal">
              Read more...<span class="arrow-down"></span>
             </button>
            </div>
        </div>
        <div class="col-md-5 mt-5">
            <!-- Fishing Video/Text/Image Option -->

<?php // Checkbox to activate video or image
	        $video_feat_five = get_post_meta( get_the_ID(),
		        'feature-5-video',
		        TRUE );
	        if ( ! empty( $video_feat_five ) ) :?>

             <div class="embed-responsive embed-responsive-16by9 video-poster">
                 <video id="vid" playsInline muted controls
                        preload="auto"
                        poster="<?php echo $feature_5_angling_image ?>">
                     <source src="<?php echo $video_feat_five; ?>"
                             type="video/mp4">
                 </video>
             </div>
<?php else: ?>
             <img class="destination-img" src="<?php echo $feature_5_angling_image; ?>"
                  alt="The Fly Shop Travel Image"/>
<?php endif; ?>
        </div>
    </div>
    <!-- /Featurette Five -->
</div>
</section>

<section id="set-the-hook-destination-template" class="mt-5 mb-5">
    <div class="container">
        <h2>What Makes This Destination Special and Unique?</h2>
        <div class="travel setthehook-p"><?php _e( $sth_content_1 ); ?></div>
    </div>
</section>

<section id="destination-template-carousel" class="wrapper mt-5">
    <div class="inner container">
        <header class="major">
            <h2>Additional Photos</h2>
            <div class="row">
                <div class="additional-listing">

<?php if ( get_post_meta( get_the_ID(),
                        'additional-info-image1',
                        TRUE )
                    ) {

                        echo '<div class="col-xs-6 col-md-3">',

                        '<div class="thumbnail">',

                            '<a href="#travel-carousel" data-slide-to="0"><img class="destination-img" src="'
                            . $additional_info_image1
                            . '" data-bs-toggle="modal" data-bs-target="#travelTableModal"  alt="The Fly Shop Images"></a>',

                        '</div>',

                        '</div>';

                    } ?>

<?php if ( get_post_meta( get_the_ID(),
                        'additional-info-image2',
                        TRUE )
                    ) {

                        echo '<div class="col-xs-6 col-md-3">',

                        '<div class="thumbnail">',

                            '<a href="#travel-carousel" data-slide-to="1"><img class="destination-img" src="'
                            . $additional_info_image2
                            . '" data-bs-toggle="modal" data-bs-target="#travelTableModal" alt="The Fly Shop Images"></a>',

                        '</div>',

                        '</div>';

                    } ?>

<?php if ( get_post_meta( get_the_ID(),
                        'additional-info-image3',
                        TRUE )
                    ) {

                        echo '<div class="col-xs-6 col-md-3">',

                        '<div class="thumbnail">',

                            '<a href="#travel-carousel" data-slide-to="2"><img class="destination-img" src="'
                            . $additional_info_image3
                            . '" data-bs-toggle="modal" data-bs-target="#travelTableModal" alt="The Fly Shop Images"></a>',

                        '</div>',

                        '</div>';

                    } ?>

<?php if ( get_post_meta( get_the_ID(),
                        'additional-info-image4',
                        TRUE )
                    ) {

                        echo '<div class="col-xs-6 col-md-3">',

                            '<div class="thumbnail">' .

                            '<a href="#travel-carousel" data-slide-to="3"><img class="destination-img" src="'
                            . $additional_info_image4
                            . '" data-bs-toggle="modal" data-bs-target="#travelTableModal" alt="The Fly Shop Images"></a>',

                        '</div>',

                        '</div>';

                    } ?>

                </div>
            </div>
            <!-- Second Row Travel Images -->
            <div class="row">
                <div class="additional-listing">

<?php if ( get_post_meta( get_the_ID(),
                        'additional-info-image5',
                        TRUE )
                    ) {

                        echo '<div class="col-xs-6 col-md-3">',

                        '<div class="thumbnail">',

                            '<a href="#travel-carousel" data-slide-to="4"><img class="destination-img" src="'
                            . $additional_info_image5
                            . '" data-bs-toggle="modal" data-bs-target="#travelTableModal" alt="The Fly Shop Images"></a>',

                        '</div>',

                        '</div>';

                    } ?>

<?php if ( get_post_meta( get_the_ID(),
                        'additional-info-image6',
                        TRUE )
                    ) {

                        echo '<div class="col-xs-6 col-md-3">',

                        '<div class="thumbnail">',

                            '<a href="#travel-carousel" data-slide-to="5"><img class="destination-img" src="'
                            . $additional_info_image6
                            . '" data-bs-toggle="modal" data-bs-target="#travelTableModal" alt="The Fly Shop Images"></a>',

                        '</div>',

                        '</div>';

                    } ?>

<?php if ( get_post_meta( get_the_ID(),
                        'additional-info-image7',
                        TRUE )
                    ) {

                        echo '<div class="col-xs-6 col-md-3">',

                        '<div class="thumbnail">',

                            '<a href="#travel-carousel" data-slide-to="6"><img class="destination-img" src="'
                            . $additional_info_image7
                            . '" data-bs-toggle="modal" data-bs-target="#travelTableModal" alt="The Fly Shop Images"></a>',

                        '</div>',

                        '</div>';

                    } ?>

<?php if ( get_post_meta( get_the_ID(),
                        'additional-info-image8',
                        TRUE )
                    ) {

                        echo '<div class="col-xs-6 col-md-3">',

                        '<div class="thumbnail">',

                            '<a href="#travel-carousel" data-slide-to="7"><img class="destination-img" src="'
                            . $additional_info_image8
                            . '" data-bs-toggle="modal" data-bs-target="#travelTableModal" alt="The Fly Shop Images"></a>',

                        '</div>',

                        '</div>';

                    } ?>

                </div>
            </div>
    </div>
</section>

<!-- ====== MODAL SLIDER ====== -->
<div class="modal fade travel-modal additional-img" tabindex="-1" id="travelTableModal" aria-labelledby="travelTableModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        <!-- Carousel -->
        <div id="travel-carousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
<?php if (get_post_meta(get_the_ID(), 'additional-info-image1', true)) { ?>
        <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'additional-info-image2', true)) { ?>
        <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'additional-info-image3', true)) { ?>
        <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'additional-info-image4', true)) { ?>
        <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'additional-info-image5', true)) { ?>
        <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'additional-info-image6', true)) { ?>
        <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'additional-info-image7', true)) { ?>
        <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'additional-info-image8', true)) { ?>
        <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="7" aria-label="Slide 8"></button>
<?php } ?>
        </div>

        <!-- Carousel items -->
        <div class="carousel-inner">
<?php if (get_post_meta(get_the_ID(), 'additional-info-image1', true)) { ?>
        <div class="carousel-item active">
        <img class="d-block w-100 destination-img" src="<?php echo $additional_info_image1; ?>" data-bs-toggle="modal"
             data-bs-target="#travelTableModal"
             alt="The Fly Shop World Fly Fishing Travel">
        </div>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'additional-info-image2', true)) { ?>
        <div class="carousel-item">
        <img class="d-block w-100 destination-img" src="<?php echo $additional_info_image2; ?>" data-bs-toggle="modal"
             data-bs-target="#travelTableModal"
             alt="The Fly Shop World Fly Fishing Travel">
        </div>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'additional-info-image3', true)) { ?>
        <div class="carousel-item">
        <img class="d-block w-100 destination-img" src="<?php echo $additional_info_image3; ?>" data-bs-toggle="modal"
             data-bs-target="#travelTableModal"
             alt="The Fly Shop World Fly Fishing Travel">
        </div>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'additional-info-image4', true)) { ?>
        <div class="carousel-item">
        <img class="d-block w-100 destination-img" src="<?php echo $additional_info_image4; ?>" data-bs-toggle="modal"
            data-bs-target="#travelTableModal"
            alt="The Fly Shop World Fly Fishing Travel">
        </div>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'additional-info-image5', true)) { ?>
        <div class="carousel-item">
        <img class="d-block w-100 destination-img" src="<?php echo $additional_info_image5; ?>" data-bs-toggle="modal"
             data-bs-target="#travelTableModal"
             alt="The Fly Shop World Fly Fishing Travel">
        </div>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'additional-info-image6', true)) { ?>
        <div class="carousel-item">
        <img class="d-block w-100 destination-img" src="<?php echo $additional_info_image6; ?>" data-bs-toggle="modal"
             data-bs-target="#travelTableModal"
             alt="The Fly Shop World Fly Fishing Travel">
        </div>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'additional-info-image7', true)) { ?>
        <div class="carousel-item">
        <img class="d-block w-100 destination-img" src="<?php echo $additional_info_image7; ?>" data-bs-toggle="modal"
             data-bs-target="#travelTableModal"
             alt="The Fly Shop World Fly Fishing Travel">
        </div>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'additional-info-image8', true)) { ?>
        <div class="carousel-item">
        <img class="d-block w-100 destination-img" src="<?php echo $additional_info_image8; ?>" data-bs-toggle="modal"
             data-bs-target="#travelTableModal"
             alt="The Fly Shop World Fly Fishing Travel">
        </div>
<?php } ?>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#travel-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#travel-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
        </div>
        <!-- End Carousel -->

        </div>
    </div>
</div>
<!-- CALL TO ACTION ROW -->
<section id="cta" class="wrapper mt-5 mb-5">
    <div class="inner container">
        <header class="text-center">
            <h2><?php echo $cta_strong_intro; ?></h2>
            <p class="lead text-center text-justify"><?php echo $cta_content; ?></p>
        </header>
    </div>
</section>
	<!-- Table Modal -->
	<div id="travelmodal-table" class="modal fade travel-table-modal" tabindex="-1"
	     role="dialog"
	     aria-labelledby="travelTableModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="table-bg-img modal-content">
				<div class="table-header modal-header">
					<button type="button" class="btn-close close" data-bs-dismiss="modal"
					        aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
					<h4 class="modal-title"
					    id="myModalLabel"><?php echo $rr_table_title; ?></h4>
				</div>
				<div class="modal-body">
<?php
					$tbl_textarea = get_post_meta( get_the_ID(),
						'rr-table-content-textarea',
						TRUE );
					if ( ! empty( $tbl_textarea ) ) : ?>
						<div class="modal-body-content mb-1618"><?php echo $tbl_textarea; ?></div>
<?php endif; ?>
					<div class="table-responsive">
						<table class="table-travel table table-hover"><?php echo $rr_table_textarea; ?></table>
					</div>
					<h4>Inclusions:</h4>
<?php echo '<p>' . $feature_1_inclusions_textarea . '</p>'; ?>
					<h4>Non-Inclusions</h4>
<?php echo '<p>' . $feature_1_noninclusions_textarea
						. '</p>'; ?>

				</div>
			</div>
		</div>
	</div>
<?php
include get_template_directory() . '/page-templates/template-modals/destination-template-modals.php'; ?>

<?php get_footer();