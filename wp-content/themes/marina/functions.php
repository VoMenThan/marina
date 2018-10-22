<?php
define( 'THEME_URL', get_stylesheet_directory().'/' );

define( 'BASE_URL', get_template_directory_uri().'/' );
define( 'ASSET_URL', get_template_directory_uri().'/assets/' );

define( 'CORE', THEME_URL . 'core/' );

define( 'INC', THEME_URL . 'inc/' );


add_action('wp_enqueue_scripts', 'mt_bv_register_style');
function mt_bv_register_style(){
    $cssUrl = get_template_directory_uri().'/assets/css/';

	wp_enqueue_style('mt_bv_bootstrap', $cssUrl.'bootstrap.min.css', array(), '1.0');
	wp_enqueue_style('mt_bv_owl_carousel', $cssUrl.'owl.carousel.min.css', array(), '1.0');
	wp_enqueue_style('mt_bv_font_awesome', $cssUrl.'font-awesome.min.css', array(), '1.0');
	wp_enqueue_style('mt_bv_animate', $cssUrl.'animate.css', array(), '1.0');
	wp_enqueue_style('mt_bv_videojs', $cssUrl.'video-js.css', array(), '1.0');
	wp_enqueue_style('mt_bv_styles', $cssUrl.'styles.css', array(), '1.0');
}

/*nap js*/

add_action('wp_enqueue_scripts', 'mt_bv_register_js');
function mt_bv_register_js(){
    $jsUrl = get_template_directory_uri().'/assets/js/';
	wp_deregister_script('jquery');
    wp_register_script('jquery', $jsUrl.'jquery.min.js', array(), '1.0', true);
    wp_enqueue_script('jquery');
	wp_enqueue_script('mt_bv_bootstrap', $jsUrl.'bootstrap.min.js', array(), '1.0', true);
	wp_enqueue_script('mt_bv_owl_carousel', $jsUrl.'owl.carousel.min.js', array(), '1.0', true);
	wp_enqueue_script('mt_bv_jquery_matchheight', $jsUrl.'jquery.matchHeight-min.js', array(), '1.0', true);
	wp_enqueue_script('mt_bv_headroom', $jsUrl.'headroom.js', array(), '1.0', true);
	wp_enqueue_script('mt_bv_wowjs', $jsUrl.'wow.min.js', array(), '1.0', true);
	wp_enqueue_script('mt_bv_videojs', $jsUrl.'video.js', array(), '1.0', true);
}
add_filter('show_admin_bar', '__return_false');

if( ! function_exists( 'uri_segment' ) ) {
    function uri_segment($n = 0){
        $protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://';
        $full_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

        $url = str_replace( home_url() . '/', "", $full_url );
        $segments = explode('/', $url);
        return empty( $segments ) ? '' : $segments[$n];
    }
}

add_theme_support( 'post-thumbnails' );

?>