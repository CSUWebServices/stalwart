<?php
/**
 * Block styles.
 *
 * @package stalwart
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function stalwart_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'stalwart-flat-button',
			'label' => __( 'Flat button', 'stalwart' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'stalwart-list-underline',
			'label' => __( 'Underlined list items', 'stalwart' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'stalwart-box-shadow',
			'label' => __( 'Box shadow', 'stalwart' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'stalwart-box-shadow',
			'label' => __( 'Box shadow', 'stalwart' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'stalwart-box-shadow',
			'label' => __( 'Box shadow', 'stalwart' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/details',
		array(
			'name'  => 'stalwart-plus',
			'label' => __( 'Plus & minus', 'stalwart' ),
		)
	);
}
add_action( 'init', 'stalwart_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function stalwart_unregister_block_style() {
	wp_enqueue_script(
		'stalwart-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		STALWART_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'stalwart_unregister_block_style' );
