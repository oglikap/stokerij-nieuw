<?php

// Add scripts and stylesheets
function stokerij_scripts() {
  wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css' );
  wp_enqueue_style( 'custom', get_template_directory_uri() . '/assets/css/custom.css' );
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js' );
//  wp_enqueue_script( 'dropotron', get_template_directory_uri() . '/assets/js/jquery.dropotron.min.js' );
  wp_enqueue_script( 'scrollex', get_template_directory_uri() . '/assets/js/jquery.scrollex.min.js' );
  wp_enqueue_script( 'scrolly', get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js' );
//  wp_enqueue_script( 'onvisible', get_template_directory_uri() . '/assets/js/jquery.onvisible.min.js' );
  wp_enqueue_script( 'skel', get_template_directory_uri() . '/assets/js/skel.min.js' );
  wp_enqueue_script( 'util', get_template_directory_uri() . '/assets/js/util.js' );
  wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js' );
  wp_enqueue_script( 'scrollback', get_template_directory_uri() . '/assets/js/scrollback.js' );
}
add_action( 'wp_enqueue_scripts', 'stokerij_scripts');

// Wordpress titles
add_theme_support( 'title-tag' );

// Add menu support
register_nav_menus(
    array(
    'primary-menu' => __( 'Primary Menu' ),
    'secondary-menu' => __( 'Secondary Menu' )
    )
);

// Custom menu
function wpb_stokerij_menu() {
  register_nav_menu('stokerij-menu',__('Stokerij Menu'));
}
add_action( 'init', 'wpb_stokerij_menu');

// Featured image
add_theme_support( 'post-thumbnails');
add_post_type_support( 'productions', 'thumbnail' );

add_image_size( 'square', 250, 250, true );
add_image_size( 'square-medium', 400, 400, true );
add_image_size( 'square-big', 500, 500, true );
add_image_size( 'square-thmb', 150, 150, true );
add_image_size( 'widescreen', 320, 180, true );
add_image_size( 'portrait', 400, 600, true );
add_image_size( 'landscape', 1000, 600, true );
add_image_size( 'very-small', 100, 9999 );
add_image_size( 'hvrbox', 250, 400, true );
add_image_size( 'spotlight', 566, 400, true );

// register a mobile menu
function wdm_register_mobile_menu() {
    add_theme_support( 'nav-menus' );
    register_nav_menus( array('mobile-menu' => __( 'Mobile Menu', 'wdm' )) );
}
add_action( 'init', 'wdm_register_mobile_menu' );

// Excerpt length
function my_excerpt_length( $length ) {
      return 12;
}
add_filter( 'excerpt_length', 'my_excerpt_length' );
remove_filter( 'menu_order', 'custom_menu_order' );

function twentysixteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'twentysixteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 1', 'twentysixteen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 2', 'twentysixteen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
  register_sidebar( array(
		'name'          => __( 'Content Bottom 3', 'twentysixteen' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
  register_sidebar( array(
		'name'          => __( 'Content Bottom 4', 'twentysixteen' ),
		'id'            => 'sidebar-5',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
  register_sidebar( array(
		'name'          => __( 'Content Bottom 5', 'twentysixteen' ),
		'id'            => 'sidebar-6',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentysixteen_widgets_init' );

/* Logo support */
add_theme_support( 'custom-logo', array(
	'height'      => 240, // set to your dimensions
	'width'       => 240,
	'flex-height' => true,
	'flex-width'  => true,
) );

/* Add custom Post Types */
function create_custom_post_types() {
  register_post_type( 'productions',
    array(
      'labels' => array(
        'name' => __( 'Producties' ),
        'singular_name' => __( 'Productie' ),
        'add_new' => __( 'Nieuwe productie' ),
        'add_new_item' => __( 'Nieuwe productie toevoegen' ),
        'new_item' => __( 'Nieuwe Productie' ),
		    'view_item' => __( 'Bekijk Productie' ),
		    'search_items' => __( 'Zoek Producties' ),
		    'not_found' =>  __( 'Geen Productie gevonden' ),
		    'not_found_in_trash' => __( 'Niks gevonden in prullenbak' ),
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array( 'slug' => 'producties' ),
      'supports' => array('title','thumbnail','editor','page-attributes','excerpt'),
      'taxonomies' => array( 'post_tag', 'category' ),
    )
  );

  register_post_type( 'news',
    array(
      'labels' => array(
        'name' => __( 'Nieuws' ),
        'singular_name' => __( 'Nieuws' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array( 'slug' => 'nieuws' ),
      'supports' => array('title','thumbnail','editor','page-attributes','excerpt'),
    )
  );
}
add_action( 'init', 'create_custom_post_types' );

// custom menu example @ https://digwp.com/2011/11/html-formatting-custom-menus/
function clean_custom_menus() {
	$menu_name = 'stokerij-menu'; // specify custom menu slug
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$menu_list = '<nav id="nav">' ."\n";
		$menu_list .= "\t\t\t\t". '<ul>' ."\n";
    $menu_list .= "\t\t\t\t". '<li class="special">';
    $menu_list .= "\t\t\t\t". '<a href="#menu" class="menuToggle">';
    $menu_list .= "\t\t\t\t". '<span>Menu</span></a>';
    $menu_list .= "\t\t\t\t" . '<div id="menu">';
    $menu_list .= "\t\t\t\t" . '<ul>';
		foreach ((array) $menu_items as $key => $menu_item) {
			$title = $menu_item->title;
			$url = $menu_item->url;
			$menu_list .= "\t\t\t\t\t". '<li><a href="'. $url .'" style="-webkit-tap-highlight-color:rgba(0, 0, 0, 0)">'. $title .'</a></li>' ."\n";
		}
    $menu_list .= "\t\t\t\t". '</ul>' . "\n";
    $menu_list .= "\t\t\t" . '</div>' . "\n";
    $menu_list .= "\t\t\t\t". '</li>' . "\n";
		$menu_list .= "\t\t\t\t". '</ul>' ."\n";
		$menu_list .= "\t\t\t\t". '</nav>' ."\n";
	} else {
		// $menu_list = '<!-- no list defined -->';
	}
	echo $menu_list;
}

// ACF problem withe updating
add_filter( 'https_ssl_verify', '__return_false' );
