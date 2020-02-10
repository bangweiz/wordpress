<?php

class Post {
  public function __construct() {
    self::registerACFGroup();
  }

  public static function registerACFGroup() {
    if( function_exists('acf_add_local_field_group') ) {
      acf_add_local_field_group(array (
        'key' => 'group_1',
        'title' => 'My Post Group',
        'fields' => array (
          array (
            'key' => 'field_1',
            'label' => 'My Test Text',
            'name' => 'sub_title_2',
            'type' => 'text',
            'instructions' => 'faygbfiaduaidnchoidm',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '10',
            'disabled' => 0,
          ),
          array(
            'key' => 'field_toggle_button',
            'label' => 'Upload Image',
            'name' => 'enable_upload_image',
            'type' => 'true_false',
            'instructions' => 'faygbfiaduaidnchoidm',
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
            'key' => 'field_sakjfhasoh',
            'label' => 'My Test Text',
            'name' => 'sub_title_ashjfbajhb',
            'type' => 'text',
            'instructions' => 'faygbfiaduaidnchoidm',
            'required' => 0,
            'conditional_logic' => array(
              array(
                array(
                  'field' => 'field_toggle_button',
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
            'placeholder' => '',
            'maxlength' => '10',
            'disabled' => 0,
          )
        ),
        'location' => array (
          array (
            array (
              'param' => 'post_type',
              'operator' => '==',
              'value' => 'post',
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
