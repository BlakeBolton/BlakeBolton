<?php

// Creates the Menus
function gymfitness_menus() {
    register_nav_menus( array(
        'main-menu' => 'Main Menu'
    ) );
}
add_action('init', 'gymfitness_menus' ); 

// Stylesheets and JS Files
function blakebolton_files() {
    // CSS FILES
    // Main Stylesheet
    wp_enqueue_style('blakebolton_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('blakebolton_extra_styles', get_theme_file_uri('/build/index.css'));

    // Google font
    wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css2?family=Nunito&display=swap', array(), '1.0.0' );

    // SPLIDE
    wp_enqueue_style('splide-css', get_theme_file_uri() . '/css/splide.min.css', array(), '2.4.20' );

    //FONTAWESOME
    wp_enqueue_style('fontawesome', get_theme_file_uri() . '/css/fontawesome.scss', array(), '5.15.4' );

    // JS FILES
    // SCRIPTS.JS
    wp_enqueue_script('scripts', get_theme_file_uri() . '/build/index.js', array('jquery'), '1.0.0', true );


    wp_localize_script('scripts', 'scriptsData', array(
        'root_url' => get_site_url(),
        'nonce' => wp_create_nonce('wp_rest')
      ));

}
add_action('wp_enqueue_scripts', 'blakebolton_files');

// Enable Feature images and other stuff
function blakebolton_setup() {

    // Register new image size
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('box', 400, 375, true);
    add_image_size('mediumSize', 700, 400, true );
    add_image_size('blog', 966, 644, true);
    add_image_size('portfolio', 400, 200, true);
    add_image_size('testimonials', 60, 60, true);

    // Add featured image
    add_theme_support('post-thumbnails');

    // SEO Titles
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'blakebolton_setup'); // When the theme is activated and ready!

/** Displays the Hero image on background of the front-page **/
function blakebolton_hero_image() {
    $front_page_id = get_option('page_on_front');
    $image_id = get_field('hero_image', $front_page_id);

    $image = $image_id['url'];

    // Create a "FALSE" stylesheet
    wp_register_style('custom', false);
    wp_enqueue_style('custom');

    $featured_image_css = "
        body.home .site-header__large-hero {
            background-image: linear-gradient( rgba(0,0,0, 0.40), rgba(0,0,0, 0.40) ), url( $image );
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;  
        }
    ";
    wp_add_inline_style('custom', $featured_image_css);
}
add_action('init', 'blakebolton_hero_image');