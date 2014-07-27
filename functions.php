<?php 

function wp_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js');
	wp_register_script( 'full-calendar', get_template_directory_uri() . '/js/fullcalendar.js');
	wp_register_script( 'google-calendar', get_template_directory_uri() . '/js/gcal.js');
	wp_register_script( 'main', get_template_directory_uri() . '/js/main.js');
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
	wp_enqueue_script( 'full-calendar');
	wp_enqueue_script( 'google-calendar');
	wp_enqueue_script( 'main');
}
add_action( 'wp_enqueue_scripts', 'wp_scripts_with_jquery' );

//don't show admin bar on website, only on admin screen
show_admin_bar(false);

require_once('wp_bootstrap_navwalker.php');

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

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

function wpse_wpautop_nobr( $content ) {
    return wpautop( $content, false );
}

add_filter( 'the_content', 'wpse_wpautop_nobr' );
add_filter( 'the_excerpt', 'wpse_wpautop_nobr' );
?>