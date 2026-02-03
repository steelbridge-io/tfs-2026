<?php
/* Custom shortcodes */

// function that runs when shortcode is called
function tfs_search_shortcode() {

// Things that you want to do. Like add search to a widget using shortcode [search-code]
 $search = '<form role="search" method="get" class="navbar-form navbar-left" action="' . home_url( '/' ) . '">
              <div class="form-group">
                  <span class="screen-reader-text">' .  _x( 'Search for:', 'label' ) . '</span>
                  <input type="search" class="form-control" placeholder="Search" value="' . get_search_query() . '" name="s" title="' . esc_attr_x( 'Search for:', 'label' ) . '" />
              </div>
              <button type="submit" class="btn btn-default">Search</button>
            </form>';

 return $search;

}
// register shortcode
add_shortcode('search-code', 'tfs_search_shortcode');

/**
 * Gravity Forns: Add First Name from form to redirect page
 */

function PrimeTravel_name( $atts ) {
 if (isset($_GET['first_name'])) {
	extract( shortcode_atts( array(
	 'param' => 'param',
	), $atts ) );
	return $_GET[$param];
 } else {
	//silence
 }
}
add_shortcode('PrimeTravel_name', 'PrimeTravel_name');

