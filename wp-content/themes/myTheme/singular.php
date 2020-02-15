<?php 
  if (get_the_title() === 'Login') {
    get_template_part('template-parts/login');

  }
  if(get_the_title() === 'Hello world!') {
    get_template_part('template-parts/helloWorld');
  }
  if(get_the_title() === 'Sample Page') {
    get_template_part('template-parts/samplePage');
  }
?>