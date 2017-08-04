<?php
/**
 * Template Name: Page Builder
 *
 * @package      Mich Starter
 * @link         https://github.com/michelventura/mich-starter.git
 * @author       MichVentura
 * @license      GPL-2.0+
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Get site-header.
get_header();

// Custom loop, remove all hooks except entry content.
if ( have_posts() ) :

	while ( have_posts() ) : the_post();

		do_action( 'genesis_entry_content' );

	endwhile; // End of post.

endif; // End loop.

// Get site-footer.
get_footer();
