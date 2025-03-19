<?php
/**
 * qr_labs functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package qr_labs
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.6' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function qr_labs_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on qr_labs, use a find and replace
		* to change 'qr_labs' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'qr_labs', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'qr_labs' ),
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
			'qr_labs_custom_background_args',
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
// add_action( 'after_setup_theme', 'qr_labs_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function qr_labs_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'qr_labs_content_width', 640 );
}
add_action( 'after_setup_theme', 'qr_labs_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// function qr_labs_widgets_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => esc_html__( 'Sidebar', 'qr_labs' ),
// 			'id'            => 'sidebar-1',
// 			'description'   => esc_html__( 'Add widgets here.', 'qr_labs' ),
// 			'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 			'after_widget'  => '</section>',
// 			'before_title'  => '<h2 class="widget-title">',
// 			'after_title'   => '</h2>',
// 		)
// 	);
// }
// add_action( 'widgets_init', 'qr_labs_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function qr_labs_scripts() {
	wp_enqueue_style( 'qr_labs-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'qr_labs-style', 'rtl', 'replace' );

	// wp_enqueue_script( 'qr_labs-api', get_template_directory_uri() . '/js/qr_labs_api.js', array(), _S_VERSION, true );
	// wp_localize_script("qr_labs-api", "api_key", array(
    //     "secret" => "ffa81c7e-1a56-497b-8a7f-ef281c6b588d",
    //   )
    // );
}
add_action( 'wp_enqueue_scripts', 'qr_labs_scripts' );

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


update_option('api_key', 'ffa81c7e-1a56-497b-8a7f-ef281c6b588d');


function qrlab_add_ga() { ?>
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-F1FMR8Q3HF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-F1FMR8Q3HF');
</script>
<?php }

add_action( "wp_head", "qrlab_add_ga" );

// Handle adding dispensary options rows from 
function addDispensaryOptionsRows() {
	if (($handle = fopen(get_template_directory_uri() . "/csv/AZ_distribution_list.csv", "r")) !== FALSE) {
	  // Read the CSV file line by line
	  $i=0;
	  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
	  
	  $option_dispensary1 = "options_dispensaries_" . $i . "_dispensary_name";
	  $option_dispensary2 = "_options_dispensaries_" . $i . "_dispensary_name";
	  $option_license1 = "options_dispensaries_" . $i ."_license_number";
	  $option_license2 = "_options_dispensaries_" . $i . "_license_number";
	  $option_dispensary2_value = "field_659ecc5f91659";
	  $options_license2_value = "field_659ecc679165a";
		if (get_option($option_dispensary1 !== false)) {
	    update_option($option_dispensary1, $data[0]);
	    update_option($option_dispensary2, $option_dispensary2_value);
	    update_option($option_license1, $data[1]);
	    update_option($option_license2, $options_license2_value);
		} else {
	    add_option($option_dispensary1, $data[0], '', 'no');
	    add_option($option_dispensary2, $option_dispensary2_value, '', 'no');
	    add_option($option_license1, $data[1], '', 'no');
	    add_option($option_license2, $options_license2_value, '', 'no');
		}
	    $i++;
			$total_rows = get_option('options_dispensaries');
			if( $total_rows !== $i + 1 ) {
				update_option('options_dispenaries', $i+1);
			}
	  }
	  fclose($handle);
	  }
}

// addDispensaryOptionsRows();


add_filter('pre_set_site_transient_update_themes', 'automatic_GitHub_updates', 100, 1);
function automatic_GitHub_updates($data) {
  // Theme information
  $theme   = get_stylesheet(); // Folder name of the current theme
  $current = wp_get_theme()->get('Version'); // Get the version of the current theme
  // GitHub information
  $user = 'aolijar'; // The GitHub username hosting the repository
  $repo = 'aerizTheme'; // Repository name as it appears in the URL
  // Get the latest release tag from the repository. The User-Agent header must be sent, as per
  // GitHub's API documentation: https://developer.github.com/v3/#user-agent-required
  $file = @json_decode(@file_get_contents('https://api.github.com/repos/omniauti/labs.cc/releases', false,
      stream_context_create(['http' => ['header' => "User-Agent: ".$user."\r\n"]])
  ));
  if($file) {
	$update = filter_var($file[0]->tag_name, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    // Only return a response if the new version number is higher than the current version
    if($update > $current) {
  	  $data->response[$theme] = array(
	      'theme'       => $theme,
	      // Strip the version number of any non-alpha characters (excluding the period)
	      // This way you can still use tags like v1.1 or ver1.1 if desired
	      'new_version' => $update,
	      'url'         => 'https://api.github.com/repos/omniauti/labs.cc/releases',
	      'package'     => $file[0]->assets[0]->browser_download_url,
      );
    }
  }
  return $data;
};