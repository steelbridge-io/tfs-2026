<?php
    declare(strict_types=1);
    /*
    Template Name: Fish Camp Destination Template
    Template Post Type: fishcamp_cpt
    */

    /**
     * This is the meta field file for the Destination V3 Template.
     * /wp-content/plugins/tfs-custom-fields/sbm_custom_fields_fish_camp_v3.php
     */

    get_header('fish-camp');

    include_once('post-meta/post-meta-fish-camp-v3.php');

    $travel_hero_video = get_post_meta( get_the_ID(), 'travel-hero-video', true );
    $has_hero_video = !empty(trim($travel_hero_video));
    $fallback_image = 'https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2025/01/Staff_Main6.webp';

    if ($has_hero_video || has_post_thumbnail()) : ?>

    <div class="container-fluid travel-template-hero p-0">
        <div class="hero-image position-relative">

<?php if ($has_hero_video) : ?>
         <!-- Hero Video -->
         <div class="ratio ratio-21x9">
          <video
           class="w-100"
           autoplay
           muted
           loop
           playsinline
           preload="auto"
           style="object-fit: cover;"
<?php if (has_post_thumbnail()) : ?>
            poster="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>"
<?php endif; ?>
          >
           <source src="<?php echo esc_url($travel_hero_video); ?>" type="video/mp4">
           <!-- Fallback to image if video fails -->
           <img src="<?php echo esc_url(
            has_post_thumbnail() ?
             get_the_post_thumbnail_url(get_the_ID(), 'full') :
             $fallback_image
           ); ?>"
                class="img-fluid w-100"
                alt="<?php the_title_attribute(); ?>">
           Your browser does not support the video tag.
          </video>
         </div>
<?php else : ?>
         <!-- Fallback to Featured Image -->
         <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>"
              class="img-fluid w-100"
              alt="<?php the_title_attribute(); ?>">
<?php endif; ?>

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
<?php else: ?>
    <div class="container-fluid travel-template-hero p-0">
        <div class="hero-image position-relative">
        <!-- Default Fallback Image -->
        <img src="<?php echo esc_url($fallback_image); ?>"
             class="img-fluid w-100" alt="<?php echo get_the_title(); ?>">
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
    <section id="destination-template-content" class="content-destination-template content">
      <div class="container">
          <!--<div id="scrollto"></div>-->
          <div id="primary" class="content-area row">
              <main id="main-main" class="site-main col-md-12" role="main">

<?php
                  // WordPress Blog Content
                  while (have_posts()) : the_post();

                      get_template_part('template-parts/content', 'page');

                  endwhile; // End of the loop.
                  ?>

              </main>
          </div>
      </div>
    </section>
<?php if ( !empty($travel_costs_image)) : ?>
    <section id="tabbed-destination-content" class="container-fluid mt-5">
    <div class="container">
      <!-- Bootstrap 5 Nav Tabs -->
      <ul class="nav nav-pills nav-tabs destination-tabs" id="destinationTabs" role="tablist">
<?php if ($travel_costs_image !== '') : ?>
              <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="inclusions-tab" data-bs-toggle="tab"
                          data-bs-target="#inclusions-pane" type="button" role="tab"
                          aria-controls="inclusions-pane" aria-selected="true">
                      <i class="lni lni-user-info-circle"></i> <?php echo $feature_1_title ?>
                  </button>
              </li>
<?php endif;
          if ($travel_seasons_image !== '') : ?>
              <li class="nav-item" role="presentation">
                  <button class="nav-link" id="seasons-tab" data-bs-toggle="tab" data-bs-target="#seasons-pane"
                          type="button" role="tab" aria-controls="seasons-pane" aria-selected="false">
                      <i class="lni lni-calendar-days"></i> <?php echo $feature_2_seasons_title ?>
                  </button>
              </li>
<?php endif;
          if ($feature_3_getting_to_image !== '') : ?>
              <li class="nav-item" role="presentation">
                  <button class="nav-link" id="getting-there-tab" data-bs-toggle="tab"
                          data-bs-target="#getting-there-pane" type="button" role="tab"
                          aria-controls="getting-there-pane" aria-selected="false">
                      <i class="lni lni-suitcase-1"></i> <?php echo $feature_3_get_to_title ?>
                  </button>
              </li>
<?php endif;
          if ($feature_4_lodging_img !== '') : ?>
              <li class="nav-item" role="presentation">
                  <button class="nav-link" id="lodging-tab" data-bs-toggle="tab" data-bs-target="#lodging-pane"
                          type="button" role="tab" aria-controls="lodging-pane" aria-selected="false">
                      <i class="lni lni-home-4"></i> <?php echo $feature_4_lodging_title ?>
                  </button>
              </li>
