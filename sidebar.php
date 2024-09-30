<?php
/**
 * Sidebar
 *
 * @package      Stalwart
 * @author       CSU Web Services
 * @since        1.0.0
 * @license      GPL-2.0+
 **/

use Stalwart\Block_Areas;

if ( ! function_exists( 'csu_page_layout' ) ) {
	return;
}

$layout = csu_page_layout();
if ( ! in_array( $layout, array( 'content-sidebar', 'sidebar-content' ), true ) ) {
	return;
}

if ( ! apply_filters( 'csu_display_sidebar', true ) ) {
	return;
}

tha_sidebars_before();

echo '<aside class="sidebar-primary" role="complementary">';
tha_sidebar_top();
Block_Areas\show( 'sidebar' );
tha_sidebar_bottom();
echo '</aside>';

tha_sidebars_after();
