<?php

function my_scripts() {

	wp_register_script(
		'angularjs',
		get_stylesheet_directory_uri() . '/node_modules/angular/angular.min.js'
	);

	wp_register_script(
		'angularjs-route',
		get_stylesheet_directory_uri() . '/node_modules/angular-route/angular-route.min.js'
	);

	wp_register_script(
		'angularjs-sanitize',
		get_stylesheet_directory_uri() . '/node_modules/angular-sanitize/angular-sanitize.min.js'
	);

	 wp_enqueue_script(
                		'my-scripts-app',
                		get_stylesheet_directory_uri() . '/app/app.js',
                		array( 'angularjs', 'angularjs-route', 'angularjs-sanitize' )
         );

         wp_enqueue_script(
                    		'my-scripts-config',
                    		get_stylesheet_directory_uri() . '/app/config.route.js',
                    		array( 'angularjs', 'angularjs-route', 'angularjs-sanitize' )
         );

    	wp_enqueue_script(
    		'my-scripts-home',
    		get_stylesheet_directory_uri() . '/app/home/home.js',
    		array( 'angularjs', 'angularjs-route', 'angularjs-sanitize' )
    	);

    	wp_enqueue_script(
        		'my-scripts-about',
        		get_stylesheet_directory_uri() . '/app/about/about.js',
        		array( 'angularjs', 'angularjs-route', 'angularjs-sanitize' )
        	);

            wp_enqueue_script(
                'my-scripts-articles',
                get_stylesheet_directory_uri() . '/app/articles/articles.js',
                array( 'angularjs', 'angularjs-route', 'angularjs-sanitize' )
            );


            wp_enqueue_script(
                'my-scripts-authors',
                get_stylesheet_directory_uri() . '/app/authors/authors.js',
                array( 'angularjs', 'angularjs-route', 'angularjs-sanitize' )
            );

            wp_enqueue_script(
                'my-scripts-categories',
                get_stylesheet_directory_uri() . '/app/categories/categories.js',
                array( 'angularjs', 'angularjs-route', 'angularjs-sanitize' )
            );

            wp_enqueue_script(
                'my-scripts-contactus',
                get_stylesheet_directory_uri() . '/app/contactus/contactus.js',
                array( 'angularjs', 'angularjs-route', 'angularjs-sanitize' )
            );

	wp_localize_script(
		'my-scripts-config',
		'myLocalized',
		array(
			'partials' => trailingslashit( get_template_directory_uri() ) . 'app/'
			)
	);
}

add_action( 'wp_enqueue_scripts', 'my_scripts' );

add_filter('show_admin_bar', '__return_false');