<?php endif;
          if ($feature_5_angling_img !== '') : ?>
              <li class="nav-item" role="presentation">
                  <button class="nav-link" id="angling-tab" data-bs-toggle="tab" data-bs-target="#angling-pane"
                          type="button" role="tab" aria-controls="angling-pane" aria-selected="false">
                      <i class="lni lni-fish-1"></i> <?php echo $feature_5_angling_title ?>
                  </button>
              </li>
<?php endif;
          if ($feature_6_species_img !== '') : ?>
          <li class="nav-item" role="presentation">
           <button class="nav-link" id="species-tab" data-bs-toggle="tab" data-bs-target="#species-pane"
                   type="button" role="tab" aria-controls="species-pane" aria-selected="false">
            <i class="lni lni-fish-2"></i> <?php echo $feature_6_species_title ?>
           </button>
          </li>
<?php endif; ?>
      </ul>

      <!-- Tab Content -->
      <div class="tab-content destination-tab-content" id="destinationTabContent">
          <!-- Inclusions Tab -->
          <div class="tab-pane fade show active" id="inclusions-pane" role="tabpanel"
               aria-labelledby="inclusions-tab">
<?php if ($travel_costs_image !== '') : ?>
                  <div class="tab-container-wrapper">
                      <div id="inclusionsReadmore" class="readmore-info">
                          <div class="overlay-header">
                              <h3>Inclusions Details</h3>
                              <button class="close-overlay">&times;</button>
                          </div>
                          <div class="overlay-content">
                              <div><?php echo $feature_1_readmore; ?></div>
                          </div>
                      </div>

                      <!-- NEW: Image and Video spans full width above content -->
                      <div class="feature-image">
<?php
                          // Video support for Feature 1 (Inclusions)
                          $feature_1_video_url = trim((string)get_post_meta(get_the_ID(), 'feature_1_video_url', true));
                          $feature_1_video_id = trim((string)get_post_meta(get_the_ID(), 'feature_1_video_id', true));
                          $feature_1_video_src = '';

                          if ($feature_1_video_url !== '') {
                              $feature_1_video_src = esc_url($feature_1_video_url);
                          } elseif ($feature_1_video_id !== '' && is_numeric($feature_1_video_id)) {
                              $tmp_src = wp_get_attachment_url((int)$feature_1_video_id);
                              if ($tmp_src) {
                                  $feature_1_video_src = esc_url($tmp_src);
                              }
                          }

                          if ($feature_1_video_src) :
                              ?>
                              <div class="ratio ratio-16x9">
                                  <video class="w-100" controls playsinline preload="metadata"
                                         poster="<?php echo esc_url($travel_costs_image); ?>">
                                      <source src="<?php echo $feature_1_video_src; ?>" type="video/mp4">
                                      Your browser does not support the video tag.
                                  </video>
                              </div>
<?php else: ?>
                              <img class="img-fluid inclusions-image"
                                   src="<?php echo esc_url($travel_costs_image); ?>"
                                   alt="The Fly Shop Travel Image">
<?php endif; ?>
                      </div>

                      <!-- Content below image -->
                      <div class="feature-content inclusions-content">
                          <h2><?php echo $feature_1_title ?></h2>

<?php
                       // Get the dynamic pricing table data
                       $table_config = get_post_meta(get_the_ID(), 'pricing-table-config', true);
                       $table_data = get_post_meta(get_the_ID(), 'pricing-table-data', true);

                       if ($table_config && $table_data) {
                        $config = json_decode( $table_config, true );
                        $data   = json_decode( $table_data, true );

                        if ( $config && $data ) {
                         $columns = $config['columns'];
                         $rows    = $config['rows'];
                         $title   = isset( $config['title'] ) ? $config['title'] : '';

                         if ( $title ) {

                          echo '<div class="pricing-rates-table">';

                          if ( $title ) {
                           echo '<h3 class="table-title">' . esc_html( $title ) . '</h3>';
                          }

                          echo '<table class="lodging-rates-table">';

                          for ( $r = 0; $r < $rows; $r ++ ) {
                           echo '<tr>';
                           for ( $c = 0; $c < $columns; $c ++ ) {
                            $cell_value = isset( $data[ $r ][ $c ] ) ? esc_html( $data[ $r ][ $c ] ) : '';

                            if ( $r == 0 ) {
                             // Header row
                             echo '<th>' . $cell_value . '</th>';
                            } else {
                             // Data rows
                             echo '<td>' . $cell_value . '</td>';
                            }
                           }
                           echo '</tr>';
                          }

                          echo '</table>';
                          echo '</div>';
                         }
                        }
                       }
                       ?>

<?php
                          echo '<div><p>' . $feature_1_cost_textarea . '</p></div>';
                          echo '<div><p><b>Inclusions:</b>&nbsp;' . $feature_1_inclusions_textarea . '</p></div>';
                          echo '<div><p><b>Non-Inclusions:</b>&nbsp;' . $feature_1_noninclusions_textarea . '</p></div>';
                          //echo '<div><p><b>Travel Insurance:</b>&nbsp;' . $feature_1_travelins_textarea . '</p></div>';
                          ?>
