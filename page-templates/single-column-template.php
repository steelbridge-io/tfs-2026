<?php
/**
 * Template Name: Single Column Template
 * Template Post Type: post, page, travel_cpt, schools_cpt, adventures, guide_service, fishcamp_cpt, travel_blog, lower48, lower48blog
 * Developed for The Fly Shop
 * @package The_Fly_Shop
 * Author: Chris Parsons
 * Author URL: https://steelbridge.io
 */

$basic_the_post_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
$the_post_default = get_bloginfo('template_directory') . '/images/default/default-page-header.png';
$basic_logo_upload = get_theme_mod ('basic_page_logo');
$hero_video_url = get_post_meta(get_the_ID(), 'hero-video-url', true );
$publication_cta_img_1  =   get_post_meta(get_the_ID(), 'publication-cta-img-1', true );
$publication_cta_img_2  =   get_post_meta(get_the_ID(), 'publication-cta-img-2', true );
$publication_cta_img_3  =   get_post_meta(get_the_ID(), 'publication-cta-img-3', true );
$publication_cta_img_4  =   get_post_meta(get_the_ID(), 'publication-cta-img-4', true );
$default = '';

get_header('single-column-template');

include_once('post-meta/post-meta-basic.php');

if (has_post_thumbnail()) :
?>
    <div class="container-fluid p-0">
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
    <div class="container-fluid p-0">
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

    <div class="container-fluid top-fade p-0"></div>

    <div class="container mt-6 mb-7">
     <!-- Breadcrumbs -->
      <div class="container mt-4">
<?php the_fly_shop_breadcrumbs(); ?>
      </div>
        <div class="row">
            <div class="col-12">
                <main id="primary" class="site-main">

<?php
                    while (have_posts()) :
                    the_post();

                    get_template_part('template-parts/content', 'page');

                    endwhile; // End of the loop.
                    ?>

                </main><!-- #main -->
            </div>
        </div>
    </div>
    <section id="front-page-cta">
     <div class="container-fluid container-row background-image-cta d-flex align-items-center mt-5">
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
<?php
get_footer(); ?>


 <script> var _ctct_m = "0a0f5b541f83f517b80813b9cfbdb8d9"; </script>
 <script id="signupScript" src="//static.ctctcdn.com/js/signup-form-widget/current/signup-form-widget.min.js" async defer></script>
