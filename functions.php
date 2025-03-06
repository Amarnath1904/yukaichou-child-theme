<?php
function yukaichou_child_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'yukaichou_child_enqueue_styles');

// Add custom styles
function yukaichou_enqueue_styles() {
    // Load parent theme style
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Load home.css only on the landing page
    if (is_front_page() || is_home() && !is_paged()) {
        wp_enqueue_style('home-style', get_stylesheet_directory_uri() . './assets/css/home.css', array(), wp_get_theme()->get('Version'));
    }

    // Load blog.css only on blog-related pages
    if (is_single() || is_home() || is_category() || is_archive()) {
        wp_enqueue_style('blog-style', get_stylesheet_directory_uri() . './assets/css/blog.css', array(), '1.0');
    }
    wp_enqueue_style('frameworks-style', get_stylesheet_directory_uri() . '/assets/css/frameworks.css', array(), '1.0', 'all');
    wp_enqueue_style('learn-gamification-style', get_stylesheet_directory_uri() . '/assets/css/learn-gamification.css', array(), '1.0', 'all');
    wp_enqueue_style('contact-form-style', get_stylesheet_directory_uri() . '/assets/css/contact-form.css', array(), '1.0', 'all');
    wp_enqueue_style('contact-form-style', get_stylesheet_directory_uri() . '/assets/css/my-books.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'yukaichou_enqueue_styles');

function yukaichou_child_editor_styles() {
    add_theme_support('editor-styles');
    add_editor_style('assets/css/editor-style.css'); // Load custom editor styles
}
add_action('after_setup_theme', 'yukaichou_child_editor_styles');


// import fonts from google fonts;
require_once get_stylesheet_directory() . '/inc/fonts.php';

?>