<?php if (!empty($feature_1_readmore)) : ?>
                              <button type="button" class="btn destination btn-tfs"
                                      data-target="inclusionsReadmore">Read more...
                              </button>
<?php endif; ?>
                      </div>
                  </div>
<?php endif ?>
          </div>

          <!-- Seasons Tab -->
          <div class="tab-pane fade" id="seasons-pane" role="tabpanel" aria-labelledby="seasons-tab">
<?php if ($travel_seasons_image !== '') : ?>
                  <div class="tab-container-wrapper">
                      <div id="seasonsReadmore" class="readmore-info">
                          <div class="overlay-header">
                              <h3>Seasons Details</h3>
                              <button class="close-overlay">&times;</button>
                          </div>
                          <div class="overlay-content">
                              <div><?php echo $feature_2_seasons_content . '&nbsp;' . $feature_2_seasons_readmore; ?></div>
                          </div>
                      </div>

                      <!-- NEW: Image spans full width above content -->
                      <div class="feature-image">
<?php
                          // Video support for Feature 2 (Seasons)
                          $feature_2_video_url = trim((string) get_post_meta(get_the_ID(), 'feature_2_video_url', true));
                          $feature_2_video_id  = trim((string) get_post_meta(get_the_ID(), 'feature_2_video_id', true));
                          $feature_2_video_src = '';

                          if ($feature_2_video_url !== '') {
                              $feature_2_video_src = esc_url($feature_2_video_url);
                          } elseif ($feature_2_video_id !== '' && is_numeric($feature_2_video_id)) {
                              $tmp_src = wp_get_attachment_url((int) $feature_2_video_id);
                              if ($tmp_src) {
                                  $feature_2_video_src = esc_url($tmp_src);
                              }
                          }

                          if ($feature_2_video_src) :
                              ?>
                              <div class="ratio ratio-16x9">
                                  <video class="w-100" controls playsinline preload="metadata" poster="<?php echo esc_url($travel_seasons_image); ?>">
                                      <source src="<?php echo $feature_2_video_src; ?>" type="video/mp4">
                                      Your browser does not support the video tag.
                                  </video>
                              </div>
<?php else: ?>
                              <img class="img-fluid" src="<?php echo esc_url($travel_seasons_image); ?>" alt="The Fly Shop Travel Image">
<?php endif; ?>
                      </div>

                      <!-- Content below image -->
                      <div class="feature-content">
                          <h2><?php echo $feature_2_seasons_title ?></h2>
<?php
                          echo '<div><p>' . $feature_2_seasons_content . '</p></div>';

                          // NEW MULTI-SEASON CALENDAR - This is ADDITIONAL functionality
                          if ($monthly_range_checkbox === 'yes'):
                              $hasActiveSeasons = false;
                              foreach ($seasons as $season) {
                                  if ($season['start_month'] > 0 && $season['end_month'] > 0) {
                                      $hasActiveSeasons = true;
                                      break;
                                  }
                              }

                              if ($hasActiveSeasons):
                                  ?>
                                  <div class="multi-season-calendar" style="margin: 20px 0;">
                                      <h4><?php echo $multi_season_calendar_title; ?></h4>
                                      <div class="month-display-grid">
