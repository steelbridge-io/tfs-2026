<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Fly_Shop_2025
 */

get_header();
?>
    <div id="archive-template" class="container mt-10 mb-5">
        <div class="row">
            <div class="col-md-8">
                <main id="primary" class="site-main">

                    <?php if (have_posts()) : ?>

                        <header class="page-header text-center mb-4">
                            <?php
                            the_archive_title('<h1 class="page-title display-4">', '</h1>');
                            the_archive_description('<div class="archive-description lead text-muted">', '</div>');
                            ?>
                        </header><!-- .page-header -->

                        <div class="list-group"> <!-- List layout for posts -->
                            <?php
                            /* Start the Loop */
                            while (have_posts()) :
                                the_post();
                                ?>
                                <div class="list-group-item py-4"> <!-- Post layout -->
                                    <div class="row g-3 align-items-center">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <div class="col-md-5">
                                                <a href="<?php the_permalink(); ?>">
                                                    <img src="<?php the_post_thumbnail_url('medium-large'); ?>"
                                                         class="img-fluid-archive rounded"
                                                         alt="<?php the_title_attribute(); ?>"/>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                        <div class="col-md-7">
                                            <h2 class="h5 mb-2">
                                                <a href="<?php the_permalink(); ?>"
                                                   class="text-dark text-decoration-none"><?php the_title(); ?></a>
                                            </h2>
                                            <p class="text-muted small mb-2">
                                                <span><?php echo get_the_date(); ?></span> |
                                                <span><?php the_author(); ?></span>
                                            </p>
                                            <div class="post-excerpt mb-3">
                                                <?php the_excerpt(); ?>
                                            </div>
                                            <a href="<?php the_permalink(); ?>"
                                               class="btn btn-link p-0 text-decoration-none">Read More</a>
                                        </div>
                                    </div>
                                </div>

                            <?php endwhile; ?>

                        </div> <!-- End list group -->
                        <div id="archive-pagination" class="mt-5">
                            <?php the_fly_shop_bootstrap_pagination(); ?>
                        </div>
                        <?php
                        /* the_post_navigation(
                         array(
                         'prev_text' => '<i class="lni lni-chevron-left me-2"></i><span class="nav-content"><span class="nav-subtitle">' . esc_html__( 'Previous:', 'the-fly-shop-2026' ) . '</span> <span class="nav-title">%title</span></span>',
                                                                                                                                                                                                                                                 'next_text' => '<span class="nav-content"><span class="nav-subtitle">' . esc_html__( 'Next:', 'the-fly-shop-2026' ) . '</span> <span class="nav-title">%title</span></span><i class="lni lni-chevron-right ms-2"></i>',
                         )
                         ); */
                        ?>

                    <?php else : ?>

                        <div class="alert alert-warning text-center" role="alert">
                            <?php esc_html_e('No posts found.', 'the-fly-shop-2026'); ?>
                        </div>

                    <?php endif; ?>

                </main><!-- #main -->
            </div>
            <div class="col-md-4 page-sidebar">
                <?php dynamic_sidebar('sidebar-14'); ?>
            </div>
        </div>
    </div>
<?php
include_once get_template_directory() . '/page-templates/cta-sections/footer-cta.php';
get_footer();