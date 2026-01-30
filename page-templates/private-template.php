<?php
/**
 * Template Name: Private Template Depreciated
 * Template Post Type: adventures
 * Developed for The Fly Shop
 * @package The_Fly_Shop
 * Author: Chris Parsons
 * Author URL: https://steelbridgemedia.com
 */
include_once('post-meta/post-meta-private.php');

get_header(); ?>
<?php if ( !empty( $private_temp_video ) && !empty($private_temp_video_poster) ) : ?>
 <div id="banner" class="container-fluid travel-template-hero p-0">
  <div class="hero-image position-relative private-temp-hero-overlay">
   <div class="overlay"></div>
   <video id="sections-private-background-video" class="private-temp-video"
          autoplay
          playsinline loop
          muted
          poster="<?php echo $private_temp_video_poster; ?>">
    <source src="<?php echo $private_temp_video; ?>" type="video/mp4">
   </video>
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
<?php elseif ( empty( $private_temp_video ) || empty($private_temp_video_poster) ) : ?>
 <div id="banner" class="container-fluid travel-template-hero p-0">
  <div class="hero-image position-relative private-temp-hero-overlay">
   <div class="overlay"></div>
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
<?php endif; ?>
<?php if (empty($private_temp_video) && empty($private_temp_video_poster) && !has_post_thumbnail()) : ?>
 <div class="container-fluid travel-template-hero p-0">
  <div class="hero-image position-relative">
   <!-- Full-Width Featured Image -->
   <img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2025/01/Staff_Main6.webp" class="img-fluid w-100" alt="<?php echo get_the_title(); ?>">
   <!-- Overlay Content -->
   <div class="hero-overlay position-absolute top-50 start-50 translate-middle text-center">
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
<section class="mt-5 mb-5">
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
      if(!empty($video_pwfeature_one)) :?>
       <div class="ratio ratio-16x9 video-poster">
        <video id="videoPlayer" class="w-100"
               src="<?php echo $video_pwfeature_one; ?>"
               poster="<?php echo $feature_pw1_image; ?>"
               controls allowfullscreen>
        </video>
       </div>
<?php else: ?>
       <img src="<?php echo $feature_pw1_image;?>" alt="The Fly Shop Private Waters Image" />
<?php endif; ?>
     </div>
    </div>

    <div class="col-md-6">
     <div class="content">
      <div id="travel-style" class="privatewaters1">

       <h2><?php echo $feature_pw1_title;?></h2>

<?php if(!empty($feature_pw1_cost_textarea)) : ?>
        <p class="travel"><?php echo $feature_pw1_cost_textarea;?></p>
<?php endif; ?>

       <div class="accordion" id="accordion1">

        <div class="accordion-item privatewaters1">

<?php if(!empty($feature_pw1_inclusions_textarea)) : ?>

          <h2 class="accordion-header">
           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
            <span class="travel">Inclusions&nbsp;<span class="arrow-down"></span></span>
           </button>
          </h2>

          <div id="collapseTwo1" class="accordion-collapse collapse" data-bs-parent="#accordion1">
           <div class="accordion-body">
            <p class="travel"><?php echo $feature_pw1_inclusions_textarea;?></p>
           </div>
          </div>

<?php endif; ?>

        </div>

        <div class="accordion-item privatewaters1">

<?php if(!empty($feature_pw1_noninclusions_textarea)) : ?>

          <h2 class="accordion-header">
           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
            <span class="travel">Non-Inclusions&nbsp;<span class="arrow-down"></span></span>
           </button>
          </h2>
          <div id="collapseThree1" class="accordion-collapse collapse" data-bs-parent="#accordion1">
           <div class="accordion-body">
            <p class="travel"><?php echo $feature_pw1_noninclusions_textarea;?></p>
           </div>
          </div>

<?php endif; ?>

        </div>

        <!-- <div class="accordion-item privatewaters1">
<?php // if(!empty($feature_pw1_travelins_textarea)) : ?>
          <h2 class="accordion-header">
           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour1" aria-expanded="false" aria-controls="collapseFour1">
            <span class="travel">Travel Insurance&nbsp;<span class="arrow-down"></span></span>
           </button>
          </h2>
          <div id="collapseFour1" class="accordion-collapse collapse" data-bs-parent="#accordion1">
           <div class="accordion-body">
            <p class="travel"><?php // echo $feature_pw1_travelins_textarea;?></p>
           </div>
          </div> -->