<?php
                                          $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

                                          for ($month = 1; $month <= 12; $month++):
                                              echo '<div class="month-display-container">';
                                              echo '<div class="month-label">' . $months[$month - 1] . '</div>';
                                              echo '<div class="month-visual">';

                                              $periods = ['early', 'mid', 'late'];
                                              foreach ($periods as $period):
                                                  $backgroundColor = '#f8f8f8';
                                                  $activeSeasonName = '';

                                                  // Check each season for this month/period
                                                  foreach ($seasons as $seasonNum => $season) {
                                                      if ($season['start_month'] > 0 && $season['end_month'] > 0) {
                                                          $startMonth = (int)$season['start_month'];
                                                          $endMonth = (int)$season['end_month'];
                                                          $startPart = $season['start_part'] ?: 'full';
                                                          $endPart = $season['end_part'] ?: 'full';

                                                          $inSeason = false;

                                                          if ($startMonth <= $endMonth) {
                                                              $inSeason = $month >= $startMonth && $month <= $endMonth;
                                                          } else {
                                                              $inSeason = $month >= $startMonth || $month <= $endMonth;
                                                          }

                                                          if ($inSeason) {
                                                              $shouldColor = false;

                                                              if ($month === $startMonth && $month === $endMonth) {
                                                                  // Same month start and end
                                                                  $startIdx = array_search($startPart, $periods);
                                                                  $endIdx = array_search($endPart, $periods);
                                                                  $periodIdx = array_search($period, $periods);
                                                                  $shouldColor = $periodIdx >= $startIdx && $periodIdx <= $endIdx;
                                                              } else if ($month === $startMonth) {
                                                                  // Start month
                                                                  if ($startPart === 'full') $shouldColor = true;
                                                                  else {
                                                                      $startIdx = array_search($startPart, $periods);
                                                                      $periodIdx = array_search($period, $periods);
                                                                      $shouldColor = $periodIdx >= $startIdx;
                                                                  }
                                                              } else if ($month === $endMonth) {
                                                                  // End month
                                                                  if ($endPart === 'full') $shouldColor = true;
                                                                  else {
                                                                      $endIdx = array_search($endPart, $periods);
                                                                      $periodIdx = array_search($period, $periods);
                                                                      $shouldColor = $periodIdx <= $endIdx;
                                                                  }
                                                              } else {
                                                                  // Full months in between
                                                                  $shouldColor = true;
                                                              }

                                                              if ($shouldColor) {
                                                                  $backgroundColor = $season['color'] ?: '#28a745';
                                                                  $activeSeasonName = $season['name'] ?: "Season {$seasonNum}";
                                                              }
                                                          }
                                                      }
                                                  }

                                                  echo '<div class="period-' . $period . '" style="flex: 1; background-color: ' . $backgroundColor . ';" title="' . ucfirst($period) . ($activeSeasonName ? ' - ' . $activeSeasonName : '') . '"></div>';
                                              endforeach;

                                              echo '</div>';
                                              echo '</div>';
                                          endfor;
                                          ?>
                                      </div>

                                      <!-- Season Legend -->
                                      <div class="season-legend"
                                           style="display: flex; gap: 20px; margin-top: 15px; flex-wrap: wrap; justify-content: center;">
<?php foreach ($seasons as $seasonNum => $season):
                                              if ($season['start_month'] > 0 && $season['end_month'] > 0): ?>
                                                  <div class="legend-item"
                                                       style="display: flex; align-items: center; gap: 8px; margin-bottom: 5px;">
                                                      <div class="legend-color"
                                                           style="width: 20px; height: 20px; background-color: <?php echo $season['color'] ?: '#28a745'; ?>; border: 2px solid #333; border-radius: 3px;"></div>
                                                      <span style="font-weight: 500;"><?php echo $season['name'] ?: "Season {$seasonNum}"; ?></span>
                                                  </div>
<?php endif; endforeach; ?>
                                      </div>

                                      <div style="margin-top: 15px; font-size: 13px; color: #666; text-align: center;">
                                          <em>Each month is divided into early, mid, and late periods for precise
                                              season timing</em>
                                      </div>

                                  </div>
<?php endif; endif; ?>

<?php
                       $feature_2_seasons_readmore  = get_post_meta( get_the_ID(), 'feature-2-seasons-readmore', true );
                       if (!empty($feature_2_seasons_readmore)) : ?>
                          <button type="button" class="btn destination btn-tfs" data-target="seasonsReadmore">Read
                              more...
                          </button>
<?php endif; ?>
                      </div>
                  </div>
<?php endif; ?>
          </div>

          <!-- Getting There Tab -->
          <div class="tab-pane fade" id="getting-there-pane" role="tabpanel" aria-labelledby="getting-there-tab">
<?php if ($feature_3_getting_to_image !== '') : ?>
                  <div class="tab-container-wrapper">
                      <div id="gettingToReadmore" class="readmore-info">
                          <div class="overlay-header">
                              <h3>Getting There Details</h3>
                              <button class="close-overlay">&times;</button>
                          </div>
                          <div class="overlay-content">
                              <div><?php echo $feature_3_get_to_content . '&nbsp;' . $feature_3_get_to_readmore ?></div>
                          </div>
                      </div>

                      <!-- NEW: Image spans full width above content -->
                      <div class="feature-image">
<?php
                          // Video support for Feature 3 (Getting There)
                          $feature_3_video_url = trim((string) get_post_meta(get_the_ID(), 'feature_3_video_url', true));
                          $feature_3_video_id  = trim((string) get_post_meta(get_the_ID(), 'feature_3_video_id', true));
                          $feature_3_video_src = '';

                          if ($feature_3_video_url !== '') {
                              $feature_3_video_src = esc_url($feature_3_video_url);
                          } elseif ($feature_3_video_id !== '' && is_numeric($feature_3_video_id)) {
                              $tmp_src = wp_get_attachment_url((int) $feature_3_video_id);
                              if ($tmp_src) {
                                  $feature_3_video_src = esc_url($tmp_src);
                              }
                          }

                          if ($feature_3_video_src) :
                              ?>
                              <div class="ratio ratio-16x9">
                                  <video class="w-100" controls playsinline preload="metadata" poster="<?php echo esc_url($feature_3_getting_to_image); ?>">
                                      <source src="<?php echo $feature_3_video_src; ?>" type="video/mp4">
                                      Your browser does not support the video tag.
                                  </video>
                              </div>
