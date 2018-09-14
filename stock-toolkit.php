<?php
/*
plugin name:stock-toolkit
*/

// Exit if accessed directly
if ( !defined('ABSPATH')){
	exit;
}

//Define
define('STOCK_ACC_URL', WP_PLUGIN_URL . '/' . plugin_basename( dirname( __FILE__ )) .'/');
define('STOCK_ACC_PATH', plugin_dir_path( __FILE__ ));

function stock_toolkit_get_slide_as_list(){

	$args = wp_parse_args(array(
		'post_type'		=>'slide',
		'post_per_page'	=>-1,
	));
	$posts = get_posts($args);

	$post_options = array(esc_html__('--select slide--','stock-toolkit')=>'');
	if($posts){
		foreach ($posts as $post) {
			$post_options[$post ->post_title] = $post->ID;
		}
	}
	return $post_options;
}
function stock_toolkit_get_page_as_list(){

	$args = wp_parse_args(array(
		'post_type'		=>'page',
		'post_per_page'	=>-1,
	));
	$posts = get_posts($args);

	$post_options = array(esc_html__('--select page--','stock-toolkit')=>'');
	if($posts){
		foreach ($posts as $post) {
			$post_options[$post ->post_title] = $post->ID;
		}
	}
	return $post_options;
}


//custom post type

function stock_theme_custom_slide(){
register_post_type('slide',array(
	'public'		=>false,
	'show_ui'		=>true,
	'labels'		=>array(
		'name'		=>'Slider',
		'singular_name'=>'Slider',

	),
	'supports'	=>array('editor','thumbnail','title','page-attributes')

));
register_post_type('project',array(
	'public'		=>true,
	'labels'		=>array(
		'name'		=>'Projects',
		'singular_name'=>'Project',

	),
	'supports'	=>array('editor','thumbnail','title','page-attributes')

));

}
add_action('init','stock_theme_custom_slide');
function stock_toolkit_custom_post_taxonomy() {
    register_taxonomy(
        'project_cat',  
        'project',                  
        array(
            'hierarchical'          => true,
            'label'                 => 'project Category',  
            'query_var'             => true,
            'show_admin_column'     => true,
            'rewrite'               => array(
                'slug'              => 'project-category', 
                'with_front'    => true 
                )
            )
    );
}
add_action( 'init', 'stock_toolkit_custom_post_taxonomy');

//client work
function custom_post(){
	register_post_type('Custom-post',array(
	'public'		=>true,
	'labels'		=>array(
		'name'		=>'Custom-post',
		'singular_name'=>'custom-post',

	),
	'supports'	=>array('editor','thumbnail','title','page-attributes','post-formats')

));

}
add_action('init','custom_post');

//print shortcodes in widgets

add_filter('widget_text','do_shortcode');



//Loging VC addons
require_once(STOCK_ACC_PATH .'vc-addons/vc-blocks-load.php');

//Theme shortcodes

require_once(STOCK_ACC_PATH .'theme-shortcodes/slides-shortcode.php'); 
require_once(STOCK_ACC_PATH .'theme-shortcodes/logo-carousel-shortcode.php'); 
require_once(STOCK_ACC_PATH .'theme-shortcodes/service-shortcode.php'); 
require_once(STOCK_ACC_PATH .'theme-shortcodes/cta-shortcode.php'); 
require_once(STOCK_ACC_PATH .'theme-shortcodes/stock-btn-shortcode.php'); 
require_once(STOCK_ACC_PATH .'theme-shortcodes/stat-shortcode.php'); 
require_once(STOCK_ACC_PATH .'theme-shortcodes/testmonial-shortcode.php'); 
require_once(STOCK_ACC_PATH .'theme-shortcodes/styled-map-shortcode.php'); 
require_once(STOCK_ACC_PATH .'theme-shortcodes/tile-gallery-shortcode.php'); 
require_once(STOCK_ACC_PATH .'theme-shortcodes/video-shortcode.php'); 
require_once(STOCK_ACC_PATH .'theme-shortcodes/promo-box-shortcode.php'); 
require_once(STOCK_ACC_PATH .'theme-shortcodes/project-shortcode.php'); 
//for client work
require_once(STOCK_ACC_PATH .'assets/CMB2/init.php'); 
require_once(STOCK_ACC_PATH .'assets/CMB2/custom.php'); 


// shortcodes depended on visual composer

include_once(ABSPATH .'wp-admin/includes/plugin.php');
if (is_plugin_active('js_composer/js_composer.php')){
	require_once(STOCK_ACC_PATH .'theme-shortcodes/staff-shortcode.php');
}

//registering stock toolkit files
function stock_toolkit_files(){
	wp_enqueue_style('owl-carousel',plugin_dir_url( __FILE__ ) .'/assets/css/owl.carousel.css');
	wp_enqueue_style('stock',plugin_dir_url( __FILE__ ) .'/assets/css/stock.css');
	wp_enqueue_script('owl-carousel',plugin_dir_url( __FILE__ ) .'/assets/js/owl.carousel.min.js',array('jquery'),'4.0',true);
	wp_enqueue_script('gmap3',plugin_dir_url( __FILE__ ) .'/assets/js/gmap3.min.js',array('jquery'),'4.0',true);
	wp_enqueue_script('isotop',plugin_dir_url( __FILE__ ) .'/assets/js/isotop.3.0.4.min.js',array('jquery'),'3.0.4',true);
       
}
add_action('wp_enqueue_scripts','stock_toolkit_files');