<?php //endif; ?>

        </div>
        <div class="accordion-item privatewaters1">
<?php if(!empty($feature_pw1_nonangler_textarea)) : ?>
          <h2 class="accordion-header">
           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive1" aria-expanded="false" aria-controls="collapseFive1">
            <span class="travel">Non-Angling Companions&nbsp;<span class="arrow-down"></span></span>
           </button>
          </h2>
          <div id="collapseFive1" class="accordion-collapse collapse" data-bs-parent="#accordion1">
           <div class="accordion-body">
            <p class="travel"><?php echo $feature_pw1_nonangler_textarea;?></p>
           </div>
          </div>
<?php endif; ?>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
</section>

  <!-- == SPOTLIGHT 2 SEASONS == -->
<section class="mt-5 mb-5">
  <div class="container pt-5 pb-5">
   <div class="row align-items-center flex-row-reverse">
    <div class="col-md-6">
    <div class="image">
     <!-- Feature #2 Seasons Video/Text/Image Option -->
<?php
     if(!empty($video_pwfeature_two)) :?>
      <div class="ratio ratio-16x9 video-poster">
       <video id="videoPlayer" class="w-100"
              src="<?php echo $video_pwfeature_two; ?>"
              poster="<?php echo $feature_pw2_image; ?>"
              controls allowfullscreen>
       </video>
      </div>
<?php else: ?>
      <img src="<?php echo $feature_pw2_image;?>" alt="The Fly Shop Private Waters Image" />
<?php endif; ?>
    </div>
    </div>

    <div class="col-md-6">
     <div class="content">
      <div id="travel-style" class="privatewaters2">

       <!-- Feature #2 Seasons -->
<?php if(!empty($feature_pw2_title)) : ?>
        <h2><?php echo $feature_pw2_title;?></h2>
<?php endif; ?>

<?php if(!empty($feature_pw2_seasons_textarea)) : ?>
        <p class="travel"><?php echo $feature_pw2_seasons_textarea;?></p>
<?php endif; ?>

       <div class="accordion" id="accordion2">

        <div class="accordion-item privatewaters2">
<?php if(!empty($feature_pw2_spring_textarea)) : ?>
          <h2 class="accordion-header">
           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight1" aria-expanded="false" aria-controls="collapseEight1">
            <span class="travel">Spring&nbsp;<span class="arrow-down"></span></span>
           </button>
          </h2>
          <div id="collapseEight1" class="accordion-collapse collapse" data-bs-parent="#accordion2">
           <div class="accordion-body">
            <p class="travel"><?php echo $feature_pw2_spring_textarea;?></p>
           </div>
          </div>
<?php endif; ?>
        </div>

        <div class="accordion-item privatewaters2">

<?php if(!empty($feature_pw2_summer_textarea)) : ?>

          <h2 class="accordion-header">
           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine1" aria-expanded="false" aria-controls="collapseNine1">
            <span class="travel">Summer&nbsp;<span class="arrow-down"></span></span>
           </button>
          </h2>
          <div id="collapseNine1" class="accordion-collapse collapse" data-bs-parent="#accordion2">
           <div class="accordion-body">
            <p class="travel"><?php echo $feature_pw2_summer_textarea;?></p>
           </div>
          </div>

<?php endif; ?>

        </div>

        <div class="accordion-item privatewaters2">
<?php if(!empty($feature_pw2_autumn_textarea)) : ?>
          <h2 class="accordion-header">
           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix1" aria-expanded="false" aria-controls="collapseSix1">
            <span class="travel">Fall&nbsp;<span class="arrow-down"></span></span>
           </button>
          </h2>
          <div id="collapseSix1" class="accordion-collapse collapse" data-bs-parent="#accordion2">
           <div class="accordion-body">
            <p class="travel"><?php echo $feature_pw2_autumn_textarea;?></p>
           </div>
          </div>
<?php endif; ?>
        </div>

        <div class="accordion-item privatewaters2">

