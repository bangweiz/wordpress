<?php 
  if (get_the_title() === 'Login') {
    // get_template_part('template-parts/login');
    var_dump(get_post_type());
    die();
  }
  if(get_the_title() === 'Hello world!') {
    get_template_part('template-parts/helloWorld');
  }
  if(get_the_title() === 'FEB11') {
    get_template_part('template-parts/helloWorld');
  }
?>