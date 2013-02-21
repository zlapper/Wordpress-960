<?php
/**
 * Template for the header of the website. Sets the meta information and opens up a bunch of wrapper elements.
 *
 * @package WordPress-960
 * @see footer.php
 */
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
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
					<?php get_search_form(); ?>
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
