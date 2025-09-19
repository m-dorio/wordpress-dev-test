<?php

/**
 * Child theme functions
 */

add_action('wp_enqueue_scripts', 'ttf_child_enqueue_styles');
function ttf_child_enqueue_styles()
{
    // parent style
    wp_enqueue_style('twenty24-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme('twentytwentyfour')->get('Version'));
    // child style
    wp_enqueue_style('ttf-child-style', get_stylesheet_directory_uri() . '/style.css', array('twenty24-style'), filemtime(get_stylesheet_directory() . '/style.css'));
    // components if exists
    if (file_exists(get_stylesheet_directory() . '/assets/css/components.css')) {
        wp_enqueue_style('ttf-components', get_stylesheet_directory_uri() . '/assets/css/components.css', array('ttf-child-style'), filemtime(get_stylesheet_directory() . '/assets/css/components.css'));
    }
}

// Register a primary menu location if parent doesn't
add_action('after_setup_theme', 'ttf_child_setup', 11);
function ttf_child_setup()
{
    register_nav_menus(array(
        'primary' => __('Primary menu', 'twentytwentyfour-child'),
    ));
    // support for accessible skip link (just ensure theme supports title tag)
    add_theme_support('title-tag');
    
}

// Enable custom logo support
function theme_setup()
{
    add_theme_support('custom-logo', array(
        'height'      => 50,   // You can change the height as needed
        'width'       => 120,  // You can change the width as needed
        'flex-height' => true, // Allow logo height flexibility
        'flex-width'  => true, // Allow logo width flexibility
    ));
}
add_action('after_setup_theme', 'theme_setup');


// Include ACF field group registration (if ACF is active)
if (file_exists(get_stylesheet_directory() . '/inc/acf-fields.php')) {
    require get_stylesheet_directory() . '/inc/acf-fields.php';
}
