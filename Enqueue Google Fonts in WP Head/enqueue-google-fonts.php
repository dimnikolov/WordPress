<?php

// This is the 'right' way to enqueue Google Fonts according to the WordPress Codex.
// Just modify the family and subset arguments of the google_fonts function to your font.
// Then paste this in your theme's functions.php file or add it to your site-specific plugin.

function google_fonts() {
	$query_args = array(
		'family' => 'Open+Sans:400,700|Oswald:700',
		'subset' => 'latin,latin-ext',
	);
	wp_enqueue_style( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
            }

add_action('wp_enqueue_scripts', 'google_fonts');

?>
