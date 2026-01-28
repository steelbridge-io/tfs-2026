<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Fly_Shop_2025
 */

$footer_options = tfs_get_footer_content();
?>

<footer id="colophon" class="site-footer bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <!-- Footer Section 1 -->
            <div class="col-md-4">
                <?php if (!empty($footer_options['section1']['title'])) : ?>
                    <h5><?php echo esc_html($footer_options['section1']['title']); ?></h5>
                <?php endif; ?>

                <?php if (!empty($footer_options['section1']['content'])) : ?>
                    <div class="footer-section-content">
                        <?php echo wp_kses_post($footer_options['section1']['content']); ?>
                    </div>
                <?php else : ?>
                    <!-- Default content if nothing is set -->
                    <address>
                        123 Main Street<br>
                        Springfield, USA<br>
                        <a href="mailto:info@yourwebsite.com" class="text-white">info@yourwebsite.com</a>
                    </address>
                <?php endif; ?>
            </div>

            <!-- Footer Section 2 -->
            <div class="col-md-4">
                <?php if (!empty($footer_options['section2']['title'])) : ?>
                    <h5><?php echo esc_html($footer_options['section2']['title']); ?></h5>
                <?php endif; ?>

                <?php if (!empty($footer_options['section2']['content'])) : ?>
                    <div class="footer-section-content">
                        <?php echo wp_kses_post($footer_options['section2']['content']); ?>
                    </div>
                <?php else : ?>
                    <!-- Default content if nothing is set -->
                    <h5>Departments</h5>
                    <ul class="list-unstyled p-0 m-0">
                        <li>Fishing Gear</li>
                        <li>Fly Tying</li>
                        <li>Waders & Boots</li>
                        <li>Outdoor Clothing</li>
                    </ul>
                <?php endif; ?>
            </div>

            <!-- Footer Section 3 -->
            <div class="col-md-4">
                <?php if (!empty($footer_options['section3']['title'])) : ?>
                    <h5><?php echo esc_html($footer_options['section3']['title']); ?></h5>
                <?php endif; ?>

                <?php if (!empty($footer_options['section3']['content'])) : ?>
                    <div class="footer-section-content">
                        <?php echo wp_kses_post($footer_options['section3']['content']); ?>
                    </div>
                <?php else : ?>
                    <!-- Default content if nothing is set -->
                    <h5>Contact Us</h5>
                    <p>Phone: <a href="tel:+1234567890" class="text-white">+1 (234) 567-890</a></p>
                    <h5>Follow Us</h5>
                    <div>
                        <a href="https://www.facebook.com" class="text-white me-2">
                            <i class="bi bi-facebook"></i> Facebook
                        </a>
                        <a href="https://www.twitter.com" class="text-white me-2">
                            <i class="bi bi-twitter"></i> Twitter
                        </a>
                        <a href="https://www.instagram.com" class="text-white">
                            <i class="bi bi-instagram"></i> Instagram
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="text-center mt-4 mb-4">
            <small>
                <?php
                if (!empty($footer_options['copyright'])) {
                    echo wp_kses_post($footer_options['copyright']);
                } else {
                    echo '&copy; ' . date('Y') . ' The Fly Shop. All Rights Reserved.';
                }
                ?>
            </small>
        </div>

        <div class="container footer-logo text-center mt-5">
            <img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2017/06/TFSLogo.png"
                 alt="The Fly Shop Logo"/>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
