<?php

// stb_setup

// stb_includes
include( get_template_directory() . '/includes/guttenberg.php' );
include( get_template_directory() . '/includes/front/enqueue.php' );
include( get_template_directory() . '/includes/setup.php' );
include( get_template_directory() . '/includes/content_width.php' );
include( get_template_directory() . '/includes/front/widgets.php' );
include( get_template_directory() . '/includes/tax-thumb.php' );

// stb_hooks
add_action( 'wp_enqueue_scripts', 'stb_scripts' );
add_action( 'after_setup_theme', 'stb_setup' );
add_action( 'after_setup_theme', 'stb_content_width', 0 );
add_action( 'widgets_init', 'stb_widgets_init' );

// stb_shortcodes

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Setup

// Includes
include( get_template_directory() . '/includes/theme-customizer.php');

// Hooks
add_action('customize_register', 'stb_theme_customize_register');

// Actions
