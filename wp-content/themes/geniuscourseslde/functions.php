<?php
/**
 * GeniusCoursesLDE functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package GeniusCoursesLDE
 */

function geniuscourseslde_enqueue_scripts(){
	//? ХУКИ enqueue & register
	//wp_enqueue сразу выводят на сайт, wp_register_...() - регестрирут в системе указанный id, далее можно вызвать в удобном месте
	//*styles
// wp_enqueue_style('geniuscourseslde-general',get_template_directory_uri().'./assets/css/general.css',array(), '1.0', 'all' );//1-id, 2-path func, 3- dependencies array:array('name'), 4-script version, 5-media (для чего)
// wp_enqueue_style('animate');//если библиотека

//* Js scripts
// wp_enqueue_script('geniuscourseslde-script', get_template_directory_uri().'./assets/js/script.js', array(), '1.0', true);//1-id (название проэкта и название файла после тире), 2-path, 3-libs scripts array, 4-version, 5-place (где хотим подгружать файл, if true => footer)  

// регестрация id:
wp_register_style('geniuscourseslde-general',get_template_directory_uri().'./assets/css/general.css',array(), '1.0', 'all' );//1-id, 2-path func, 3- dependencies array:array('name'), 4-script version, 5-media (для чего)
// wp_register_style('animate');//если библиотека

//* Js scripts
wp_register_script('geniuscourseslde-script', get_template_directory_uri().'./assets/js/script.js', array(), '1.0', true);//1-id (название проэкта и название файла после тире), 2-path, 3-libs scripts array, 4-version, 5-place (где хотим подгружать файл, if true => footer)  

// если хотим подключить те что уже зарегестрированны, указываем только id
wp_enqueue_style('geniuscourseslde-general');
// wp_enqueue_script('geniuscourseslde-script');

//*запускать хуки можно по условию:
// if(is_singular()) {
// 	// wp_enqueue_script('geniuscourseslde-script');
// }; //если мы находимся на активной, а не на архивной странице

wp_enqueue_script('thickbox');

// для тогог что бы осталась возможность ответа на коментарий
if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
};
add_action('wp_enqueue_scripts', 'geniuscourseslde_enqueue_scripts'); //1-хук к котрому цепляем, 2- что хотим вывести, 3-приооритет;

function geniuscourseslde_show_meta(){
	echo"<meta name='author' content='markus'>";
};
add_action('wp_head', 'geniuscourseslde_show_meta');


//* третрий параметр у хуков это приоритет, чем больше приоритет тем нижу будет расположен скрипт в дом дереве
function geniuscourseslde_show_exText1(){
	echo"Hello 1";
};
function geniuscourseslde_show_exText2(){
	echo"Hello 2";
};
add_action('wp_footer', 'geniuscourseslde_show_exText1', 100);
add_action('wp_footer', 'geniuscourseslde_show_exText2', 10);


//для вывода класов на разных страницах
function geniuscourseslde_body_class($classes){
//$classes переменная для класов wordpress
// $classes[]= 'main_class';

//is_front() если это главная страница
if(is_front_page()){
$classes[]= 'main_class';
}else if(is_singular()){
	$classes[]= 'extra_class';
};

return $classes;
};

add_filter('body_class', 'geniuscourseslde_body_class');

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function geniuscourseslde_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on GeniusCoursesLDE, use a find and replace
		* to change 'geniuscourseslde' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'geniuscourseslde', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'geniuscourseslde' ),
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
			'geniuscourseslde_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'geniuscourseslde_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function geniuscourseslde_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'geniuscourseslde_content_width', 640 );
}
add_action( 'after_setup_theme', 'geniuscourseslde_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function geniuscourseslde_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'geniuscourseslde' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'geniuscourseslde' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'geniuscourseslde_widgets_init' );


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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

