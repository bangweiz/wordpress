<?php

require get_template_directory() . '/classes/class-post.php';
require get_template_directory() . '/classes/class-page.php';

class Main {
  public function __construct() {
    new Page();
    new Post();
  }
}
