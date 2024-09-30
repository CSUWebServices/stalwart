<?php
/**
 * Archive
 *
 * @package      Stalwart
 * @author       CSU Web Services
 * @since        1.0.0
 * @license      GPL-2.0+
 **/

// Full width.
add_filter( 'csu_page_layout', 'csu_return_full_width_content' );

/**
 * Body Class
 *
 * @param array $classes Body classes.
 */
function csu_archive_body_class( $classes ) {
	$classes[] = 'archive';
	return $classes;
}
add_filter( 'body_class', 'csu_archive_body_class' );

// Build the page.
require get_template_directory() . '/index.php';
