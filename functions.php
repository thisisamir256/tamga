<?php
add_action( 'wp_enqueue_scripts', 'amir_enqueue_styles' );

function amir_enqueue_styles() {
	wp_enqueue_style( 
		'tamga', 
		get_stylesheet_uri()
	);
}