<?php if(!empty($feature_pw2_winter_textarea)) : ?>

          <h2 class="accordion-header">
           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven1" aria-expanded="false" aria-controls="collapseSeven1">
            <span class="travel">Winter&nbsp;<span class="arrow-down"></span></span>
           </button>
          </h2>
          <div id="collapseSeven1" class="accordion-collapse collapse" data-bs-parent="#accordion2">
           <div class="accordion-body">
            <p class="travel"><?php echo $feature_pw2_winter_textarea;?></p>
           </div>
          </div>

<?php endif; ?>

        </div>
       </div>
      </div>
     </div>
    </div>
  </div>
 </div>
</section>

<!-- == SPOTLIGHT 3 FISHING SECTION == -->
<?php if(!empty($feature_pw3_fishing_title)) : ?>
<section class="mt-5 mb-5">
<div class="container pt-5 pb-5">
  <div class="row align-items-center">
   <div class="col-md-6">
    <div class="image">
     <!-- Feature #3 Video/Text/Image Option -->
<?php
     if(!empty($video_feature_three)) :?>
      <div class="ratio ratio-16x9 video-poster">
       <video id="videoPlayer" class="w-100"
              src="<?php echo $video_feature_three; ?>"
              poster="<?php echo $feature_pw3_fishing_image; ?>"
              controls allowfullscreen>
       </video>
      </div>
<?php else: ?>
      <img src="<?php echo $feature_pw3_fishing_image;?>" alt="The Fly Shop Travel Image" />
<?php endif; ?>

    </div>
   </div>

   <div class="col-md-6">
    <div class="content">
     <div id="travel-style" class="privatewaters3">
      <h2><?php echo $feature_pw3_fishing_title;?></h2>
      <p class="travel"><?php echo $feature_pw3_fishing_content;?></p>

      <div class="accordion" id="accordion-beat1">
       <!-- Option: Fishing Beat #1 Content -->
<?php
       // Fishing beat #1
       if(!empty($fishing_beat1_label)) :?>

        <div id="beat-1" class="fishing-beat-1">
         <div class="accordion-item">
          <h2 class="accordion-header">
           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-beat1" aria-expanded="false" aria-controls="collapse-beat1">
            <span class="travel"><?php echo $fishing_beat1_label; ?>&nbsp;<span class="arrow-down"></span></span>
           </button>
          </h2>
          <div id="collapse-beat1" class="accordion-collapse collapse" data-bs-parent="#accordion-beat1">
           <div class="accordion-body">
            <p class="travel"><?php echo $feature_pw3_fishing_beat1;?></p>
           </div>
          </div>
         </div>
        </div>

<?php endif; ?>

       <!-- Option: Beat #2 Content -->
<?php
       // Fishing beat #2
       if(!empty($fishing_beat2_label)) :?>

        <div id="beat-2" class="fishing-beat-2">
         <div class="accordion-item">
          <h2 class="accordion-header">
           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-beat2" aria-expanded="false" aria-controls="collapse-beat2">
            <span class="travel"><?php echo $fishing_beat2_label; ?>&nbsp;<span class="arrow-down"></span></span>
           </button>
          </h2>
          <div id="collapse-beat2" class="accordion-collapse collapse" data-bs-parent="#accordion-beat1">
           <div class="accordion-body">
            <p class="travel"><?php echo $feature_pw3_fishing_beat2;?></p>
           </div>
          </div>
         </div>
        </div>

<?php endif; ?>

       <!-- Option: Beat #3 Content -->
<?php
       // Fishing beat #3
       if(!empty($fishing_beat3_label)) :?>

        <div id="beat-3" class="fishing-beat-3">
         <div class="accordion-item">
          <h2 class="accordion-header">
           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-beat3" aria-expanded="false" aria-controls="collapse-beat3">
            <span class="travel"><?php echo $fishing_beat3_label; ?>&nbsp;<span class="arrow-down"></span></span>
           </button>
          </h2>
          <div id="collapse-beat3" class="accordion-collapse collapse" data-bs-parent="#accordion-beat1">
           <div class="accordion-body">
            <p class="travel"><?php echo $feature_pw3_fishing_beat3;?></p>
           </div>
          </div>
         </div>
        </div>

<?php endif; ?>

       <!-- Option: Beat #4 Content -->
