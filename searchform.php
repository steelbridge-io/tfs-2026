<?php
/**
 * Theme search form template
 *
 * Delegates rendering to the Bootstrap-styled search form helper.
 */

if ( function_exists( 'tfs_professional_search_form' ) ) {
    tfs_professional_search_form( array(
        'aria_label'  => 'Site Search',
        'placeholder' => __( 'Search…', 'the-fly-shop-2026' ),
        'button_text' => __( 'Search', 'the-fly-shop-2026' ),
        'size'        => 'default',
        'style'       => 'outline',
        'class'       => 'align-items-stretch',
    ) );
} else {
    // Fallback to default markup if helper is unavailable.
    ?>
    <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <label>
            <span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'the-fly-shop-2026' ); ?></span>
            <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder', 'the-fly-shop-2026' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
        </label>
        <button type="submit" class="search-submit"><?php echo esc_html_x( 'Search', 'submit button', 'the-fly-shop-2026' ); ?></button>
    </form>
<?php
}
