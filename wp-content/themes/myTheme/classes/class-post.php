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
              'width' => '50',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '10',
            'disabled' => 0,
          ),
          array (
            'key' => 'field_my_test',
            'label' => 'My Test Text',
            'name' => 'sub_title_3',
            'type' => 'textarea',
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
            'rows'=> '10',        ),
            array (
              'key' => 'field_my_test2',
              'label' => 'My Test Text',
              'name' => 'sub_title_4',
              'type' => 'url',
              'instructions' => 'faygbfiaduaidnchoidm',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => 'www.baidu.com',
            ),
            array (
              'key' => 'field_my_test3',
              'label' => 'My Test Text',
              'name' => 'sub_title_4',
              'type' => 'checkbox',
              'instructions' => 'faygbfiaduaidnchoidm',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'choices' => array(
                'option1'	=> 'option1',
                'option2'	=> 'option2',
                'option3'	=> 'option3'
              ),
              
              'layout' => 'vertical',
            
              'allow_custom' => false,
              
             'save_custom' => false,
              
              'toggle' => false,
              
              'return_format' => 'value',       )
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
