<?php
/**
 * This file adds the custom functions.
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

//* Remove the edit link
add_filter ( 'genesis_edit_post_link' , '__return_false' );

/* Change the footer text */
add_filter('genesis_footer_creds_text', 'custom_footer_creds_filter');
function custom_footer_creds_filter( $creds ) {
	$creds = 'Copyright [footer_copyright] <a href="'.get_bloginfo( 'url' ).'">'.get_bloginfo( 'name' ).'</a>.';
	return $creds;
}