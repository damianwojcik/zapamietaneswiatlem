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

<?php
    $logo_text = get_field('logo_text', 'option');
    $logo_img = get_field('logo_img', 'option');
?>

    <!-- Header -->
    <header id="header" class="nbr-header-section">
        <div class="container">
            <!-- Logo -->
            <div class="nbr-logo">
                <h1>
                    <a href="<?= SITE_URL; ?>">
                        <?php if( !empty($logo_text) ): ?>
                            <?php echo $logo_text ?>
                        <?php endif; ?>
                        <?php if( !empty($logo_img) ): ?>
                            <img src="<?php echo $logo_img['url']; ?>" alt="<?php echo $logo_img['alt']; ?>" />
                        <?php endif; ?>
                    </a>
                </h1>
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
        <?php wp_nav_menu( array(
            'menu'   => 'menu',
            'container' => false
        ) ) ?>
        </nav>
    </div>

    <div id="barba-wrapper">
        <div class="barba-container">