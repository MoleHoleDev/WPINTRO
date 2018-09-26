<?php
// Add scripts and stylesheets
function startwordpress_scripts() {
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css', array(), '4.0.0b3' );
	//wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style( 'iconicboot', get_template_directory_uri() . '/css/open-iconic-bootstrap.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_style( 'pagepiling', get_template_directory_uri() . '/css/jquery.pagepiling.css' );
	wp_enqueue_style( 'hover', get_template_directory_uri() . '/css/hover-min.css' );
	wp_enqueue_style( 'lightslider', get_template_directory_uri() . '/css/lightslider.min.css' );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/slick/slick.css' );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/slick/slick-theme.css' );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

// Add Google Fonts
function startwordpress_google_fonts() {
				wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
				wp_enqueue_style( 'OpenSans');
		}

add_action('wp_print_styles', 'startwordpress_google_fonts');

// WordPress Titles
add_theme_support( 'title-tag' );


// Support Featured Images
add_theme_support( 'post-thumbnails' );

// funcje sekcji wykorzystane w index.php
function section_home()
{
	require 'sections/home.php';
}
function section_services()
{
	require 'sections/services.php';
}
function section_team()
{
	require 'sections/team.php';
}
function section_contact()
{
	require 'sections/contact.php';
}
function section_projects()
{
	require 'sections/projects.php';
}

include('customizer.php');
