<?php  

/**
 * Добавление возможностей
 */
if (! function_exists('freediving_setup')) {
	function freediving_setup() {
    add_theme_support( 'custom-logo', [
      'height'      => 33,
      'width'       => 92,
      'flex-width'  => false,
      'flex-height' => false,
      'header-text' => '',
      'unlink-homepage-logo' => false, // WP 5.5
    ] );
		// Добавляем динамический <title>
		add_theme_support( 'title-tag' );
    // Добавление миниатюр для постов
    // add_theme_support( 'post-thumbnails', array('post', 'uudised') );
	}
	add_action( 'after_setup_theme', 'freediving_setup' );
}


/**
 * Подключение стилей и скриптов
 */
function freediving_scripts() {
  // STYLES
  // Main style
  wp_enqueue_style('main', get_template_directory_uri());
  // Swiper
  wp_enqueue_style('swiper', get_template_directory_uri() . '/src/css/swiper-bundle.min.css');
  // Fancybox
  wp_enqueue_style('fancybox', get_template_directory_uri() . '/src/css/fancybox.min.css');
  // AOS
  wp_enqueue_style('aos', get_template_directory_uri() . '/src/css/aos.min.css');
  // App style
  wp_enqueue_style('app', get_template_directory_uri() . '/src/css/main.css');

  // SCRIPTS
  // Swiper
  wp_enqueue_script('swiper', get_template_directory_uri() . '/src/js/swiper-bundle.min.js', array(), null, true);
  // Fancybox
  wp_enqueue_script('fancybox', get_template_directory_uri() . '/src/js/fancybox.min.js', array(), null, true);
  // AOS
  wp_enqueue_script('aos', get_template_directory_uri() . '/src/js/aos.min.js', array(), null, true);
  // App js
  wp_enqueue_script('main', get_template_directory_uri() . '/src/js/main.js', array('swiper', 'fancybox', 'aos'), null, true);
}
add_action('wp_enqueue_scripts', 'freediving_scripts');


/**
 * Регистрация областей меню
 */
function freediving_menus() {
  $locations = array(
    'header' => __('Header Menu', 'freediving'),
  );
  register_nav_menus($locations);
}
add_action('init', 'freediving_menus');
// классы tailwind для пунктов меню
add_filter( 'nav_menu_link_attributes', 'custom_nav_menu_link_attributes', 10);
function custom_nav_menu_link_attributes($atts) {
	$atts['class'] = 'inline-block text-base text-white hover:opacity-80 xl:text-xl';
	return $atts;
}


/**
 * Создание Options Page и Options Sub Page на основе ACF Pro
 */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}


?>