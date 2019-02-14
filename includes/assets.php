<?php

add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
add_action( 'wp_footer', 'enqueue_scripts' );

function enqueue_styles() {
    wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Arizonia|Poppins:300,400,600,700&amp;subset=latin-ext', '', NULL);
    wp_enqueue_style( 'font_awesome', THEME_URL .'/assets/css/font-awesome.min.css', '', NULL);
    wp_enqueue_style( 'themify_icons', THEME_URL .'/assets/css/themify-icons.css', '', NULL);
    wp_enqueue_style( 'bootstrap', THEME_URL .'/assets/css/bootstrap.min.css', '', NULL);
    wp_enqueue_style( 'owl_carousel', THEME_URL .'/assets/css/owl.carousel.css', '', NULL);
    wp_enqueue_style( 'site_styles', THEME_URL .'/style.css', '', NULL);
}

function enqueue_scripts() {
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap', THEME_URL . '/assets/js/vendor/bootstrap.min.js', '', NULL);
    wp_enqueue_script( 'owl_carousel', THEME_URL . '/assets/js/vendor/owl.carousel.min.js', '', NULL);
    wp_enqueue_script( 'imagesloaded', THEME_URL . '/assets/js/vendor/imagesloaded.pkgd.min.js', '', NULL);
    wp_enqueue_script( 'isotope', THEME_URL . '/assets/js/vendor/jquery.isotope.v3.0.2.js', '', NULL);
    wp_enqueue_script( 'google_map_api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBMea0kc6KmE8P7ai1RGRJJaQKhsqfyjpA', '', NULL);
    wp_enqueue_script( 'site_scripts', THEME_URL . '/assets/js/scripts.js', '', NULL);
}