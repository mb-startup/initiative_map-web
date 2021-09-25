<?php
	add_action('wp_enqueue_scripts', 'test_scripts');

	function test_scripts() {
		wp_enqueue_style('test-style', get_stylesheet_uri());
		wp_enqueue_style('header_style', get_template_directory_uri(). '/assets/css/style.css');
		
	};

	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');



?>