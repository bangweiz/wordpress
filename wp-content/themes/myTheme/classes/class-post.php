<?php

class Post {
  public function __construct() {
    add_action( 'admin_init', [$this, 'test'] );
    self::registerACFGroup();
  }

  public function test() {
  }

  public static function registerACFGroup() {
    if( function_exists('acf_add_local_field_group') ):

      acf_add_local_field_group(array (
        'key' => 'group_1',
        'title' => 'My Group',
        'fields' => array (
          array (
            'key' => 'field_1',
            'label' => 'Sub Title',
            'name' => 'sub_title',
            'type' => 'text',
            'prefix' => '',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
            'readonly' => 0,
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
      
    endif;
  }
}
