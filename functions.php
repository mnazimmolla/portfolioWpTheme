<?php 
add_theme_support('post-thumbnails'); 

require_once('codestar/codestar-framework-1.0.1/cs-framework.php');
function add_css_js(){
	//wp_enqueque_script('name', get_template_directory_uri().'/folder/subfolder/file', array(), 'version', 'all');
	
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), 'version', 'all');
	wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.min.css', array(), 'version', 'all');
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css', array(), 'version', 'all');
	wp_enqueue_style('lightbox', get_template_directory_uri().'/css/lightbox.css', array(), 'version', 'all');
	wp_enqueue_style('main', get_template_directory_uri().'/css/main.css', array(), 'version', 'all');
	wp_enqueue_style('preset1', get_template_directory_uri().'/css/presets/preset1.css', array(), 'version', 'all');
	wp_enqueue_style('responsive', get_template_directory_uri().'/css/responsive.css', array(), 'version', 'all');
	wp_enqueue_style('googleapis', get_template_directory_uri().'/http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700', array(), 'version', 'all');
	
	
	//wp_enqueue_script('responsive', get_template_directory_uri().'/js/responsive.css', array(), 'version', true);
	
	wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.js', array(jquery), 'version', true);
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array(jquery), 'version', true);
	wp_enqueue_script('google', get_template_directory_uri().'//maps.google.com/maps/api/js?sensor=true', array(jquery), 'version', true);
	wp_enqueue_script('inview', get_template_directory_uri().'/js/jquery.inview.min.js', array(jquery), 'version', true);
	wp_enqueue_script('wow', get_template_directory_uri().'/js/wow.min.js', array(jquery), 'version', true);
	wp_enqueue_script('mousescroll', get_template_directory_uri().'/js/mousescroll.js', array(jquery), 'version', true);
	wp_enqueue_script('smoothscroll', get_template_directory_uri().'/js/smoothscroll.js', array(jquery), 'version', true);
	wp_enqueue_script('countTo', get_template_directory_uri().'/js/jquery.countTo.js', array(jquery), 'version', true);
	wp_enqueue_script('lightbox', get_template_directory_uri().'/js/lightbox.min.js', array(jquery), 'version', true);
	wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(jquery), 'version', true);
	
}
add_action('wp_enqueue_scripts','add_css_js');

