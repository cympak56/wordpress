<?php

add_theme_support( 'post-thumbnails' ); 

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'libs', get_stylesheet_directory_uri() . '/css/libs.min.css', [], null );
	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/css/main.css', [], time() );
	wp_enqueue_style( 'media', get_stylesheet_directory_uri() . '/css/media.css');
	
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'media', get_stylesheet_directory_uri() . '/js/main.js', ['jquery'], null, true );
});

register_nav_menus(
	array(
	  'header-menu' => __( 'Header Menu' ),
	  'footer-menu' => __( 'Footer Menu' )
	)
);

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'sidebar',
		'id'            => 'sidebar',
		'before_widget' => '<div class="sidebar__sidebar-item">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<div class="sidebar-item__title">',
		'after_title'   => '</div><div class="sidebar-item__content">',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

function mytheme_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');