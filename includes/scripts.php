<?php
function wp_marafet_scripts() {
	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js',array( ), '', true  );
	wp_enqueue_script( 'bootstrapValidator', get_template_directory_uri() . '/assets/js/bootstrapValidator.min.js',array( ), '', true  );
	wp_enqueue_script( 'googleMap', 'http://maps.google.com/maps/api/js?sensor=false', array(), '' ,true );
	wp_enqueue_script( 'easing', get_template_directory_uri().'/assets/js/jquery.easing.min.js',array(), '', true   );
	wp_enqueue_script( 'sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js',array(  ), '', true  );
	wp_enqueue_script( 'jqueryParallax', get_template_directory_uri() . '/assets/js/jquery.parallax-1.1.3.js',array(  ), '', true  );
	wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/js/parallax-bg.js',array(  ), '', true  );
	wp_enqueue_script( 'pkgd', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js',array(  ), '', true  );

	wp_enqueue_script( 'appear', get_template_directory_uri() . '/assets/js/jquery.appear.js',array(  ), '', true  );

	wp_enqueue_script( 'carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js',array(  ), '', true  );

	wp_enqueue_script( 'countTo', get_template_directory_uri() . '/assets/js/jquery.countTo.js',array(  ), '', true  );

	wp_enqueue_script( 'prettyPhoto', get_template_directory_uri() . '/assets/js/jquery.prettyPhoto.js',array(  ), '', true  );

	wp_enqueue_script( 'superslides', get_template_directory_uri() . '/assets/js/jquery.superslides.js',array(  ), '', true  );

	wp_enqueue_script( 'typed', get_template_directory_uri() . '/assets/js/typed.js',array(  ), '', true  );

	wp_enqueue_script( 'YTPlayer', get_template_directory_uri() . '/assets/js/jquery.mb.YTPlayer.min.js',array(  ), '', true  );

	wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js',array(  ), '', true  );
	wp_enqueue_script( 'my_skript', get_template_directory_uri() . '/assets/js/my_skript.js',array(  ), '', true  );
}

add_action( 'wp_enqueue_scripts', 'wp_marafet_scripts' );








