
<?php

//Declaration of bootstrap support file
function bootstrap_theme_support(){

	function theme_styles(){

		wp_enqueue_style('bootstrap_css',get_template_directory_uri().'/css/bootstrap.min.css');
		wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

	}

	add_action('wp_enqueue_scripts','theme_styles');

// 	function jquery_js() {
	
// 	wp_enqueue_script( 'my_custom_js', get_template_directory_uri() . '/js/jquery-1.11.3.min.js');

	
	

// }
// 	add_action('wp_enqueue_scripts','jquery_js');

	function theme_js() {
		global $wp_scripts;
		

		wp_register_script( 'jScript', 'https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js' );
		wp_register_script('bootstrapjs',get_template_directory_uri() .'/js/bootstrap.min.js', array('jquery') ,'1.11.3' , true);
		wp_enqueue_script( 'jScript' );
		wp_enqueue_script( 'bootstrapjs' );
		

	}
	add_action('wp_enqueue_scripts','theme_js');
