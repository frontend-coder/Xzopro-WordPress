<?php
add_filter( 'ot_theme_mode', '__return_true' );
add_filter( 'ot_show_new_layout', '__return_false' );
add_filter( 'ot_show_pages', '__return_true' );

function theme_options_parent($parent ) {
	$parent = '';
	return $parent;
}
add_filter( 'ot_theme_options_parent_slug', 'theme_options_parent',20 );
/**
 * Required: include OptionTree.
 */
require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );
require( trailingslashit( get_template_directory() ) . 'template/theme-options.php' );
require( trailingslashit( get_template_directory() ) . 'template/meta-boxes.php' );

	function xzo_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'xzo' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
	}

add_action( 'after_setup_theme', 'xzo_setup' );


function xzo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'xzo' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'xzo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'xzo_widgets_init' );





function xzo_style() {
wp_enqueue_style( 'main-style', get_stylesheet_uri() );
wp_enqueue_style( 'libscssmin', get_template_directory_uri() . '/css/libs.min.css', array('main-style')  );
}
add_action( 'wp_enqueue_scripts', 'xzo_style' );

function xzo_scripts() {
wp_deregister_script( 'jquery' );
wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js',array(),'1',true);
wp_enqueue_script( 'jquery' );


wp_enqueue_script( 'xzo-scripts', get_template_directory_uri() . '/js/libs.min.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'xzo_scripts' );



	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }


