<?php
/* 	 Template Name: Stream Report
 *   Template Post Type: page
 *		 Developed for The Fly Shop
 *		 SteelBridge Media
*/

include_once('post-meta/post-meta-stream-report.php');

get_header();
?>
    <section id="stream-report-hero">

		 <?php if (has_post_thumbnail()) : ?>

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
    </section>

    <!-- Breadcrumbs -->
    <div class="container mt-4">
     <?php the_fly_shop_breadcrumbs(); ?>
    </div>

    <section id="stream-report-content">
        <div class="container">
            <h2 class="text-center">Northern California Stream Report</h2>
            <div class="wide text-justify">
                <?php if (have_posts()) :
                    while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                else :
                endif; ?>
            </div>
        </div>
    </section>

    <section id="featured-stream-reports" class="featured-content">

        <!-- ====== FEATURED REPORTS ====== -->

        <div class="container text-center mt-5">
            <h2>Featured Reports</h2>
            <div id="featured-reports-container" class="row">

                <div class="col-xs-6 col-md-3">
                    <a data-bs-toggle="modal" href="#stream-report.php" data-bs-target=".featuredreport1" role="button" class="thumbnail featuredreport clicky"><img src="<?php echo $featured1_image; ?>" alt="Northern California - The Fly Shop - Stream Report"></a>
                </div>

                <div class="col-xs-6 col-md-3">
                    <a data-bs-toggle="modal" data-bs-target=".featuredreport2" role="button" class="thumbnail featuredreport"><img src="<?php echo $featured2_image; ?>" alt="Northern California - The Fly Shop - Stream Report"></a>
                </div>

                <div class="col-xs-6 col-md-3">
                    <a data-bs-toggle="modal" data-bs-target=".featuredreport3" role="button" class="thumbnail featuredreport"><img src="<?php echo $featured3_image; ?>" alt="Northern California - The Fly Shop - Stream Report"></a>
                </div>

                <div class="col-xs-6 col-md-3">
                    <a data-bs-toggle="modal" data-bs-target=".featuredreport4" role="button" class="thumbnail featuredreport"><img src="<?php echo $featured4_image; ?>" alt="Northern California - The Fly Shop - Stream Report"></a>
                </div>

            </div>
        </div>

        <!-- ====== /FEATURED REPORTS ====== -->

        <div id="regional-reports" class="container d-none d-md-block">

            <div class="text-center mt-5">
                <h2>All Regional Reports</h2>
            </div>

            <div class="well">
                <h4>Regional Rivers</h4>
            </div>
            <div id="report-tab-selector-rivers" class="d-flex align-items-start report-container">

                <div class="nav flex-column nav-pills me-3 report-button" id="v-pills-tab-rivers" role="tablist" aria-orientation="vertical">

                    <button class="btn btn-tfs active" id="fall-river-tab" data-bs-toggle="pill" data-bs-target="#fall-river-report" type="button" role="tab" aria-controls="fall-river-report" aria-selected="true">Fall River:&nbsp;
                     <?php if(get_post_meta(get_the_ID(), 'fallriver-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $fallriver_closed_checkbox; ?>"><?php echo $fallriver_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $fallriver_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $fallriver_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $fallriver_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $fallriver_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $fallriver_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="hat-creek-tab" data-bs-toggle="pill" data-bs-target="#hat-creek-report" type="button" role="tab" aria-controls="hat-creek-report" aria-selected="false">Hat Creek:&nbsp;
                     <?php if(get_post_meta(get_the_ID(), 'hatcreek-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $hatcreek_closed_checkbox;?>"><?php echo $hatcreek_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $hatcreek_checkbox_poor;?>">Poor</span>
                         <span class="label label-default<?php echo $hatcreek_checkbox_fair;?>">Fair</span>
                         <span class="label label-default<?php echo $hatcreek_checkbox_fairgood;?>">Fair to Good</span>
                         <span class="label label-default<?php echo $hatcreek_checkbox_good;?>">Good</span>
                         <span class="label label-default<?php echo $hatcreek_checkbox_great;?>">Great</span>
                     <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="klamath-river-tab" data-bs-toggle="pill" data-bs-target="#klamath-river-report" type="button" role="tab" aria-controls="klamath-river-report" aria-selected="false">Klamath River:&nbsp;
                     <?php if(get_post_meta(get_the_ID(), 'klamathriver-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $klamathriver_closed_checkbox;?>"><?php echo $klamathriver_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $klamathriver_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $klamathriver_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $klamathriver_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $klamathriver_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $klamathriver_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="lower-sac-tab" data-bs-toggle="pill" data-bs-target="#lower-sac-report" type="button" role="tab" aria-controls="lower-sac-report" aria-selected="false">Lower Sacramento River:&nbsp;
                     <?php if(get_post_meta(get_the_ID(), 'lowersacramento-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $lowersacramento_closed_checkbox;?>"><?php echo $lowersacramento_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $lowersacramento_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $lowersacramento_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $lowersacramento_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $lowersacramento_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $lowersacramento_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="mccloud-river-tab" data-bs-toggle="pill" data-bs-target="#mccloud-river-report" type="button" role="tab" aria-controls="mccloud-river-report" aria-selected="false">McCloud River:&nbsp;
                     <?php $mccloudriver_closed_checkbox = get_post_meta(get_the_ID(), 'mccloudriver-closed-checkbox', true);
                     if(get_post_meta(get_the_ID(), 'mccloudriver-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $mccloudriver_closed_checkbox;?>"><?php echo $mccloudriver_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $mccloudriver_checkbox_poor;?>">Poor</span>
                         <span class="label label-default<?php echo $mccloudriver_checkbox_fair;?>">Fair</span>
                         <span class="label label-default<?php echo $mccloudriver_checkbox_fairgood;?>">Fair to Good</span>
                         <span class="label label-default<?php echo $mccloudriver_checkbox_good;?>">Good</span>
                         <span class="label label-default<?php echo $mccloudriver_checkbox_great;?>">Great</span>
                     <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="pit-river-tab" data-bs-toggle="pill" data-bs-target="#pit-river-report" type="button" role="tab" aria-controls="pit-river-report" aria-selected="false">Pit River:&nbsp;
                     <?php $pitriver_closed_checkbox = get_post_meta(get_the_ID(), 'pitriver-closed-checkbox', true);
                     if(get_post_meta(get_the_ID(), 'pitriver-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $pitriver_closed_checkbox;?>"><?php echo $pitriver_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $pitriver_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $pitriver_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $pitriver_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $pitriver_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $pitriver_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="trinity-river-tab" data-bs-toggle="pill" data-bs-target="#trinity-river-report" type="button" role="tab" aria-controls="trinity-river-report" aria-selected="false">Trinity River:&nbsp;
                     <?php $trinityriver_closed_checkbox = get_post_meta(get_the_ID(), 'trinityriver-closed-checkbox', true);
                     if(get_post_meta(get_the_ID(), 'trinityriver-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $trinityriver_closed_checkbox;?>"><?php echo $trinityriver_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $trinityriver_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $trinityriver_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $trinityriver_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $trinityriver_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $trinityriver_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="upper-sac-tab" data-bs-toggle="pill" data-bs-target="#upper-sac-report" type="button" role="tab" aria-controls="upper-sac-report" aria-selected="false">Upper Sacramento River:&nbsp;
                    <?php if(get_post_meta(get_the_ID(), 'uppersac-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $uppersac_closed_checkbox; ?>"><?php echo $uppersac_closed_message; ?></span>
                    <?php else: ?>
                         <span class="label label-default<?php echo $uppersac_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $uppersac_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $uppersac_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $uppersac_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $uppersac_checkbox_great; ?>">Great</span>
                    <?php endif; ?>
                    </button>

                </div>

                <div class="tab-content report-content " id="v-pills-tabContent-rivers">

                    <div class="tab-pane fade show active" id="fall-river-report" role="tabpanel" aria-labelledby="fall-river-tab" tabindex="0">
                    <h4>Fall River - Updated:&nbsp;<?php echo $fallriver_report_date; ?></h4>

                        <p><b>Fishing conditions:</b>&nbsp;
                        <?php if(get_post_meta(get_the_ID(), 'fallriver-closed-checkbox', true) == '-danger') :?>
                        <span class="label label-default<?php echo $fallriver_closed_checkbox; ?>"><?php echo $fallriver_closed_message; ?></span>
                        <?php else: ?>
                        <span class="label label-default<?php echo $fallriver_checkbox_poor; ?>">Poor</span>
                        <span class="label label-default<?php echo $fallriver_checkbox_fair; ?>">Fair</span>
                        <span class="label label-default<?php echo $fallriver_checkbox_fairgood; ?>">Fair to Good</span>
                        <span class="label label-default<?php echo $fallriver_checkbox_good; ?>">Good</span>
                        <span class="label label-default<?php echo $fallriver_checkbox_great; ?>">Great</span>
                        <?php endif; ?>
                        </p>

                        <div class="report"><b>Report:</b>&nbsp;<?php echo $fallriver_report; ?></div>
                        <div><b>Hot Flies:</b><?php echo $fallriver_hot_flies; ?></div>

                    </div>
                    <div class="tab-pane fade" id="hat-creek-report" role="tabpanel" aria-labelledby="hat-creek-tab" tabindex="0">
                        <h4>Hat Creek - Updated:&nbsp;<?php echo $hatcreek_report_update; ?></h4>
                        <p><b>Fishing conditions:</b>&nbsp;
                     <?php if(get_post_meta(get_the_ID(), 'hatcreek-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $hatcreek_closed_checkbox;?>"><?php echo $hatcreek_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $hatcreek_checkbox_poor;?>">Poor</span>
                         <span class="label label-default<?php echo $hatcreek_checkbox_fair;?>">Fair</span>
                         <span class="label label-default<?php echo $hatcreek_checkbox_fairgood;?>">Fair to Good</span>
                         <span class="label label-default<?php echo $hatcreek_checkbox_good;?>">Good</span>
                         <span class="label label-default<?php echo $hatcreek_checkbox_great;?>">Great</span>
                     <?php endif; ?>
                        </p>
                        <div class="report"><b>Report:</b>&nbsp;<?php echo $hatcreek_report; ?></div>
                        <div><b>Hot Flies:</b><?php echo $hatcreek_hot_flies; ?></div>

                    </div>
                    <div class="tab-pane fade" id="klamath-river-report" role="tabpanel" aria-labelledby="klamath-river-tab" tabindex="0">
                    <h4>Klamath River - Updated:&nbsp;<?php echo $klamathriver_updated; ?></h4>
                    <p><b>Fishing conditions:</b>&nbsp;
                     <?php if(get_post_meta(get_the_ID(), 'klamathriver-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $klamathriver_closed_checkbox;?>"><?php echo $klamathriver_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $klamathriver_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $klamathriver_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $klamathriver_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $klamathriver_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $klamathriver_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                    </p>
                    <div class="report"><b>Report:</b>&nbsp;<?php echo $klamathriver_report; ?></div>
                    <div><b>Hot Flies:</b><?php echo $klamathriver_hot_flies; ?></div>
                    </div>
                    <div class="tab-pane fade" id="lower-sac-report" role="tabpanel" aria-labelledby="lower-sac-tab" tabindex="0">
                        <h4>Lower Sacramento River - Updated:&nbsp;<?php echo $lowersacramento_updated; ?></h4>
                        <p><b>Fishing conditions:</b>&nbsp;
                     <?php if(get_post_meta(get_the_ID(), 'lowersacramento-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $lowersacramento_closed_checkbox;?>"><?php echo $lowersacramento_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $lowersacramento_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $lowersacramento_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $lowersacramento_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $lowersacramento_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $lowersacramento_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                     </p>
                     <div class="report"><b>Report:</b>&nbsp;<?php echo $lowersacramento_report; ?></div>
                     <div><b>Hot Flies:</b><?php echo $lowersacramento_hot_flies; ?></div>
                    </div>
                    <div class="tab-pane fade" id="mccloud-river-report" role="tabpanel" aria-labelledby="mccloud-river-tab" tabindex="0">
                        <h4>McCloud River - Updated:&nbsp;<?php echo $mccloudriver_updated; ?></h4>
                        <p><b>Fishing conditions:</b>&nbsp;
                         <?php $mccloudriver_closed_checkbox = get_post_meta(get_the_ID(), 'mccloudriver-closed-checkbox', true);
                         if(get_post_meta(get_the_ID(), 'mccloudriver-closed-checkbox', true) == '-danger') :?>
                             <span class="label label-default<?php echo $mccloudriver_closed_checkbox;?>"><?php echo $mccloudriver_closed_message; ?></span>
                         <?php else: ?>
                             <span class="label label-default<?php echo $mccloudriver_checkbox_poor;?>">Poor</span>
                             <span class="label label-default<?php echo $mccloudriver_checkbox_fair;?>">Fair</span>
                             <span class="label label-default<?php echo $mccloudriver_checkbox_fairgood;?>">Fair to Good</span>
                             <span class="label label-default<?php echo $mccloudriver_checkbox_good;?>">Good</span>
                             <span class="label label-default<?php echo $mccloudriver_checkbox_great;?>">Great</span>
                         <?php endif; ?>
                        </p>
                        <div class="report"><b>Report:</b>&nbsp;<?php echo $mccloudriver_report; ?></div>
                        <div><b>Hot Flies:</b><?php echo $mccloudriver_hot_flies; ?></div>
                    </div>
                    <div class="tab-pane fade" id="pit-river-report" role="tabpanel" aria-labelledby="pit-river-tab" tabindex="0">
                    <h4>Pit River - Updated:&nbsp;<?php echo $pitriver_updated ?></h4>
                    <p><b>Fishing conditions:</b>&nbsp;
                     <?php $pitriver_closed_checkbox = get_post_meta(get_the_ID(), 'pitriver-closed-checkbox', true);
                     if(get_post_meta(get_the_ID(), 'pitriver-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $pitriver_closed_checkbox;?>"><?php echo $pitriver_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $pitriver_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $pitriver_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $pitriver_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $pitriver_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $pitriver_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                    </p>
                    <div class="report"><b>Report:</b>&nbsp;<?php echo $pitriver_report; ?></div>
                    <div><b>Hot Flies:</b><?php echo $pitriver_hot_flies; ?></div>
                    </div>
                    <div class="tab-pane fade" id="trinity-river-report" role="tabpanel" aria-labelledby="trinity-river-tab" tabindex="0">
                     <h4>Trinity River - Updated:&nbsp;<?php echo $trinityriver_updated ?></h4>
                     <p><b>Fishing conditions:</b>&nbsp;
                     <?php $trinityriver_closed_checkbox = get_post_meta(get_the_ID(), 'trinityriver-closed-checkbox', true);
                     if(get_post_meta(get_the_ID(), 'trinityriver-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $trinityriver_closed_checkbox;?>"><?php echo $trinityriver_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $trinityriver_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $trinityriver_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $trinityriver_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $trinityriver_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $trinityriver_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                     </p>
                     <div class="report"><b>Report:</b>&nbsp;<?php echo $trinityriver_report; ?></div>
                     <div><b>Hot Flies:</b><?php echo$trinityriver_hot_flies; ?></div>
                    </div>
                    <div class="tab-pane fade" id="upper-sac-report" role="tabpanel" aria-labelledby="upper-sac-tab" tabindex="0">
                     <h4>Upper Sacramento River - Updated:&nbsp;<?php echo $uppersac_updated; ?></h4>
                     <p><b>Fishing conditions:</b>&nbsp;
                     <?php if(get_post_meta(get_the_ID(), 'uppersac-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $uppersac_closed_checkbox; ?>"><?php echo $uppersac_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $uppersac_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $uppersac_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $uppersac_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $uppersac_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $uppersac_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                     </p>
                     <div class="report"><b>Report:</b>&nbsp;<?php echo $uppersac_report; ?></div>
                     <div><b>Hot Flies:</b><?php echo $uppersac_hot_flies; ?></div>
                    </div>

                </div>
            </div>


            <div class="well">
                <h4>Regional Still Waters</h4>
            </div>
            <div id="report-tab-selector-still-waters" class="d-flex align-items-start report-container">

                <div class="nav flex-column nav-pills me-3 report-button" id="v-pills-tab-still-waters" role="tablist" aria-orientation="vertical">

                    <button class="btn btn-tfs active" id="baum-lake-tab" data-bs-toggle="pill" data-bs-target="#baum-lake-report" type="button" role="tab" aria-controls="baum-lake-report" aria-selected="true">Baum Lake:&nbsp;
                                                 <?php if(get_post_meta(get_the_ID(), 'baumlake-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $baumlake_closed_checkbox; ?>"><?php echo $baumlake_closed_message; ?></span>
                                                 <?php else: ?>
                         <span class="label label-default<?php echo $baumlake_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $baumlake_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $baumlake_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $baumlake_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $baumlake_checkbox_great; ?>">Great</span>
                                                 <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="iron-cyn-tab" data-bs-toggle="pill" data-bs-target="#iron-cyn-report" type="button" role="tab" aria-controls="iron-cyn-report" aria-selected="false">Iron Canyon Reservoir:&nbsp;
                     <?php if(get_post_meta(get_the_ID(), 'ironcanyonres-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $ironcanyonres_closed_checkbox; ?>"><?php echo $ironcanyonres_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $ironcanyonres_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $ironcanyonres_checkbox_fair;  ?>">Fair</span>
                         <span class="label label-default<?php echo $ironcanyonres_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $ironcanyonres_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $ironcanyonres_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="keswick-res-tab" data-bs-toggle="pill" data-bs-target="#keswick-res-report" type="button" role="tab" aria-controls="keswick-res-report" aria-selected="false">Keswick Reservoir:&nbsp;
                     <?php if(get_post_meta(get_the_ID(), 'keswickres-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $keswickres_closed_checkbox; ?>"><?php echo $keswickres_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $keswickres_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $keswickres_checkbox_fair;  ?>">Fair</span>
                         <span class="label label-default<?php echo $keswickres_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $keswickres_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $keswickres_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="lake-shasta-tab" data-bs-toggle="pill" data-bs-target="#lake-shasta-report" type="button" role="tab" aria-controls="lake-shasta-report" aria-selected="false">Lake Shasta:&nbsp;
                     <?php $lakeshasta_closed_checkbox = get_post_meta(get_the_ID(), 'lakeshasta-closed-checkbox', true);
                     if(get_post_meta(get_the_ID(), 'lakeshasta-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $lakeshasta_closed_checkbox;?>"><?php echo $lakeshasta_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $lakeshasta_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $lakeshasta_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $lakeshasta_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $lakeshasta_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $lakeshasta_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="lewiston-lake-tab" data-bs-toggle="pill" data-bs-target="#lewiston-lake-report" type="button" role="tab" aria-controls="lewiston-lake-report" aria-selected="false">Lewsiton Lake:&nbsp;
                     <?php $lewistonlake_closed_checkbox = get_post_meta(get_the_ID(), 'lewistonlake-closed-checkbox', true);
                     if(get_post_meta(get_the_ID(), 'lewistonlake-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $lewistonlake_closed_checkbox;?>"><?php echo $lewistonlake_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $lewistonlake_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $lewistonlake_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $lewistonlake_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $lewistonlake_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $lewistonlake_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="manzanita-lake-tab" data-bs-toggle="pill" data-bs-target="#manzanita-lake-report" type="button" role="tab" aria-controls="manzanita-lake-report" aria-selected="false">Manzanita Lake:&nbsp;
                     <?php $manzanitalake_closed_checkbox = get_post_meta(get_the_ID(), 'manzanitalake-closed-checkbox', true);
                     if(get_post_meta(get_the_ID(), 'manzanitalake-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $manzanitalake_closed_checkbox;?>"><?php echo $manzanitalake_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $manzanitalake_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $manzanitalake_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $manzanitalake_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $manzanitalake_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $manzanitalake_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="mccloud-res-tab" data-bs-toggle="pill" data-bs-target="#mccloud-res-report" type="button" role="tab" aria-controls="mccloud-res-report" aria-selected="false">McCloud Reservoir:&nbsp;
                         <?php $mccloudreservoir_closed_checkbox = get_post_meta(get_the_ID(), 'mccloudreservoir-closed-checkbox', true);
                         if(get_post_meta(get_the_ID(), 'mccloudreservoir-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $mccloudreservoir_closed_checkbox;?>"><?php echo $mccloudreservoir_closed_message; ?></span>
                                                 <?php else: ?>
                         <span class="label label-default<?php echo $mccloudreservoir_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $mccloudreservoir_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $mccloudreservoir_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $mccloudreservoir_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $mccloudreservoir_checkbox_great; ?>">Great</span>
                         <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="pyramid-lake-tab" data-bs-toggle="pill" data-bs-target="#pyramid-lake-report" type="button" role="tab" aria-controls="pyramid-lake-report" aria-selected="false">Pyramid Lake:&nbsp;
                     <?php $pyramidlake_closed_checkbox = get_post_meta(get_the_ID(), 'pyramidlake-closed-checkbox', true);
                     if(get_post_meta(get_the_ID(), 'pyramidlake-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $pyramidlake_closed_checkbox;?>"><?php echo $pyramidlake_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $pyramidlake_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $pyramidlake_checkbox_fair;  ?>">Fair</span>
                         <span class="label label-default<?php echo $pyramidlake_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $pyramidlake_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $pyramidlake_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                    </button>

                </div>

                <div class="tab-content report-content" id="v-pills-tabContent-still-waters">

                    <div class="tab-pane fade show active" id="baum-lake-report" role="tabpanel" aria-labelledby="baum-lake-tab" tabindex="0">
                        <h4>Baum Lake - Updated:&nbsp;<?php echo $baumlake_updated; ?></h4>
                        <p><b>Fishing conditions:</b>&nbsp;
                         <?php if(get_post_meta(get_the_ID(), 'baumlake-closed-checkbox', true) == '-danger') :?>
                             <span class="label label-default<?php echo $baumlake_closed_checkbox; ?>"><?php echo $baumlake_closed_message; ?></span>
                         <?php else: ?>
                             <span class="label label-default<?php echo $baumlake_checkbox_poor; ?>">Poor</span>
                             <span class="label label-default<?php echo $baumlake_checkbox_fair; ?>">Fair</span>
                             <span class="label label-default<?php echo $baumlake_checkbox_fairgood; ?>">Fair to Good</span>
                             <span class="label label-default<?php echo $baumlake_checkbox_good; ?>">Good</span>
                             <span class="label label-default<?php echo $baumlake_checkbox_great; ?>">Great</span>
                         <?php endif; ?>
                        </p>

                        <div class="report"><b>Report:</b>&nbsp;<?php echo $baumlake_report; ?></div>
                        <div><b>Hot Flies:</b><?php echo $baumlake_hot_flies; ?></div>

                    </div>
                    <div class="tab-pane fade" id="iron-cyn-report" role="tabpanel" aria-labelledby="iron-cyn-tab" tabindex="0">
                        <h4>Iron Canyon Reservoir - Updated:&nbsp;<?php echo $ironcanyonres_updated; ?></h4>
                        <p><b>Fishing conditions:</b>&nbsp;
                         <?php if(get_post_meta(get_the_ID(), 'ironcanyonres-closed-checkbox', true) == '-danger') :?>
                             <span class="label label-default<?php echo $ironcanyonres_closed_checkbox; ?>"><?php echo $ironcanyonres_closed_message; ?></span>
                         <?php else: ?>
                             <span class="label label-default<?php echo $ironcanyonres_checkbox_poor; ?>">Poor</span>
                             <span class="label label-default<?php echo $ironcanyonres_checkbox_fair;  ?>">Fair</span>
                             <span class="label label-default<?php echo $ironcanyonres_checkbox_fairgood; ?>">Fair to Good</span>
                             <span class="label label-default<?php echo $ironcanyonres_checkbox_good; ?>">Good</span>
                             <span class="label label-default<?php echo $ironcanyonres_checkbox_great; ?>">Great</span>
                         <?php endif; ?>
                        </p>
                        <div class="report"><b>Report:</b>&nbsp;<?php echo $ironcanyonres_report; ?></div>
                        <div><b>Hot Flies:</b><?php echo $ironcanyonres_hot_flies; ?></div>
                    </div>
                    <div class="tab-pane fade" id="keswick-res-report" role="tabpanel" aria-labelledby="keswick-res-tab" tabindex="0">
                        <h4>Keswick Reservoir - Updated:&nbsp;<?php echo $keswickres_updated; ?></h4>
                        <p><b>Fishing conditions:</b>&nbsp;
                         <?php if(get_post_meta(get_the_ID(), 'keswickres-closed-checkbox', true) == '-danger') :?>
                             <span class="label label-default<?php echo $keswickres_closed_checkbox; ?>"><?php echo $keswickres_closed_message; ?></span>
                         <?php else: ?>
                             <span class="label label-default<?php echo $keswickres_checkbox_poor; ?>">Poor</span>
                             <span class="label label-default<?php echo $keswickres_checkbox_fair;  ?>">Fair</span>
                             <span class="label label-default<?php echo $keswickres_checkbox_fairgood; ?>">Fair to Good</span>
                             <span class="label label-default<?php echo $keswickres_checkbox_good; ?>">Good</span>
                             <span class="label label-default<?php echo $keswickres_checkbox_great; ?>">Great</span>
                         <?php endif; ?>
                        </p>
                        <div class="report"><b>Report:</b>&nbsp;<?php echo $keswickres_report; ?></div>
                        <div><b>Hot Flies:</b><?php echo $keswickres_hot_flies; ?></div>
                    </div>
                    <div class="tab-pane fade" id="lake-shasta-report" role="tabpanel" aria-labelledby="lake-shasta-tab" tabindex="0">
                        <h4>Lake Shasta - Updated:&nbsp;<?php echo $lakeshasta_updated; ?></h4>
                        <p><b>Fishing conditions:</b>&nbsp;
                         <?php $lakeshasta_closed_checkbox = get_post_meta(get_the_ID(), 'lakeshasta-closed-checkbox', true);
                         if(get_post_meta(get_the_ID(), 'lakeshasta-closed-checkbox', true) == '-danger') :?>
                             <span class="label label-default<?php echo $lakeshasta_closed_checkbox;?>"><?php echo $lakeshasta_closed_message; ?></span>
                         <?php else: ?>
                             <span class="label label-default<?php echo $lakeshasta_checkbox_poor; ?>">Poor</span>
                             <span class="label label-default<?php echo $lakeshasta_checkbox_fair; ?>">Fair</span>
                             <span class="label label-default<?php echo $lakeshasta_checkbox_fairgood; ?>">Fair to Good</span>
                             <span class="label label-default<?php echo $lakeshasta_checkbox_good; ?>">Good</span>
                             <span class="label label-default<?php echo $lakeshasta_checkbox_great; ?>">Great</span>
                         <?php endif; ?>
                        </p>
                        <div class="report"><b>Report:</b>&nbsp;<?php echo $lakeshasta_report; ?></div>
                        <div><b>Hot Flies:</b><?php echo $lakeshasta_hot_flies; ?></div>
                    </div>
                    <div class="tab-pane fade" id="lewiston-lake-report" role="tabpanel" aria-labelledby="lewiston-lake-tab" tabindex="0">
                        <h4>Lewiston Lake - Updated:&nbsp;<?php echo $lewistonlake_updated; ?></h4>
                        <p><b>Fishing conditions:</b>&nbsp;
                         <?php $lewistonlake_closed_checkbox = get_post_meta(get_the_ID(), 'lewistonlake-closed-checkbox', true);
                         if(get_post_meta(get_the_ID(), 'lewistonlake-closed-checkbox', true) == '-danger') :?>
                             <span class="label label-default<?php echo $lewistonlake_closed_checkbox;?>"><?php echo $lewistonlake_closed_message; ?></span>
                         <?php else: ?>
                             <span class="label label-default<?php echo $lewistonlake_checkbox_poor; ?>">Poor</span>
                             <span class="label label-default<?php echo $lewistonlake_checkbox_fair; ?>">Fair</span>
                             <span class="label label-default<?php echo $lewistonlake_checkbox_fairgood; ?>">Fair to Good</span>
                             <span class="label label-default<?php echo $lewistonlake_checkbox_good; ?>">Good</span>
                             <span class="label label-default<?php echo $lewistonlake_checkbox_great; ?>">Great</span>
                         <?php endif; ?>
                        </p>
                        <div class="report"><b>Report:</b>&nbsp;<?php echo $lewistonlake_report; ?></div>
                        <div><b>Hot Flies:</b><?php echo $lewistonlake_hot_flies; ?></div>
                    </div>
                    <div class="tab-pane fade" id="manzanita-lake-report" role="tabpanel" aria-labelledby="manzanita-lake-tab" tabindex="0">
                        <h4>Manzanita Lake - Updated:&nbsp;<?php echo $manzanitalake_updated ?></h4>
                        <p><b>Fishing conditions:</b>&nbsp;
                         <?php $manzanitalake_closed_checkbox = get_post_meta(get_the_ID(), 'manzanitalake-closed-checkbox', true);
                         if(get_post_meta(get_the_ID(), 'manzanitalake-closed-checkbox', true) == '-danger') :?>
                             <span class="label label-default<?php echo $manzanitalake_closed_checkbox;?>"><?php echo $manzanitalake_closed_message; ?></span>
                         <?php else: ?>
                             <span class="label label-default<?php echo $manzanitalake_checkbox_poor; ?>">Poor</span>
                             <span class="label label-default<?php echo $manzanitalake_checkbox_fair; ?>">Fair</span>
                             <span class="label label-default<?php echo $manzanitalake_checkbox_fairgood; ?>">Fair to Good</span>
                             <span class="label label-default<?php echo $manzanitalake_checkbox_good; ?>">Good</span>
                             <span class="label label-default<?php echo $manzanitalake_checkbox_great; ?>">Great</span>
                         <?php endif; ?>
                        </p>
                        <div class="report"><b>Report:</b>&nbsp;<?php echo $manzanitalake_report; ?></div>
                        <div><b>Hot Flies:</b><?php echo $manzanitalake_hot_flies; ?></div>
                    </div>
                    <div class="tab-pane fade" id="mccloud-res-report" role="tabpanel" aria-labelledby="mccloud-res-tab" tabindex="0">
                        <h4>McCloud Reservoir - Updated:&nbsp;<?php echo $mccloudreservoir_updated ?></h4>
                        <p><b>Fishing conditions:</b>&nbsp;
                         <?php $mccloudreservoir_closed_checkbox = get_post_meta(get_the_ID(), 'mccloudreservoir-closed-checkbox', true);
                         if(get_post_meta(get_the_ID(), 'mccloudreservoir-closed-checkbox', true) == '-danger') :?>
                             <span class="label label-default<?php echo $mccloudreservoir_closed_checkbox;?>"><?php echo $mccloudreservoir_closed_message; ?></span>
                         <?php else: ?>
                             <span class="label label-default<?php echo $mccloudreservoir_checkbox_poor; ?>">Poor</span>
                             <span class="label label-default<?php echo $mccloudreservoir_checkbox_fair; ?>">Fair</span>
                             <span class="label label-default<?php echo $mccloudreservoir_checkbox_fairgood; ?>">Fair to Good</span>
                             <span class="label label-default<?php echo $mccloudreservoir_checkbox_good; ?>">Good</span>
                             <span class="label label-default<?php echo $mccloudreservoir_checkbox_great; ?>">Great</span>
                         <?php endif; ?>
                        </p>
                        <div class="report"><b>Report:</b>&nbsp;<?php echo $mccloudreservoir_report; ?></div>
                        <div><b>Hot Flies:</b><?php echo$mccloudreservoir_hot_flies; ?></div>
                    </div>
                    <div class="tab-pane fade" id="pyramid-lake-report" role="tabpanel" aria-labelledby="pyramid-lake-tab" tabindex="0">
                        <h4>Pyramid Lake - Updated:&nbsp;<?php echo $pyramidlake_updated; ?></h4>
                        <p><b>Fishing conditions:</b>&nbsp;
                         <?php $pyramidlake_closed_checkbox = get_post_meta(get_the_ID(), 'pyramidlake-closed-checkbox', true);
                         if(get_post_meta(get_the_ID(), 'pyramidlake-closed-checkbox', true) == '-danger') :?>
                             <span class="label label-default<?php echo $pyramidlake_closed_checkbox;?>"><?php echo $pyramidlake_closed_message; ?></span>
                         <?php else: ?>
                             <span class="label label-default<?php echo $pyramidlake_checkbox_poor; ?>">Poor</span>
                             <span class="label label-default<?php echo $pyramidlake_checkbox_fair;  ?>">Fair</span>
                             <span class="label label-default<?php echo $pyramidlake_checkbox_fairgood; ?>">Fair to Good</span>
                             <span class="label label-default<?php echo $pyramidlake_checkbox_good; ?>">Good</span>
                             <span class="label label-default<?php echo $pyramidlake_checkbox_great; ?>">Great</span>
                         <?php endif; ?>
                        </p>
                        <div class="report"><b>Report:</b>&nbsp;<?php echo $pyramidlake_report; ?></div>
                        <div><b>Hot Flies:</b><?php echo $pyramidlake_hot_flies; ?></div>
                    </div>

                </div>
            </div>

            <div class="well">
                <h4>Private Waters</h4>
            </div>
            <div id="report-tab-selector-private-waters" class="d-flex align-items-start report-container">

                <div class="nav flex-column nav-pills me-3 report-button" id="v-pills-tab-private-waters" role="tablist" aria-orientation="vertical">

                    <button class="btn btn-tfs active" id="antelope-creek-tab" data-bs-toggle="pill" data-bs-target="#antelope-creek-report" type="button" role="tab" aria-controls="antelope-creek-report" aria-selected="true">Antelope Creek:&nbsp;
                     <?php if(get_post_meta(get_the_ID(), 'antelopecreek-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $antelopecreek_closed_checkbox;?>"><?php echo $antelopecreek_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $antelopecreek_checkbox_poor;?>">Poor</span>
                         <span class="label label-default<?php echo $antelopecreek_checkbox_fair;?>">Fair</span>
                         <span class="label label-default<?php echo $antelopecreek_checkbox_fairgood;?>">Fair to Good</span>
                         <span class="label label-default<?php echo $antelopecreek_checkbox_good;?>">Good</span>
                         <span class="label label-default<?php echo $antelopecreek_checkbox_great;?>">Great</span>
                     <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="battle-creek-tab" data-bs-toggle="pill" data-bs-target="#battle-creek-report" type="button" role="tab" aria-controls="battle-creek-report" aria-selected="false">Battle Creek:&nbsp;
                     <?php if(get_post_meta(get_the_ID(), 'battlecreek-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $battlecreek_closed_checkbox;?>"><?php echo $battlecreek_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $battlecreek_checkbox_poor;?>">Poor</span>
                         <span class="label label-default<?php echo $battlecreek_checkbox_fair;?>">Fair</span>
                         <span class="label label-default<?php echo $battlecreek_checkbox_fairgood;?>">Fair to Good</span>
                         <span class="label label-default<?php echo $battlecreek_checkbox_good;?>">Good</span>
                         <span class="label label-default<?php echo $battlecreek_checkbox_great;?>">Great</span>
                     <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="bollibokka-tab" data-bs-toggle="pill" data-bs-target="#bollibokka-report" type="button" role="tab" aria-controls="bollibokka-report" aria-selected="false">Bollibokka:&nbsp;
                     <?php $bollibokka_closed_checkbox = get_post_meta(get_the_ID(), 'bollibokka-closed-checkbox', true);
                     if(get_post_meta(get_the_ID(), 'bollibokka-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $bollibokka_closed_checkbox;?>"><?php echo $bollibokka_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $bollibokka_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $bollibokka_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $bollibokka_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $bollibokka_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $bollibokka_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="circle7-tab" data-bs-toggle="pill" data-bs-target="#circle7-report" type="button" role="tab" aria-controls="circle7-report" aria-selected="false">Circle 7 Guest Ranch:&nbsp;
                     <?php $circle7_closed_checkbox = get_post_meta(get_the_ID(), 'circle7-closed-checkbox', true);
                     if(get_post_meta(get_the_ID(), 'circle7-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $circle7_closed_checkbox;?>"><?php echo $circle7_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $circle7_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $circle7_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $circle7_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $circle7_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $circle7_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="clear-creek-tab" data-bs-toggle="pill" data-bs-target="#clear-creek-report" type="button" role="tab" aria-controls="clear-creek-report" aria-selected="false">Clear Creek Ranch:&nbsp;
                     <?php $clearcreek_closed_checkbox = get_post_meta(get_the_ID(), 'clearcreek-closed-checkbox', true);
                     if(get_post_meta(get_the_ID(), 'clearcreek-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $clearcreek_closed_checkbox; ?>"><?php echo $clearcreek_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $clearcreek_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $clearcreek_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $clearcreek_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $clearcreek_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $clearcreek_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="gold-river-tab" data-bs-toggle="pill" data-bs-target="#gold-river-report" type="button" role="tab" aria-controls="gold-river-report" aria-selected="false">Gold River Lodge:&nbsp;
                     <?php //$goldriver_closed_checkbox = get_post_meta(get_the_ID(), 'goldriver-closed-checkbox', true);
                     if(get_post_meta(get_the_ID(), 'goldriver-closed-checkbox', true) == '-danger'):?>
                         <span class="label label-default<?php echo $goldriver_closed_checkbox; ?>"><?php echo $goldriver_closed_message;?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $goldriver_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $goldriver_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $goldriver_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $goldriver_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $goldriver_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="luk-lake-tab" data-bs-toggle="pill" data-bs-target="#luk-lake-report" type="button" role="tab" aria-controls="luk-lake-report" aria-selected="false">Luk Lake:&nbsp;
                     <?php if(get_post_meta(get_the_ID(), 'luklake-closed-checkbox', true) == '-danger'):?>
                         <span class="label label-default<?php echo $luklake_closed_checkbox;?>"><?php echo $luklake_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $luklake_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $luklake_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $luklake_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $luklake_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $luklake_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="oasis-springs-tab" data-bs-toggle="pill" data-bs-target="#oasis-springs-report" type="button" role="tab" aria-controls="oasis-springs-report" aria-selected="false">Oasis Springs:&nbsp;
                     <?php if(get_post_meta(get_the_ID(), 'oasissprings-closed-checkbox', true) == '-danger'):?>
                         <span class="label label-default<?php echo $oasissprings_closed_checkbox; ?>"><?php echo $oasissprings_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $oasissprings_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $oasissprings_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $oasissprings_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $oasissprings_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $oasissprings_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="rock-creek-tab" data-bs-toggle="pill" data-bs-target="#rock-creek-report" type="button" role="tab" aria-controls="rock-creek-report" aria-selected="false">Rock Creek Lake:&nbsp;
                     <?php if(get_post_meta(get_the_ID(), 'rockcreek-closed-checkbox', true) == '-danger'):?>
                         <span class="label label-default<?php echo $rockcreek_closed_checkbox; ?>"><?php echo $rockcreek_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $rockcreek_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $rockcreek_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $rockcreek_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $rockcreek_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $rockcreek_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="sugar-creek-tab" data-bs-toggle="pill" data-bs-target="#sugar-creek-report" type="button" role="tab" aria-controls="sugar-creek-report" aria-selected="false">Sugar Creek Ranch:&nbsp;
                     <?php if(get_post_meta(get_the_ID(), 'sugarcreek-closed-checkbox', true) == '-danger'):?>
                         <span class="label label-default<?php echo $sugarcreek_closed_checkbox;?>"><?php echo $sugarcreek_closed_message;?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $sugarcreek_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $sugarcreek_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $sugarcreek_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $sugarcreek_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $sugarcreek_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                    </button>
                </div>

                <div class="tab-content report-content" id="v-pills-tabContent-private-waters">

                    <div class="tab-pane fade show active" id="antelope-creek-report" role="tabpanel" aria-labelledby="antelope-creek-tab" tabindex="0">
                        <h4>Antelope Creek - Updated:&nbsp;<?php echo $baumlake_updated; ?></h4>
                        <p><b>Fishing conditions:</b>&nbsp;
                         <?php if(get_post_meta(get_the_ID(), 'antelopecreek-closed-checkbox', true) == '-danger') :?>
                             <span class="label label-default<?php echo $antelopecreek_closed_checkbox;?>"><?php echo $antelopecreek_closed_message; ?></span>
                         <?php else: ?>
                             <span class="label label-default<?php echo $antelopecreek_checkbox_poor;?>">Poor</span>
                             <span class="label label-default<?php echo $antelopecreek_checkbox_fair;?>">Fair</span>
                             <span class="label label-default<?php echo $antelopecreek_checkbox_fairgood;?>">Fair to Good</span>
                             <span class="label label-default<?php echo $antelopecreek_checkbox_good;?>">Good</span>
                             <span class="label label-default<?php echo $antelopecreek_checkbox_great;?>">Great</span>
                         <?php endif; ?>
                        </p>

                        <div class="report"><b>Report:</b>&nbsp;<?php echo $antelopecreek_report; ?></div>
                        <div><b>Hot Flies:</b><?php echo $antelopecreek_hot_flies; ?></div>

                    </div>
                    <div class="tab-pane fade" id="battle-creek-report" role="tabpanel" aria-labelledby="battle-creek-tab" tabindex="0">
                        <h4>Battle Creek - Updated:&nbsp;<?php echo $battlecreek_updated; ?></h4>
                        <p><b>Fishing conditions:</b>&nbsp;
                         <?php if(get_post_meta(get_the_ID(), 'battlecreek-closed-checkbox', true) == '-danger') :?>
                             <span class="label label-default<?php echo $battlecreek_closed_checkbox;?>"><?php echo $battlecreek_closed_message; ?></span>
                         <?php else: ?>
                             <span class="label label-default<?php echo $battlecreek_checkbox_poor;?>">Poor</span>
                             <span class="label label-default<?php echo $battlecreek_checkbox_fair;?>">Fair</span>
                             <span class="label label-default<?php echo $battlecreek_checkbox_fairgood;?>">Fair to Good</span>
                             <span class="label label-default<?php echo $battlecreek_checkbox_good;?>">Good</span>
                             <span class="label label-default<?php echo $battlecreek_checkbox_great;?>">Great</span>
                         <?php endif; ?>
                        </p>
                        <div class="report"><b>Report:</b>&nbsp;<?php echo $battlecreek_report; ?></div>
                        <div><b>Hot Flies:</b><?php echo $battlecreek_hot_flies; ?></div>
                    </div>
                    <div class="tab-pane fade" id="bollibokka-report" role="tabpanel" aria-labelledby="bollibokka-tab" tabindex="0">
                        <h4>Bollibokka - Updated:&nbsp;<?php echo $bollibokka_updated; ?></h4>
                        <p><b>Fishing conditions:</b>&nbsp;
                         <?php $bollibokka_closed_checkbox = get_post_meta(get_the_ID(), 'bollibokka-closed-checkbox', true);
                         if(get_post_meta(get_the_ID(), 'bollibokka-closed-checkbox', true) == '-danger') :?>
                             <span class="label label-default<?php echo $bollibokka_closed_checkbox;?>"><?php echo $bollibokka_closed_message; ?></span>
                         <?php else: ?>
                             <span class="label label-default<?php echo $bollibokka_checkbox_poor; ?>">Poor</span>
                             <span class="label label-default<?php echo $bollibokka_checkbox_fair; ?>">Fair</span>
                             <span class="label label-default<?php echo $bollibokka_checkbox_fairgood; ?>">Fair to Good</span>
                             <span class="label label-default<?php echo $bollibokka_checkbox_good; ?>">Good</span>
                             <span class="label label-default<?php echo $bollibokka_checkbox_great; ?>">Great</span>
                         <?php endif; ?>
                        </p>
                        <div class="report"><b>Report:</b>&nbsp;<?php echo $bollibokka_report; ?></div>
                        <div><b>Hot Flies:</b><?php echo $bollibokka_hot_flies; ?></div>
                    </div>
                    <div class="tab-pane fade" id="circle7-report" role="tabpanel" aria-labelledby="circle7-tab" tabindex="0">
                        <h4>Circle 7 Guest Ranch - Updated:&nbsp;<?php echo $circle7_updated; ?></h4>
                        <p><b>Fishing conditions:</b>&nbsp;
                         <?php $circle7_closed_checkbox = get_post_meta(get_the_ID(), 'circle7-closed-checkbox', true);
                         if(get_post_meta(get_the_ID(), 'circle7-closed-checkbox', true) == '-danger') :?>
                             <span class="label label-default<?php echo $circle7_closed_checkbox;?>"><?php echo $circle7_closed_message; ?></span>
                         <?php else: ?>
                             <span class="label label-default<?php echo $circle7_checkbox_poor; ?>">Poor</span>
                             <span class="label label-default<?php echo $circle7_checkbox_fair; ?>">Fair</span>
                             <span class="label label-default<?php echo $circle7_checkbox_fairgood; ?>">Fair to Good</span>
                             <span class="label label-default<?php echo $circle7_checkbox_good; ?>">Good</span>
                             <span class="label label-default<?php echo $circle7_checkbox_great; ?>">Great</span>
                         <?php endif; ?>
                        </p>
                        <div class="report"><b>Report:</b>&nbsp;<?php echo $circle7_report; ?></div>
                        <div><b>Hot Flies:</b><?php echo $circle7_hot_flies; ?></div>
                    </div>
                    <div class="tab-pane fade" id="clear-creek-report" role="tabpanel" aria-labelledby="clear-creek-tab" tabindex="0">
                        <h4>Clear Creek Ranch - Updated:&nbsp;<?php echo $clearcreek_updated; ?></h4>
                        <p><b>Fishing conditions:</b>&nbsp;
                         <?php $clearcreek_closed_checkbox = get_post_meta(get_the_ID(), 'clearcreek-closed-checkbox', true);
                         if(get_post_meta(get_the_ID(), 'clearcreek-closed-checkbox', true) == '-danger') :?>
                             <span class="label label-default<?php echo $clearcreek_closed_checkbox; ?>"><?php echo $clearcreek_closed_message; ?></span>
                         <?php else: ?>
                             <span class="label label-default<?php echo $clearcreek_checkbox_poor; ?>">Poor</span>
                             <span class="label label-default<?php echo $clearcreek_checkbox_fair; ?>">Fair</span>
                             <span class="label label-default<?php echo $clearcreek_checkbox_fairgood; ?>">Fair to Good</span>
                             <span class="label label-default<?php echo $clearcreek_checkbox_good; ?>">Good</span>
                             <span class="label label-default<?php echo $clearcreek_checkbox_great; ?>">Great</span>
                         <?php endif; ?>
                        </p>
                        <div class="report"><b>Report:</b>&nbsp;<?php echo $clearcreek_report; ?></div>
                        <div><b>Hot Flies:</b><?php echo $clearcreek_hot_flies; ?></div>
                    </div>
                    <div class="tab-pane fade" id="gold-river-report" role="tabpanel" aria-labelledby="gold-river-tab" tabindex="0">
                        <h4>Gold River Lodge - Updated:&nbsp;<?php echo $goldriver_updated; ?></h4>
                        <p><b>Fishing conditions:</b>&nbsp;
                         <?php if(get_post_meta(get_the_ID(), 'goldriver-closed-checkbox', true) == '-danger'):?>
                             <span class="label label-default<?php echo $goldriver_closed_checkbox; ?>"><?php echo $goldriver_closed_message;?></span>
                         <?php else: ?>
                             <span class="label label-default<?php echo $goldriver_checkbox_poor; ?>">Poor</span>
                             <span class="label label-default<?php echo $goldriver_checkbox_fair; ?>">Fair</span>
                             <span class="label label-default<?php echo $goldriver_checkbox_fairgood; ?>">Fair to Good</span>
                             <span class="label label-default<?php echo $goldriver_checkbox_good; ?>">Good</span>
                             <span class="label label-default<?php echo $goldriver_checkbox_great; ?>">Great</span>
                         <?php endif; ?>
                        </p>
                        <div class="report"><b>Report:</b>&nbsp;<?php echo $goldriver_report; ?></div>
                        <div><b>Hot Flies:</b><?php echo $goldriver_hot_flies; ?></div>
                    </div>
                    <div class="tab-pane fade" id="luk-lake-report" role="tabpanel" aria-labelledby="luk-lake-tab" tabindex="0">
                        <h4>Luk Lake - Updated:&nbsp;<?php echo $luklake_updated; ?></h4>
                        <p><b>Fishing conditions:</b>&nbsp;
                         <?php if(get_post_meta(get_the_ID(), 'luklake-closed-checkbox', true) == '-danger'):?>
                             <span class="label label-default<?php echo $luklake_closed_checkbox;?>"><?php echo $luklake_closed_message; ?></span>
                         <?php else: ?>
                             <span class="label label-default<?php echo $luklake_checkbox_poor; ?>">Poor</span>
                             <span class="label label-default<?php echo $luklake_checkbox_fair; ?>">Fair</span>
                             <span class="label label-default<?php echo $luklake_checkbox_fairgood; ?>">Fair to Good</span>
                             <span class="label label-default<?php echo $luklake_checkbox_good; ?>">Good</span>
                             <span class="label label-default<?php echo $luklake_checkbox_great; ?>">Great</span>
                         <?php endif; ?>
                        </p>
                        <div class="report"><b>Report:</b>&nbsp;<?php echo $luklake_report; ?></div>
                        <div><b>Hot Flies:</b><?php echo$luklake_hot_flies; ?></div>
                    </div>
                    <div class="tab-pane fade" id="oasis-springs-report" role="tabpanel" aria-labelledby="oasis-springs-tab" tabindex="0">
                        <h4>Oasis Springs - Updated:&nbsp;<?php echo $oasissprings_updated; ?></h4>
                        <p><b>Fishing conditions:</b>&nbsp;
                         <?php if(get_post_meta(get_the_ID(), 'oasissprings-closed-checkbox', true) == '-danger'):?>
                             <span class="label label-default<?php echo $oasissprings_closed_checkbox; ?>"><?php echo $oasissprings_closed_message; ?></span>
                         <?php else: ?>
                             <span class="label label-default<?php echo $oasissprings_checkbox_poor; ?>">Poor</span>
                             <span class="label label-default<?php echo $oasissprings_checkbox_fair; ?>">Fair</span>
                             <span class="label label-default<?php echo $oasissprings_checkbox_fairgood; ?>">Fair to Good</span>
                             <span class="label label-default<?php echo $oasissprings_checkbox_good; ?>">Good</span>
                             <span class="label label-default<?php echo $oasissprings_checkbox_great; ?>">Great</span>
                         <?php endif; ?>
                        </p>
                        <div class="report"><b>Report:</b>&nbsp;<?php echo $oasissprings_report; ?></div>
                        <div><b>Hot Flies:</b><?php echo $oasissprings_hot_flies; ?></div>
                    </div>
                    <div class="tab-pane fade" id="rock-creek-report" role="tabpanel" aria-labelledby="rock-creek-tab" tabindex="0">
                        <h4>Rock Creek Lake - Updated:&nbsp;<?php echo $rockcreek_updated; ?></h4>
                        <p><b>Fishing conditions:</b>&nbsp;
                         <?php if(get_post_meta(get_the_ID(), 'rockcreek-closed-checkbox', true) == '-danger'):?>
                             <span class="label label-default<?php echo $rockcreek_closed_checkbox; ?>"><?php echo $rockcreek_closed_message; ?></span>
                         <?php else: ?>
                             <span class="label label-default<?php echo $rockcreek_checkbox_poor; ?>">Poor</span>
                             <span class="label label-default<?php echo $rockcreek_checkbox_fair; ?>">Fair</span>
                             <span class="label label-default<?php echo $rockcreek_checkbox_fairgood; ?>">Fair to Good</span>
                             <span class="label label-default<?php echo $rockcreek_checkbox_good; ?>">Good</span>
                             <span class="label label-default<?php echo $rockcreek_checkbox_great; ?>">Great</span>
                         <?php endif; ?>
                        </p>
                        <div class="report"><b>Report:</b>&nbsp;<?php echo $rockcreek_report; ?></div>
                        <div><b>Hot Flies:</b><?php echo $rockcreek_hot_flies; ?></div>
                    </div>
                    <div class="tab-pane fade" id="sugar-creek-report" role="tabpanel" aria-labelledby="sugar-creek-tab" tabindex="0">
                        <h4>Sugar Creek Ranch - Updated:&nbsp;<?php echo $sugarcreek_updated; ?></h4>
                        <p><b>Fishing conditions:</b>&nbsp;
                         <?php if(get_post_meta(get_the_ID(), 'sugarcreek-closed-checkbox', true) == '-danger'):?>
                             <span class="label label-default<?php echo $sugarcreek_closed_checkbox;?>"><?php echo $sugarcreek_closed_message;?></span>
                         <?php else: ?>
                             <span class="label label-default<?php echo $sugarcreek_checkbox_poor; ?>">Poor</span>
                             <span class="label label-default<?php echo $sugarcreek_checkbox_fair; ?>">Fair</span>
                             <span class="label label-default<?php echo $sugarcreek_checkbox_fairgood; ?>">Fair to Good</span>
                             <span class="label label-default<?php echo $sugarcreek_checkbox_good; ?>">Good</span>
                             <span class="label label-default<?php echo $sugarcreek_checkbox_great; ?>">Great</span>
                         <?php endif; ?>
                        </p>
                        <div class="report"><b>Report:</b>&nbsp;<?php echo $sugarcreek_report; ?></div>
                        <div><b>Hot Flies:</b><?php echo $sugarcreek_hot_flies; ?></div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Mobile Version - Only shown on small screens -->
        <div class="d-block d-md-none">
				 <?php include(get_template_directory() . '/inc/mobile-stream-report.php'); ?>
        </div>



    </section>

	<!-- CTA -->
	<section id="cta" class="mt-5 mb-5 container">
		<div class="inner">
			<header class="text-center">
				<h2 class="h2"><?php _e($cta_streamReport_intro ); ?></h2>
				<p class="lead text-center text-justify"><?php echo $cta_streamReport_content; ?></p>
			</header>
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

    <!-- ====== MODALS ====== -->

    <!-- Feature Report 1 -->

    <div class="modal fade featuredreport1" tabindex="-1" role="dialog" aria-labelledby="featuredreport1" aria-hidden="true">

		 <?php include get_template_directory() . '/inc/modals/feature-one.php'; ?>

    </div>

    <!-- Feature Report 2 -->

    <div class="modal fade featuredreport2" tabindex="-1" role="dialog" aria-labelledby="featuredreport2" aria-hidden="true">

		 <?php include get_template_directory() . '/inc/modals/feature-two.php'; ?>

    </div>

    <!-- Feature Report 3 -->

    <div class="modal fade featuredreport3" tabindex="-1" role="dialog" aria-labelledby="featuredreport3" aria-hidden="true">

		 <?php include get_template_directory() . '/inc/modals/feature-three.php'; ?>

    </div>

    <!-- Feature Report 4 -->

    <div class="modal fade featuredreport4" tabindex="-1" role="dialog" aria-labelledby="featuredreport4" aria-hidden="true">

		 <?php include get_template_directory() . '/inc/modals/feature-four.php'; ?>

    </div>



<?php get_footer();


