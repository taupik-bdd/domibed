<?php
require_once('custom-widget/my-widget.php');

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles()
{
	$parenthandle = 'parent-style';
	$theme = wp_get_theme();

	wp_enqueue_style(
		$parenthandle,
		get_template_directory_uri() . '/style.css',
		array(),  // if the parent theme code has a dependency, copy it to here
		$theme->parent()->get('Version')
	);

	wp_enqueue_style(
		'style2',
		get_stylesheet_directory_uri() . '/style-2.css',
		'',
		$theme->get('Version') // this only works if you have Version in the style header
	);

	wp_enqueue_style(
		'child-style',
		get_stylesheet_uri(),
		array($parenthandle),
		$theme->get('Version') // this only works if you have Version in the style header
	);

	wp_enqueue_style(
		'bootstrap',
		"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css",
		array()
	);

	wp_enqueue_style(
		'fontawesome',
		"https://pro.fontawesome.com/releases/v5.10.0/css/all.css",
		array()
	);

	wp_enqueue_style(
		'owl',
		"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css",
		array()
	);

	wp_enqueue_style(
		'slick',
		"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css",
		array()
	);

	// wp_enqueue_style( 'j-ui-css', "https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css",
	// 	array()
	// );
}

function my_custom_scripts()
{
	wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', '', '', true);

	wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', '', '', true);

	// wp_enqueue_script( 'select2-js', 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js','',true );

	wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/script.js', array('jquery'), '', true);
}

function twentyfifteen_child_widgets_init()
{
	register_sidebar(array(
		'name'          => __('Footer 1', 'twentytwentyone-child'),
		'id'            => 'footer-1',
		'description'   => __('Add widgets here to appear in your footer area.', 'twenty-fifteen-child'),
		'before_widget' => '<aside id="%1$s" class="widget widget-footer %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	register_sidebar(array(
		'name'          => __('Footer 2', 'twentytwentyone-child'),
		'id'            => 'footer-2',
		'description'   => __('Add widgets here to appear in your footer area.', 'twenty-fifteen-child'),
		'before_widget' => '<aside id="%1$s" class="widget widget-footer %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	register_sidebar(array(
		'name'          => __('Footer 3', 'twentytwentyone-child'),
		'id'            => 'footer-3',
		'description'   => __('Add widgets here to appear in your footer area.', 'twenty-fifteen-child'),
		'before_widget' => '<aside id="%1$s" class="widget widget-footer %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	register_sidebar(array(
		'name'          => __('Footer 4', 'twentytwentyone-child'),
		'id'            => 'footer-4',
		'description'   => __('Add widgets here to appear in your footer area.', 'twenty-fifteen-child'),
		'before_widget' => '<aside id="%1$s" class="widget widget-footer %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	register_sidebar(array(
		'name'          => __('Footer 5', 'twentytwentyone-child'),
		'id'            => 'footer-5',
		'description'   => __('Add widgets here to appear in your footer area.', 'twenty-fifteen-child'),
		'before_widget' => '<aside id="%1$s" class="widget widget-footer %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	register_sidebar(array(
		'name'          => __('Footer 6', 'twentytwentyone-child'),
		'id'            => 'footer-6',
		'description'   => __('Add widgets here to appear in your footer area.', 'twenty-fifteen-child'),
		'before_widget' => '<aside id="%1$s" class="widget widget-footer %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	register_sidebar(array(
		'name'          => __('Navigation Produk Lainnya', 'twentytwentyone-child'),
		'id'            => 'nav-header-1',
		'description'   => __('Add widgets here to appear in your Jenjang Navigation area.', 'twenty-fifteen-child'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', 'twentyfifteen_child_widgets_init');

// change text badge sale
add_filter('woocommerce_sale_flash', 'ds_change_sale_text');
function ds_change_sale_text()
{
	return '<span class="onsale">Sale</span>';
}
// change position discount price dan price
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);

add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 25);

add_action('custom_product_name_title', 'custom_product_category_title', 6);
function custom_product_category_title()
{
	global $post;
	$terms = get_the_terms($post->ID, 'product_cat');
	$title = '';
	foreach ($terms as $term) {
		$title = $term->name . ' ';
	}
	echo "<span>" . $title . "</span>";
}

add_action('woocommerce_before_shop_loop', 'show_category_title', 10, 2);

function show_category_title()
{
	$cat_title = single_tag_title("", false);
	echo '<h1>' . $cat_title . '</h1>';
}





add_action('wp_enqueue_scripts', 'my_custom_scripts');
