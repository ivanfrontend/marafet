<?php 

function marafet_style() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style( 'fontAwesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css');
	wp_enqueue_style( 'carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css');
	wp_enqueue_style( 'prettyPhoto', get_template_directory_uri() . '/assets/css/prettyPhoto.css');
	wp_enqueue_style( 'prettyPhoto2', get_template_directory_uri() . '/assets/css/prettyPhoto.css');
	wp_enqueue_style( 'my_slyle', get_template_directory_uri() . '/assets/css/my_style.css');
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css');
	

}

add_action( 'wp_enqueue_scripts', 'marafet_style' );






?>
