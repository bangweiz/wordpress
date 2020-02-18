<?php

require get_template_directory() . '/classes/index.php';
new Main();

add_action('wp_enqueue_scripts', 'addStyleAndScripts');
function addStyleAndScripts()
{
    wp_enqueue_style('bootstrap_css', get_theme_file_uri('/assets/bootstrap/bootstrap.min.css'));
    wp_enqueue_script('bootstrap', get_theme_file_uri('/assets/bootstrap/bootstrap.min.js'), NULL, '1.0', true);
    wp_enqueue_script('popper', get_theme_file_uri('/assets/bootstrap/popper.min.js'), NULL, '1.0', true);
    wp_enqueue_script('jquery', get_theme_file_uri('/assets/bootstrap/jquery.min.js'), NULL, '1.0', true);
    wp_enqueue_script('main_scripts', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
    wp_enqueue_style('theme_main_style', get_stylesheet_uri(), array(), time());
}

add_action('init', 'init_remove_support', 100);

function init_remove_support()
{
    remove_post_type_support('post', 'editor');
    remove_post_type_support('page', 'editor');
}

add_filter('show_admin_bar', '__return_false');

//add_action('acf/init', 'my_acf_op_init');
//function my_acf_op_init()
//{
//    if (function_exists('acf_add_options_page')) {
//        acf_add_options_page(array(
//            'page_title' => __('Website General Settings'),
//            'menu_title' => __('Website Settings'),
//            'menu_slug' => 'theme-general-settings',
//            'capability' => 'edit_posts',
//            'redirect' => false
//        ));
//
//    }
//}

