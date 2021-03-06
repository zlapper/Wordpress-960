<?php
/**
 * Template for the header of the website. Sets the meta information and opens up a bunch of wrapper elements.
 *
 * @package WordPress-960
 * @see footer.php
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />

		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<!-- Set the viewport width to device width for mobile -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
		<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><![endif]-->

		<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/normalize.css"  type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/grid.css"  type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
		<?php wp_head(); ?>
	</head>
	<body>
		<?php global $wordpress_960; ?>
		<div class="container_24">
			<header>

				<!-- Site Description & Title -->
				<hgroup id="header" class="grid_24 alpha omega">
					<h1><a href="<?php echo site_url(); ?>"><?php bloginfo('title'); ?></a></h1>
					<?php
					// Description is actually labelled "Tagline" in Wordpress 3.x
					$description = get_bloginfo('description');
					if (! empty($description)) : ?>
						<h4 class="subheader"><?php echo $description; ?></h4>
					<?php endif; ?>
				</hgroup>

				<!-- Header Navigation -->
				<div class="grid_16 alpha">
					<?php wp_nav_menu( array(
						'theme_location' => 'header',
						'menu_class'     => 'nav-bar',
						'container'      => 'nav'
					) ); ?>
				</div>
				
				<!-- Search -->
				<div class="grid_8 omega">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Search') ) : ?><?php endif; ?>
				</div>
				<div class="clear"></div>

				<!-- Header Widgets -->
				<aside class="grid_24 alpha omega">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Header') ) : ?><?php endif; ?>
					<div class="clear"></div>
				</aside>

			</header>
			<div class="clear"></div>

			<!-- Content Wrapper -->
			<div id="content" class="content-wrapper">
