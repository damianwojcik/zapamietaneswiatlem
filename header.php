<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- TODO: favicon -->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- Header -->
    <header id="header" class="nbr-header-section">
        <div class="container">
            <!-- Logo -->
            <div class="nbr-logo">
                <h1> <a href="index.html">zapamietaneswiatlem<span>.</span>pl</a> </h1>
                <!-- use for logo img code: <img src="img/logo.svg" alt="logo"> -->
            </div>
            <!-- Hamburger Menu -->
            <div class="nbr-hamburger-menu" id="toggle">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
            </div>
         </div>
    </header>

    <!-- Navigation Overlay -->
    <div class="nbr-overlay" id="nbr-overlay">
        <nav class="nbr-overlay-menu d-flex align-items-center">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </div>