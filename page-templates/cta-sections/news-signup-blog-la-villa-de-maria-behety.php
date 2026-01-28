<?php if (is_single(1228)) { ?>
<section id="destination-v3-subscribe" class="reports-subscribe">
    <div class="container">

        <div id="maria-behety-lodge" class="well well-sm text-center no-margin-bottom">

            <div id="pop-over-fp" class="form-group link-color-tfs-red">
                <div>
                    <label for="exampleInputEmail2"><h3>Get Fishing Reports From La Villa De Maria Behety</h3></label>
                </div>
                <div id="constant-contact-container" class="constant-contact-sign-up-container">
                    <div class="row justify-content-center">
                        <div class="subscribe-form">
                            <?php echo do_shortcode('[gravityform id="11" title="false" ajax="true"]') ?>

                            <div id="pop-over-fp" class="col-12 no-spam-signup">
                                <p class="text-align-center small-text d-flex justify-content-center align-items-center">
                                    Click here to review our subscription policy&nbsp;:&nbsp;<a role="button"
                                                                                                class="subscribe-policy-icon"
                                                                                                data-bs-toggle="collapse"
                                                                                                href="#collapseTraveltemplate"
                                                                                                aria-expanded="false"
                                                                                                aria-controls="collapseTraveltemplate"><span
                                                class="bi bi-question-circle fs-3"></span></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="collapse" id="collapseTraveltemplate">
                        <div class="well">
                            <p class="small-text">"We respect your privacy and do not tolerate spam and will never sell,
                                rent, lease or give
                                away your email address to any third party. Nor will we send you unsolicited email. You
                                will
                                have the option to safely unsubscribe upon receiving our newsletters. We just want to
                                deleiver great photos, fantastic fly fishing ideas and motivation!</p>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            global $post;
            $selected_term = get_post_meta($post->ID, 'selected_term', true);


            if ($post->ID == 1228) :

            $args = array(
                    'post_type' => 'fish_report',
                    'post_status' => 'publish',
                    'tax_query' => array(
                            array(
                                    'taxonomy' => 'report-category',
                                    'field' => 'id',
                                    'terms' => $selected_term,
                            ),
                    ),
                    'posts_per_page' => 2,
            );

            $the_query = new WP_Query($args); ?>

        <?php if ($the_query->have_posts()) : ?>

            <div id="blog-feed-fp-top" class="mb-1618 mt-2">
                <div class="row">
                    <div class="newscta" id="news-cta">
                        <div data-aos-duration="1000" data-aos="fade-up" class="news-section">
                            <h3>Latest La Villa de Maria Behety Lodge News - The Fly Shop</h3>
                            <?php
                            echo '<div class="row justify-content-center">';
                            while ($the_query->have_posts()) : $the_query->the_post();

                                if (has_post_thumbnail()) {
                                    echo '<div class="col-lg-6 mt-2">' .
                                            '<div class="media-left media-top">' .
                                            '<a href="' . get_permalink() . '" title="' . get_the_title() . '">' . get_the_post_thumbnail(get_the_id()) . '</a>';
                                    echo '</div>';
                                }

                                echo '<div class="media-body caption">';
                                the_title('<a class="post-permalink" title="' . get_the_title() . '" href="' . get_permalink() . '"><h3>', '</h3></a>');
                                echo '<b>' . get_the_date('F dS, Y', get_the_ID()) . '</b>';
                                the_excerpt();
                                echo '</div>' .
                                        '</div>';

                            endwhile;
                            wp_reset_postdata(); ?>

                        </div>
                    </div>
                </div>
                <?php endif;
                endif; ?>
            </div>
            <?php } ?>

        </div>
</section>



