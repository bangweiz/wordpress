<?php

require get_template_directory() . '/classes/class-post.php';

class Main {
  public function __construct() {
    new Post;
  }
}
