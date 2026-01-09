<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package The_Fly_Shop_2025
 */

get_header('404');
?>
    <div id="404-page" class="container mt-7 mb-5">

        <main id="primary" class="site-main">

           <div class="rounded-lg container-404">
            <img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2025/05/UPSAC_Extra3_KFalkenberg.webp" alt="404 Page Hero Image">
            <div class="container-404-text">
             <h1 class="display-4">Sorry, we can't find that page</h1>
             <p>Please consider any of the links in the navigation or review options below</p>
             <a class="btn btn-tfs btn-lg" href="/contact-us" role="button">Contact Us</a>
            </div>
           </div>

           <section class="error-404 not-found">
            <!-- Breadcrumbs -->
            <div class="container mt-4">
						 <?php the_fly_shop_breadcrumbs(); ?>
            </div>

            <div class="page-content container">
                <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'the-fly-shop-2026' ); ?></p>

                    <?php
                    //get_search_form();
                    // Using the custom function with options

                    // Custom professional search form
                    tfs_professional_search_form( array(
                     'placeholder'     => '&nbsp;Try another search?',
                     'button_text'     => 'Search',
                     'size'            => 'lg',
                     'style'           => 'filled',
                     'container_class' => 'mb-4'
                    ) );



                    the_widget( 'WP_Widget_Recent_Posts' );
                    ?>

                    <div class="widget widget_categories">
                        <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'the-fly-shop-2026' ); ?></h2>
                        <ul>
                            <?php
                            wp_list_categories(
                                array(
                                    'orderby'    => 'count',
                                    'order'      => 'DESC',
                                    'show_count' => 1,
                                    'title_li'   => '',
                                    'number'     => 10,
                                )
                            );
                            ?>
                        </ul>
                    </div><!-- .widget -->

                    <?php
                    /* translators: %1$s: smiley */
                    $the_fly_shop_2025_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'the-fly-shop-2026' ), convert_smilies( ':)' ) ) . '</p>';
                    the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$the_fly_shop_2025_archive_content" );

                    the_widget( 'WP_Widget_Tag_Cloud' );
                    ?>

            </div><!-- .page-content -->
           </section><!-- .error-404 -->

        </main><!-- #main -->
    </div>

<?php
get_footer();
