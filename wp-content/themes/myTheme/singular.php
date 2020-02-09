<?php 
  if (get_the_title() === 'Login') {
    // get_template_part('template-parts/login');
    var_dump(get_post_type());
    die();
  }
?>