<?php
       // Fishing beat #4
       if(!empty($fishing_beat4_label)) :?>

        <div id="beat-4" class="fishing-beat-4">
         <div class="accordion-item">
          <h2 class="accordion-header">
           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-beat4" aria-expanded="false" aria-controls="collapse-beat4">
            <span class="travel"><?php echo $fishing_beat4_label; ?>&nbsp;<span class="arrow-down"></span></span>
           </button>
          </h2>
          <div id="collapse-beat4" class="accordion-collapse collapse" data-bs-parent="#accordion-beat1">
           <div class="accordion-body">
            <p class="travel"><?php echo $feature_pw3_fishing_beat4;?></p>
           </div>
          </div>
         </div>
        </div>

<?php endif; ?>

       <!-- Option: Beat #5 Content -->
<?php
       // Fishing beat #5
       if(!empty($fishing_beat5_label)) :?>

        <div id="beat-5" class="fishing-beat-5">
         <div class="accordion-item">
          <h2 class="accordion-header">
           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-beat5" aria-expanded="false" aria-controls="collapse-beat5">
            <span class="travel"><?php echo $fishing_beat5_label; ?>&nbsp;<span class="arrow-down"></span></span>
           </button>
          </h2>
          <div id="collapse-beat5" class="accordion-collapse collapse" data-bs-parent="#accordion-beat1">
           <div class="accordion-body">
            <p class="travel"><?php echo $feature_pw3_fishing_beat5;?></p>
           </div>
          </div>
         </div>
        </div>

<?php endif; ?>

       <!-- Option: Beat #6 Content -->
<?php
       // Fishing beat #6
       if(!empty($fishing_beat6_label)) :?>

        <div id="beat-6" class="fishing-beat-6">
         <div class="accordion-item">
          <h2 class="accordion-header">
           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-beat6" aria-expanded="false" aria-controls="collapse-beat6">
            <span class="travel"><?php echo $fishing_beat6_label; ?>&nbsp;<span class="arrow-down"></span></span>
           </button>
          </h2>
          <div id="collapse-beat6" class="accordion-collapse collapse" data-bs-parent="#accordion-beat1">
           <div class="accordion-body">
            <p class="travel"><?php echo $feature_pw3_fishing_beat6;?></p>
           </div>
          </div>
         </div>
        </div>

<?php endif; ?>

      </div> <!-- /end panel group -->
     </div>
    </div>
   </div>
 </div>
</div>
</section>
<?php endif; ?>


<!-- == SPOTLIGHT #4 LODGING == -->
<section class="mt-5 mb-5">
<div class="container pt-5 pb-5">
  <div class="row align-items-center flex-row-reverse">
    <div class="col-md-6">

     <div class="image">
      <!-- Feature #4 Video/Text/Image Option -->
<?php

      if(!empty($video_pwfeature_four)) :?>
       <div class="ratio ratio-16x9 video-poster">
        <video id="videoPlayer" class="w-100"
               src="<?php echo $video_pwfeature_four; ?>"
               poster="<?php echo $feature_4_pwlodging_image; ?>"
               controls allowfullscreen>
        </video>
       </div>
<?php else: ?>
       <img src="<?php echo $feature_4_pwlodging_image;?>" alt="The Fly Shop Private Waters Image" />
<?php endif; ?>
     </div>
   </div>

   <div class="col-md-6">
    <div class="content">
     <div id="travel-style" class="privatewaters4">

<?php if(!empty($feature_4_pwlodging_title)) : ?>
       <h2><?php echo $feature_4_pwlodging_title;?></h2>
<?php endif; ?>

<?php if(!empty($feature_4_pwlodging_content)) : ?>
       <p class="travel"><?php echo $feature_4_pwlodging_content;?></p>
<?php endif; ?>

      <div class="accordion" id="accordion4">
       <div class="accordion-item privatewaters4">

<?php if(!empty($feature_4_pwlodging_readmore)) : ?>

         <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne4" aria-expanded="false" aria-controls="collapseOne4">
                   <span class="travel">Read More&nbsp;<span class="arrow-down"></span>

<?php if( !empty( $feature_4_pwlodging_readmore_info   )) {
                  echo '<span class="readmore-info">' . $feature_4_pwlodging_readmore_info  . '</span>';
                 } ?>

                 </span>
          </button>
         </h2>

         <div id="collapseOne4" class="accordion-collapse collapse" data-bs-parent="#accordion4">
          <div class="accordion-body">
           <p class="travel"><?php echo $feature_4_pwlodging_readmore;?></p>
          </div>
         </div>
