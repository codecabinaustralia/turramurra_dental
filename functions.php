<?php
/**
 * SurfPacific functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SurfPacific
 */

if ( ! defined( 'surfpacific_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'surfpacific_VERSION', '1.0.0' );
}

if ( ! function_exists( 'surfpacific_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function surfpacific_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on SurfPacific, use a find and replace
		 * to change 'surfpacific' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'surfpacific', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'surfpacific' ),
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
				'surfpacific_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'surfpacific_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function surfpacific_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'surfpacific_content_width', 640 );
}
add_action( 'after_setup_theme', 'surfpacific_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function surfpacific_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'surfpacific' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'surfpacific' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'surfpacific_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function surfpacific_scripts() {
	wp_enqueue_style('surfpacific-style', get_template_directory_uri() . '/assets/css/main.css', array() );
	wp_enqueue_style( 'surfpacific-style', get_stylesheet_uri(), array(), surfpacific_VERSION );
	wp_style_add_data( 'surfpacific-style', 'rtl', 'replace' );

	wp_enqueue_script( 'surfpacific-navigation', get_template_directory_uri() . '/js/navigation.js', array(), surfpacific_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'surfpacific_scripts' );

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

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

		
        acf_register_block_type(array(
            'name'              => 'sp-text-logo-block',
            'title'             => __('SP Text Logo Block'),
            'description'       => __(''),
            'render_template'   => 'template-parts/blocks/sections/sp-text-logo-block.php',
            'category'          => 'formatting',
            'icon'              => 'dashicons-superhero-alt',
            'keywords'          => array( 'text', 'logo' ),
		));

		acf_register_block_type(array(
            'name'              => 'sp-team-block',
            'title'             => __('SP Team Block'),
            'description'       => __(''),
            'render_template'   => 'template-parts/blocks/sections/sp-team-block.php',
            'category'          => 'formatting',
            'icon'              => 'dashicons-superhero-alt',
            'keywords'          => array( 'team' ),
		));

		acf_register_block_type(array(
            'name'              => 'sp-downloads-block',
            'title'             => __('SP Downloads Block'),
            'description'       => __(''),
            'render_template'   => 'template-parts/blocks/sections/sp-downloads-block.php',
            'category'          => 'formatting',
            'icon'              => 'dashicons-superhero-alt',
            'keywords'          => array( 'downloads' ),
		));

		acf_register_block_type(array(
            'name'              => 'sp-forms-half',
            'title'             => __('SP Half Page Form'),
            'description'       => __(''),
            'render_template'   => 'template-parts/blocks/sections/sp-forms-half.php',
            'category'          => 'formatting',
            'icon'              => 'dashicons-superhero-alt',
            'keywords'          => array( 'form' ),
		));

		acf_register_block_type(array(
            'name'              => 'sp-cta-white-banner',
            'title'             => __('SP CTA White Banner'),
            'description'       => __(''),
            'render_template'   => 'template-parts/blocks/sections/sp-cta-white-banner.php',
            'category'          => 'formatting',
            'icon'              => 'dashicons-superhero-alt',
            'keywords'          => array( 'cta' ),
		));

        acf_register_block_type(array(
            'name'              => 'sp-latest-post-full',
            'title'             => __('SP Latest Blog Post Full'),
            'description'       => __(''),
            'render_template'   => 'template-parts/blocks/sections/sp-latest-post-full.php',
            'category'          => 'formatting',
            'icon'              => 'dashicons-superhero-alt',
            'keywords'          => array( 'blog' ),
		));


        acf_register_block_type(array(
            'name'              => 'sp-map-half-full',
            'title'             => __('SP Map Half Full'),
            'description'       => __(''),
            'render_template'   => 'template-parts/blocks/sections/sp-map-half-full.php',
            'category'          => 'formatting',
            'icon'              => 'dashicons-superhero-alt',
            'keywords'          => array( 'map', 'contact' ),
		));

        acf_register_block_type(array(
            'name'              => 'sp-carousel-full',
            'title'             => __('SP Carouse Full'),
            'description'       => __(''),
            'render_template'   => 'template-parts/blocks/sections/sp-carousel-full.php',
            'category'          => 'formatting',
            'icon'              => 'dashicons-superhero-alt',
            'keywords'          => array( 'slider', 'carousel' ),
		));

		acf_register_block_type(array(
            'name'              => 'sp-header-3quarter',
            'title'             => __('SP 3 Quarter Header'),
            'description'       => __(''),
            'render_template'   => 'template-parts/blocks/sections/sp-header-3quarter.php',
            'category'          => 'formatting',
            'icon'              => 'dashicons-superhero-alt',
            'keywords'          => array( 'slider', 'carousel', 'sevices' ),
		));
		
        acf_register_block_type(array(
            'name'              => 'innerHeader',
            'title'             => __('Inner header'),
            'description'       => __('Inner head panel'),
            'render_template'   => 'template-parts/blocks/headers/innerHeader.php',
            'category'          => 'formatting',
            'icon'              => 'dashicons-superhero-alt',
            'keywords'          => array( 'slider', 'carousel', 'sevices' ),
		));
		// Text blocks
		acf_register_block_type(array(
            'name'              => 'sp-content-enquiry',
            'title'             => __('SP Content Enquiry'),
            'description'       => __(''),
            'render_template'   => 'template-parts/blocks/sections/sp-content-enquiry.php',
            'category'          => 'formatting',
            'icon'              => 'dashicons-superhero-alt',
            'keywords'          => array( 'text', 'content', 'enquiry' ),
		));
		acf_register_block_type(array(
            'name'              => 'sp-content-sidenav',
            'title'             => __('SP Side Nav'),
            'description'       => __(''),
            'render_template'   => 'template-parts/blocks/sections/sp-content-sidenav.php',
            'category'          => 'formatting',
            'icon'              => 'dashicons-superhero-alt',
            'keywords'          => array( 'text', 'content', 'sidenav' ),
		));
		
		
    }
}

