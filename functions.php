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
			'footer_left' => esc_html__('Footer Left Menu', 'steam'),
			'footer_right' => esc_html__('Footer Right Menu', 'steam'),
		)
	);
	add_filter('wp_nav_menu_args', 'customize_nav_menu_args');
	function customize_nav_menu_args($args)
	{
		if ($args['theme_location'] === 'footer_left') {
			$args['container'] = false;
		}
		return $args;
	}

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
	register_sidebar(
		array(
			'name' => esc_html__('Контакты в подвале', 'steam'),
			'id' => 'sidebar-footer-contacts',
			'description' => esc_html__('Вставле доступные виджеты сюда.', 'steam'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h2">',
			'after_title' => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name' => esc_html__('Контакты в подвале сервис-центр', 'steam'),
			'id' => 'sidebar-footer-contacts-2',
			'description' => esc_html__('Вставле доступные виджеты сюда.', 'steam'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h2">',
			'after_title' => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name' => esc_html__('Заказ звонка', 'steam'),
			'id' => 'sidebar-footer-order-call',
			'description' => esc_html__('Вставле доступные виджеты сюда.', 'steam'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
		)
	);
}
add_action('widgets_init', 'steam_widgets_init');
// ====================================================================================
// Options footer start
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' => 'Настройки футера',
		'menu_title' => 'Настройки футера',
		'menu_slug' => 'footer-settings',
		'capability' => 'edit_posts',
		'redirect' => false
	));
}
// Options footer end
// ====================================================================================
// Добавил в виджет тект и спомощью этого функии добавили класс.
function add_class_to_widget_title($title, $instance, $id_base)
{
	// Проверяем, что это нужный виджет (по ID или названию)
	if ($id_base === 'text' && strpos($title, 'Контакты') !== false) {
		$title = '<h3 class="footer-middle-header">' . $title . '</h3>';
	}
	return $title;
}
add_filter('widget_title', 'add_class_to_widget_title', 10, 3);

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
// Каталог товаров steam (панель управление)
function create_catalog_post_type()
{
	register_post_type(
		'catalog_steam',
		array(
			'labels' => array(
				'name' => __('Каталог Steam'),
				'singular_name' => __('Каталог Steam')
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array('title', 'editor', 'thumbnail'),
			'menu_icon' => 'dashicons-products',
		)
	);
}
add_action('init', 'create_catalog_post_type');

// ====================================================================================

// ====================================================================================
// Category (tabs)
function register_post_types()
{
	register_post_type('portfolio', [
		'label' => null,
		'labels' => [
			'name' => 'Категория',
			'singular_name' => 'Категория',
			'add_new' => 'Добавить категорию',
			'add_new_item' => 'Добавление категории',
			'edit_item' => 'Редактирование категории',
			'new_item' => 'Новая категория',
			'view_item' => 'Смотреть категорию',
			'search_items' => 'Искать категорию',
			'not_found' => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'parent_item_colon' => '',
			'menu_name' => 'Категория',
		],
		'public' => true,
		'hierarchical' => false,
		'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
		'taxonomies' => ['portfolio_category'], // Добавление таксономии
		'has_archive' => false,
	]);

}
add_action('init', 'register_post_types');


// Убедитесь, что таксономия 'category' зарегистрирована для кастомного типа записи// Регистрация новой таксономии
function register_portfolio_taxonomy()
{
	$labels = array(
		'name' => 'Категория',
		'singular_name' => 'Категория',
		'search_items' => 'Search Portfolio Categories',
		'all_items' => 'All Portfolio Categories',
		'parent_item' => 'Parent Portfolio Category',
		'parent_item_colon' => 'Parent Portfolio Category:',
		'edit_item' => 'Edit Portfolio Category',
		'update_item' => 'Update Portfolio Category',
		'add_new_item' => 'Add New Portfolio Category',
		'new_item_name' => 'New Portfolio Category Name',
		'menu_name' => 'Категория',
	);

	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'add-category'),
	);

	register_taxonomy('portfolio_category', array('portfolio'), $args);
}
add_action('init', 'register_portfolio_taxonomy');
// ====================================================================================
// Аксессуары (панель управление)
function create_products_post_type()
{
	register_post_type(
		'products',
		array(
			'labels' => array(
				'name' => __('Товары'),
				'singular_name' => __('Товары'),
				'add_new' => 'Добавить Товаров',
				'add_new_item' => 'Добавление Товаров',
				'edit_item' => 'Редактирование Товаров',
				'new_item' => 'Новые Товары',
				'view_item' => 'Смотреть Товары',
				'search_items' => 'Искать Товары',
				'not_found' => 'Не найдено',
				'not_found_in_trash' => 'Не найдено в корзине',
				'parent_item_colon' => '',
				'menu_name' => 'Товары',
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array('title', 'editor', 'thumbnail'),
			'menu_icon' => 'dashicons-admin-customizer',
		)
	);

	// Регистрируем таксономию для рубрик
	register_taxonomy('products_category', 'products', array(
		'labels' => array(
			'name' => __('Рубрики товаров'),
			'singular_name' => __('Рубрика товара'),
			'search_items' => __('Искать рубрики'),
			'all_items' => __('Все рубрики'),
			'parent_item' => __('Родительская рубрика'),
			'parent_item_colon' => __('Родительская рубрика:'),
			'edit_item' => __('Редактировать рубрику'),
			'update_item' => __('Обновить рубрику'),
			'add_new_item' => __('Добавить новую рубрику'),
			'new_item_name' => __('Название новой рубрики'),
			'menu_name' => __('Рубрики'),
		),
		'hierarchical' => true, // Делает таксономию древовидной, как категории
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'products-category', 'with_front' => false, ),
	));
	// Регистрируем таксономию для рубрик
	register_taxonomy('product_tags', 'products', array(
		'labels' => array(
			'name' => __('Теги товаров'),
			'singular_name' => __('Теги товара'),
			'search_items' => __('Искать Теги'),
			'all_items' => __('Все Теги'),
			'parent_item' => __('Родительская Теги'),
			'parent_item_colon' => __('Родительская Теги:'),
			'edit_item' => __('Редактировать Теги'),
			'update_item' => __('Обновить Теги'),
			'add_new_item' => __('Добавить новую Теги'),
			'new_item_name' => __('Название новой Теги'),
			'menu_name' => __('Теги'),
		),
		'hierarchical' => false, // Делает таксономию древовидной, как категории
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'product-tags'),
	));
	// Регистрируем таксономию для рубрик
	register_taxonomy('product_accessories', 'products', array(
		'labels' => array(
			'name' => __('Аксессуар товаров'),
			'singular_name' => __('Аксессуар товара'),
			'search_items' => __('Искать Аксессуар'),
			'all_items' => __('Все Аксессуар'),
			'parent_item' => __('Родительская Аксессуар'),
			'parent_item_colon' => __('Родительская Аксессуар:'),
			'edit_item' => __('Редактировать Аксессуар'),
			'update_item' => __('Обновить Аксессуар'),
			'add_new_item' => __('Добавить новую Аксессуар'),
			'new_item_name' => __('Название новой Аксессуар'),
			'menu_name' => __('Аксессуар'),
		),
		'hierarchical' => false, // Делает таксономию древовидной, как категории
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'product-accessories'),
	));
}
add_action('init', 'create_products_post_type');

// ====================================================================================
add_filter('nav_menu_css_class', 'custom_footer_menu_css_class', 10, 1);

function custom_footer_menu_css_class($classes)
{
	$classes[] = 'link';
	return $classes;
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