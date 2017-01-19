<?php
/**
 * Curzon Wordy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

// Hide admin toolbar on front end
add_filter( 'show_admin_bar', '__return_false' );

// Register Navigation Menus
function register_navigation() {
	register_nav_menus(
		array(
			'main'   => 'Main Navigation',
			'footer' => 'Footer Links'
		)
	);
}

add_action( 'init', 'register_navigation' );

// Display Copyright notice
function create_copyright() {
	$all_posts  = get_posts( 'post_status=publish&order=ASC' );
	$first_post = $all_posts[0];
	$first_date = $first_post->post_date_gmt;
	_e( 'Copyright &copy; ' );
	if ( substr( $first_date, 0, 4 ) == date( 'Y' ) ) {
		echo date( 'Y' );
	} else {
		echo substr( $first_date, 0, 4 ) . "-" . date( 'Y' );
	}
	echo  get_bloginfo( 'name' );
	_e( 'All rights reserved.' );
}

?>
