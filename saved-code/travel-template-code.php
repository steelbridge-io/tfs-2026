<?php

/**
 * Saved versions of code snippets from the travel-template.php
 */

?>


    <!-- Formerly in the hero section, this was used to render the logo over the hero image. Replaced by the new navigation logo -->
    <?php if( $sig_travel_logo !== ''	) : ?>
    <img src="<?php echo $sig_travel_logo; ?>" class="hero-logo mb-3" alt="Website Logo">
    <?php else : ?>
    <!-- Logo -->
    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/the-fly-shop-logo-white.png'); ?>" class="hero-logo mb-3" alt="Website Logo">
    <?php endif; ?>
