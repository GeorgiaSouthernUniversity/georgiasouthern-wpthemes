<?php
/* Override any fuctions in twentyelevent/functions.php by declaring them conditionally here. */ 

// Remove wp version in meta
 remove_action('wp_head', 'wp_generator');
 
 // Add Custom Header support
$args = array(
	'width'         => 920,
	'height'        => 310,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
	'uploads'       => true,
);
add_theme_support( 'custom-header', $args );














































?>