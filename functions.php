<?php
/**
 * LASU Alumni Theme functions and definitions
 */

if ( ! function_exists( 'lasu_alumni_setup' ) ) :
	function lasu_alumni_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'custom-logo', array(
			'height'      => 60,
			'width'       => 200,
			'flex-height' => true,
			'flex-width'  => true,
		) );
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'lasu-alumni' ),
		) );
	}
endif;
add_action( 'after_setup_theme', 'lasu_alumni_setup' );

function lasu_alumni_scripts() {
	wp_enqueue_style( 'lasu-alumni-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'lasu_alumni_scripts' );

function lasu_alumni_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'lasu-alumni' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here.', 'lasu-alumni' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'lasu_alumni_widgets_init' );