<?php endif; ?>
       </div>
      </div><!-- /#accordion4 -->
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
</section>

<!-- === SPOTLIGHT 5 GETTING TO === -->
<section class="mt-5 mb-5">
<div class="container pt-5 pb-5">
 <div class="row align-items-center">
  <div class="col-md-6">

   <div class="image">
    <!-- Feature #3 Video/Text/Image Option -->
<?php
    if(!empty($video_feature_five)) :?>
     <div class="ratio ratio-16x9 video-poster">
      <video id="videoPlayer" class="w-100"
             src="<?php echo $video_feature_five; ?>"
             poster="<?php echo $feature_pw5_gettingto_image; ?>"
             controls allowfullscreen>
      </video>
     </div>
<?php else: ?>
     <img src="<?php echo $feature_pw5_gettingto_image;?>" alt="The Fly Shop Travel Image" />
<?php endif; ?>
   </div>
  </div>

  <div class="col-md-6">
   <div class="content">
    <div id="travel-style" class="privatewaters5">

<?php if(!empty($feature_pw5_get_to_title)) : ?>
      <h2><?php echo $feature_pw5_get_to_title;?></h2>
<?php endif; ?>

<?php if(!empty($feature_pw5_get_to_content)) : ?>
      <p class="travel"><?php echo $feature_pw5_get_to_content;?></p>
<?php endif; ?>

     <div class="accordion" id="accordion5">
      <div class="accordion-item privatewaters5">

<?php if(!empty($feature_pw5_get_to_readmore)) : ?>

        <h2 class="accordion-header">
         <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne5" aria-expanded="false" aria-controls="collapseOne5">
                  <span class="travel">Read More&nbsp;<span class="arrow-down"></span>

<?php if( !empty( $feature_pw5_get_to_readmore_info   )) {
                   echo '<span class="readmore-info">' . $feature_pw5_get_to_readmore_info  . '</span>';
                  } ?>

                </span>
         </button>
        </h2>
        <div id="collapseOne5" class="accordion-collapse collapse" data-bs-parent="#accordion5">
         <div class="accordion-body">
          <p class="travel"><?php echo $feature_pw5_get_to_readmore;?></p>
         </div>
        </div>

<?php endif; ?>

      </div>
     </div><!-- /#accordion3 -->
    </div>
   </div>
  </div>
 </div>
</div>
</section>

<section id="destination-template-carousel" class="wrapper mt-5 mb-5">
 <div class="inner container">
  <header class="major">
   <!--<h2>Additional Photos</h2>-->
   <div class="row">
    <div class="additional-listing">

<?php if (get_post_meta(get_the_ID(),
      'private-additional-info-image1',
      TRUE)
     ) {

      echo '<div class="col-xs-6 col-md-3">',

      '<div class="thumbnail">',

       '<a href="#travel-carousel" data-slide-to="0"><img class="destination-img" src="'
       . $private_additional_info_image1
       . '" data-bs-toggle="modal" data-bs-target="#travelTableModal"  alt="The Fly Shop Images"></a>',

      '</div>',

      '</div>';

     } ?>

<?php if (get_post_meta(get_the_ID(),
      'private-additional-info-image2',
      TRUE)
     ) {

      echo '<div class="col-xs-6 col-md-3">',

      '<div class="thumbnail">',

       '<a href="#travel-carousel" data-slide-to="1"><img class="destination-img" src="'
       . $private_additional_info_image2
       . '" data-bs-toggle="modal" data-bs-target="#travelTableModal" alt="The Fly Shop Images"></a>',

      '</div>',

      '</div>';

     } ?>

<?php if (get_post_meta(get_the_ID(),
      'private-additional-info-image3',
      TRUE)
     ) {

      echo '<div class="col-xs-6 col-md-3">',

      '<div class="thumbnail">',

       '<a href="#travel-carousel" data-slide-to="2"><img class="destination-img" src="'
       . $private_additional_info_image3
       . '" data-bs-toggle="modal" data-bs-target="#travelTableModal" alt="The Fly Shop Images"></a>',

      '</div>',

      '</div>';

     } ?>

