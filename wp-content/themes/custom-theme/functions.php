<?php
/**
 * Created by PhpStorm.
 * User: MacBookPro
 * Date: 4/19/17
 * Time: 16:54
 */

function customTheme_setup() {
	load_theme_textdomain( 'custom-theme' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', [
		'height'      => 31,
		'width'       => 134,
		'flex-height' => true
	] );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 730, 446 );
	add_theme_support( 'html5', [
		'comment-list',
		'comment-form',
		'search-form',
		'gallery',
		'caption'
	] );
	add_theme_support( 'custom-header' );
	add_theme_support( 'post-formats', [
		'aside',
		'gallery',
		'image',
		'video'
	] );
	add_theme_support( 'custom-background' );
//	register_nav_menus( [
//		'header_menu' => 'Header menu',
//		'footer_menu' => 'Footer menu'
//	] );
	add_theme_support('menus');
}

add_action( 'after_setup_theme', 'customTheme_setup' );

function customTheme_scripts() {
	wp_enqueue_style( 'main', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . "/css/bootstrap.min.css" );
	wp_enqueue_style( 'custom', get_template_directory_uri() . "/css/custom.css" );
	wp_enqueue_style( 'animate', get_template_directory_uri() . "/css/animate.min.css" );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . "/css/font-awesome.min.css" );

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js' );
	wp_enqueue_script( 'animate', get_template_directory_uri() . '/js/animate-css.js' );
// 	wp_enqueue_script( 'animate', get_template_directory_uri() . '/js/css3-animate-it.js' );
	wp_enqueue_script( 'agency', get_template_directory_uri() . '/js/agency.js' );
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/jquery.easing.min.js' );
}

add_action( 'wp_enqueue_scripts', 'customTheme_scripts' );
