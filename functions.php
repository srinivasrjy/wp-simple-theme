<?php

function simple_theme_setup() {
	//Featured Image Support
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'simple_theme_setup');

function set_excerpt_length() {
	return 40;
}

add_filter('excerpt_length', 'set_excerpt_length');