<?php
/**
 * Template Name: Landing Page
 *
 * @package      Mich Starter
 * @link         https://github.com/michelventura/mich-starter.git
 * @author       MichVentura
 * @license      GPL-2.0+
 */

/**
 * Add landing page body class to the head.
 *
 * @param  array $classes Array of body classes.
 * @return array $classes Array of body classes.
 */
function starter_add_body_class( $classes ) {

	$classes[] = 'landing-page';

	return $classes;

}
add_filter( 'body_class', 'starter_add_body_class' );

// Remove Skip Links.
remove_action( 'genesis_before_header', 'genesis_skip_links', 5 );

/**
 * Dequeue Skip Links Script.
 */
function starter_dequeue_skip_links() {
	wp_dequeue_script( 'skip-links' );
}
add_action( 'wp_enqueue_scripts', 'starter_dequeue_skip_links' );

// Force full width content layout.
add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

// Remove site header elements.
remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );
remove_action( 'genesis_before_header', 'starter_before_header_widget_area' );
remove_action( 'genesis_header', 'starter_header_right_widget_area', 14 );
remove_action( 'genesis_after_header', 'starter_after_header_widget_area' );
remove_action( 'genesis_header', 'starter_nav_cart', 13 );

// Remove navigation.
remove_theme_support( 'genesis-menus' );

// Remove breadcrumbs.
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

// Remove footer widgets.
remove_action( 'genesis_before_footer', 'starter_before_footer_widget_area' );
remove_action( 'genesis_footer', 'starter_footer_widgets', 5 );

// Remove site footer elements.
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'starter_footer_menu', 7 );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

// Run the Genesis loop.
genesis();
