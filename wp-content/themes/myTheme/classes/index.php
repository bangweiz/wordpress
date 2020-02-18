<?php

require get_template_directory() . '/classes/class-post.php';
require get_template_directory() . '/classes/class-page.php';
require get_template_directory() . '/classes/class-websetting.php';

class Main
{
    public function __construct()
    {
        new WebSetting();
        new Page();
        new Post();
    }
}
