<?php

class Page
{
    public function __construct()
    {
        self::registerACFGroup();
    }

    public static function registerACFGroup()
    {
        if (function_exists('acf_add_local_field_group')) {
            acf_add_local_field_group(array(
                'key' => 'group_page',
                'title' => 'My Group',
                'fields' => array(
                    array(
                        'key' => 'field_true_false_button',
                        'label' => 'Upload Image?',
                        'name' => 'enable_upload_image_or_not',
                        'type' => 'true_false',
                        'instructions' => 'Do you want to upload image ?',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'message' => 0,
                        'ui' => 1
                    ),

                    array(
                        'key' => 'field_image1',
                        'label' => 'Upload Image?',
                        'name' => 'upload_image1',
                        'type' => 'image',
                        'instructions' => 'please upload image ?',
                        'required' => 1,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_true_false_button',
                                    'operator' => '==',
                                    'value' => 1
                                )
                            )
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                    ),

                    array(
                        'key' => 'field_image2',
                        'label' => 'Upload Image?',
                        'name' => 'upload_image2',
                        'type' => 'image',
                        'instructions' => 'please upload image ?',
                        'required' => 1,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_true_false_button',
                                    'operator' => '==',
                                    'value' => 1
                                )
                            )
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                    ),

                    array(
                        'key' => 'field_image3',
                        'label' => 'Upload Image?',
                        'name' => 'upload_image3',
                        'type' => 'image',
                        'instructions' => 'please upload image ?',
                        'required' => 1,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'field_true_false_button',
                                    'operator' => '==',
                                    'value' => 1
                                )
                            )
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                    ),
                ),
                'location' => array(
                    array(
                        array(
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'page',
                        ),
                    ),
                ),
                'menu_order' => 0,
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => '',
            ));
        }
    }

    public static function image_fields()
    {
        $field0 = get_field('field_true_false_button');


        if ($field0) {
            $field1 = get_field('field_image1');
            $field2 = get_field('field_image2');
            $field3 = get_field('field_image3');

            $imageUrlArray = array(
                'image1' => $field1['url'],
                'image2' => $field2['url'],
                'image3' => $field3['url'],

            );
        }


        return $imageUrlArray;
    }
}

