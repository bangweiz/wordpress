<?php

  require get_template_directory() . '/classes/index.php';
  new Main();

  add_action('wp_enqueue_scripts', 'addStyleAndScripts');
  function addStyleAndScripts() {
    wp_enqueue_script('bootstrap', get_theme_file_uri('/assets/js/bootstrap.min.js'), NULL, '1.0', true);
    wp_enqueue_script('popper', get_theme_file_uri('/assets/js/popper.min.js'), NULL, '1.0', true);
    wp_enqueue_script('jquery', get_theme_file_uri('/assets/js/jquery.min.js'), NULL, '1.0', true);
    wp_enqueue_style('bootstrap_css', get_theme_file_uri('/assets/css/bootstrap.min.css'));
    wp_enqueue_style('theme_main_style', get_stylesheet_uri(), array(), time());
  }

  add_filter( 'show_admin_bar', '__return_false' );