<?php if (get_post_meta(get_the_ID(),
      'private-additional-info-image4',
      TRUE)
     ) {

      echo '<div class="col-xs-6 col-md-3">',

       '<div class="thumbnail">' .

       '<a href="#travel-carousel" data-slide-to="3"><img class="destination-img" src="'
       . $private_additional_info_image4
       . '" data-bs-toggle="modal" data-bs-target="#travelTableModal" alt="The Fly Shop Images"></a>',

      '</div>',

      '</div>';

     } ?>

    </div>
   </div>
   <!-- Second Row Travel Images -->
   <div class="row">
    <div class="additional-listing">

<?php if (get_post_meta(get_the_ID(),
      'private-additional-info-image5',
      TRUE)
     ) {

      echo '<div class="col-xs-6 col-md-3">',

      '<div class="thumbnail">',

       '<a href="#travel-carousel" data-slide-to="4"><img class="destination-img" src="'
       . $private_additional_info_image5
       . '" data-bs-toggle="modal" data-bs-target="#travelTableModal" alt="The Fly Shop Images"></a>',

      '</div>',

      '</div>';

     } ?>

<?php if (get_post_meta(get_the_ID(),
      'private-additional-info-image6',
      TRUE)
     ) {

      echo '<div class="col-xs-6 col-md-3">',

      '<div class="thumbnail">',

       '<a href="#travel-carousel" data-slide-to="5"><img class="destination-img" src="'
       . $private_additional_info_image6
       . '" data-bs-toggle="modal" data-bs-target="#travelTableModal" alt="The Fly Shop Images"></a>',

      '</div>',

      '</div>';

     } ?>

<?php if (get_post_meta(get_the_ID(),
      'private-additional-info-image7',
      TRUE)
     ) {

      echo '<div class="col-xs-6 col-md-3">',

      '<div class="thumbnail">',

       '<a href="#travel-carousel" data-slide-to="6"><img class="destination-img" src="'
       . $private_additional_info_image7
       . '" data-bs-toggle="modal" data-bs-target="#travelTableModal" alt="The Fly Shop Images"></a>',

      '</div>',

      '</div>';

     } ?>

<?php if (get_post_meta(get_the_ID(),
      'private-additional-info-image8',
      TRUE)
     ) {

      echo '<div class="col-xs-6 col-md-3">',

      '<div class="thumbnail">',

       '<a href="#travel-carousel" data-slide-to="7"><img class="destination-img" src="'
       . $private_additional_info_image8
       . '" data-bs-toggle="modal" data-bs-target="#travelTableModal" alt="The Fly Shop Images"></a>',

      '</div>',

      '</div>';

     } ?>

    </div>
   </div>
 </div>
 </section>

 <div class="modal fade travel-modal additional-img" tabindex="-1" id="travelTableModal"
      aria-labelledby="travelTableModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
   <div class="modal-content">
    <div class="modal-header">
     <!-- <h5 class="modal-title" id="guideModalLabel">Guide Service Images</h5> -->
     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>

    <!-- Carousel -->
    <div id="travel-carousel" class="carousel slide" data-bs-ride="carousel">
     <!-- Indicators -->
     <div class="carousel-indicators">
<?php if (get_post_meta(get_the_ID(), 'private-additional-info-image1', true)) { ?>
       <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="0" class="active"
               aria-current="true" aria-label="Slide 1"></button>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'private-additional-info-image2', true)) { ?>
       <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="1"
               aria-label="Slide 2"></button>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'private-additional-info-image3', true)) { ?>
       <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="2"
               aria-label="Slide 3"></button>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'private-additional-info-image4', true)) { ?>
       <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="3"
               aria-label="Slide 4"></button>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'private-additional-info-image5', true)) { ?>
       <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="4"
               aria-label="Slide 5"></button>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'private-additional-info-image6', true)) { ?>
       <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="5"
               aria-label="Slide 6"></button>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'private-additional-info-image7', true)) { ?>
       <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="6"
               aria-label="Slide 7"></button>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'private-additional-info-image8', true)) { ?>
       <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="7"
               aria-label="Slide 8"></button>
<?php } ?>
     </div>

     <!-- Carousel items -->
     <div class="carousel-inner">
