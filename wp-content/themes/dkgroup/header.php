<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">

	<!--[If lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>

</head>
<body>
	<!-- Header -->
	<header class="main-header" id="top">

		<div class="top-menu-container">

			<div class="container">

				<nav class="top-menu-navigation clearfix">
					<?php wp_nav_menu(array(
							'theme_location' => 'top-menu'
						)); ?>
				</nav>

				<a href="#" class="small-button blue" id="rwd-top-nav-btn"><?php _e('Select a page...', 'adaptive-framework'); ?></a>
				<div class="rwd-top-nav"></div> <!-- end rwd-top-nav -->

			</div> <!-- end container -->

		</div> <!-- end top-menu-container -->

		<div class="container">

			<div class="row">

				<div class="col-md-3 logo-container">
					<h1 class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php print IMAGES ?>/logo.png" alt="<?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>"></a></h1>
				</div> <!-- end col-md-3 -->

				<div class="col-md-9 special-one">
					<figure class="ad-block fr top-ad">
						<a href=""><img src="<?php print IMAGES ?>/banner1.jpg" alt="<?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>"></a>
					</figure>
				</div> <!-- end col-md-9 -->

			</div> <!-- end row -->

			<hr>

			<nav class="main-navigation">
				<?php wp_nav_menu(array(
						'theme_location' => 'main-menu'
					)); ?>		
			</nav>

			<a href="#" class="small-button blue" id="rwd-main-nav-btn"><?php _e('Select a page...', 'adaptive-framework'); ?></a>
			<div class="rwd-main-nav"></div> <!-- end rwd-main-nav -->			

		</div> <!-- end container -->

	</header> <!-- end main-header -->