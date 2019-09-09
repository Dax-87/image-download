<?php
/*
Plugin Name: Image Download for Wordpress
Plugin URI: https://www.danielecannavacciuolo.it/project
Description: Image Download Plugin
Version: 1.0
Author: Daniele Cannavacciuolo, Stefano Amorelli
Author URI: https://www.danielecannavacciuolo.it
*/

function can_image_download() {
	wp_enqueue_script( 'can_image_download', plugins_url() . '/image-download/script.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'can_image_download' );

?>
