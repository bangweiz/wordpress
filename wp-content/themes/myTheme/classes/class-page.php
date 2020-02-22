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
                        'key' => 'field_page_upload_image',
                        'label' => 'Pic Group',
                        'name' => 'display_pic',
                        'type' => 'repeater',
                        'layout' => 'row',
                        'min' => 0,
                        'max' => 0,
                        'sub_fields' => array(
                            array(
                                'key' => 'field_image',
                                'label' => 'Upload Image?',
                                'name' => 'upload_image',
                                'type' => 'image',
                                'instructions' => 'please upload image ?',
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
                    array(
                        'key' => 'field_page_cards',
                        'label' => 'Display Cards',
                        'name' => 'display_cards',
                        'type' => 'repeater',
                        'layout' => 'row',
                        'min' => 0,
                        'max' => 3,
                        'sub_fields' => array(
                            array(
                                'key' => 'field_page_cards_image',
                                'label' => 'Upload Image?',
                                'name' => 'upload_cards_image',
                                'type' => 'image',
                                'instructions' => 'please upload image ?',
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'required' => 1,
                                'default_value' => '',
                            ),
                            array(
                                'key' => 'field_page_cards_title',
                                'label' => 'Upload title?',
                                'name' => 'upload_cards_title',
                                'type' => 'text',
                                'instructions' => 'please input the title ?',
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'required' => 1,
                                'default_value' => '',
                            ),
                            array(
                                'key' => 'field_page_cards_description',
                                'label' => 'Upload description?',
                                'name' => 'upload_cards_description',
                                'type' => 'textarea',
                                'instructions' => 'please input the description ?',
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'required' => 1,
                                'default_value' => '',
                            ),
                            array(
                                'key' => 'field_page_cards_button_name',
                                'label' => 'Upload button_name?',
                                'name' => 'upload_cards_button_name',
                                'type' => 'text',
                                'instructions' => 'please input the button name ?',
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'required' => 1,
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


//                    array(
//                        'key' => 'group_page_cardsGroup',
//                        'label' => 'Cards Group',
//                        'name' => 'display_cards',
//                        'type' => 'group',
//                        'sub_fields' => array(
//                            array(
//                                'key' => 'field_page_cards_button',
//                                'label' => 'Enable Cards?',
//                                'name' => 'enable_upload_card',
//                                'type' => 'true_false',
//                                'instructions' => 'Do you want to enable cards?',
//                                'required' => 0,
//                                'conditional_logic' => 0,
//                                'wrapper' => array(
//                                    'width' => '',
//                                    'class' => '',
//                                    'id' => '',
//                                ),
//                                'default_value' => '',
//                                'message' => 0,
//                                'ui' => 1
//                            ),
//                            array(
//                                'key' => 'group_page_card1',
//                                'label' => 'Card 1',
//                                'name' => 'display_card1',
//                                'type' => 'group',
//                                'conditional_logic' => array(
//                                    array(
//                                        array(
//                                            'field' => 'field_page_cards_button',
//                                            'operator' => '==',
//                                            'value' => 1
//                                        )
//                                    )
//                                ),
//                                'sub_fields' => array(
//                                    array(
//                                        'key' => 'field_page_cards_image1',
//                                        'label' => 'Upload Image?',
//                                        'name' => 'upload_cards_image1',
//                                        'type' => 'image',
//                                        'instructions' => 'please upload image ?',
//                                        'required' => 1,
//                                        'wrapper' => array(
//                                            'width' => '',
//                                            'class' => '',
//                                            'id' => '',
//                                        ),
//                                        'default_value' => '',
//                                    ),
//                                    array(
//                                        'key' => 'field_page_cards_title1',
//                                        'label' => 'Upload title?',
//                                        'name' => 'upload_cards_title1',
//                                        'type' => 'text',
//                                        'instructions' => 'please input the title ?',
//                                        'required' => 1,
//                                        'wrapper' => array(
//                                            'width' => '',
//                                            'class' => '',
//                                            'id' => '',
//                                        ),
//                                        'default_value' => '',
//                                    ),
//                                    array(
//                                        'key' => 'field_page_cards_description1',
//                                        'label' => 'Upload description?',
//                                        'name' => 'upload_cards_description1',
//                                        'type' => 'textarea',
//                                        'instructions' => 'please input the description ?',
//                                        'required' => 1,
//                                        'wrapper' => array(
//                                            'width' => '',
//                                            'class' => '',
//                                            'id' => '',
//                                        ),
//                                        'default_value' => '',
//                                    ),
//                                    array(
//                                        'key' => 'field_page_cards_button_name1',
//                                        'label' => 'Upload button_name?',
//                                        'name' => 'upload_cards_button_name1',
//                                        'type' => 'text',
//                                        'instructions' => 'please input the button name ?',
//                                        'required' => 1,
//                                        'wrapper' => array(
//                                            'width' => '',
//                                            'class' => '',
//                                            'id' => '',
//                                        ),
//                                        'default_value' => '',
//                                    ),
//                                ),
//                                'menu_order' => 1,
//                                'position' => 'normal',
//                                'style' => 'default',
//                                'label_placement' => 'top',
//                                'instruction_placement' => 'label',
//                                'hide_on_screen' => '',
//                            ),
//                            array(
//                                'key' => 'group_page_card2',
//                                'label' => 'Card 2',
//                                'name' => 'display_card2',
//                                'type' => 'group',
//                                'conditional_logic' => array(
//                                    array(
//                                        array(
//                                            'field' => 'field_page_cards_button',
//                                            'operator' => '==',
//                                            'value' => 1
//                                        )
//                                    )
//                                ),
//                                'sub_fields' => array(
//
//                                    array(
//                                        'key' => 'field_page_cards_image2',
//                                        'label' => 'Upload Image?',
//                                        'name' => 'upload_cards_image2',
//                                        'type' => 'image',
//                                        'instructions' => 'please upload image ?',
//                                        'required' => 1,
//                                        'wrapper' => array(
//                                            'width' => '',
//                                            'class' => '',
//                                            'id' => '',
//                                        ),
//                                        'default_value' => '',
//                                    ),
//                                    array(
//                                        'key' => 'field_page_cards_title2',
//                                        'label' => 'Upload title?',
//                                        'name' => 'upload_cards_title2',
//                                        'type' => 'text',
//                                        'instructions' => 'please input the title ?',
//                                        'required' => 1,
//                                        'wrapper' => array(
//                                            'width' => '',
//                                            'class' => '',
//                                            'id' => '',
//                                        ),
//                                        'default_value' => '',
//                                    ),
//                                    array(
//                                        'key' => 'field_page_cards_description2',
//                                        'label' => 'Upload description?',
//                                        'name' => 'upload_cards_description2',
//                                        'type' => 'textarea',
//                                        'instructions' => 'please input the description ?',
//                                        'required' => 1,
//                                        'wrapper' => array(
//                                            'width' => '',
//                                            'class' => '',
//                                            'id' => '',
//                                        ),
//                                        'default_value' => '',
//                                    ),
//                                    array(
//                                        'key' => 'field_page_cards_button_name2',
//                                        'label' => 'Upload button_name?',
//                                        'name' => 'upload_cards_button_name2',
//                                        'type' => 'text',
//                                        'instructions' => 'please input the button name ?',
//                                        'required' => 1,
//                                        'wrapper' => array(
//                                            'width' => '',
//                                            'class' => '',
//                                            'id' => '',
//                                        ),
//                                        'default_value' => '',
//                                    ),
//                                ),
//                                'menu_order' => 1,
//                                'position' => 'normal',
//                                'style' => 'default',
//                                'label_placement' => 'top',
//                                'instruction_placement' => 'label',
//                                'hide_on_screen' => '',
//                            ),
//                            array(
//                                'key' => 'group_page_card3',
//                                'label' => 'Card 3',
//                                'name' => 'display_card3',
//                                'type' => 'group',
//                                'conditional_logic' => array(
//                                    array(
//                                        array(
//                                            'field' => 'field_page_cards_button',
//                                            'operator' => '==',
//                                            'value' => 1
//                                        )
//                                    )
//                                ),
//                                'sub_fields' => array(
//
//                                    array(
//                                        'key' => 'field_page_cards_image3',
//                                        'label' => 'Upload Image?',
//                                        'name' => 'upload_cards_image3',
//                                        'type' => 'image',
//                                        'instructions' => 'please upload image ?',
//                                        'required' => 1,
//                                        'wrapper' => array(
//                                            'width' => '',
//                                            'class' => '',
//                                            'id' => '',
//                                        ),
//                                        'default_value' => '',
//                                    ),
//                                    array(
//                                        'key' => 'field_page_cards_title3',
//                                        'label' => 'Upload title?',
//                                        'name' => 'upload_cards_title3',
//                                        'type' => 'text',
//                                        'instructions' => 'please input the title ?',
//                                        'required' => 1,
//                                        'wrapper' => array(
//                                            'width' => '',
//                                            'class' => '',
//                                            'id' => '',
//                                        ),
//                                        'default_value' => '',
//                                    ),
//                                    array(
//                                        'key' => 'field_page_cards_description3',
//                                        'label' => 'Upload description?',
//                                        'name' => 'upload_cards_description3',
//                                        'type' => 'textarea',
//                                        'instructions' => 'please input the description ?',
//                                        'required' => 1,
//                                        'wrapper' => array(
//                                            'width' => '',
//                                            'class' => '',
//                                            'id' => '',
//                                        ),
//                                        'default_value' => '',
//                                    ),
//                                    array(
//                                        'key' => 'field_page_cards_button_name3',
//                                        'label' => 'Upload button_name?',
//                                        'name' => 'upload_cards_button_name3',
//                                        'type' => 'text',
//                                        'instructions' => 'please input the button name ?',
//                                        'required' => 1,
//                                        'wrapper' => array(
//                                            'width' => '',
//                                            'class' => '',
//                                            'id' => '',
//                                        ),
//                                        'default_value' => '',
//                                    ),
//                                ),
//                                'menu_order' => 1,
//                                'position' => 'normal',
//                                'style' => 'default',
//                                'label_placement' => 'top',
//                                'instruction_placement' => 'label',
//                                'hide_on_screen' => '',
//                            )
//
//
//                        ),
//                        'menu_order' => 1,
//                        'position' => 'normal',
//                        'style' => 'default',
//                        'label_placement' => 'top',
//                        'instruction_placement' => 'label',
//                        'hide_on_screen' => '',
//                    ),
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
        $images = get_field('field_page_upload_image');
        $imageUrlArray = array();
        if (is_array($images)) {
            foreach ($images as $key => $image) {
                $imageUrlArray[$key] = array(
                    'url' => $image['upload_image']['url'],
                    'alt' => $image['upload_image']['alt']
                );
            }
        }
        return $imageUrlArray;
    }

    public static function renderPrevOrNext($label)
    {
        $a = $label === 'next' ? 'next' : 'prev';
        $b = $label === 'next' ? 'Next' : 'Previous';
        echo '<a class="carousel-control-' . $a . '" href="#carouselExampleIndicators" role="button" data-slide="' . $a . '">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">' . $b . '</span>
              </a>';
    }

    public static function renderCardsGroup()
    {
        $cards = get_field('field_page_cards');
        $cardArray = array();
        if (is_array($cards)) {
            foreach ($cards as $key => $value)
                $cardArray[$key] = array(
                    'url' => $value['upload_cards_image']['url'],
                    'alt' => $value['upload_cards_image']['alt'],
                    'title' => $value['upload_cards_title'],
                    'description' => $value['upload_cards_description'],
                    'button' => $value['upload_cards_button_name']
              );


        }
//        if ($cardField['enable_upload_card']) {
//            $cardNumber = count($cardField) - 1;
//            for ($i = 1; $i <= $cardNumber; $i++) {
//                $cardArray[$i - 1] = array(
//                    'url' => $cardField['display_card' . $i]['upload_cards_image' . $i]['url'],
//                    'alt' => $cardField['display_card' . $i]['upload_cards_image' . $i]['alt'],
//                    'title' => $cardField['display_card' . $i]['upload_cards_title' . $i],
//                    'description' => $cardField['display_card' . $i]['upload_cards_description' . $i],
//                    'button' => $cardField['display_card' . $i]['upload_cards_button_name' . $i],
//                );
//            }
//        }
        return $cardArray;
    }
}

