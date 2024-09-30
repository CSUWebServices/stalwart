<?php
/**
 * WordPress SEO
 *
 * @package      Stalwart
 * @author       CSU Web Services
 * @since        1.0.0
 * @license      GPL-2.0+
 **/

/**
 * Breadcrumbs
 */
function csu_breadcrumbs() {
	if ( function_exists( 'yoast_breadcrumb' ) && ! is_front_page() ) {
		yoast_breadcrumb( '<p id="breadcrumbs" class="breadcrumb">', '</p>' );
	}
}
add_action( 'tha_content_top', 'csu_breadcrumbs' );
