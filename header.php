<?php
/**
  * The template for displaying the header
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */
?>
<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="A WordPress portfolio project site, built with Skillcrush.">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Montserrat|Quicksand" rel="stylesheet">
    <title>Freelance Web Designer and Developer</title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header class="page-header container">
			
			<nav class="top-nav">
                <a href="#" id="menu-icon"></a>
				<div class="top-nav-container">
                    <?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
                </div>
			</nav>
            <div class="header-image"></div>
		</header>

		<div id="main" class="site-main">
