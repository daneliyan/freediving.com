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
  // App style
  wp_enqueue_style('app', get_template_directory_uri() . '/src/css/main.css');

  // SCRIPTS
  wp_enqueue_script('swiper', get_template_directory_uri() . '/src/js/swiper-bundle.min.js', array(), null, true);
  wp_enqueue_script('fancybox', get_template_directory_uri() . '/src/js/fancybox.min.js', array(), null, true);
  wp_enqueue_script('main', get_template_directory_uri() . '/src/js/main.js');
}
add_action('wp_enqueue_scripts', 'freediving_scripts');

?>