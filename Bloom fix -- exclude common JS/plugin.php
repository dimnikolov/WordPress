<?php
/*
Plugin Name: Divi Fix - Exclude Common JS
Plugin URI:
Description: This plugin is intended to fix the error of Bloom not displaying in Facebook and Instagram's browsers on Android (WebView) and on iOS (UIWebView) on some mobile devices. Big thanks goes out to Elegant Themes and Faisal H. for providing the code for this fix in the support forums!
Author: Dimitar Nikolov
Version: 1.0
Author URI: http://dimitar.co/
*/

function exclude_common_js() {
wp_deregister_script( 'et-core-common');
wp_dequeue_script( 'et-core-common' );
}
add_action( 'wp_enqueue_scripts', 'exclude_common_js', 20 );

?>
