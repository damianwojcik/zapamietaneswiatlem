<?php
	define("THEME_URL", get_stylesheet_directory_uri());
	define("SITE_URL", site_url());

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'menus' );

	add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
	add_action( 'wp_footer', 'enqueue_scripts' );

	show_admin_bar(false);

	include("includes/assets.php");