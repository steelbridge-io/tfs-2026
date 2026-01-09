<?php
/**
 * Template Name: Fish Camp Destination Template
 * Template Post Type: fishcamp_cpt
 * Developed for The Fly Shop
 * @package The_Fly_Shop
 * Author: Chris Parsons
 * Author URL: https://steelbridgemedia.com
 */
include_once('post-meta/post-meta-fish-camp.php');

get_header('fish-camp');
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

  <!-- One -->
  <section id="fishcamp-one" class="mt-5 mb-5">
    <div class="container">
      <div id="primary" class="content-area row mt-5">
        <main id="main" class="site-main col-md-12" role="main">

          <?php
          // WordPress Blog Content
          while ( have_posts() ) : the_post();

            get_template_part( 'template-parts/content', 'page-basic' );

          endwhile; // End of the loop.
          ?>

        </main>
      </div>
    </div>
  </section>

  <!-- Two -->
  <section class="mt-5 mb-5">
    <div class="container pt-5 pb-5">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="image">
            <!-- Feature #2 Video/Text/Image Option -->
            <?php
            if(!empty($video_fcfeature_one)) :?>
              <div class="ratio ratio-16x9">
                <iframe src="<?php echo $video_fcfeature_one; ?>" allowfullscreen></iframe>
              </div>
            <?php else: ?>
              <img src="<?php echo $feature_fc1_image;?>" alt="The Fly Shop Private Waters Image" class="img-fluid" />
            <?php endif; ?>
          </div>
        </div>
        <div class="col-md-6">
          <div class="content">
            <div id="travel-style" class="fishcamp1">

              <?php if(!empty($feature_fc1_title)) : ?>
                <h2><?php echo $feature_fc1_title;?></h2>
              <?php endif; ?>

              <?php if(!empty($feature_fc1_cost_textarea)) : ?>
                <p class="travel"><?php echo $feature_fc1_cost_textarea; ?></p>
              <?php endif; ?>

              <div class="accordion" id="accordion1">

                <?php if(!empty($feature_fc1_inclusions_textarea)) : ?>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                        Inclusions&nbsp;<span class="arrow-down"></span>
                      </button>
                    </h2>
                    <div id="collapseTwo1" class="accordion-collapse collapse" data-bs-parent="#accordion1">
                      <div class="accordion-body">
                        <p class="travel"><?php echo $feature_fc1_inclusions_textarea;?></p>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>

                <?php if(!empty($feature_fc1_noninclusions_textarea)) : ?>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                        Non-Inclusions&nbsp;<span class="arrow-down"></span>
                      </button>
                    </h2>
                    <div id="collapseThree1" class="accordion-collapse collapse" data-bs-parent="#accordion1">
                      <div class="accordion-body">
                        <p class="travel"><?php echo $feature_fc1_noninclusions_textarea;?></p>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  // ... existing code ...
  <!-- ===  DATES === -->
  <section class="spotlight">

    <div class="image">
      <!-- Dates Video/Text/Image Option -->
      <?php
      if(!empty($video_fcfeature_two)) :?>
        <div class="ratio ratio-16x9">
          <iframe src="<?php echo $video_fcfeature_two; ?>" allowfullscreen></iframe>
        </div>
      <?php else: ?>
        <img src="<?php echo $feature_fc2_image;?>" alt="The Fly Shop Private Waters Image" class="img-fluid" />
      <?php endif; ?>
    </div>

    <div class="content">
      <div id="travel-style" class="fishcamp2">

        <?php if(!empty($feature_fc2_title)) : ?>
          <h2><?php echo $feature_fc2_title;?></h2>
        <?php endif; ?>

        <?php if(!empty($feature_fc2_seasons_textarea)) : ?>
          <p class="travel" id="travel"><?php echo $feature_fc2_seasons_textarea; ?></p>
        <?php endif; ?>

        <div class="accordion" id="accordiondates">
          <div class="accordion-item">

            <?php
            // Dates read more
            if(!empty($feature_fc2_readmore_textarea)) :?>

              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOnedates" aria-expanded="false" aria-controls="collapseOnedates">
                  Read More&nbsp;<span class="arrow-down"></span>
                  <?php if( !empty( $feature_fc2_readmore_info   )) {
                    echo '<span class="readmore-info">' . $feature_fc2_readmore_info  . '</span>';
                  } ?>
                </button>
              </h2>

              <div id="collapseOnedates" class="accordion-collapse collapse" data-bs-parent="#accordiondates">
                <div class="accordion-body">
                  <p class="travel"><?php echo $feature_fc2_readmore_textarea;?></p>
                </div>
              </div>

            <?php endif; ?>

          </div>
        </div><!-- /#accordiondates -->
      </div>
    </div>
  </section>
  // ... existing code ...
  <!-- === LODGING === -->
  <section class="spotlight">

    <div class="image">
      <!-- Feature #4 Video/Text/Image Option -->
      <?php

      if(!empty($video_fcfeature_four)) :?>
        <div class="ratio ratio-16x9">
          <iframe src="<?php echo $video_fcfeature_four; ?>" allowfullscreen></iframe>
        </div>
      <?php else: ?>
        <img src="<?php echo $feature_fc3_fishing_image; ?>" alt="The Fly Shop Private Waters Image" class="img-fluid" />
      <?php endif; ?>
    </div>

    <div class="content">
      <div id="travel-style" class="fishcamp4">

        <h2>
          <?php if(!empty($feature_4_fclodging_title)) : ?>
            <?php echo $feature_4_fclodging_title;?>
          <?php endif; ?>
        </h2>

        <div class="travel">
          <?php if(!empty($feature_4_fclodging_content)) : ?>
            <?php echo $feature_4_fclodging_content;?>
          <?php endif; ?>
        </div>

        <div class="accordion" id="accordion4">
          <div class="accordion-item">

            <?php
            // Read more option
            if(!empty($feature_4_fclodging_readmore)) :?>

              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne4" aria-expanded="false" aria-controls="collapseOne4">
                  Read More&nbsp;<span class="arrow-down"></span>
                  <?php if( !empty( $feature_fc4_readmore_info   )) {
                    echo '<span class="readmore-info">' . $feature_fc4_readmore_info  . '</span>';
                  } ?>
                </button>
              </h2>

              <div id="collapseOne4" class="accordion-collapse collapse" data-bs-parent="#accordion4">
                <div class="accordion-body">
                  <p class="travel"><?php echo $feature_4_fclodging_readmore;?></p>
                </div>
              </div>

            <?php endif; ?>

          </div>
        </div><!-- /#accordion4 -->
      </div>
    </div>
  </section>
  // ... existing code ...
  <!-- ===  GETTING TO === -->
  <section class="spotlight">

    <div class="image">
      <!-- Getting To Video/Text/Image Option -->
      <?php
      if(!empty($video_fcfeature_five)) :?>
        <div class="ratio ratio-16x9">
          <iframe src="<?php echo $video_fcfeature_five; ?>" allowfullscreen></iframe>
        </div>
      <?php else: ?>
        <img src="<?php echo $feature_fc4_image; ?>" alt="The Fly Shop Travel Image" class="img-fluid" />
      <?php endif; ?>
    </div>

    <div class="content">
      <div id="travel-style" class="fishcamp5">

        <h2>
          <?php if(!empty($feature_fc5_get_to_title)) {
            echo $feature_fc5_get_to_title;
          } ?>
        </h2>

        <div class="travel">
          <?php if(!empty($feature_fc5_get_to_content)) {
            echo $feature_fc5_get_to_content;
          } ?>
        </div>

        <div class="accordion" id="accordion5">
          <div class="accordion-item">

            <?php
            // Read more Option
            if(!empty($feature_fc5_get_to_readmore)) :?>

              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne5" aria-expanded="false" aria-controls="collapseOne5">
                  Read More&nbsp;<span class="arrow-down"></span>
                  <?php if( !empty( $feature_fc3_readmore_info )) {
                    echo '<span class="readmore-info">' . $feature_fc3_readmore_info . '</span>';
                  } ?>
                </button>
              </h2>
              <div id="collapseOne5" class="accordion-collapse collapse" data-bs-parent="#accordion5">
                <div class="accordion-body">
                  <p class="travel"><?php echo $feature_fc5_get_to_readmore;?></p>
                </div>
              </div>

            <?php endif; ?>

          </div>
        </div><!-- /#accordion5 -->
      </div>
    </div>
  </section>
  // ... existing code ...
  <section class="spotlight">

    <div class="image">

      <!-- Itinerary Video/Text/Image Option -->
      <?php
      if(!empty($video_fcfeature_five)) :?>
        <div class="ratio ratio-16x9">
          <iframe src="<?php echo $video_fcfeature_five; ?>" allowfullscreen></iframe>
        </div>
      <?php else: ?>
        <img src="<?php echo $feature_fc5_image; ?>" alt="The Fly Shop Travel Image" class="img-fluid" />
      <?php endif; ?>

    </div>

    <!-- Itinerary section  -->
    <div class="content">
      <div id="travel-style" class="fishcamp3">

        <h2>
          <?php if(!empty($feature_fcfive_title)) {
            echo $feature_fcfive_title;
          } ?>
        </h2>

        <div class="travel">
          <?php if(!empty($feature_fcfive_textarea)) {
            echo $feature_fcfive_textarea;
          } ?>
        </div>

        <div class="accordion" id="accordionfive">
          <div class="accordion-item">

            <?php
            // Readmore Option
            if(!empty($feature_fcfive_readmore_textarea)) :?>

              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOnefive" aria-expanded="false" aria-controls="collapseOnefive">
                  Read More&nbsp;<span class="arrow-down"></span>
                  <?php if( !empty( $feature_fcfive_readmore_info )) {
                    echo '<span class="readmore-info">' . $feature_fcfive_readmore_info . '</span>';
                  } ?>
                </button>
              </h2>
              <div id="collapseOnefive" class="accordion-collapse collapse" data-bs-parent="#accordionfive">
                <div class="accordion-body">
                  <p class="travel"><?php echo $feature_fcfive_readmore_textarea;?></p>
                </div>
              </div>

            <?php endif; ?>

          </div>
        </div>
      </div>
    </div>
  </section>
  // ... existing code ...

  <section id="three" class="wrapper style7 special">
    <div class="inner">
      <header class="major">
        <h2>Additional Information</h2>
        <hr class="fancy1">
        <!-- First row additional info -->
        <div class="row">
          <div class="additional-listing">

            <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image1', true)) {

              echo	'<div class="col-6 col-md-3">',

              '<div class="thumbnail">',

                '<a href="#fishcamp-carousel" data-bs-slide-to="0"><img src="' . $fish_camp_additional_info_image1 . '" class="img-fluid" data-bs-toggle="modal" data-bs-target=".fishcamp-modal" alt="The Fly Shop Images"></a>',

              '</div>',

              '</div>';

            }?>

            <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image2', true)) {

              echo	'<div class="col-6 col-md-3">',

              '<div class="thumbnail">',

                '<a href="#fishcamp-carousel" data-bs-slide-to="1"><img src="' . $fish_camp_additional_info_image2 . '" class="img-fluid" data-bs-toggle="modal" data-bs-target=".fishcamp-modal" alt="The Fly Shop Images"></a>',

              '</div>',

              '</div>';

            } ?>

            <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image3', true)) {

              echo	'<div class="col-6 col-md-3">',

              '<div class="thumbnail">',

                '<a href="#fishcamp-carousel" data-bs-slide-to="2"><img src="' . $fish_camp_additional_info_image3 . '" class="img-fluid" data-bs-toggle="modal" data-bs-target=".fishcamp-modal" alt="The Fly Shop Images"></a>',

              '</div>',

              '</div>';

            } ?>

            <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image4', true)) {

              echo	'<div class="col-6 col-md-3">',

              '<div class="thumbnail">',

                '<a href="#fishcamp-carousel" data-bs-slide-to="3"><img src="' . $fish_camp_additional_info_image4 . '" class="img-fluid" data-bs-toggle="modal" data-bs-target=".fishcamp-modal" alt="The Fly Shop Images"></a>',

              '</div>',

              '</div>';

            } ?>

          </div>
        </div>
        <!-- Second Row Fish Camp Images -->
        <div class="row">
          <div class="additional-listing">

            <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image5', true)) {
              echo	'<div class="col-6 col-md-3">',

              '<div class="thumbnail">',

                '<a href="#fishcamp-carousel" data-bs-slide-to="4"><img src="' . $fish_camp_additional_info_image5 . '" class="img-fluid" data-bs-toggle="modal" data-bs-target=".fishcamp-modal" alt="The Fly Shop Images"></a>',

              '</div>',

              '</div>';

            } ?>

            <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image6', true)) {

              echo	'<div class="col-6 col-md-3">',

              '<div class="thumbnail">',

                '<a href="#fishcamp-carousel" data-bs-slide-to="5"><img src="' . $fish_camp_additional_info_image6 . '" class="img-fluid" data-bs-toggle="modal" data-bs-target=".fishcamp-modal" alt="The Fly Shop Images"></a>',

              '</div>',

              '</div>';

            } ?>

            <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image7', true)) {

              echo	'<div class="col-6 col-md-3">',

              '<div class="thumbnail">',

                '<a href="#fishcamp-carousel" data-bs-slide-to="6"><img src="' . $fish_camp_additional_info_image7 . '" class="img-fluid" data-bs-toggle="modal" data-bs-target=".fishcamp-modal" alt="The Fly Shop Images"></a>',

              '</div>',

              '</div>';

            } ?>

            <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image8', true)) {

              echo	'<div class="col-6 col-md-3">',

              '<div class="thumbnail">',

                '<a href="#fishcamp-carousel" data-bs-slide-to="7"><img src="' . $fish_camp_additional_info_image8 . '" class="img-fluid" data-bs-toggle="modal" data-bs-target=".fishcamp-modal" alt="The Fly Shop Images"></a>',

              '</div>',

              '</div>';

            } ?>

          </div>
        </div>
    </div>
    </header>
  </section>

  <!-- ====== MODAL SLIDER ====== -->

  <div class="additional-img modal fade fishcamp-modal" tabindex="-1" aria-labelledby="fishCampModalLabel" aria-hidden="true">
    <div class="additional-img modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <h5 class="modal-title" id="fishCampModalLabel">Fish Camp Images</h5> -->
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div id="fishcamp-carousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">

              <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image1', true)) {

                echo '<button type="button" data-bs-target="#fishcamp-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>';

              } ?>

              <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image2', true)) {

                echo '<button type="button" data-bs-target="#fishcamp-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>';

              } ?>

              <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image3', true)) {

                echo '<button type="button" data-bs-target="#fishcamp-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>';

              } ?>

              <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image4', true)) {

                echo '<button type="button" data-bs-target="#fishcamp-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>';

              } ?>

              <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image5', true)) {

                echo '<button type="button" data-bs-target="#fishcamp-carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>';

              } ?>

              <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image6', true)) {

                echo '<button type="button" data-bs-target="#fishcamp-carousel" data-bs-slide-to="5" aria-label="Slide 6"></button>';

              } ?>

              <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image7', true)) {

                echo '<button type="button" data-bs-target="#fishcamp-carousel" data-bs-slide-to="6" aria-label="Slide 7"></button>';

              } ?>

              <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image8', true)) {

                echo '<button type="button" data-bs-target="#fishcamp-carousel" data-bs-slide-to="7" aria-label="Slide 8"></button>';

              } ?>

            </div>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

              <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image1', true)) {

                echo	'<div class="carousel-item active">',

                  '<img src="' . $fish_camp_additional_info_image1 . '" class="d-block w-100" alt="The Fly Shop World Fly Fishing Travel">',

                '</div>';

              } ?>

              <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image2', true)) {

                echo	'<div class="carousel-item">',

                  '<img src="' . $fish_camp_additional_info_image2 . '" class="d-block w-100" alt="The Fly Shop World Fly Fishing Travel">',

                '</div>';

              } ?>

              <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image3', true)) {

                echo 	'<div class="carousel-item">',

                  '<img src="' . $fish_camp_additional_info_image3 . '" class="d-block w-100" alt="The Fly Shop World Fly Fishing Travel">',

                '</div>';

              } ?>

              <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image4', true)) {

                echo	'<div class="carousel-item">',

                  '<img src="' . $fish_camp_additional_info_image4 . '" class="d-block w-100" alt="The Fly Shop World Fly Fishing Travel">',

                '</div>';

              } ?>

              <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image5', true)) {

                echo	'<div class="carousel-item">',

                  '<img src="' . $fish_camp_additional_info_image5 . '" class="d-block w-100" alt="The Fly Shop World Fly Fishing Travel">',

                '</div>';

              } ?>

              <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image6', true)) {

                echo	'<div class="carousel-item">',

                  '<img src="' . $fish_camp_additional_info_image6 . '" class="d-block w-100" alt="The Fly Shop World Fly Fishing Travel">',

                '</div>';

              } ?>

              <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image7', true)) {

                echo	'<div class="carousel-item">',

                  '<img src="' . $fish_camp_additional_info_image7 . '" class="d-block w-100" alt="The Fly Shop World Fly Fishing Travel">',

                '</div>';

              } ?>

              <?php if(get_post_meta(get_the_ID(), 'fish-camp-additional-info-image8', true)) {

                echo	'<div class="carousel-item">',

                  '<img src="' . $fish_camp_additional_info_image8 . '" class="d-block w-100" alt="The Fly Shop World Fly Fishing Travel">',

                '</div>';

              } ?>

            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#fishcamp-carousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#fishcamp-carousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CALL TO ACTION ROW -->
  <section id="cta" class="wrapper style4">
    <div class="inner">
      <header class="text-center">
        <h2><?php echo $cta_fish_camp_strong_intro;?></h2>
        <p><?php echo $cta_fish_camp_content;?></p>
      </header>
    </div>
  </section>

<?php
get_footer();
