<?php

require get_template_directory() . '/classes/class-header.php';


class WebPageSetting
{
    public function __construct()
    {
        add_action('acf/init', [$this,'acf_option_webPageSettings_init']);
    }

    public function acf_option_webPageSettings_init() {

        if( function_exists('acf_add_options_page') ) {

            acf_add_options_page(array(
                'page_title'    => __('Your Web Page Settings'),
                'menu_title'    => __('Web Settings'),
                'menu_slug'     => 'theme-general-settings2',
                'capability'    => 'edit_posts',
                'redirect'      => false
            ));

            Header::registerOptionPage();
            Header::registerACFGroup();

        }
    }


}