<?php
/**
 * Custom professional search form with Bootstrap styling
 *
 * @param array $args Optional. Array of arguments for customizing the search form.
 * @return string|void The search form HTML if echo is false, void otherwise.
 */
function tfs_professional_search_form( $args = array() ) {
 $defaults = array(
	'echo'        => true,
	'aria_label'  => '',
	'placeholder' => 'Search our site...',
	'button_text' => 'Search',
	'size'        => 'default', // 'sm', 'default', 'lg'
	'style'       => 'outline', // 'outline', 'filled'
	'class'       => '',
	'container_class' => 'mb-3',
 );

 $args = wp_parse_args( $args, $defaults );

 // Size classes
 $size_class = '';
 $btn_size_class = '';
 switch ( $args['size'] ) {
	case 'sm':
	 $size_class = 'form-control-sm';
	 $btn_size_class = 'btn-sm';
	 break;
	case 'lg':
	 $size_class = 'form-control-lg';
	 $btn_size_class = 'btn-lg';
	 break;
 }

 // Button style
 $btn_style = $args['style'] === 'filled' ? 'btn-primary' : 'btn-outline-primary';

 // Build aria-label
 $aria_label = $args['aria_label'] ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';

 $form = sprintf(
	'<div class="%s">
            <form role="search" method="get" class="d-flex gap-2 tfs-search-form %s" action="%s" %s>
                <div class="flex-grow-1">
                    <input type="search" 
                           class="form-control %s" 
                           placeholder="%s" 
                           value="%s" 
                           name="s" 
                           aria-label="Search" 
                           required>
                </div>
                <button class="btn btn-tfs %s %s" type="submit">
                    <i class="lni lni-search-alt" aria-hidden="true"></i>
                    <span class="d-none d-sm-inline ms-1">%s</span>
                </button>
            </form>
        </div>',
	esc_attr( $args['container_class'] ),
	esc_attr( $args['class'] ),
	esc_url( home_url( '/' ) ),
	$aria_label,
	esc_attr( $size_class ),
	esc_attr( $args['placeholder'] ),
	esc_attr( get_search_query() ),
	esc_attr( $btn_style ),
	esc_attr( $btn_size_class ),
	esc_html( $args['button_text'] )
 );

 if ( $args['echo'] ) {
	echo $form;
 } else {
	return $form;
 }
}