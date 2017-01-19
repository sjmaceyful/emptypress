<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <!-- Meta Data -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0">
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <meta name="robots" content="index, nofollow">
    <meta name="author" content="Steve Macey Design &amp; Development">

    <title><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- Icons - http://realfavicongenerator.net/ -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicons/manifest.json">
    <link rel="mask-icon" href="<?php bloginfo( 'template_directory' ); ?>/assets/images/favicons/safari-pinned-tab.svg">
    <meta name="theme-color" content="#f0f0f0">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/style.css"/>

	<?php wp_head(); ?>

</head>
<body>

<header class="site-header">
    <div class="inner">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
		<?php wp_nav_menu(array(
		        'theme_location' => 'main'
        )); ?>
	    <?php get_search_form(); ?>
    </div>
</header>