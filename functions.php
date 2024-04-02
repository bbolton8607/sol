<?php

/**
 * Sol functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sol
 */

// Register Custom Navigation Walker
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function register_customizer(){
	require_once get_template_directory() . '/inc/customizer.php';
}
add_action( 'after_setup_theme', 'register_customizer' );

// Enqueue scripts and styles.

 function sol_scripts(){
   // Bootstrap js and css files
   wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery' ), '4.5.3', true );
   wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.5.3' , 'all' );

   // Theme's main stylesheet
   wp_enqueue_style( 'sol-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );

   // Google Fonts
   wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Rajdhani:400,500,600,700|Seaweed+Script' );

   // Font Awesome
   wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
 
   // Flexslider JS and CSS files
   wp_enqueue_script( 'flexslider-min-js', get_template_directory_uri() . '/inc/flexslider/jquery.flexslider-min.js', array( 'jquery' ), '', true );
   wp_enqueue_style( 'flexslider-css', get_template_directory_uri() . '/inc/flexslider/flexslider.css', array(), '', 'all' );
   wp_enqueue_script( 'flexslider-js', get_template_directory_uri() . '/inc/flexslider/flexslider.js', array( 'jquery' ), '', true );

  }
 add_action( 'wp_enqueue_scripts', 'sol_scripts' );

 function sol_config(){

  // This theme uses wp_nav_menu() in 2 locations
  register_nav_menus(
    array(
      'sol_main_menu'   => esc_html__( 'Sol Main Menu', 'sol' ),
      'sol_footer_menu' => esc_html__( 'Sol Footer Menu', 'sol' ),
    )
  );

  $textdomain = 'sol';
  load_theme_textdomain( $textdomain, get_stylesheet_directory() . '/languages/' );
  load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' );
  

  // This theme is WooCommerce compatible, so we're adding support to WooCommerce
  add_theme_support( 'woocommerce', array(
    'thumbnail_image_width' => 255,
    'single_image_width'    => 255,
    'product_grid'          => array(
      'default_rows'      => 10,
      'min_rows'          => 5,
      'max_rows'          => 10,
      'default_columns'   => 1,
      'min_columns'       => 1,
      'max_columns'       => 1,
     )
  ) );
  add_theme_support( 'wc-product-gallery-zoom' );
  add_theme_support( 'wc-product-gallery-lightbox' );
  add_theme_support( 'wc-product-gallery-slider' );

  add_theme_support( 'custom-logo', array(
    'height'    => 85,
    'width'     => 160,
    'flex_height' => true,
    'flex_width'  => true,
  ) );

  add_theme_support( 'post-thumbnails' );
  add_image_size( 'sol-slider', 1920, 800, array( 'center', 'center' ) );
  add_image_size( 'sol-blog', 960, 640, array( 'center', 'center' ) );
  add_image_size( 'sol-cust-reviews', 1920, 600, array( 'center', 'center' ) );

  if ( ! isset( $content_width ) ) {
    $content_width = 600;
  }

  add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'sol_config', 0 );

if( class_exists( 'WooCommerce' )){
  require get_template_directory() . '/inc/wc-modifications.php';
}

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'sol_woocommerce_header_add_to_cart_fragment' );

function sol_woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
	<?php
	$fragments['span.items'] = ob_get_clean();
	return $fragments;
}

add_action( 'widgets_init', 'sol_sidebars' );
function sol_sidebars(){
  register_sidebar( array(
    'name'          => esc_html__( 'Sol Main Sidebar', 'sol' ),
    'id'            => 'sol-sidebar-1',
    'description'   => esc_html__( 'Drag and drop your widgets here.', 'sol' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar Shop', 'sol' ),
    'id'            => 'sol-sidebar-shop',
    'description'   => esc_html__( 'Drag and drop your widgets here.', 'sol' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__('Footer Sidebar 1', 'sol' ),
    'id'            => 'sol-sidebar-footer1',
    'description'   => esc_html__( 'Drag and drop your widgets here.', 'sol' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Sidebar 2', 'sol' ),
    'id'            => 'sol-sidebar-footer2',
    'description'   => esc_html__( 'Drag and drop your widgets here.', 'sol' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Sidebar 3', 'sol' ),
    'id'            => 'sol-sidebar-footer3',
    'description'   => esc_html__( 'Drag and drop your widgets here.', 'sol' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Sidebar 4', 'sol' ),
    'id'            => 'sol-sidebar-footer4',
    'description'   => esc_html__( 'Drag and drop your widgets here.', 'sol' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ) );

}
