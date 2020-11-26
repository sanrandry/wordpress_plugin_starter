<?php

namespace Inc\base;

class BaseController
{
    public $plugin_dir_path;
    public $plugin_dir_url;
    public $plugin_basename;
    public function __construct()
    {
        $this->plugin_dir_path = dirname(__FILE__, 3);
        $this->plugin_dir_url = plugin_dir_url(dirname(__FILE__, 2));
        $this->plugin_basename = plugin_basename(dirname(__FILE__, 3)) . '/madava-test.php';
    }
}
