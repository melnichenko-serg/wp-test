<?php
/* Add style end scripts */
function newtheme_styles_scripts() {
	wp_enqueue_style( 'main', get_stylesheet_uri() );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . "/css/font-awesome.css" );
	wp_enqueue_style( 'custom', get_template_directory_uri() . "/css/custom.css" );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js' );
}

add_action( 'wp_enqueue_scripts', 'newtheme_styles_scripts' );

/* Add new future */
function newtheme_setup() {
	load_theme_textdomain( 'newtheme' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', [
		'height' => 50,
		'width' => 200,
		'flex-height' => true
	] );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 500, 300 );
	add_theme_support( 'html5', [
		'comment-list',
		'comment-form',
		'search-form',
		'gallery',
		'caption'
	] );
	add_theme_support( 'custom-header', [
		'default-image' => '',
		'random-default' => false,
		'width' => 1024,
		'height' => 50,
		'flex-height' => true,
		'flex-width' => true,
		'default-text-color' => 'inherit',
		'header-text' => true,
		'uploads' => true,
		'wp-head-callback' => '',
		'admin-head-callback' => '',
		'admin-preview-callback' => '',
		'video' => false,
		'video-active-callback' => 'is_front_page',
	] );
	add_theme_support( 'post-formats', [
		'aside',
		'gallery',
		'image',
		'video'
	] );
	add_theme_support( 'custom-background' );
	register_nav_menus( [
		'header_menu' => 'Header menu',
		'footer_menu' => 'Footer menu'
	] );
}

add_action( 'after_setup_theme', 'newtheme_setup' );
