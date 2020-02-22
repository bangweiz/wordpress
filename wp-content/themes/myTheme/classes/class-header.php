<?php

class Header {
//    public function __construct() {}

    public static function registerOptionPage() {
        if (function_exists('acf_add_options_page')) {
            acf_add_options_page(array(
                'page_title' => 'Header Setting',
                'menu_title' => 'Header Setting',
                'parent_slug' => 'theme-general-settings2',
                'menu_slug' => 'acf-options-header-setting',
                'icon_url' => 'dashicons-edit'
            ));
        }
    }

    public static function registerACFGroup() {
        if (function_exists('acf_add_local_field_group')) {
            acf_add_local_field_group(array(
                'key' => 'group_header_setting',
                'title' => 'Header Setting',
                'location' => array(
                    array(
                        array(
                            'param' => 'options_page',
                            'operator' => '==',
                            'value' => 'acf-options-header-setting'
                        )
                    )
                ),
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => '',
                'active' => 1,
                'description' => '',
                'menu_order' => 1,
                'fields' => array(
                    array(
                        'key' => 'field_text',
                        'label' => 'Test',
                        'name' => 'test_text',
                        'type' => 'text',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'value' => null,

                    )
                )
            ));
        }
    }
}