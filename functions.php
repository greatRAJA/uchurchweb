<?php 

function wp_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js');
	wp_register_script( 'skroller', get_template_directory_uri() . '/js/skrollr.min.js');
	wp_register_script( '-main', get_template_directory_uri() . '/js/_main.js');
	wp_register_script( 'skroller-main', get_template_directory_uri() . '/js/main.js');
	wp_register_script( 'waypoints', get_template_directory_uri() . '/js/waypoints.js');
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
	wp_enqueue_script( 'skroller' );
	wp_enqueue_script( '-main');
	wp_enqueue_script( 'skroller-main');
	wp_enqueue_script( 'waypoints');

}
add_action( 'wp_enqueue_scripts', 'wp_scripts_with_jquery' );

//don't show admin bar on website, only on admin screen
show_admin_bar(false);


//show menu on wordpress admin screen (Appearance > Menus)
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
?>