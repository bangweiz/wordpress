<?php

require get_template_directory() . '/classes/class-header.php';


class WebSetting {
    public function __construct()
    {
        add_action('acf/init', [$this, 'my_acf_op_init']);
    }

    public function my_acf_op_init()
    {
        if (function_exists('acf_add_options_page')) {
            acf_add_options_page(array(
                'page_title' => __('Website General Settings'),
                'menu_title' => __('Website Settings'),
                'menu_slug' => 'theme-general-settings',
                'capability' => 'edit_posts',
                'redirect' => false
            ));
            Header::registerOptionPage();
            Header::registerACFGroup();
        }
    }
}