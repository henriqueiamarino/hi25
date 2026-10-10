<?php
/**
 * HI25 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package HI25
 * @since HI25 1.0
 */

if ( ! function_exists( 'hi25_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since HI25 1.0
	 *
	 * @return void
	 */
	function hi25_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'hi25' );
	}

endif;

add_action( 'after_setup_theme', 'hi25_support' );

if ( ! function_exists( 'hi25_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since HI25 1.0
	 *
	 * @return void
	 */
	function hi25_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'hi25-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'hi25-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'hi25_styles' );

/**
 * Relabel the Categories dropdown placeholder, server-side and translatable.
 *
 * WordPress builds the placeholder ("Select Category") inside
 * wp_dropdown_categories() and passes it through the `list_cats` filter with
 * no category attached. The filter is added only while a dropdown Categories
 * block renders, so other category lists and dropdowns are untouched.
 *
 * @since HI25 1.0.2
 * @since HI25 1.1.0 Uses the `list_cats` filter instead of matching core's text.
 *
 * @param string|null $pre_render   Pre-rendered content, null by default.
 * @param array       $parsed_block The block being rendered.
 * @return string|null
 */
function hi25_categories_dropdown_label_start( $pre_render, $parsed_block ) {
	if ( 'core/categories' === $parsed_block['blockName'] && ! empty( $parsed_block['attrs']['displayAsDropdown'] ) ) {
		add_filter( 'list_cats', 'hi25_categories_dropdown_placeholder', 10, 2 );
	}
	return $pre_render;
}
add_filter( 'pre_render_block', 'hi25_categories_dropdown_label_start', 10, 2 );

/**
 * Return the theme's placeholder for the option that has no category.
 *
 * @since HI25 1.1.0
 *
 * @param string       $name     Option text.
 * @param WP_Term|null $category The category, or null for the placeholder.
 * @return string
 */
function hi25_categories_dropdown_placeholder( $name, $category = null ) {
	return null === $category ? esc_html__( 'Read by Category', 'hi25' ) : $name;
}

/**
 * Stop relabelling once the Categories block has rendered.
 *
 * @since HI25 1.1.0
 *
 * @param string $block_content Rendered block HTML.
 * @return string
 */
function hi25_categories_dropdown_label_end( $block_content ) {
	remove_filter( 'list_cats', 'hi25_categories_dropdown_placeholder', 10 );
	return $block_content;
}
add_filter( 'render_block_core/categories', 'hi25_categories_dropdown_label_end' );

/**
 * Load the home hero image eagerly, with high fetch priority.
 *
 * The hero card on the home template comes from its own Query Loop, not the
 * main query, so core treats its featured image as below the fold and
 * lazy-loads it although it is the largest element in the first viewport.
 * Adding the "is-hero" class to a Post Featured Image block flips that.
 *
 * @since HI25 1.0.8
 *
 * @param string $block_content Rendered block HTML.
 * @param array  $block         Parsed block, including attributes.
 * @return string
 */
function hi25_hero_image_priority( $block_content, $block ) {
	$classes = isset( $block['attrs']['className'] ) ? preg_split( '/\s+/', $block['attrs']['className'] ) : array();
	if ( ! in_array( 'is-hero', $classes, true ) ) {
		return $block_content;
	}

	$processor = new WP_HTML_Tag_Processor( $block_content );
	if ( ! $processor->next_tag( 'img' ) ) {
		return $block_content;
	}

	$processor->remove_attribute( 'loading' );
	$processor->set_attribute( 'fetchpriority', 'high' );

	// The "auto" keyword only applies to lazy-loaded images.
	$sizes = $processor->get_attribute( 'sizes' );
	if ( is_string( $sizes ) && str_starts_with( $sizes, 'auto, ' ) ) {
		$processor->set_attribute( 'sizes', substr( $sizes, 6 ) );
	}

	// Tell core the page's single high-priority slot is taken.
	if ( function_exists( 'wp_high_priority_element_flag' ) ) {
		wp_high_priority_element_flag( false );
	}

	return $processor->get_updated_html();
}
add_filter( 'render_block_core/post-featured-image', 'hi25_hero_image_priority', 10, 2 );
