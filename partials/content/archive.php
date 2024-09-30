<?php
/**
 * Archive partial
 *
 * @package      Stalwart
 * @author       CSU Web Services
 * @since        1.0.0
 * @license      GPL-2.0+
 **/

echo '<article class="post-summary">';
csu_post_summary_image();

echo '<div class="post-summary__content">';
	csu_entry_category();
	csu_post_summary_title();
echo '</div>';

echo '</article>';
