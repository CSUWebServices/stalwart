<?php
/**
 * Single Post
 *
 * @package      Stalwart
 * @author       CSU Web Services
 * @since        1.0.0
 * @license      GPL-2.0+
 **/

use Stalwart\Block_Areas;

/**
 * After Post
 */
function csu_after_post() {
	Block_Areas\show( 'after-post' );
}
add_action( 'tha_content_while_after', 'csu_after_post', 8 );


// Build the page.
require get_template_directory() . '/index.php';