<?php else: ?>
                              <img class="img-fluid" src="<?php echo esc_url($feature_3_getting_to_image); ?>" alt="The Fly Shop Travel Image">
<?php endif; ?>
                      </div>

                      <!-- Content below image -->
                      <div class="feature-content">
                          <h2><?php echo $feature_3_get_to_title ?></h2>
<?php
                          echo '<div><p>' . $feature_3_get_to_content . '</p></div>';

                          if (!empty($feature_3_get_to_readmore)) :
                          echo '<button type="button" class="btn destination btn-tfs" data-target="gettingToReadmore">Read more...</button>';
                          endif;
                          ?>
                      </div>
                  </div>
<?php endif; ?>
          </div>

          <!-- Lodging Tab -->
          <div class="tab-pane fade" id="lodging-pane" role="tabpanel" aria-labelledby="lodging-tab">
<?php if ($feature_4_lodging_img !== '') : ?>
                  <div class="tab-container-wrapper">
                      <div id="lodgingReadmore" class="readmore-info">
                          <div class="overlay-header">
                              <h3>Lodging Details</h3>
                              <button class="close-overlay">&times;</button>
                          </div>
                          <div class="overlay-content">
                              <div><?php echo $feature_4_lodging_content . '&nbsp;' . $feature_4_lodging_readmore ?></div>
                          </div>
                      </div>

                      <!-- NEW: Image spans full width above content -->
                      <div class="feature-image">
<?php
                          // Video support for Feature 4 (Lodging)
                          $feature_4_video_url = trim((string) get_post_meta(get_the_ID(), 'feature_4_video_url', true));
                          $feature_4_video_id  = trim((string) get_post_meta(get_the_ID(), 'feature_4_video_id', true));
                          $feature_4_video_src = '';

                          if ($feature_4_video_url !== '') {
                              $feature_4_video_src = esc_url($feature_4_video_url);
                          } elseif ($feature_4_video_id !== '' && is_numeric($feature_4_video_id)) {
                              $tmp_src = wp_get_attachment_url((int) $feature_4_video_id);
                              if ($tmp_src) {
                                  $feature_4_video_src = esc_url($tmp_src);
                              }
                          }

                          if ($feature_4_video_src) :
                              ?>
                              <div class="ratio ratio-16x9">
                                  <video class="w-100" controls playsinline preload="metadata" poster="<?php echo esc_url($feature_4_lodging_img); ?>">
                                      <source src="<?php echo $feature_4_video_src; ?>" type="video/mp4">
                                      Your browser does not support the video tag.
                                  </video>
                              </div>
<?php else: ?>
                              <img class="img-fluid" src="<?php echo esc_url($feature_4_lodging_img); ?>"
                                   alt="The Fly Shop Travel Image">
<?php endif; ?>
                      </div>

                      <!-- Content below image -->
                      <div class="feature-content">
                          <h2><?php echo $feature_4_lodging_title ?></h2>
<?php
                          echo '<div><p>' . $feature_4_lodging_content . '</p></div>';

                          if (!empty($feature_4_lodging_readmore)) {
                           echo '<button type="button" class="btn destination btn-tfs" data-target="lodgingReadmore">Read more...</button>';
                          }
                          ?>
                      </div>
                  </div>
<?php endif; ?>
          </div>

          <!-- Angling Tab -->
          <div class="tab-pane fade" id="angling-pane" role="tabpanel" aria-labelledby="angling-tab">
<?php if ($feature_5_angling_img !== '') : ?>
                  <div class="tab-container-wrapper">
                      <div id="anglingAtdestination" class="readmore-info">
                          <div class="overlay-header">
                              <h3>Angling Details</h3>
                              <button class="close-overlay">&times;</button>
                          </div>
                          <div class="overlay-content">
                              <div><?php echo $feature_5_angling_content . '&nbsp;' . $feature_5_angling_readmore ?></div>
                          </div>
                      </div>

                      <!-- NEW: Image spans full width above content -->
                      <div class="feature-image">
<?php
                          // Video support for Feature 5 (Angling)
                          $feature_5_video_url = trim((string) get_post_meta(get_the_ID(), 'feature_5_video_url', true));
                          $feature_5_video_id  = trim((string) get_post_meta(get_the_ID(), 'feature_5_video_id', true));
                          $feature_5_video_src = '';

                          if ($feature_5_video_url !== '') {
                              $feature_5_video_src = esc_url($feature_5_video_url);
                          } elseif ($feature_5_video_id !== '' && is_numeric($feature_5_video_id)) {
                              $tmp_src = wp_get_attachment_url((int) $feature_5_video_id);
                              if ($tmp_src) {
                                  $feature_5_video_src = esc_url($tmp_src);
                              }
                          }

                          if ($feature_5_video_src) :
                              ?>
                              <div class="ratio ratio-16x9">
                                  <video class="w-100" controls playsinline preload="metadata" poster="<?php echo esc_url($feature_5_angling_img); ?>">
                                      <source src="<?php echo $feature_5_video_src; ?>" type="video/mp4">
                                      Your browser does not support the video tag.
                                  </video>
                              </div>
