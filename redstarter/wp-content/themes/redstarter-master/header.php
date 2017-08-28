<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<!-- Start Google Fonts | Sans-Serif & Serif -->
		<link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css?family=Biryani:200,300,400,600,700,800,900" rel="stylesheet">
		<!-- End Google Fonts | Sans-Serif & Serif -->

		<!-- Start Google Fonts and Font Awesome -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet" />
		
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<!-- End Google Fonts and Font Awesome -->
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>
			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->

				<!-- Site Banner Image -->
				<div class="fp-banner">
					<div class="top-logo">
				<a href="http://localhost:8888/redstarter/"><img src="/redstarter/wp-content/themes/redstarter-master/build/images/logos/inhabitent-logo-tent.svg"></a>
			</div>
			<div class="alt-logo">
				<a href="http://localhost:8888/redstarter/"><img src="/redstarter/wp-content/themes/redstarter-master/build/images/logos/inhabitent-logo-tent-white.svg"></a>
			</div>
				<!-- Site Navigation -->
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->
				</div>
				<!-- End Site Banner Image-->
				
			</header><!-- #masthead -->

			<!-- Start Search Form -->
				<div class="search-form-container">
					<?php get_search_form(); ?>
				</div>
			<!-- End Search Form -->
			

			<div id="content" class="site-content">
