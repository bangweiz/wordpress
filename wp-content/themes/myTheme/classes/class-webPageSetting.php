<?php


class WebPageSetting
{
    public function __construct()
    {
        add_action('acf/init', [$this,'acf_option_webPageSettings_init']);
    }

    public function acf_option_webPageSettings_init() {

        if( function_exists('acf_add_options_page') ) {

            $option_page =
                acf_add_options_page(array(
                'page_title'    => __('Your Web Page Settings'),
                'menu_title'    => __('Web Settings'),
                'menu_slug'     => 'theme-general-settings2',
                'capability'    => 'edit_posts',
                'redirect'      => false
            ));

            $child = acf_add_options_page(array(
                'page_title'  => __('Setting Web Header'),
                'menu_title'  => __('Header'),
                'menu_slug'     => 'theme-general-settings300',
                'parent_slug' => $option_page['menu_slug'],
            ));
        }
        self::registerACFGroup();
    }

    public static function registerACFGroup() {
        if (function_exists('acf_add_local_field_group')) {
            acf_add_local_field_group(array(
                'key' => 'group_header_setting1',
                'title' => 'Header 2',
                'location' => array(
                    array(
                        array(
                            'param' => 'options_page',
                            'operator' => '==',
                            'value' => 'theme-general-settings2'
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
                        'key' => 'field_text1',
                        'label' => 'Test',
                        'name' => 'test_text1',
                        'type' => 'image',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'value' => null,

                    )
                )
            ));
        }
    }


}