<?php else: ?>
                              <img class="img-fluid" src="<?php echo esc_url($feature_5_angling_img); ?>" alt="The Fly Shop Travel Image">
<?php endif; ?>
                      </div>

                      <!-- Content below image -->
                      <div class="feature-content">
                          <h2><?php echo $feature_5_angling_title ?></h2>
<?php
                          echo '<div><p>' . $feature_5_angling_content . '</p></div>';

                          if (!empty($feature_5_angling_readmore)) :
                           echo '<button type="button" class="btn destination btn-tfs" data-target="anglingAtdestination">Read more...</button>';
                          endif;
                          ?>
                      </div>
                  </div>
<?php endif; ?>
          </div>

         <!-- Species Tab -->
         <div class="tab-pane fade" id="species-pane" role="tabpanel" aria-labelledby="species-tab">
<?php if ($feature_6_species_img !== '') : ?>
           <div class="tab-container-wrapper">
            <div id="speciesReadmore" class="readmore-info">
             <div class="overlay-header">
              <h3>Species Details</h3>
              <button class="close-overlay">&times;</button>
             </div>
             <div class="overlay-content">
              <div><?php echo $feature_6_species_content . '&nbsp;' . $feature_6_species_readmore ?></div>
             </div>
            </div>

            <!-- NEW: Image spans full width above content -->
            <div class="feature-image">
<?php
             // Video support for Feature 6 (Species)
             $feature_6_video_url = trim((string) get_post_meta(get_the_ID(), 'feature_6_video_url', true));
             $feature_6_video_id  = trim((string) get_post_meta(get_the_ID(), 'feature_6_video_id', true));
             $feature_6_video_src = '';

             if ($feature_6_video_url !== '') {
              $feature_6_video_src = esc_url($feature_6_video_url);
             } elseif ($feature_6_video_id !== '' && is_numeric($feature_6_video_id)) {
              $tmp_src = wp_get_attachment_url((int) $feature_6_video_id);
              if ($tmp_src) {
               $feature_6_video_src = esc_url($tmp_src);
              }
             }

             if ($feature_6_video_src) :
              ?>
              <div class="ratio ratio-16x9">
               <video class="w-100" controls playsinline preload="metadata" poster="<?php echo esc_url($feature_6_species_img); ?>">
                <source src="<?php echo $feature_6_video_src; ?>" type="video/mp4">
                Your browser does not support the video tag.
               </video>
              </div>
<?php else: ?>
              <img class="img-fluid" src="<?php echo esc_url($feature_6_species_img); ?>" alt="The Fly Shop Species Image">
<?php endif; ?>
            </div>

            <!-- Content below image -->
            <div class="feature-content">
             <h2><?php echo $feature_6_species_title ?></h2>
<?php
             echo '<div><p>' . $feature_6_species_content . '</p></div>';

             if (!empty($feature_6_species_readmore)) :
              echo '<button type="button" class="btn destination btn-tfs" data-target="speciesReadmore">Read more...</button>';
             endif;
             ?>
            </div>
           </div>
<?php endif; ?>
         </div>

      </div>
    </div>
    </section>
<?php elseif (empty($travel_costs_image)) : ?>
        <div class="container mt-5">
            <h3 class="text-center">No content found in Private Waters Content Fields</h3>
        </div>
<?php endif; ?>

<?php if (!empty($whywe_content_2)) : ?>
    <section id="set-the-hook-destination-template" class="mt-5 mb-5">
        <div class="container">
            <div id="setthehook-title" class="col-md-8 col-md-offset-2">
                <h2><?php _e($whywe_title_2); ?></h2>
            </div>
            <div class="mt-2">
                <div class="travel setthehook-p"><?php _e( $whywe_content_2 ); ?></div>
            </div>
        </div>
    </section>
<?php endif; ?>

    <section id="destination-template-carousel" class="wrapper mt-5">
        <div class="inner container">
            <header class="major">
                <!-- <h2>Additional Photos</h2> -->
                <div class="row">
                    <div class="additional-listing">

<?php if (get_post_meta(get_the_ID(),
                                'additional-travel-image1',
                                TRUE)
                        ) {

                            echo '<div class="col-xs-6 col-md-3">',

                            '<div class="thumbnail">',

                                    '<a href="#travel-carousel" data-slide-to="0"><img class="destination-img" src="'
                                    . $additional_travel_image1
                                    . '" data-bs-toggle="modal" data-bs-target="#travelTableModal"  alt="The Fly Shop Images"></a>',

                            '</div>',

                            '</div>';

                        } ?>

