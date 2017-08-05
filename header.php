<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
        	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<meta name=viewport content="width=device-width, initial-scale=1">
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> >
		<header id="h_main">
			<h1><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			<?php if( has_nav_menu( 'header_menu' ) ) : ?>
				<nav id="nav_main"><?php wp_nav_menu( array( 'theme_location' => 'header_menu' ) ); ?></nav>
			<?php else : ?>
				<nav id="nav_main"><ul><?php wp_list_pages( 'depth=1&title_li=' ); ?></ul></nav>
			<?php endif; ?>
		</header>
		<figure>
			<ul>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</figure>