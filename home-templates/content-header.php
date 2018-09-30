<!DOCTYPE HTML>

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<!--<link rel="stylesheet" href="assets/css/main.css" />-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <?php wp_head(); ?>
	</head>
	<body class="landing">

		<!-- Page Wrapper -->
			<div id="page-wrapper">


    	<!-- Header -->
    		<header id="header" class="alt" <?php if( is_admin_bar_showing() ){ echo 'style="margin-top:32px;"'; } ?>>
    			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>">De Stokerij Schiedam</a></h1>

            <?php if (function_exists(clean_custom_menus())) clean_custom_menus(); ?>

    		</header>
