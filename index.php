<?php
/*
Plugin Name: Image Download for Tilllate
Plugin URI: http://tilllate.world
Description: Image download plugin
Version: 1.0
Author: Daniele Cannavacciuolo
Author URI: http://www.danielecannavacciuolo.it
*/

function can_image_download() {
	wp_enqueue_script( 'can_image_download', plugins_url() . '/image-download/script.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'can_image_download' );

?>
