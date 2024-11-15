<?php
/**
 * steam functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package steam
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function steam_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on steam, use a find and replace
	 * to change 'steam' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('steam', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'header' => esc_html__('Header Menu', 'steam'),
			'footer' => esc_html__('Footer Menu', 'steam'),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'steam_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'steam_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function steam_content_width()
{
	$GLOBALS['content_width'] = apply_filters('steam_content_width', 640);
}
add_action('after_setup_theme', 'steam_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function steam_widgets_init()
{
	register_sidebar(
		array(
			'name' => esc_html__('Sidebar', 'steam'),
			'id' => 'sidebar-1',
			'description' => esc_html__('Add widgets here.', 'steam'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}
add_action('widgets_init', 'steam_widgets_init');

/**
 * Enqueue scripts and styles.
 */
// ====================================================================================
// Разрешить загрузку SVG
function allow_svg_upload($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');
// ====================================================================================
//  ОТКЛЮЧАЕМ jquery для подключение свой jquery
function disable_default_jquery()
{
	wp_deregister_script('jquery');
}
add_action('wp_enqueue_scripts', 'disable_default_jquery');
// ====================================================================================
function steam_scripts()
{
	wp_enqueue_style('steam-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('steam-style', 'rtl', 'replace');

	// wp_enqueue_script('steam-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	// CUSTOM CSS
	wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css");
	wp_enqueue_style("font", "https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap");
	wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css");
	wp_enqueue_style("glider", "https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css");
	wp_enqueue_style("layout", get_template_directory_uri() . "/assets/css/layout.css");
	wp_enqueue_style("main", get_template_directory_uri() . "/assets/css/main.css");
	wp_enqueue_style("responsive", get_template_directory_uri() . "/assets/css/responsive.css");


	// CUSTOM JS
	wp_enqueue_script("jquery", "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js", array(), _S_VERSION, true);
	wp_enqueue_script("main", get_template_directory_uri() . "/assets/js/main.js", array(), _S_VERSION, true);
	wp_enqueue_script("glider", "https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js", array(), null, true);
	wp_enqueue_script("swiper-cdn", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js", array(), _S_VERSION, true);
	wp_enqueue_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js", array(), _S_VERSION, true);
	wp_enqueue_script("swiper", get_template_directory_uri() . "/assets/js/swiper.js", array(), _S_VERSION, true);
	wp_enqueue_script("modal", get_template_directory_uri() . "/assets/js/modal.js", array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'steam_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
// ====================================================================================
// добавим класс nav-item ко всем пунктам меню
add_filter('nav_menu_css_class', 'custom_nav_menu_css_class', 10, 1);
// получаем список всех классов пунктов меню
function custom_nav_menu_css_class($classes)
{
	// добавляем к списку классов свой класс nav-item
	$classes[] = 'nav-item';
	// возвращаем список классов уже с нашим классом
	return $classes;
}

// ------------------------------------------------------------------------

// повесим на все ссылки класс nav-link
add_filter('nav_menu_link_attributes', 'custom_nav_menu_link_attributes', 10, 1);
function custom_nav_menu_link_attributes($atts)
{
	$atts['class'] = 'nav-link';
	return $atts;
}
// ------------------------------------------------------------------------
// для добавление класса active на navbar
function add_additional_class_on_a($atts, $item, $args)
{
	if (isset($args->add_a_class)) {
		$atts['class'] = isset($atts['class']) ? $atts['class'] . ' ' . $args->add_a_class : $args->add_a_class;
	}
	// добавление класс актив
	if (in_array('current-menu-item', $item->classes) || in_array('current_page_item', $item->classes)) {
		$atts['class'] = isset($atts['class']) ? $atts['class'] . ' active' : 'active';
	}
	return $atts;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 10, 3);