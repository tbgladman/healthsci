<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Teaching_and_Learning_in_Health_Sciences
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function tandlinhealthsci_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'tandlinhealthsci_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function tandlinhealthsci_jetpack_setup
add_action( 'after_setup_theme', 'tandlinhealthsci_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function tandlinhealthsci_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function tandlinhealthsci_infinite_scroll_render
