<?php

	/**
	* Setting up functions for Emerald Theme
	**/

	if( !function_exists('emerald_park_setup') ):



		function emerald_park_setup(){

			// Use WordPress to add <title> tag
			add_theme_support( 'title-tag' );

			// Use WordPress to RSS feed
			add_theme_support( 'automatic-feed-links' );

			// Use WordPress to set up wp_nav_menu() locations
			register_nav_menus(array(
				'main' => 'Head Menu',
				'social' => 'Social Links Menu'
			));


		}






	endif;

	add_action( 'after_setup_theme', 'emerald_park_setup' );


	function emerald_park_css(){

		//load up style.css file
		wp_enqueue_style('emerald_park_style', get_stylesheet_uri());

	}

	add_action( 'wp_enqueue_scripts', 'emerald_park_css' );