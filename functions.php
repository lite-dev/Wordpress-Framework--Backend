<?php
function main_style() {
	wp_enqueue_style( 'Theme Name', get_template_directory_uri() . '/style.css' );
}
function extra_style() {
	wp_enqueue_style( 'Extra', get_template_directory_uri() . '/extra.css' );
}
register_nav_menus( array( 
	'header_menu' => 'Header Navigation Menu',
	'mobile_header' => 'Mobile Header Menu',
	'sidebar_menu' => 'Sidebar Navigation Menu',
	'footer_menu' => 'Footer Navigation Menu',
	'mobile_footer' => 'Mobile Footer Menu',
	)
);
register_sidebars( array(
	'name' => 'Main Sidebar',
	'id' => 'main_sidebar',
	)
);
function theme_cp() {
	echo '<h1>Control Panel</h1>
<form>
<fieldset>
<legend>Slider</legend>
<input type="file" name="slimgs" /><input type="file" name="slimgs" /><input type="file" name="slimgs" />
</fieldset>
<fieldset>
<legend>Sidebar Position</legend>
<label for="sideposleft">Left </label><input id="sideposleft" type="radio" name="sidepos" checked />
<label for="sideposright">Right</label><input id="sideposright" type="radio" name="sidepos" /></fieldset><label for="ajaxcheck">Turn AJAX On / Off</label> <input id="ajaxcheck" type="checkbox" name="ajaxcheck" checked /><br /><legend>Article Size: </legend><fieldset><label for="artwidth">Width: </label><input id="artwidth" type="number" name="artsize" /><label for="artheight">Height: </label><input id="artheight" type="number" name="artsize" /></fieldset></form>';}function theme_adder() {	add_theme_page( 'Theme CP', 'Control Panel', 'edit_theme_options', 'control_panel', 'theme_control_panel' );}
add_action( 'admin_menu', 'theme_adder' );//add_action( 'init', 'register_my_menus' );//add_action( 'widgets_init', 'arphabet_widgets_init' );add_theme_support( 'automatic-feed-links' );add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );add_theme_support( 'title-tag' );add_theme_support( 'post-thumbnails' ); add_action( 'wp_enqueue_scripts', 'main_style' );add_action( 'wp_enqueue_scripts', 'extra_style' ); ?>