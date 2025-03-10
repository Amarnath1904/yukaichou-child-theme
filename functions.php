<?php
function yukaichou_child_enqueue_styles() {
    // Enqueue parent theme style
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Enqueue child theme's main style.css
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css',
                     array('parent-style'), wp_get_theme()->get('Version'));

    // Load home.css only on the front page or home page
    if (is_front_page() || is_home() && !is_paged()) {
        wp_enqueue_style('home-style', get_stylesheet_directory_uri() . '/assets/css/home.css',
                         array(), wp_get_theme()->get('Version'));
    }

    // Load blog.css only on blog-related pages
    if (is_single() || is_home() || is_category() || is_archive()) {
        wp_enqueue_style('blog-style', get_stylesheet_directory_uri() . '/assets/css/blog.css',
                         array(), wp_get_theme()->get('Version'));
    }

    // Load frameworks.css only on the frameworks page
    if (is_page('frameworks') || is_page_template('templates/frameworks.html')) {
        wp_enqueue_style('frameworks-style', get_stylesheet_directory_uri() . '/assets/css/frameworks.css',
                         array(), wp_get_theme()->get('Version'));
    }

    // Load learn-gamification.css only on the learn-gamification page
    if (is_page('learn-gamification') || is_page_template('templates/learn-gamification.html')) {
        wp_enqueue_style('learn-gamification-style', get_stylesheet_directory_uri() . '/assets/css/learn-gamification.css',
                         array(), wp_get_theme()->get('Version'));
    }

    // Load contact-form.css only on the contact page
    if (is_page('contact') || is_page_template('templates/contact-form.html')) {
        wp_enqueue_style('contact-form-style', get_stylesheet_directory_uri() . '/assets/css/contact-form.css',
                         array(), wp_get_theme()->get('Version'));
    }

    // Load my-books.css only on the books page
    if (is_page('my-books') || is_page_template('templates/my-books.html')) {
        wp_enqueue_style('my-books-style', get_stylesheet_directory_uri() . '/assets/css/my-books.css',
                         array(), wp_get_theme()->get('Version'));
    }

    // Load my-books.css only on the books page
        if (is_page('gamification-expert') || is_page_template('templates/my-books.html')) {
            wp_enqueue_style('my-books-style', get_stylesheet_directory_uri() . '/assets/css/about.css',
                             array(), wp_get_theme()->get('Version'));
        }
}
add_action('wp_enqueue_scripts', 'yukaichou_child_enqueue_styles');

// Editor styles
function yukaichou_child_editor_styles() {
    add_theme_support('editor-styles');
    add_editor_style('assets/css/editor-style.css');
}
add_action('after_setup_theme', 'yukaichou_child_editor_styles');

// Import fonts from Google fonts
require_once get_stylesheet_directory() . '/inc/fonts.php';
?>