<?php if (get_post_meta(get_the_ID(), 'private-additional-info-image1', true)) { ?>
       <div class="carousel-item active">
        <img class="d-block w-100 destination-img"
             src="<?php echo $private_additional_info_image1; ?>" data-bs-toggle="modal"
             data-bs-target="#travelTableModal"
             alt="The Fly Shop World Fly Fishing Travel">
       </div>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'private-additional-info-image2', true)) { ?>
       <div class="carousel-item">
        <img class="d-block w-100 destination-img"
             src="<?php echo $private_additional_info_image2; ?>" data-bs-toggle="modal"
             data-bs-target="#travelTableModal"
             alt="The Fly Shop World Fly Fishing Travel">
       </div>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'private-additional-info-image3', true)) { ?>
       <div class="carousel-item">
        <img class="d-block w-100 destination-img"
             src="<?php echo $private_additional_info_image3; ?>" data-bs-toggle="modal"
             data-bs-target="#travelTableModal"
             alt="The Fly Shop World Fly Fishing Travel">
       </div>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'private-additional-info-image4', true)) { ?>
       <div class="carousel-item">
        <img class="d-block w-100 destination-img"
             src="<?php echo $private_additional_info_image4; ?>" data-bs-toggle="modal"
             data-bs-target="#travelTableModal"
             alt="The Fly Shop World Fly Fishing Travel">
       </div>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'private-additional-info-image5', true)) { ?>
       <div class="carousel-item">
        <img class="d-block w-100 destination-img"
             src="<?php echo $private_additional_info_image5; ?>" data-bs-toggle="modal"
             data-bs-target="#travelTableModal"
             alt="The Fly Shop World Fly Fishing Travel">
       </div>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'private-additional-info-image6', true)) { ?>
       <div class="carousel-item">
        <img class="d-block w-100 destination-img"
             src="<?php echo $private_additional_info_image6; ?>" data-bs-toggle="modal"
             data-bs-target="#travelTableModal"
             alt="The Fly Shop World Fly Fishing Travel">
       </div>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'private-additional-info-image7', true)) { ?>
       <div class="carousel-item">
        <img class="d-block w-100 destination-img"
             src="<?php echo $private_additional_info_image7; ?>" data-bs-toggle="modal"
             data-bs-target="#travelTableModal"
             alt="The Fly Shop World Fly Fishing Travel">
       </div>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'private-additional-info-image8', true)) { ?>
       <div class="carousel-item">
        <img class="d-block w-100 destination-img"
             src="<?php echo $private_additional_info_image8; ?>" data-bs-toggle="modal"
             data-bs-target="#travelTableModal"
             alt="The Fly Shop World Fly Fishing Travel">
       </div>
<?php } ?>
     </div>

     <!-- Controls -->
     <button class="carousel-control-prev" type="button" data-bs-target="#travel-carousel"
             data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
     </button>
     <button class="carousel-control-next" type="button" data-bs-target="#travel-carousel"
             data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
     </button>
    </div>
    <!-- End Carousel -->

   </div>
  </div>
 </div>

 <!-- ====== MODAL SLIDER ====== -->

 <div class="modal fade private-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">

   <div id="private-carousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">

<?php if(get_post_meta(get_the_ID(), 'private-additional-info-image1', true)) {

			echo '<button type="button" data-bs-target="#private-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>';

		 } ?>

<?php if(get_post_meta(get_the_ID(), 'private-additional-info-image2', true)) {

			echo '<button type="button" data-bs-target="#private-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>';

		 } ?>

<?php if(get_post_meta(get_the_ID(), 'private-additional-info-image3', true)) {

			echo '<button type="button" data-bs-target="#private-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>';

		 } ?>

<?php if(get_post_meta(get_the_ID(), 'private-additional-info-image4', true)) {

			echo '<button type="button" data-bs-target="#private-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>';

		 } ?>

<?php if(get_post_meta(get_the_ID(), 'private-additional-info-image5', true)) {

			echo '<button type="button" data-bs-target="#private-carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>';

		 } ?>

<?php if(get_post_meta(get_the_ID(), 'private-additional-info-image6', true)) {

			echo '<button type="button" data-bs-target="#private-carousel" data-bs-slide-to="5" aria-label="Slide 6"></button>';

		 } ?>

<?php if(get_post_meta(get_the_ID(), 'private-additional-info-image7', true)) {

			echo '<button type="button" data-bs-target="#private-carousel" data-bs-slide-to="6" aria-label="Slide 7"></button>';

		 } ?>

