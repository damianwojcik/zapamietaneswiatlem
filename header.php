<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="<?= THEME_URL; ?>/assets/css/base.css">
	<link rel="stylesheet" href="<?= THEME_URL; ?>/assets/css/gridset.css">
	<link rel="stylesheet" href="<?= THEME_URL; ?>/style.css">
	<link rel="stylesheet" href="<?= THEME_URL; ?>/assets/css/responsive.css">


	<!-- JS
	================================================== -->
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
	<script src="/js/scripts.js"></script>


	<!-- HTML 5 SUPPORT
	================================================== -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->


</head>
<body <?php body_class(); ?>>

	