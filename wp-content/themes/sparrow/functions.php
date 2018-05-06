<?php 

add_action('wp_enqueue_scripts', 'styles');
add_action('wp_enqueue_scripts', 'scripts');
add_action('after_setup_theme', 'myMenu');
add_action('widgets_init', 'register_my_widgets');



function register_my_widgets(){
	register_sidebar( array(
		'name'          => 'Left sidebar',
		'id'            => "left_sidebar",
		'description'   => 'Описание сайдбара',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h5 class="widgettitle">',
		'after_title'   => "</h5>\n",
	) );
}




function myMenu(){
	register_nav_menu( 'topMenu', 'Меню в шапке' );
	register_nav_menu( 'footerMenu', 'Меню в подвале' );

	register_nav_menu( 'social', 'Соц меню' );
}


function styles()
{
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('default', get_template_directory_uri().'/assets/css/default.css');

	wp_enqueue_style('fonts', get_template_directory_uri().'/assets/css/fonts.css');

	wp_enqueue_style('layout', get_template_directory_uri().'/assets/css/layout.css');

	wp_enqueue_style('media-queries', get_template_directory_uri().'/assets/css/media-queries.css');

}

function scripts()
{
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'flexslider', get_template_directory_uri().'/assets/js/jquery.flexslider.js',['jquery'],null,true);

	wp_enqueue_script( 'doubletaptogo', get_template_directory_uri().'/assets/js/doubletaptogo.js',['jquery'],null,true);

	wp_enqueue_script( 'init', get_template_directory_uri().'/assets/js/init.js',['jquery'],null,true);
	
	wp_enqueue_script( 'modernizr', get_template_directory_uri().'/assets/js/modernizr.js',['jquery'],null,false);


}