<?php

class Page {
  public function __construct() {
    self::registerACFGroup();
  }

  public static function registerACFGroup() {
    if( function_exists('acf_add_local_field_group') ) {
      acf_add_local_field_group(array (
        'key' => 'group_page',
        'title' => 'My Group',
        'fields' => array (
          array(
            'key' => 'field_true_false_button',
            'label' => 'Upload Image?',
            'name' => 'enable_upload_image_or_not',
            'type' => 'true_false',
            'instructions' => 'Do you want to upload image ?',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
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
            'wrapper' => array (
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'min_width' => 100,
            'min_height' => 100,
            'min_size' => '1KB',
            'max_width' => 500,
            'max_height' => 500,
            'max_size' => 1024,
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
            'wrapper' => array (
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'min_width' => 100,
            'min_height' => 100,
            'min_size' => '1KB',
            'max_width' => 500,
            'max_height' => 500,
            'max_size' => 1024,
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
            'wrapper' => array (
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'min_width' => 100,
            'min_height' => 100,
            'min_size' => '1KB',
            'max_width' => 500,
            'max_height' => 500,
            'max_size' => 1024,
          ),
        ),
        'location' => array (
          array (
            array (
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
}
