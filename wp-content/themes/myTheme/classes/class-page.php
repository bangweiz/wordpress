<?php

class Page {
  public function __construct() {
    self::registerACFGroup();
  }

  public static function registerACFGroup() {
    if( function_exists('acf_add_local_field_group') ) {
      acf_add_local_field_group(array (
        'key' => 'group_2',
        'title' => 'My Group',
        'fields' => array (
          array (
            'key' => 'field_2',
            'label' => 'Sub Title',
            'name' => 'sub_title_2',
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
