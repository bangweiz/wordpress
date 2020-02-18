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
          array(
            'key' => 'field_toggle_button',
            'label' => 'Upload Image ?',
            'name' => 'enable_upload_image',
            'type' => 'true_false',
            'instructions' => 'Do you want to upload image 3?',
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
            'key' => 'field_add_image',
            'label' => 'Select your image',
            'name' => 'select_upload_image',
            'type' => 'image',
            'instructions' => 'add your image',
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
          ),
          array(
            'key' => 'field_url',
            'label' => 'Select your image',
            'name' => 'select_url',
            'type' => 'link',
            'instructions' => 'add your image',
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
          ),
          array(
            'key' => 'field_textarea',
            'label' => 'Select your image',
            'name' => 'select_textsrea',
            'type' => 'textarea',
            'instructions' => 'add your image',
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