<?php if (get_post_meta(get_the_ID(),
                                'additional-travel-image2',
                                TRUE)
                        ) {

                            echo '<div class="col-xs-6 col-md-3">',

                            '<div class="thumbnail">',

                                    '<a href="#travel-carousel" data-slide-to="1"><img class="destination-img" src="'
                                    . $additional_travel_image2
                                    . '" data-bs-toggle="modal" data-bs-target="#travelTableModal" alt="The Fly Shop Images"></a>',

                            '</div>',

                            '</div>';

                        } ?>

<?php if (get_post_meta(get_the_ID(),
                                'additional-travel-image3',
                                TRUE)
                        ) {

                            echo '<div class="col-xs-6 col-md-3">',

                            '<div class="thumbnail">',

                                    '<a href="#travel-carousel" data-slide-to="2"><img class="destination-img" src="'
                                    . $additional_travel_image3
                                    . '" data-bs-toggle="modal" data-bs-target="#travelTableModal" alt="The Fly Shop Images"></a>',

                            '</div>',

                            '</div>';

                        } ?>

<?php if (get_post_meta(get_the_ID(),
                                'additional-travel-image4',
                                TRUE)
                        ) {

                            echo '<div class="col-xs-6 col-md-3">',

                                    '<div class="thumbnail">' .

                                    '<a href="#travel-carousel" data-slide-to="3"><img class="destination-img" src="'
                                    . $additional_travel_image4
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
                                'additional-travel-image5',
                                TRUE)
                        ) {

                            echo '<div class="col-xs-6 col-md-3">',

                            '<div class="thumbnail">',

                                    '<a href="#travel-carousel" data-slide-to="4"><img class="destination-img" src="'
                                    . $additional_travel_image5
                                    . '" data-bs-toggle="modal" data-bs-target="#travelTableModal" alt="The Fly Shop Images"></a>',

                            '</div>',

                            '</div>';

                        } ?>

<?php if (get_post_meta(get_the_ID(),
                                'additional-travel-image6',
                                TRUE)
                        ) {

                            echo '<div class="col-xs-6 col-md-3">',

                            '<div class="thumbnail">',

                                    '<a href="#travel-carousel" data-slide-to="5"><img class="destination-img" src="'
                                    . $additional_travel_image6
                                    . '" data-bs-toggle="modal" data-bs-target="#travelTableModal" alt="The Fly Shop Images"></a>',

                            '</div>',

                            '</div>';

                        } ?>

<?php if (get_post_meta(get_the_ID(),
                                'additional-travel-image7',
                                TRUE)
                        ) {

                            echo '<div class="col-xs-6 col-md-3">',

                            '<div class="thumbnail">',

                                    '<a href="#travel-carousel" data-slide-to="6"><img class="destination-img" src="'
                                    . $additional_travel_image7
                                    . '" data-bs-toggle="modal" data-bs-target="#travelTableModal" alt="The Fly Shop Images"></a>',

                            '</div>',

                            '</div>';

                        } ?>

<?php if (get_post_meta(get_the_ID(),
                                'additional-travel-image8',
                                TRUE)
                        ) {

                            echo '<div class="col-xs-6 col-md-3">',

                            '<div class="thumbnail">',

                                    '<a href="#travel-carousel" data-slide-to="7"><img class="destination-img" src="'
                                    . $additional_travel_image8
                                    . '" data-bs-toggle="modal" data-bs-target="#travelTableModal" alt="The Fly Shop Images"></a>',

                            '</div>',

                            '</div>';

                        } ?>

                    </div>
                </div>
        </div>
    </section>

    <!-- ====== MODAL SLIDER ====== -->
    <div class="modal fade travel-modal additional-img" tabindex="-1" id="travelTableModal"
         aria-labelledby="travelTableModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Carousel -->
                <div id="travel-carousel" class="carousel slide" data-bs-interval="false">
                    <!-- Indicators -->
                    <div class="carousel-indicators">
<?php if (get_post_meta(get_the_ID(), 'additional-travel-image1', true)) { ?>
                            <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="0" class="active"
                                    aria-current="true" aria-label="Slide 1"></button>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'additional-travel-image2', true)) { ?>
                            <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'additional-travel-image3', true)) { ?>
                            <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'additional-travel-image4', true)) { ?>
                            <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="3"
                                    aria-label="Slide 4"></button>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'additional-travel-image5', true)) { ?>
                            <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="4"
                                    aria-label="Slide 5"></button>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'additional-travel-image6', true)) { ?>
                            <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="5"
                                    aria-label="Slide 6"></button>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'additional-travel-image7', true)) { ?>
                            <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="6"
                                    aria-label="Slide 7"></button>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'additional-travel-image8', true)) { ?>
                            <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="7"
                                    aria-label="Slide 8"></button>
<?php } ?>
                    </div>

                    <!-- Carousel items -->
                    <div class="carousel-inner">
