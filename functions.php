<?php 

function angularscripts() {
	
	wp_enqueue_script(
		'angularjs',
		get_stylesheet_directory_uri() . '/node_modules/angular/angular.min.js'
	);

	wp_enqueue_script(
		'angularjs-route',
		get_stylesheet_directory_uri() . '/node_modules/angular-route/angular-route.min.js'
	);
}

add_action( 'wp_enqueue_scripts', 'angularscripts' );


/*if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));*/
?>