<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

	add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
	add_theme_support( 'custom-logo' );
	add_action( 'after_setup_theme', 'theme_register_nav_menu' );

	function theme_name_scripts() {
		wp_enqueue_style( 'style-name', get_stylesheet_uri() );
		wp_enqueue_style( 'bootstrap', get_template_directory_uri(  ) . '/assets/css/bootstrap.min.css' );
		wp_enqueue_style( 'ballon', get_template_directory_uri(  ) . '/assets/css/ballon-popup.css' );
		wp_enqueue_style( 'style-studio', get_template_directory_uri(  ) . '/assets/css/style-studio.css' );
		wp_enqueue_style( 'photoswipe-masonry-inline', get_template_directory_uri(  ) . '/assets/css/photoswipe-masonry-inline.css' );
		wp_deregister_script( 'jquery' );
		wp_register_script('jquery', get_template_directory_uri(  ) . '/assets/js/jquery.min.js', 
		false , null, true );
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, 'footer',  true );
		wp_enqueue_script( 'autoptimize', get_template_directory_uri() . '/assets/js/autoptimize.js', array('jquery'), null, 'footer',  true );
		wp_enqueue_script( 'lazysizes', get_template_directory_uri() . '/assets/js/lazysizes.min.js', array('jquery'), null, 'footer',  true );
	}

	function theme_register_nav_menu() {
		register_nav_menu( 'top', 'menu in header' );
		register_nav_menu( 'footer', 'menu in footer' );
	}
?>
