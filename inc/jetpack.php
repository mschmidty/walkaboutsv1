<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package walkaboutsv1.0
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.me/support/infinite-scroll/
 * See: https://jetpack.me/support/responsive-videos/
 */
function walkaboutsv1_0_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'walkaboutsv1_0_infinite_scroll_render',
		'footer'    => 'page',
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );
} // end function walkaboutsv1_0_jetpack_setup
add_action( 'after_setup_theme', 'walkaboutsv1_0_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function walkaboutsv1_0_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function walkaboutsv1_0_infinite_scroll_render
