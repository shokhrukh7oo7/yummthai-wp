<?php
/**
 * yummthai functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package yummthai
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
function yummthai_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on yummthai, use a find and replace
	 * to change 'yummthai' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('yummthai', get_template_directory() . '/languages');

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
			'menu-1' => esc_html__('Primary', 'yummthai'),
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
			'yummthai_custom_background_args',
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
add_action('after_setup_theme', 'yummthai_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function yummthai_content_width()
{
	$GLOBALS['content_width'] = apply_filters('yummthai_content_width', 640);
}
add_action('after_setup_theme', 'yummthai_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function yummthai_widgets_init()
{
	register_sidebar(
		array(
			'name' => esc_html__('Sidebar', 'yummthai'),
			'id' => 'sidebar-1',
			'description' => esc_html__('Add widgets here.', 'yummthai'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}
add_action('widgets_init', 'yummthai_widgets_init');

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

// ====================================================================================
//  ОТКЛЮЧАЕМ jquery для подключение свой jquery
function disable_default_jquery()
{
	wp_deregister_script('jquery');
}
add_action('wp_enqueue_scripts', 'disable_default_jquery');
// ====================================================================================
function yummthai_scripts()
{
	wp_enqueue_style('yummthai-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('yummthai-style', 'rtl', 'replace');
	wp_enqueue_script('yummthai-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);


	wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION);
	wp_enqueue_style('swiper-bundle.min', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.2.1');

	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);
	wp_enqueue_script('upper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', array(), '2.11.6', true);
	wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array(), '4.5.2', true);
	wp_enqueue_script('swiper-bundle-min', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.2.1', true);
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'yummthai_scripts');

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

// ====================================================================================
// функция что бы оставить только дату в новостях
// function yummthai_posted_on()
// {
// 	echo '<span class="posted-on">' . get_the_date('d.m.Y') . '</span>';
// }
function yummthai_posted_on()
{
	// Получаем текущий язык через Polylang
	$current_language = pll_current_language();

	// Массив с переводами для разных языков
	$translations = array(
		'en' => 'Posted on',
		'ru' => 'Опубликовано'
	);

	// Получаем перевод для текущего языка, если он есть, или английский по умолчанию
	$posted_on_text = isset($translations[$current_language]) ? $translations[$current_language] : $translations['en'];

	// Выводим дату с соответствующим текстом
	echo '<span class="posted-on">' . $posted_on_text . ' ' . get_the_date('d.m.Y') . '</span>';
}

// ====================================================================================
// Header start
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' => 'Настройка шапки',
		'menu_title' => 'Настройка шапки',
		'menu_slug' => 'header-settings',
		'capability' => 'edit_posts',
		'redirect' => false
	));
}
// Header end

// Modal start
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' => 'Настройка модального окна',
		'menu_title' => 'Настройка модального окна',
		'menu_slug' => 'modal-settings',
		'capability' => 'edit_posts',
		'redirect' => false
	));
}
// Modal end

// Footer start
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' => 'Настройка подвала',
		'menu_title' => 'Настройка подвала',
		'menu_slug' => 'footer-setitng',
		'capability' => 'edit_posts',
		'redirect' => false
	));
}
// Footer end
// ====================================================================================

function transliterate($text) {
    $translit_table = [
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',
        'е' => 'e', 'ё' => 'e', 'ж' => 'zh', 'з' => 'z', 'и' => 'i',
        'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n',
        'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
        'у' => 'u', 'ф' => 'f', 'х' => 'kh', 'ц' => 'ts', 'ч' => 'ch',
        'ш' => 'sh', 'щ' => 'shch', 'ъ' => '', 'ы' => 'y', 'ь' => '',
        'э' => 'e', 'ю' => 'yu', 'я' => 'ya'
    ];

    $text = mb_strtolower($text, 'UTF-8');
    $text = strtr($text, $translit_table);
    $text = preg_replace('/[^a-z0-9-]+/', '-', $text);
    $text = trim($text, '-');
    return $text;
}

function add_custom_classes_to_content($content) {
    $GLOBALS['toc_headings'] = []; // Очищаем перед обработкой

    $content = preg_replace_callback('/<h([1-6])>(.*?)<\/h\1>/i', function ($matches) {
        $level = $matches[1];
        $text = trim(strip_tags($matches[2])); // Убираем HTML-теги
        $id = transliterate($text); // Транслитерация заголовка

        // Сохраняем заголовок в глобальный массив
        $GLOBALS['toc_headings'][] = ['id' => $id, 'title' => $text];

        return "<h$level id='$id' class='custom-heading-$level'>$text</h$level>";
    }, $content);

    return $content;
}
add_filter('the_content', 'add_custom_classes_to_content');
// ====================================================================================