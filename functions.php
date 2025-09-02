<?php
add_action( 'wp_enqueue_scripts', 'amir_enqueue_styles' );

function amir_enqueue_styles() {
    // استایل قالب والد
    wp_enqueue_style(
        'twentytwentyfive-style',
        get_template_directory_uri() . '/style.css'
    );

    // استایل قالب فرزند
    wp_enqueue_style(
        'tamga-style',
        get_stylesheet_uri(),
        array('twentytwentyfive-style') // وابستگی به استایل والد
    );
}


// Remove the category count for WooCommerce categories
add_filter( 'woocommerce_subcategory_count_html', '__return_null' );