<?php if(get_post_meta(get_the_ID(), 'private-additional-info-image8', true)) {

			echo '<button type="button" data-bs-target="#private-carousel" data-bs-slide-to="7" aria-label="Slide 8"></button>';

		 } ?>

    </div>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
<?php if(get_post_meta(get_the_ID(), 'private-additional-info-image1', true)) {

			echo	'<div class="carousel-item active">',

			 '<img src="' . $private_additional_info_image1 . '" class="d-block w-100" alt="The Fly Shop World Fly Fishing Travel">',

			'</div>';
		 } ?>

<?php if(get_post_meta(get_the_ID(), 'private-additional-info-image2', true)) {

			echo	'<div class="carousel-item">',

			 '<img src="' . $private_additional_info_image2 . '" class="d-block w-100" alt="The Fly Shop World Fly Fishing Travel">',

			'</div>';

		 } ?>

<?php if(get_post_meta(get_the_ID(), 'private-additional-info-image3', true)) {

			echo	'<div class="carousel-item">',

			 '<img src="' . $private_additional_info_image3 . '" class="d-block w-100" alt="The Fly Shop World Fly Fishing Travel">',

			'</div>';

		 } ?>

<?php if(get_post_meta(get_the_ID(), 'private-additional-info-image4', true)) {

			echo	'<div class="carousel-item">',

			 '<img src="' . $private_additional_info_image4 . '" class="d-block w-100" alt="The Fly Shop World Fly Fishing Travel">',

			'</div>';

		 } ?>

<?php if(get_post_meta(get_the_ID(), 'private-additional-info-image5', true)) {

			echo	'<div class="carousel-item">',

			 '<img src="' . $private_additional_info_image5 . '" class="d-block w-100" alt="The Fly Shop World Fly Fishing Travel">',

			'</div>';

		 } ?>

<?php if(get_post_meta(get_the_ID(), 'private-additional-info-image6', true)) {

			echo	'<div class="carousel-item">',

			 '<img src="' . $private_additional_info_image6 . '" class="d-block w-100" alt="The Fly Shop World Fly Fishing Travel">',

			'</div>';

		 } ?>

<?php if(get_post_meta(get_the_ID(), 'private-additional-info-image7', true)) {

			echo  '<div class="carousel-item">',

			 '<img src="' . $private_additional_info_image7 . '" class="d-block w-100" alt="The Fly Shop World Fly Fishing Travel">',

			'</div>';

		 } ?>

<?php if(get_post_meta(get_the_ID(), 'private-additional-info-image8', true)) {

			echo	'<div class="carousel-item">',

			 '<img src="' . $private_additional_info_image8 . '" class="d-block w-100" alt="The Fly Shop World Fly Fishing Travel">',

			'</div>';

		 } ?>

    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#private-carousel" data-bs-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#private-carousel" data-bs-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="visually-hidden">Next</span>
    </button>
   </div>
  </div>
 </div>

 <section id="cta" class="wrapper mt-5 mb-5">
  <div class="inner container">
   <div id="cta-trigger" class="cta-trigger-area">
    <header class="text-center">
     <h2 class="cta-trigger-title"><?php echo $cta_private_strong_intro; ?></h2>
     <p class="cta-trigger-subtitle"><?php echo $cta_private_content; ?></p>
     <button class="btn btn-primary cta-expand-btn" id="expandCTA">
      Get Started <i class="fas fa-chevron-up"></i>
     </button>
    </header>
   </div>

   <div id="cta-form-container" class="cta-form-container">
    <div class="form-wrapper">
     <div class="form-header">
      <h3>Contact Our Travel Specialists</h3>
      <button class="close-form" id="closeCTA">
       <i class="fas fa-times"></i>
      </button>
     </div>
     <div class="form-content">
      <div class="form-content">
<?php
			 $page_title = get_the_title();
			 $form_url_params = '?page_title=' . urlencode($page_title);
			 echo do_shortcode('[gravityform id="17" title="false" description="false" field_values="page_title=' . urlencode($page_title) . '"]');
			 ?>
      </div>
      <!-- Fallback content if no form is available -->
      <div class="contact-fallback">
       <p>Call us directly at <strong>(800) 669-3474</strong> or use the form above to get started.
       </p>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>

<?php
include_once get_template_directory() . '/page-templates/cta-sections/footer-cta.php';
get_footer();