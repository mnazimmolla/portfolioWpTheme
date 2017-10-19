
 
 
 <?php 

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
 if( is_plugin_active( 'every-demo-importer/init.php' )){

	$settings      = array(
	  'menu_title'  => __('Every Demo Importer', 'every'),
	  'menu_type'   => 'menu',
	  'menu_slug'   => 'dt_demo_importer',
	);
	$options        = array(
		'demo-1' => array(
		  'title'         => __('Demo 1', 'every'),
		  'preview_url'   => 'http://helloxpart.com/wp/',
		  'front_page'    => 'Home',
		  'blog_page'     => 'Blog',
		  'menus'         => array(
				'header_menu' => 'Header Menu',
				'footer_menu' => 'Footer Menu',
			)
		),
		'demo-2' => array(
		  'title'         => __('Demo 2', 'reflex'),
		  'preview_url'   => 'http://helloxpart.com/wp/',
		  'front_page'    => 'Home',
		  'blog_page'     => 'Blog',
		  'menus'         => array(
				'header_menu' => 'Header Menu',
				'footer_menu' => 'Footer Menu',
			)
		),		
	);
	DT_Demo_Importer::instance($settings, $options);
}