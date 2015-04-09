<?php

/**
 * Wordpress functions boilerplate for custom theme
 */

add_theme_support( "post-thumbnails" );
add_theme_support( "title-tag" );
add_theme_support( "custom-header", array() );
add_theme_support( "custom-background", array() );
add_theme_support('widgets');
add_theme_support( 'html5', array( 'search-form', 'caption' ) );
add_theme_support( 'automatic-feed-links' );

require get_template_directory() . 'inc/remove-wordpress-brand.php';
