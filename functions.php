<?php
	define("THEME_URL", get_stylesheet_directory_uri());
	define("SITE_URL", site_url());

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'menus' );

	add_theme_support( 'post-formats', array( 'gallery' ) );

	add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
	add_action( 'wp_footer', 'enqueue_scripts' );

	add_image_size( 'post-thumb', 745, 400 );
	add_image_size( 'post-title', 1920, 1080 );

	show_admin_bar(false);

	include("includes/assets.php");
	include("includes/acf.php");