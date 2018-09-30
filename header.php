<!DOCTYPE HTML>
<!--
	Spectral by Pixelarity
	pixelarity.com | hello@pixelarity.com
	License: pixelarity.com/license
-->
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<!--<link rel="stylesheet" href="assets/css/main.css" />-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <style media="screen">
			#main > header {
				background-image: url(<?php if ( get_field('background_img') ) {
					the_field('background_img');
				} else {
					echo get_template_directory_uri() . '/images/banner.jpg';
				} ?>) !important;
			}
		</style>
    <?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

        <!-- Header -->
          <header id="header" <?php if( is_admin_bar_showing() ){ echo 'style="margin-top:32px;"'; } ?>>
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri() . '/images/logo-square-black.png'; ?>" alt="De Stokerij Schiedam" style="width:32px;margin-top:8px;" /> </a></h1>

              <?php if (function_exists(clean_custom_menus())) clean_custom_menus(); ?>

          </header>
