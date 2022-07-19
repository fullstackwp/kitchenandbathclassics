<?php
/*
 * Acf option page
 * For theme options
*/
add_action( 'acf/init', 'tapsbath_acf_options' );
function tapsbath_acf_options() {
    // Check function exists.
    if( function_exists('acf_add_options_page') ) {
        // Register options page.
        $option_page = acf_add_options_page(
                            array(
                                'page_title'    => __( 'General Settings', 'tapsbath' ),
                                'menu_title'    => __( 'Theme Settings', 'tapsbath' ),
                                'menu_slug'     => 'theme-general-settings',
                                'capability'    => 'edit_posts',
                                'icon_url'      => 'dashicons-hammer',
                                'redirect'      => false
                            )
                        );
        
    }
}

/**
 * function to render HTML for ACF's link field
 */
function tapsbath_get_link_html( $link_arr = array(), $classes = "" ) {
	if( !is_array( $link_arr ) || empty( $link_arr ) ) {
		return false;
	}

	$link_url = ( isset( $link_arr['url'] ) && $link_arr['url'] ) ? $link_arr['url'] : 'javascript:void(0);';
    $link_title = ( isset( $link_arr['title'] ) && $link_arr['title'] ) ? $link_arr['title'] : __( 'Read More', 'tapsbath' );
    $link_target = ( isset( $link_arr['target'] ) ) ? $link_arr['target'] : '_self';

	$to_return = sprintf( '<a class="%s" href="%s" target="%s">%s</a>', $classes, esc_url( $link_url ), esc_attr( $link_target ),esc_html( $link_title ) );
	
	return $to_return;
}