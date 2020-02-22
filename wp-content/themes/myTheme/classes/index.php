<?php

require get_template_directory() . '/classes/class-post.php';
require get_template_directory() . '/classes/class-page.php';
require get_template_directory() . '/classes/class-webPageSetting.php';

class Main
{
    public function __construct()
    {
        new WebPageSetting();
        new Page();
        new Post();
    }
}
