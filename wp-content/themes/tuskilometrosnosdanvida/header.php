<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tuskilometrosnosdanvida
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body id="body"<?php body_class(); ?>>
		<header>
			<a  id="logo" href="<?php echo home_url(); ?>">
				<img src="<?php bloginfo('template_url'); ?>/dist/assets/img/logo.png" alt="tuskilometrosnosdanvida-logo">
			</a>
			<div class="menu__wrapper">
				<div id="nav-trigger">
					<i></i><i></i><i></i>
					<span>Menu</span>
				</div>
				<nav id="navbar">
					<div class="menu__wrapper--inner">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'nav',
							'container'      => 'ul'
						) );
						?>
					</div>
				</nav>
			</div>
			<img class="sehop" src="<?php bloginfo('template_url'); ?>/dist/assets/img/sehop.jpg" alt="sehop">
			<div class="submit">
				<button class="secondary"><a href="#">Inscríbete</a></button>
			</div>
		</header>
	<main>
