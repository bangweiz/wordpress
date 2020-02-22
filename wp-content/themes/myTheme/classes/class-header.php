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
                        'key' => 'field_page_header',
                        'label' => 'Header links',
                        'name' => 'header_links',
                        'type' => 'repeater',
                        'layout' => 'row',
                        'min' => 0,
                        'max' => 0,
                        'sub_fields' => array(
                            array(
                                'key' => 'field_links',
                                'label' => 'Set link?',
                                'name' => 'set_link',
                                'type' => 'link',
                                'instructions' => 'please set the header link ?',
                                'required' => 1,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                            ),
                        ),

                        'required' => 0,
                        'conditional_logic' => 0,

                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                    ),
                )
            ));
        }
    }

    public static function renderHeaderLinks(){
        $headerLinks = get_field('field_page_header','options');
        $headerLinksArray = array();
        if (is_array($headerLinks)){
            foreach ($headerLinks as $key => $headerLink){

                $headerLinksArray[$key] = array(
                    'title' => $headerLink['set_link']['title'],
                    'url' => $headerLink['set_link']['url']
                );
            }
        }
        return $headerLinksArray;
    }
}