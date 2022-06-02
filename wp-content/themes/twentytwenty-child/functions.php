<?php
require_once('custom-widget/my-widget.php');

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
	$parenthandle = 'parent-style';
	$theme = wp_get_theme();

	wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
		array(),  // if the parent theme code has a dependency, copy it to here
		$theme->parent()->get('Version')
	);
	
	wp_enqueue_style( 'child-style', get_stylesheet_uri(),
		array( $parenthandle ),
		$theme->get('Version') // this only works if you have Version in the style header
	);

	wp_enqueue_style( 'bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css",
		array()
	);

	wp_enqueue_style( 'fontawesome', "https://pro.fontawesome.com/releases/v5.10.0/css/all.css",
		array()
	);

	wp_enqueue_style( 'owl', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css",
		array()
	);

	wp_enqueue_style( 'slick', "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css",
		array()
	);

	// wp_enqueue_style( 'j-ui-css', "https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css",
	// 	array()
	// );
}

function my_custom_scripts() {
	wp_enqueue_script( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js','','',true );

	wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js','','',true );

	// wp_enqueue_script( 'select2-js', 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js','',true );

	wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/script.js', array( 'jquery' ),'',true );
	
}
add_action( 'wp_enqueue_scripts', 'my_custom_scripts' );

?>