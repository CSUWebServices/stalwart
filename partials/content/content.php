<?php
/**
 * Singular partial
 *
 * @package      Stalwart
 * @author       CSU Web Services
 * @since        1.0.0
 * @license      GPL-2.0+
 **/

echo '<article class="' . esc_attr( join( ' ', get_post_class() ) ) . '">';

if ( csu_has_action( 'tha_entry_top' ) ) {
	echo '<header class="entry-header">';
	tha_entry_top();
	echo '</header>';
}

echo '<div class="entry-content">';
tha_entry_content_before();
the_content();

wp_link_pages(
	[
		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'stalwart_textdomain' ),
		'after'  => '</div>',
	]
);

tha_entry_content_after();
echo '</div>';

if ( csu_has_action( 'tha_entry_bottom' ) ) {
	echo '<footer class="entry-footer">';
	tha_entry_bottom();
	echo '</footer>';
}

echo '</article>';