<?php if (get_post_meta(get_the_ID(), 'additional-travel-image1', true)) { ?>
                            <div class="carousel-item active">
                                <img class="d-block w-100 destination-img"
                                     src="<?php echo $additional_travel_image1; ?>" data-bs-toggle="modal"
                                     data-bs-target="#travelTableModal"
                                     alt="The Fly Shop World Fly Fishing Travel">
                            </div>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'additional-travel-image2', true)) { ?>
                            <div class="carousel-item">
                                <img class="d-block w-100 destination-img"
                                     src="<?php echo $additional_travel_image2; ?>" data-bs-toggle="modal"
                                     data-bs-target="#travelTableModal"
                                     alt="The Fly Shop World Fly Fishing Travel">
                            </div>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'additional-travel-image3', true)) { ?>
                            <div class="carousel-item">
                                <img class="d-block w-100 destination-img"
                                     src="<?php echo $additional_travel_image3; ?>" data-bs-toggle="modal"
                                     data-bs-target="#travelTableModal"
                                     alt="The Fly Shop World Fly Fishing Travel">
                            </div>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'additional-travel-image4', true)) { ?>
                            <div class="carousel-item">
                                <img class="d-block w-100 destination-img"
                                     src="<?php echo $additional_travel_image4; ?>" data-bs-toggle="modal"
                                     data-bs-target="#travelTableModal"
                                     alt="The Fly Shop World Fly Fishing Travel">
                            </div>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'additional-travel-image5', true)) { ?>
                            <div class="carousel-item">
                                <img class="d-block w-100 destination-img"
                                     src="<?php echo $additional_travel_image5; ?>" data-bs-toggle="modal"
                                     data-bs-target="#travelTableModal"
                                     alt="The Fly Shop World Fly Fishing Travel">
                            </div>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'additional-travel-image6', true)) { ?>
                            <div class="carousel-item">
                                <img class="d-block w-100 destination-img"
                                     src="<?php echo $additional_travel_image6; ?>" data-bs-toggle="modal"
                                     data-bs-target="#travelTableModal"
                                     alt="The Fly Shop World Fly Fishing Travel">
                            </div>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'additional-travel-image7', true)) { ?>
                            <div class="carousel-item">
                                <img class="d-block w-100 destination-img"
                                     src="<?php echo $additional_travel_image7; ?>" data-bs-toggle="modal"
                                     data-bs-target="#travelTableModal"
                                     alt="The Fly Shop World Fly Fishing Travel">
                            </div>
<?php } ?>

<?php if (get_post_meta(get_the_ID(), 'additional-travel-image8', true)) { ?>
                            <div class="carousel-item">
                                <img class="d-block w-100 destination-img"
                                     src="<?php echo $additional_travel_image8; ?>" data-bs-toggle="modal"
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

    <!-- CALL TO ACTION ROW -->
    <section id="cta" class="wrapper mt-5 mb-5">
        <div class="inner container">
            <div id="cta-trigger" class="cta-trigger-area">
                <header class="text-center">
                    <h2 class="cta-trigger-title"><?php echo $cta_strong_intro; ?></h2>
                    <p class="cta-trigger-subtitle"><?php echo $cta_content; ?></p>
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const expandBtn = document.getElementById('expandCTA');
            const closeBTn = document.getElementById('closeCTA');
            const ctaTrigger = document.getElementById('cta-trigger');
            const formContainer = document.getElementById('cta-form-container');
            const triggerArea = document.querySelector('.cta-trigger-area');

            // Expand functionality
            if (expandBtn) {
                expandBtn.addEventListener('click', function (e) {
                    e.preventDefault();

                    // Add animation classes
                    triggerArea.classList.add('collapsed');
                    formContainer.classList.add('expanded');
                    expandBtn.classList.add('rotated');

                    // Smooth scroll to form after animation
                    setTimeout(() => {
                        formContainer.scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });
                    }, 300);
                });
            }

            // Close functionality
            if (closeBTn) {
                closeBTn.addEventListener('click', function (e) {
                    e.preventDefault();

                    // Remove animation classes
                    triggerArea.classList.remove('collapsed');
                    formContainer.classList.remove('expanded');
                    expandBtn.classList.remove('rotated');

                    // Smooth scroll back to trigger
                    setTimeout(() => {
                        ctaTrigger.scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });
                    }, 300);
                });
            }

            // Optional: Close on outside click
            document.addEventListener('click', function (e) {
                if (formContainer.classList.contains('expanded') &&
                    !formContainer.contains(e.target) &&
                    !expandBtn.contains(e.target)) {
                    closeBTn.click();
                }
            });

            // Optional: Close on Escape key
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape' && formContainer.classList.contains('expanded')) {
                    closeBTn.click();
                }
            });
        });
    </script>

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
                    $tbl_textarea = get_post_meta(get_the_ID(),
                            'rr-table-content-textarea',
                            TRUE);
                    if (!empty($tbl_textarea)) : ?>
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

<?php get_footer();