<?php
/**
 * Block styles.
 *
 * @package tastemaker
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function tastemaker_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'tastemaker-flat-button',
			'label' => __( 'Flat button', 'tastemaker' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'tastemaker-list-underline',
			'label' => __( 'Underlined list items', 'tastemaker' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'tastemaker-box-shadow',
			'label' => __( 'Box shadow', 'tastemaker' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'tastemaker-box-shadow',
			'label' => __( 'Box shadow', 'tastemaker' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'tastemaker-box-shadow',
			'label' => __( 'Box shadow', 'tastemaker' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/details',
		array(
			'name'  => 'tastemaker-plus',
			'label' => __( 'Plus & minus', 'tastemaker' ),
		)
	);
}
add_action( 'init', 'tastemaker_register_block_styles' );

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
function tastemaker_unregister_block_style() {
	wp_enqueue_script(
		'tastemaker-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		TASTEMAKER_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'tastemaker_unregister_block_style' );
