<?php 
function inject_assets() {
	

	wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/style.css' ) ;
	wp_enqueue_style( 'theme-style', 'http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0-rc2/angular-material.min.css' ) ;
	


//Scripts

	wp_enqueue_script( 'angular-js', 'http://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular.min.js' );


	wp_enqueue_script( 'wp_api' , get_stylesheet_directory_uri() . '/assets/plugins/wp-api/dist/wp-api-angularjs.min.js' , array( 'angular-js' ) ) ;

	wp_enqueue_script( 'theme-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array( 'jquery' , 'wp_api' ) );


	wp_enqueue_script( 'angular-animate', 'http://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular-animate.min.js' , array( 'jquery' , 'wp_api' , 'angular-js' ) );

	wp_enqueue_script( 'angular-aria', 'http://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular-aria.min.js' , array( 'jquery' , 'wp_api' , 'angular-animate' ) );

	wp_enqueue_script( 'angular-messages', 'http://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular-messages.min.js' , array( 'jquery' , 'wp_api' , 'angular-aria') );

	wp_enqueue_script( 'angular-material', 'http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0-rc2/angular-material.min.js' , array( 'jquery' , 'wp_api' , 'angular-messages' ) );

	wp_enqueue_script( 'angular-app', get_stylesheet_directory_uri() . '/assets/js/app.js' , array( 'jquery' , 'wp_api' , 'angular-messages' ) );

	wp_enqueue_script( 'angular-config', get_stylesheet_directory_uri() . '/assets/js/config.js' , array( 'jquery' , 'wp_api' , 'angular-messages' , 'angular-app' ) );


	wp_enqueue_script( 'angular-filters', get_stylesheet_directory_uri() . '/assets/js/filters.js' , array( 'jquery' , 'wp_api' , 'angular-messages' , 'angular-config' ) );

	wp_enqueue_script( 'angular-controllers', get_stylesheet_directory_uri() . '/assets/js/controllers.js' , array( 'jquery' , 'wp_api' , 'angular-messages' , 'angular-filters' ) );

	wp_enqueue_script( 'angular-directives', get_stylesheet_directory_uri() . '/assets/js/directives.js' , array( 'jquery' , 'wp_api' , 'angular-messages' , 'angular-controllers' ) );

	wp_enqueue_script( 'angular-data', get_stylesheet_directory_uri() . '/assets/js/data.js' , array( 'jquery' , 'wp_api' , 'angular-messages' , 'angular-directives' ) );










  
  
  
	
}

add_action( 'wp_enqueue_scripts', 'inject_assets' );