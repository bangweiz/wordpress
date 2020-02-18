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
                        'key' => 'group_page_picture',
                        'label' => 'Pic Group',
                        'name' => 'display_pic',
                        'type' => 'group',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_true_false_button',
                                'label' => 'Upload Image?',
                                'name' => 'enable_upload_image_or_not',
                                'type' => 'true_false',
                                'instructions' => 'Do you want to upload image 1?',
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
                        'menu_order' => 0,
                        'position' => 'normal',
                        'style' => 'default',
                        'label_placement' => 'top',
                        'instruction_placement' => 'label',
                        'hide_on_screen' => '',
                    ),
                    array(
                        'key' => 'group_page_cardsGroup',
                        'label' => 'Cards Group',
                        'name' => 'display_cards',
                        'type' => 'group',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_page_cards_button',
                                'label' => 'Enable Cards?',
                                'name' => 'enable_upload_card',
                                'type' => 'true_false',
                                'instructions' => 'Do you want to enable cards?',
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
                                'key' => 'group_page_card1',
                                'label' => 'Card 1',
                                'name' => 'display_card1',
                                'type' => 'group',
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_page_cards_button',
                                            'operator' => '==',
                                            'value' => 1
                                        )
                                    )
                                ),
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_page_cards_image1',
                                        'label' => 'Upload Image?',
                                        'name' => 'upload_cards_image1',
                                        'type' => 'image',
                                        'instructions' => 'please upload image ?',
                                        'required' => 1,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_page_cards_title1',
                                        'label' => 'Upload title?',
                                        'name' => 'upload_cards_title1',
                                        'type' => 'text',
                                        'instructions' => 'please input the title ?',
                                        'required' => 1,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_page_cards_description1',
                                        'label' => 'Upload description?',
                                        'name' => 'upload_cards_description1',
                                        'type' => 'textarea',
                                        'instructions' => 'please input the description ?',
                                        'required' => 1,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_page_cards_button_name1',
                                        'label' => 'Upload button_name?',
                                        'name' => 'upload_cards_button_name1',
                                        'type' => 'text',
                                        'instructions' => 'please input the button name ?',
                                        'required' => 1,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                ),
                                'menu_order' => 1,
                                'position' => 'normal',
                                'style' => 'default',
                                'label_placement' => 'top',
                                'instruction_placement' => 'label',
                                'hide_on_screen' => '',
                            ),
                            array(
                                'key' => 'group_page_card2',
                                'label' => 'Card 2',
                                'name' => 'display_card2',
                                'type' => 'group',
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_page_cards_button',
                                            'operator' => '==',
                                            'value' => 1
                                        )
                                    )
                                ),
                                'sub_fields' => array(

                                    array(
                                        'key' => 'field_page_cards_image2',
                                        'label' => 'Upload Image?',
                                        'name' => 'upload_cards_image2',
                                        'type' => 'image',
                                        'instructions' => 'please upload image ?',
                                        'required' => 1,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_page_cards_title2',
                                        'label' => 'Upload title?',
                                        'name' => 'upload_cards_title2',
                                        'type' => 'text',
                                        'instructions' => 'please input the title ?',
                                        'required' => 1,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_page_cards_description2',
                                        'label' => 'Upload description?',
                                        'name' => 'upload_cards_description2',
                                        'type' => 'textarea',
                                        'instructions' => 'please input the description ?',
                                        'required' => 1,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_page_cards_button_name2',
                                        'label' => 'Upload button_name?',
                                        'name' => 'upload_cards_button_name2',
                                        'type' => 'text',
                                        'instructions' => 'please input the button name ?',
                                        'required' => 1,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                ),
                                'menu_order' => 1,
                                'position' => 'normal',
                                'style' => 'default',
                                'label_placement' => 'top',
                                'instruction_placement' => 'label',
                                'hide_on_screen' => '',
                            ),
                            array(
                                'key' => 'group_page_card3',
                                'label' => 'Card 3',
                                'name' => 'display_card3',
                                'type' => 'group',
                                'conditional_logic' => array(
                                    array(
                                        array(
                                            'field' => 'field_page_cards_button',
                                            'operator' => '==',
                                            'value' => 1
                                        )
                                    )
                                ),
                                'sub_fields' => array(

                                    array(
                                        'key' => 'field_page_cards_image3',
                                        'label' => 'Upload Image?',
                                        'name' => 'upload_cards_image3',
                                        'type' => 'image',
                                        'instructions' => 'please upload image ?',
                                        'required' => 1,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_page_cards_title3',
                                        'label' => 'Upload title?',
                                        'name' => 'upload_cards_title3',
                                        'type' => 'text',
                                        'instructions' => 'please input the title ?',
                                        'required' => 1,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_page_cards_description3',
                                        'label' => 'Upload description?',
                                        'name' => 'upload_cards_description3',
                                        'type' => 'textarea',
                                        'instructions' => 'please input the description ?',
                                        'required' => 1,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                    array(
                                        'key' => 'field_page_cards_button_name3',
                                        'label' => 'Upload button_name?',
                                        'name' => 'upload_cards_button_name3',
                                        'type' => 'text',
                                        'instructions' => 'please input the button name ?',
                                        'required' => 1,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                    ),
                                ),
                                'menu_order' => 1,
                                'position' => 'normal',
                                'style' => 'default',
                                'label_placement' => 'top',
                                'instruction_placement' => 'label',
                                'hide_on_screen' => '',
                            )


                        ),
                        'menu_order' => 1,
                        'position' => 'normal',
                        'style' => 'default',
                        'label_placement' => 'top',
                        'instruction_placement' => 'label',
                        'hide_on_screen' => '',
                    ),

<<<<<<< HEAD
=======
                    array(
                        'key' => 'field_card_group',
                        'label' => 'Card Group',
                        'name' => 'card_group',
                        'type' => 'group',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'sub_fields' => array(
                            array(
                                'key' => 'field_image4',
                                'label' => 'Upload Image?',
                                'name' => 'upload_image4',
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
                    )
>>>>>>> 85b204622d81b6a3dd04489f5a1a8c8c8528c4fc
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
        $imageUrlArray = array();

        if ($field0) {
            $field1 = get_field('field_image1');
            $field2 = get_field('field_image2');
            $field3 = get_field('field_image3');

            $imageUrlArray = array(
                array(
                    $field1['url'],
                    $field1['alt']
                ),
                array(
                    $field2['url'],
                    $field2['alt']
                ),
                array(
                    $field3['url'],
                    $field3['alt']
                )
            );
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
        $cardField = get_field('display_cards');
        $cardArray = array();
        if($cardField['enable_upload_card']) {
            $cardNumber = count($cardField) - 1;
            for ($i = 1; $i <= $cardNumber; $i++) {
                $cardArray[$i - 1] = array(
                    'url' => $cardField['display_card' . $i]['upload_cards_image' . $i]['url'],
                    'alt' => $cardField['display_card' . $i]['upload_cards_image' . $i]['alt'],
                    'title' => $cardField['display_card' . $i]['upload_cards_title' . $i],
                    'description' => $cardField['display_card' . $i]['upload_cards_description' . $i],
                    'button' => $cardField['display_card' . $i]['upload_cards_button_name' . $i],
                );
            }
        }
        return $cardArray;
    }
}

