<?php
/**
 * Site Footer
 *
 * @package      Stalwart
 * @subpackage   site-header/01
 * @author       CSU Web Services
 * @since        1.0.0
 * @license      GPL-2.0+
 **/

use Stalwart\Blocks\Social_Links;

/**
 * Site Footer
 */
function csu_site_footer() {
	echo '<p>&copy;' . date( 'Y' ) . ' ' . get_bloginfo( 'name' ) . '. All rights reserved.</p>';
}
add_action( 'tha_footer_top', 'csu_site_footer' );
